<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class GroupController extends Controller
{
    public function index()
    {
        // Effectuer la requête POST à l'URL spécifiée
        $groups = http::withoutVerifying()->get('https://apigest.admin-gspm.com/api/Groups');
            $groups = $groups->json();
            //dd($groups);
            return view('vues.pages.groups.index',compact("groups"));
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
