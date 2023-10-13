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
<form method="post" action="{{ route('customers.update', $customers) }}">
    @csrf
    @method('PUT')
    Họ và tên: <input type="text" name="name" value="{{ $customers->name }}"><br>
    Địa chỉ: <input type="text" name="address" value="{{ $customers->address }}"><br>
    Số điện thoại: <input type="text" name="phonenumber" value="{{ $customers->phonenumber }}"><br>
    Email:    <input type="email" name="email" value="{{ $customers->email }}"><br>
    Password: <input type="password" name="password" value="{{ $customers->password }}"><br>
    <button>Cập nhật</button>
</form>
</body>
</html>
