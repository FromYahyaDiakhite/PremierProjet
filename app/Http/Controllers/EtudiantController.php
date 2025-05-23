<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EtudiantController extends Controller
{
    public function liste_etudiant(){
        $etudiants= Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }
    //

    public function ajouter_etudiant(){

        return view('etudiant.ajouter');
    }
    public function ajouter_etudiant_traitement(Request $request){

        $request->validate([

            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);
        $etudiant = new Etudiant();

        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->save();
         return redirect('/ajouter')->with('status', 'L\'etudiant a ete ajouter avec sucees');

    }
    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        return view('etudiant.update', compact('etudiants'));
    }
    public function update_etudiant_traitement( Request $request){
        $request->validate([

            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);
        $etudiant = Etudiant::find($request->id);

        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->update();
         return redirect('/etudiant')->with('status', 'L\'etudiant a ete modifie avec sucees');
    }

    public function delete_etudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status', 'L\'etudiant a ete bien superimee avec sucees');


    }
    public function sendEmail()
    {
        Mail::raw('Contenu de test', function ($message) {
            $message->to('exemple@test.com')
                    ->subject('Sujet test');
        });

        return 'Email envoyé';
    }
}
