<?php

namespace App\Helpers;

class Auth0Helper {

    public $endpoint, $connection;

    public function __construct()
    {
        $this->endpoint = "https://".config("laravel-auth0.domain")."/api/v2";
        $this->connection = config("laravel-auth0.api_connection");
    }

    public function createUser($data = [])
    {
        /*
        REQUEST:
        {
          "email": "john3.doe@gmail.com",
          "email_verified": true,
          "given_name": "John3",
          "family_name": "Doe",
          "name": "John3 Doe",
          "user_id": "1235463",
          "connection": "Username-Password-Authentication",
          "password": "Secret123#@"
        }
        RESPONSE
        {
            "created_at": "2020-07-08T19:24:05.578Z",
            "email": "john3.doe@gmail.com",
            "email_verified": true,
            "family_name": "Doe",
            "given_name": "John3",
            "identities": [
                {
                    "user_id": "1235463",
                    "connection": "Username-Password-Authentication",
                    "provider": "auth0",
                    "isSocial": false
                }
            ],
            "name": "John3 Doe",
            "nickname": "john3.doe",
            "picture": "https://s.gravatar.com/avatar/ffc52253834e8a5e2665259c6c5d6511?s=480&r=pg&d=https%3A%2F%2Fcdn.auth0.com%2Favatars%2Fjd.png",
            "updated_at": "2020-07-08T19:24:05.578Z",
            "user_id": "auth0|1235463"
        }
        RESPONSE (ERROR)
        {
            "statusCode": 409,
            "error": "Conflict",
            "message": "The user already exists.",
            "errorCode": "auth0_idp_error"
        }
        */
        return $this->httpRequest("users", [
            'connection' => $this->connection,
            'email' => $data['email'],
            'name' => $data['name'],
            'password' => $data['password']
        ]);
    }

    public function updateUser($user_id, $data)
    {
        $_data = isset($data["password"]) ?
            [ 'connection' => $this->connection, 'password' => $data['password'] ]
        :
            [ 'connection' => $this->connection, 'email' => $data['email'], 'name' => $data['name'] ]
        ;
        return $this->httpRequest("users/$user_id", $_data, "PATCH");
    }

    public function deleteUser($user_id)
    {
        return $this->httpRequest("users/$user_id", [], "DELETE");
    }

    public function updateUserRole($data = [])
    {
        /*
        REQUEST:
        {
            "roles": [
                "rol_XXXXXXXXXXXXXXXX"
            ]
        }
        RESPONSE
        Null
        */
        $method = $data['status'] == 'add'? 'POST': 'DELETE';
        return $this->httpRequest("users/".$data['user']."/roles", [
            'roles' => [
                $data['role']
            ],
        ], $method);
    }

    public function getUserRoles($data = [])
    {
        /*
        RESPONSE
        [
            {
                "id": "rol_XXXXXXXXXXXXXXXX",
                "name": "Admin",
                "description": "If admin user",
                "sources": [
                    {
                        "source_id": "",
                        "source_type": "DIRECT",
                        "source_name": ""
                    }
                ]
            }
        ]
        */
        return $this->httpRequest("users/".$data['user']."/roles", [], "GET");
    }

    private function getToken()
    {
        return config('laravel-auth0.api_token');
    }

    private function httpRequest($toPoint, $data = [], $method = "POST")
    {
        $headers = [
            "Authorization: Bearer ".$this->getToken(),
            "Content-Type: application/json"
        ];

        $data = $data? json_encode($data) : "{}";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->endpoint."/".ltrim($toPoint, "/"),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $headers,
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }
}
