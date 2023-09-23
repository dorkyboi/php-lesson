<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListsController extends Controller
{
    public function index()
    {

        $i = 0;

        for ($i = 1; $i < 10; $i++) {

        }

        return view('lists/index');
    }

    public function create()
    {
        return view('lists/create');
    }

    public function store()
    {

    }
}
