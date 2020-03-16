<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    {{-- <link href="/css/app.css" rel="stylesheet"> --}}
    
    {{-- <script src="js/everything.js"></script> --}}

    <!-- provide the csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
</head>
<body>

<label>all</label>
    <input type="radio" name='gender' value="all" class="gender" checked>

<label>male</label>
    <input type="radio" name='gender' value="male" class="gender">

<label>female</label>
    <input type="radio" name='gender' value="female" class="gender">

    <script src="js/app.js"></script>
</body>
</html>