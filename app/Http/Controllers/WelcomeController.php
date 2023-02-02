<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class WelcomeController extends Controller
{
    public function __invoke(): Response
    {
        return response()->view('welcome');
    }
}