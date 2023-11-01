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
<a href="{{ route('admin.index') }}" class="btn btn-danger">Exit</a>
<h1>== FUNCTION TEST ==</h1>
<a href="{{ route('fields.index') }}" class="btn btn-warning">Field</a><br>
<a href="{{ route('customers.cart') }}" class="btn btn-warning">Cart</a><br>
<a href="{{ route('types.create') }}" class="btn btn-warning">Add field type</a>
<table border="1px" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Price</th>
    </tr>
    @foreach($field_types as $type)
        <tr>
            <td>{{ $type -> id }}</td>
            <td>{{ $type -> type }}</td>
            <td>{{ $type -> price }}</td>
            <td><a href="{{ route('types.edit', $type) }}">Edit</a></td>
            <td>
                <form method="post" action="{{ route('types.destroy', $type->id) }}">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </td>
            <td>
                <a href="{{ route('customers.addToCart', $type) }}" class="btn btn-success">Add to cart</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
