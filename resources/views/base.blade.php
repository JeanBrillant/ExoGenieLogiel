<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>@yield('title', 'Bossy')</title>
</head>
<body class="container-fluid">

    <ul class="nav">
        <li class="nav-item">
            <a href="acceuil" class="nav-link text-dark">Accueil</a>
        </li>

        <li class="nav-item">
            <a href="{{route('insert')}}" class="nav-link text-dark">Insertion</a>
        </li>

        <li class="nav-item">
            <a href="{{route('liste_etudiant')}}" class="nav-link text-dark">liste</a>
        </li>

        <li class="nav-item">
            <a href="test" class="nav-link text-dark">Test</a>
        </li>
    </ul>

    @yield('content')

</body>
</html>