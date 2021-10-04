<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmNewsletter;
use App\Mail\WelcomeNewsletter;
use App\StaticPage;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $subscriber = Subscriber::where('email', $request->email)->first();

        if($subscriber){
            if($subscriber->status == "subscribed"){
                return response()->json([
                    "message" => "The given data was invalid.",
                    "errors" => [
                        "email" => ["The email has already been taken."]
                    ]
                ], 422);
            }else{
                $subscriber->status = "pending";
                $subscriber->save();
            }
        }else{
            $subscriber = new Subscriber;
            $subscriber->email = $request->email;
            $subscriber->status = "pending";
            $subscriber->save();
        }

        $email = $request->email;
        $subject = StaticPage::getField('setting', 'confirm_email_subject');
        $subscribe_confirm = "<a href='".route('frontend.subscribers.subscribe.confirm', $email)."'>Subscribe Confirm</a>";
        $unsub = "<a href='".route('frontend.subscribers.unsubscribe', $email)."'>unsubscribe</a>";
        $email_content = StaticPage::getField('setting', 'confirm_email_content');
        $email_content = str_replace('%EMAIL%', $email, $email_content);
        $email_content = str_replace('%SUB_CONFIRM%', $subscribe_confirm, $email_content);
        $email_content = str_replace('%UNSUB%', $unsub, $email_content);
        $email_content = nl2br($email_content);

        Mail::to($email)->send(new ConfirmNewsletter($email, $subject, $email_content));

        return response()->json(['status' => 'subscribed', 'message' => 'A confirmation email was sent, please verify']);
    }

    public function subscribeConfirm($email)
    {
        abort_if(!$subscriber = Subscriber::where('email', $email)->first(), 404);

        if($subscriber->status != "subscribed"){
            Subscriber::select('email')
                ->where('email', $email)
                ->update(['status' => 'subscribed']);

            $subject = StaticPage::getField('setting', 'welcome_email_subject');
            $subscribe_confirm = "<a href='".route('frontend.subscribers.subscribe.confirm', $email)."'>Subscribe Confirm</a>";
            $unsub = "<a href='".route('frontend.subscribers.unsubscribe', $email)."'>unsubscribe</a>";
            $email_content = StaticPage::getField('setting', 'welcome_email_content');
            $email_content = str_replace('%EMAIL%', $email, $email_content);
            $email_content = str_replace('%SUB_CONFIRM%', $subscribe_confirm, $email_content);
            $email_content = str_replace('%UNSUB%', $unsub, $email_content);
            $email_content = nl2br($email_content);

            Mail::to($email)->send(new WelcomeNewsletter($email, $subject, $email_content));
        }

        return view('frontend.subscribed');
    }

    public function unsubscribe($email)
    {
        abort_if(!$subscriber = Subscriber::where('email', $email)->first(), 404);

        Subscriber::select('email')
            ->where('email', $email)
            ->update(['status' => 'unsubscribed']);

        return view('frontend.unsubscribed');
    }
}
