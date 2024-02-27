<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class GroupController extends Controller
{
    public function index()
    {
        return view('vues.pages.groups.index');
    }

    public function create()
    {
        return view('vues.pages.groups.create');
    }

    public function store()
    {

        return view('vues.pages.groups.index');
    }

    public function edit()
    {
        

        return view('vues.pages.groups.edit');
    }

    public function update()
    {
        return view('vues.pages.groups.index');
    }

    public function show()
    {
        return view('vues.pages.groups.show');
    }

    public function destroy()
    {
        return back();
    }

}
