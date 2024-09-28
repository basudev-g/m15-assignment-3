<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {
    public function index( Request $request, $id ) {
        $name = "Donald Trump";
        $age = "75";

        $data = [
            'name' => $name,
            'age'  => $age,
            'id'   => $id,
        ];

        $cookie_name = 'access_token';

        $value = '123-XYZ';

        $minutes = 1;

        $path = '/';

        $domain = $_SERVER['SERVER_NAME'];

        $secure = 'false';

        $httpOnly = 'true';

        return response()->json( $data, 200 )->withCookie( $cookie_name, $value, $minutes, $path, $domain, $secure, $httpOnly );
    }
}
