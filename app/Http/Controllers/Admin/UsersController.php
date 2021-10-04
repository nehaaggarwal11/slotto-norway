<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Auth0Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $res = (new Auth0Helper())->createUser($request->all());
        $auth0_sub = @$res->user_id;

        if(@$res->error){
            return back()->withErrors($res->message)->withInput();
        }

        if($res && @$res->user_id && in_array(config('panel.admin_role_id'), $request->roles)){
            $res = (new Auth0Helper())->updateUserRole([
                'status' => 'add',
                'user' => $res->user_id,
                'role' => config('panel.auth0_admin_role_id'),
            ]);
        }

        if(@$res->error){
            return back()->withErrors($res->message)->withInput();
        }

        $user = User::create(array_merge($request->all(),['sub' => $auth0_sub]));
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $res = (new Auth0Helper())->updateUser($user->sub, $request->except("password"));

        if(@$res->error){
            return back()->withErrors($res->message)->withInput();
        }

        if($request->password) {
            $res = (new Auth0Helper())->updateUser($user->sub, ["password" => $request->password]);
        }

        if(@$res->error){
            return back()->withErrors($res->message)->withInput();
        }

        if(in_array(config('panel.admin_role_id'), $request->roles)){
            $res = (new Auth0Helper())->updateUserRole([
                'status' => 'add',
                'user' => $user->sub,
                'role' => config('panel.auth0_admin_role_id'),
            ]);
        }else{
            $res = (new Auth0Helper())->updateUserRole([
                'status' => 'remove',
                'user' => $user->sub,
                'role' => config('panel.auth0_admin_role_id'),
            ]);
        }

        if(@$res->error){
            return back()->withErrors($res->message)->withInput();
        }

        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $res = (new Auth0Helper())->deleteUser($user->sub);

        if(@$res->error){
            return back()->withErrors($res->message)->withInput();
        }

        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        foreach ($request->ids ?? [] as $id) {
            $user = User::find($id);
            if($user){
                $this->destroy($user);
            }
        }
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
