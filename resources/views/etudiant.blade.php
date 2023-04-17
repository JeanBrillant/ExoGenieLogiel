@extends('base')

@section('title', 'Bossy | Etudiant')

@section('content')

    <form action="/{{$etudiant->id}}/upd" method="post">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="{{$etudiant->id}}">

        Nom : <input type="text" name="nom" id="nom" value="{{$etudiant->nom}}"> <br>
        Prenom : <input type="text" name="prenom" id="prenom" value="{{$etudiant->prenom}}"> <br>
        Age : <input type="number" name="age" id="age" value="{{$etudiant->age}}"> <br>
        Date de naissance : <input type="date" name="dateN" id="dateN" value="{{$etudiant->dateNaissance}}"> <br>
        Mention : <input type="text" name="mention" id="mention" value="{{$etudiant->mention}}"> <br>
        Niveau : <input type="text" name="niveau" id="niveau" value="{{$etudiant->niveau}}"> <br>
        
        <input type="submit" value="Actualiser">
    </form>

@endsection