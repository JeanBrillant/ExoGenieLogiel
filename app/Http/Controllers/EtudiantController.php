<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EtudiantRequest;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function showAccueil(){
        return view ("accueil");
    }

    public function insertion(){
        return view('insertion');
    }

    public function insert(Etudiant $etu, EtudiantRequest $req){
        Etudiant::create([
            'nom' => $req->nom,
            'prenom' => $req->prenom,
            'age' => $req->age,
            'mention' => $req->mention,
            'niveau' => $req->classe,
            'dateNaissance' => $req->dateN,
        ]);

        return redirect()->back()->with('success', 'Enregistrement reussi');
    }

    public function list(){
        $etudiants = Etudiant::all();

        return view('list', [
            'etudiants' => $etudiants,
        ]);
    }

    public function modify(Etudiant $e){
        // $etudiant = Etudiant::find($id);

        return view('etudiant', [
            'etudiant' => $e,
        ]);
    }

    public function update(Etudiant $e, EtudiantRequest $req){
        $e->nom = $req->nom;
        $e->prenom = $req->prenom;
        $e->age = $req->age;
        $e->dateNaissance = $req->dateN;
        $e->mention = $req->mention;
        $e->niveau = $req->niveau;

        $e->save();
        
        return redirect("/liste")->with('success', 'La modification est reussite');
    }

    public function delete(Etudiant $e){
        $e->delete();

        return redirect("/liste")->with('success', 'La suppression est reussite');
    }
}
