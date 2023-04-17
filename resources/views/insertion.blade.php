@extends('base')

@section('title', 'Bossy | Insertion')

@section('content')
    <h2 class="title">Insertion</h2>

    <div class="card w-50 m-auto">

        @if(session()->has('success'))
            <div class="alert alert-success">{{session()->get('success')}}</div>
        @endif

        <form action="/insertion" method="post" class="card-body">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" value={{old('nom')}}>
                @error('nom')
                    <p class="text text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" value={{old('prenom')}}>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" id="age" class="form-control" value={{old('age')}}>
                @error('age')
                    <p class="text text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="dateN">Date de naissance</label>
                <input type="date" name="dateN" id="dateN" class="form-control" value={{old('dateN')}}>
                @error('dateN')
                    <p class="text text-danger">{{$message}}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="filiere">Filiere</label>
                <select name="mention" id="mention" class="form-control">
                    <option value="AES">AES</option>
                    <option value="DAII">DAII</option>
                    <option value="RPM">RPM</option>
                </select>
            </div>

            <div class="form-group">
                <label for="niveau">Niveau</label>
                <select name="classe" id="classe" class="form-control">
                    <option value="L1">L1</option>
                    <option value="L2">L2</option>
                    <option value="L3">L3</option>
                    <option value="M1">M1</option>
                    <option value="M2">M2</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="Enregistrer" class="btn btn-success ml-2">
                <input type="reset" value="Annuler" class="btn btn-danger">
            </div>

        </form>

        <div class="card-footer">
            Allahou Akbar
        </div>
    </div>
    
@endsection