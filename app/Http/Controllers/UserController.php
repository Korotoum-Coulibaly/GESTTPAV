<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        return view('vues.pages.users.index');
    }

    public function create()
    {
        return view('vues.pages.users.create');
    }

    public function store()
    {

        return view('vues.pages.users.index');
    }

    public function edit()
    {
        

        return view('vues.pages.users.edit');
    }

    public function update()
    {
        return view('vues.pages.users.index');
    }

    public function show()
    {
        return view('vues.pages.users.show');
    }

    public function destroy()
    {
        return back();
    }

}
