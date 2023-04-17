@extends('base')

@section('title', 'Bossy | Liste')

@section('content')
    <h2 class="title">Listes</h2>

    @if(session()->has('success'))
        <div class="alert alert-success" id="alert">{{ session()->get('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Date de naissance</th>
                        <th>Mention</th>
                        <th>Niveau</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($etudiants as $e)
                        <tr>
                            <td>{{$e->nom}}</td>
                            <td>{{$e->prenom}}</td>
                            <td>{{$e->age}}</td>
                            <td>{{$e->dateNaissance}}</td>
                            <td>{{$e->mention}}</td>
                            <td>{{$e->niveau}}</td>
                            <td><a href="/liste/{{$e->id}}" class="btn btn-primary">Modifier</a></td>
                            <td>
                                <form action="/liste/{{$e->id}}/del" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-primary">Supprimer</button>
                                </form>  
                            </td>  
                        </tr>
                    @empty
                        <tr class="text-danger">Iy n'y a pas d'etudiant enregistrer</tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const alert = document.querySelector("div#alert");

        if(alert){
            const a = setTimeout(() => {
                alert("bla");
            }, 1000);
        }
    </script>

@endsection