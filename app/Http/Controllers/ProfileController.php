<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
{
    $name = "Donal Trump";
    $age = "75";

    $data = [
        'id' => $id,
        'name' => $name,
        'age' => $age
    ];
    
    $cookie = cookie(
        'access_token', // Name
        '123-XYZ', // Value
         1, // Minutes
        '/', // Path
        $_SERVER['SERVER_NAME'], // Domain
        false, // Secure
        true // HttpOnly
    );

    return response()->view('profile', $data, 200)->cookie($cookie);
}
}
