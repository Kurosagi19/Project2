<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Field</title>
</head>
<body>
<h1>== FUNCTION TEST ==</h1>
<a href="{{ route('types.index') }}">Field Type</a><br>
<a href="{{ route('fields.create') }}">Add field</a>
<table border="1px" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>Field type</th>
    </tr>
    @foreach($fields as $item)
        <tr>
            <td>{{ $item -> id }}</td>
            <td>{{ $item -> name }}</td>
            <td>
                <img src="{{ asset(\Illuminate\Support\Facades\Storage::url('admin/img/').$item->image) }}" width="100px" height="100px">
            </td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->types->type }}</td>
            <td><a href="{{ route('fields.edit', $item->id) }}">Edit</a></td>
            <td>
                <form method="post" action="{{ route('fields.destroy', $item->id) }}">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
