<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bookDetails.css') }}" rel="stylesheet">
</head>
<body>
    
    <br/>
    <div class="container">
        <div class='row'>
            @yield('searchBar')
        </div>
        <br/>
        <div class='row'>
            <div class='col-2'>
                @yield('catSideBar')
            </div>
            <div class='col-10'>
                @yield('booksDiv')
            </div>
        </div>
    </div>
    
</body>
</html>