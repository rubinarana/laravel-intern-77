<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'Laravel') . "- Profile" }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>
   <div id="app">
        @include('components.nav')
        
        <div class="container" style="margin-top:30px">
            @yield('saurav')
        </div>
        
        <div class="jumbotron text-center" style="margin-bottom:0">
            <p>Footer</p>
        </div>
   </div>
    
</body>
</html>
