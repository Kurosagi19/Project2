<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<h1>== FUNCTION TEST ==</h1>
<form method="post" action="{{ route('fields.store') }}">
    @csrf
    @foreach($fields as $fielditem)
        Field name: <input type="text" name="name" value="{{ $fields->name }}"><br>
        Image: <input type="file" name="image" value="{{ $fields->image }}"><br>
        Description: <input type="text" name="description" value="{{ $fields->description }}"><br>
        Type: <select name="type_id">
            @foreach($field_types as $typeitem)
                <option value="{{ $typeitem->id }}">{{ $typeitem->type }}</option>
            @endforeach
        </select><br>
    @endforeach
    <button>Update field</button>
</form>
</body>
</html>
