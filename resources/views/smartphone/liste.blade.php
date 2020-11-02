<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/app.css">
    <title>Projet Smartphones</title>
</head>
<body>
@include('main.header')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Projet Smartphones</h1>
        <p class="lead">La liste de nos smartphone, en temps <span class="badge badge-info">réel</span></p>
        <hr class="my-4">
        <p>État de nos services : <span class="badge badge-pill badge-success">ON</span></p>
    </div>
</div>
<div class="container">
    @if(!empty($smartphones))
        <div class="row">
            @foreach($smartphones as $s)
                <div class="col-lg-3 col-md-4 col-sm-12 mx-auto my-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$s->nom}}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$s->id}}</li>
                                <li class="list-group-item">{{$s->type_reseau}}</li>
                                <li class="list-group-item">{{$s->systeme}}</li>
                                <li class="list-group-item">{{$s->connectique}}</li>
                                <li class="list-group-item">{{$s->autonomie}}</li>
                                <li class="list-group-item">{{$s->caracteristiques}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
{{--    @if(!empty($smartphones))--}}
{{--        <table class="table table-striped">--}}
{{--            <thead class="thead-dark">--}}
{{--            <tr>--}}
{{--                <th scope="col">ID</th>--}}
{{--                <th scope="col">Nom</th>--}}
{{--                <th scope="col">Type de Réseau</th>--}}
{{--                <th scope="col">Système</th>--}}
{{--                <th scope="col">Connectique</th>--}}
{{--                <th scope="col">Autonomie</th>--}}
{{--                <th scope="col">Caractéristique</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($smartphones as $s)--}}
{{--                <tr>--}}
{{--                    <th scope="row">{{ $s->id }}</th>--}}
{{--                    <td>{{ $s->nom }}</td>--}}
{{--                    <td>{{ $s->type_reseau }}</td>--}}
{{--                    <td>{{ $s->systeme }}</td>--}}
{{--                    <td>{{ $s->connectique }}</td>--}}
{{--                    <td>{{ $s->autonomie }}</td>--}}
{{--                    <td>{{ $s->caracteristiques }}</td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    @endif--}}
</div>
</body>
</html>
