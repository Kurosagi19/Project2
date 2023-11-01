<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Cart</title>
</head>
<body>
<h1>== FUNCTION TEST ==</h1>
<div class="container-fluid" style="background-color: white; color: red; font-size: 30px">
    <marquee behavior="" direction="right" scrollamount="15">== THIS WEBSITE WAS MADE FOR TESTING FUNCTION ==</marquee>
</div>

<a href="{{ route('customers.index') }}" class="btn btn-warning">Exit</a>
<a href="{{ route('types.index') }}" class="btn btn-warning">Field Types</a>

<table border="1px" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <th>Type ID</th>
        <th>Type Name</th>
        <th>Price</th>
        <th>Function</th>
    </tr>
    @foreach(\Illuminate\Support\Facades\Session::get('cart') as $type_id => $types)
        <tr>
            <td>{{ $type_id }}</td>
            <td>{{ $types['type'] }}</td>
            <td>{{ $types['price'] }}</td>
{{--            <td>--}}
{{--                <a href="{{ route('customers.deleteFromCart', $type_id) }}" class="btn btn-warning">Delete from cart</a>--}}
{{--            </td>--}}
        </tr>
    @endforeach
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
