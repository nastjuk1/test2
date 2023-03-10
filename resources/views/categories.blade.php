<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ViAn veikals</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">ViAn veikals</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="{{ route('index') }}">Visas preces</a></li>
                <li class="active"><a href="{{ route('categories') }}">Kategorijas</a>
                </li>
                <li ><a href="{{ route('basket') }}">Grozs</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="/login">Pieslēgties</a></li>  
            </ul>
            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ route('register') }}">Reģistrēties</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="starter-template">
@foreach($categories as $category)
        <div class="panel">
            <a href="{{ route('category', $category->code) }}">
                <img src="https://png.pngtree.com/png-vector/20190223/ourlarge/pngtree-vector-picture-icon-png-image_695350.jpg" width="100" height="100">
<h1>
    {{$category->name}}
</h1>
<p>
    {{ $category->description}}
</p>
        </div>
    @endforeach
    </div>
</div>
    </body>
</html>
