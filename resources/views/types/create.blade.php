<!doctype html>
<html lang="\">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing function Create</title>
</head>
<body>
<h1>== FUNCTION TEST ==</h1>
<form method="post" action="{{ route('types.store') }}">
    @csrf
    Field type: <input type="text" name="type"><br>
    Price: <input type="text" name="price"><br>
    <button>Add field type</button>
</form>
</body>
</html>
