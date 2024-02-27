<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PermissionController extends Controller
{
    public function index()
    {
        return view('vues.pages.permissions.index');
    }

    public function create()
    {
        return view('vues.pages.permissions.create');
    }

    public function store()
    {

        return view('vues.pages.permissions.index');
    }

    public function edit()
    {
        

        return view('vues.pages.permissions.edit');
    }

    public function update()
    {
        return view('vues.pages.permissions.index');
    }

    public function show()
    {
        return view('vues.pages.permissions.show');
    }

    public function destroy()
    {
        return back();
    }

}
