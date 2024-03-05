<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Auth;

class StatController extends Controller
{
    public function index()
    {
         // Effectuer la requête POST à l'URL spécifiée
         $postes = http::withoutVerifying()->get('https://apigest.admin-gspm.com/api/Volumeremovedbystationwithtankers');
         $postes = $postes->json();
         //dd($postes);
         return view('vues.pages.samples.Statistiques',compact("postes"));
    }

  
}
