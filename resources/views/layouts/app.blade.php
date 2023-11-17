<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <a class="underline text-teal-400" href="/">Accueil</a>
        <a class="underline text-teal-400" href="/fiorella">Présentation</a>
        <a class="underline text-teal-400" href="/fiorella?color=bleu">Fiorella Bleue</a>
        <a class="underline text-teal-400 " href="/fiorella/emma">Fiorella et Emma</a>
        <a class="underline text-teal-400" href="/fiorella/paul">Fiorella et Paul</a>
        <a class="underline text-teal-400" href="/a-propos">Test</a>
        <a class="underline text-teal-400" href="/categories/creer">Créer une catégorie</a>

        <br>
        <a class="underline text-teal-400" href="/movies/index">Liste des films</a>
    </nav>

   @yield('content')

   <footer>
    Webflix &copy; {{date('Y')}}
   </footer>
</body>
</html>