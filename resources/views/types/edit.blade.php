<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit field type</title>
</head>
<body>
<h1>== FUNCTION TEST ==</h1>
<form method="post" action="{{ route('types.update', $id) }}">
    @csrf
    @method('PUT')
    @foreach($field_types as $item)
        Field type: <input type="text" name="type" value="{{ $item->type }}"><br>
        Price: <input type="text" name="price" value="{{ $item->price }}"><br>
    @endforeach
    <button>Update</button>
</form>
</body>
</html>
