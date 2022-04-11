<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $user = 'Lucas Anjos';

        return Inertia::render('Home', [
            'user' => $user
        ]);
    }

    public function sobre()
    {
        return Inertia::render('Sobre');
    }
}
