<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>== FUNCTION TEST ==</title>
</head>
<body>
<h1>== FUNCTION TEST ==</h1>
<form action="{{ route('orders.store') }}" method="post">
    Ngày đặt sân: <input type="date" name="date"><br>
    Giờ bắt đầu: <input type="time" name="time_start"><br>
    Giờ kết thúc: <input type="time" name="time_end"><br>
</form>
<button>Tạo order</button>
</body>
</html>
