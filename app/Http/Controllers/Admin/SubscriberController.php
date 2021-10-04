<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySubscriberRequest;
use App\Mail\Newsletter;
use App\Mail\WelcomeNewsletter;
use App\Subscriber;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class SubscriberController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('subscriber_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if(in_array($s = request()->get('status'), ['subscribed', 'unsubscribed', 'pending'])){
            $subscribers = Subscriber::where('status', $s)->get();
        }else{
            $subscribers = Subscriber::all();
        }

        $filters = (object)[
            'status' => $s
        ];

        return view('admin.subscribers.index', compact('subscribers', 'filters'));
    }

    public function destroy(Subscriber $subscriber)
    {
        abort_if(Gate::denies('subscriber_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subscriber->delete();

        return back();
    }

    public function massDestroy(MassDestroySubscriberRequest $request)
    {
        Subscriber::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    private function _verify_emails($_emails = [])
    {
        return  $emails = collect(Subscriber::select('email')
            ->whereIn('email', $_emails ?? [])
            ->where('status', 'subscribed')
            ->get()
        )->pluck('email');
    }

    public function email(Request $request)
    {
        abort_if(Gate::denies('subscriber_send_email'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $emails = $this->_verify_emails($request->emails);
        $emails = $request->emails;
        $templates = nj_get_email_templates();
        return view('admin.subscribers.email', compact('emails', 'templates'));
    }

    private function _parse_email_content($email, $email_content)
    {
        $unsub = "<a href='".route('frontend.subscribers.unsubscribe', $email)."'>unsubscribe</a>";
        $email_content = str_replace('%EMAIL%', $email, $email_content);
        $email_content = str_replace('%UNSUB%', $unsub, $email_content);
        return $email_content;
    }

    public function sendEmail(Request $request)
    {
        abort_if(Gate::denies('subscriber_send_email'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $request->validate([
            'emails.*' => 'email|required',
            'subject' => 'required',
            'template' => 'required'
        ]);
        $subject = $request->subject;
        $_email_content = get_email_template_html_by_id($request->template);
        $emails = $request->emails;
        foreach ($emails as $email){
            $email_content = $this->_parse_email_content($email, $_email_content);
            Mail::to($email)->send(new Newsletter($subject, $email_content));
        }
        return redirect()->route('admin.subscribers.index')->with('message', 'Email was sent successfully');
    }

    public function emailBuilder()
    {
        abort_if(Gate::denies('subscriber_email_builder_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.subscribers.email-builder');
    }

    public function emailBuilderLink()
    {
        if (file_exists(public_path('email-builder'))) {
            dd('The "public/email-builder" directory already exists.');
        }
        app()->make('files')->link(
            base_path('packages/email-builder'), public_path('email-builder')
        );
        dd('The [public/email-builder] directory has been linked.');
    }
}
