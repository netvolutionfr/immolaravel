<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Annonces</title>
</head>
<body>
<h1>Liste des Annonces</h1>
<ul>
    @foreach ($annonces as $annonce)
        <li>
            <h2>{{ $annonce->title }}</h2>
            <p>{{ $annonce->description }}</p>
            <p>Prix: {{ $annonce->prix }}€</p>
            <p>Ville: {{ $annonce->ville->nom }}</p>
        </li>
    @endforeach
</ul>
</body>
</html>
