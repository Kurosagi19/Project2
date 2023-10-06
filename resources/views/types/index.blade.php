<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Field Type</title>
</head>
<body>
<h1>== FUNCTION TEST ==</h1>
<a href="{{ route('fields.index') }}">Field</a><br>
<a href="{{ route('types.create') }}">Add field type</a>
    <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Price</th>
        </tr>
        @foreach($field_types as $item)
            <tr>
                <td>{{ $item -> id }}</td>
                <td>{{ $item -> type }}</td>
                <td>{{ $item -> price }}</td>
                <td><a href="{{ route('types.edit', $item->id) }}">Edit</a></td>
                <td>
                    <form method="post" action="{{ route('types.destroy', $item->id) }}">
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
