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
    <div class="container">
        <div class='row'>
            <div class='col-lg-4'>
                @yield('catSideBar')
            </div>
            <div class='col-lg-8'>
                @yield('booksDiv')
            </div>
        </div>
    </div>
    
</body>
</html>