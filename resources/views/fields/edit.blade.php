<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<h1>== FUNCTION TEST ==</h1>
<form method="post" action="{{ route('fields.update', $fields) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        Field name: <input type="text" name="name" value="{{ $fields->name }}"><br>
        Image: <input type="file" name="image">
        <img src="{{ asset(\Illuminate\Support\Facades\Storage::url('admin/img/').$fields->image) }}" width="100px" height="100px"><br>
        Description: <input type="text" name="description" value="{{ $fields->description }}"><br>
        Type: <select name="type_id">
            @foreach($field_types as $typeitem)
                <option value="{{ $typeitem->id }}">{{ $typeitem->type }}</option>
            @endforeach
        </select><br>
    <button>Cập nhật</button>
</form>
</body>
</html>
