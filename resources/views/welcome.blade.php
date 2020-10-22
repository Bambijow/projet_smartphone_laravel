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
        <p class="lead">
            <a href="{{ route('smartphoneListe') }}" class="btn btn-outline-info">Voir nos smartphones</a>
        </p>
    </div>
</div>
</body>
</html>
