<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    
    <!--L'header è condiviso quindi può essere fatto tramite un templetes ed importato -->
    <header>
        @include('templetes.header')
    </header>

    <!-- Il main invece no, non è condiviso quindi viene fatto con un yield, dove si crea lo spazio riservato ad esso
    e sarà richiamato e fatto direttamente nel file home, dentro alla sua section -->
    <main>
        @yield('principale')
    <main>

    <!-- Anche il footer è condiviso quindi può essere incluso tramite un'altro file in templetes, ed essere importato: -->
    <footer>
        @include('templetes.footer')
    <footer>

</body>
</html>