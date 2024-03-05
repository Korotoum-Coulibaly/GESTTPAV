<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
         // Effectuer la requête POST à l'URL spécifiée
         $users = http::withoutVerifying()->get('https://apigest.admin-gspm.com/api/Users');
         $users = $users->json();
         //dd($users);
         return view('vues.pages.users.index',compact("users"));
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

 
    public function login(Request $request)
    {
        // Récupérer les données de la requête
        $passwordUser = $request->input('PasswordUser');
        $codeUser = $request->input('CodeUser');

        // Effectuer la requête POST à l'URL spécifiée
        $response = Http::withoutVerifying()->post('https://apigest.admin-gspm.com/api/login', [
            'PasswordUser' => $passwordUser,
            'CodeUser' => $codeUser,
        ]);
        //dd($response);
        // Vérifier si la requête a réussi
        if ($response->successful()) {
            // Convertir la réponse JSON en tableau associatif
            $data = $response->json();

            // Récupérer l'access token t le token_type de la réponse JSON
            $accessToken = $data['access_token'];
            $token_type = $data['token_type'];
            
            // Faites ce que vous voulez avec l'access token et le token_type
            //echo $token_type;
            //echo $accessToken;
            // Stocker l'access token dans une session ou un cookie pour une utilisation ultérieure
            // Ici, je vais le stocker dans la session
            session(['access_token' => $accessToken]);

            // Rediriger l'utilisateur vers la route /tableaudebord
            return redirect('/TableauDeBord');
            
        } else {
            // Traitement en cas d'échec
            return redirect('/')->with('error', 'Informations d\'identification incorrectes.');
        }
    }

    public function logout()
    {
       
      // Vérifier si un utilisateur est authentifié
            if (Auth::check()) {
                // Récupérer le token de l'utilisateur connecté
                $token = Auth::user()->api_token;
                dd ($token);
                // Effectuer la requête POST à l'URL spécifiée avec le token d'authentification
                $response = Http::withToken($token)->post('https://apigest.admin-gspm.com/api/logout');

                // Vérifier si la requête a réussi
                if ($response->successful()) {
                    // Rediriger vers le tableau de bord après la déconnexion
                    return redirect('/');
                } else {
                    // Traitement en cas d'échec
                    return response()->json(['error' => 'Erreur lors de la déconnexion'], $response->status());
                }
            } else {
                // Rediriger vers le tableau de bord ou une autre page s'il n'y a pas d'utilisateur connecté
                return redirect('/');
            }
    }
}
