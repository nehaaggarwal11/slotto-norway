<?php

namespace App\Repositories;

use App\User;

use App\Helpers\Auth0Helper;
use Auth0\Login\Auth0User;
use Auth0\Login\Auth0JWTUser;
use Auth0\Login\Repository\Auth0UserRepository;
use Illuminate\Contracts\Auth\Authenticatable;

class CustomUserRepository extends Auth0UserRepository
{
	
	/**
	 * Get an existing user or create a new one
	 *
	 * @param array $profile - Auth0 profile
	 *
	 * @return User
	 */
	protected function upsertUser( $profile ) {
        $user_roles = collect((new Auth0Helper())->getUserRoles([
            'user' => $profile['sub']
        ]))->pluck('id')->toArray();

        $is_admin = in_array(env('AUTH0_ADMIN_ROLE'), $user_roles);

        $user = User::firstOrCreate(['sub' => $profile['sub']], [
            'email' => $profile['email'] ?? '',
            'name' => $profile['name'] ?? '',
        ]);
        
        if($is_admin){
            $user->roles()->sync([config('panel.admin_role_id')]);
        }

        return $user;
    }
	
	/**
	 * Authenticate a user with a decoded ID Token
	 *
	 * @param array $decodedJwt
	 *
	 * @return Auth0JWTUser
	 */
	public function getUserByDecodedJWT(array $decodedJwt) : Authenticatable
	{
		$user = $this->upsertUser( (array) $jwt );
		return new Auth0JWTUser( $user->getAttributes() );
	}
	
	/**
	 * Get a User from the database using Auth0 profile information
	 *
	 * @param array $userinfo
	 *
	 * @return Auth0User
	 */
	public function getUserByUserInfo(array $userinfo) : Authenticatable
	{
		$user = $this->upsertUser( $userinfo['profile'] );
		return new Auth0User( $user->getAttributes(), $userinfo['accessToken'] );
	}
}
