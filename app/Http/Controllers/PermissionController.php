<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class PermissionController extends Controller
{
    public function index()
    {
         // Effectuer la requête POST à l'URL spécifiée
         $permissions = http::withoutVerifying()->get('https://apigest.admin-gspm.com/api/Permissions');
            $permissions = $permissions->json();
            //dd($permissions);
            return view('vues.pages.permissions.index',compact("permissions"));
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
