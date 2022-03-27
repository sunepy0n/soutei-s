<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>そうていたんさく</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/sticky-footer.css">
    <link rel="stylesheet" href="css/textoption.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/colorOption.css">
    <link rel="stylesheet" href="css/viewOption.css">
    <style>

    </style>
</head>
<body>
    
    @component('components.header')
    @endcomponent
    
    <div class="container maxwidth">

        @yield('content')

    </div>
    
    @component('components.footer')
    @endcomponent
    
    <script src="js/bootstrap.js">

    </script>
</body>
</html>
