<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <script src="https://kit.fontawesome.com/dfb2727f7d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../../resources/Images/ava-web.png">
    <title>Trang quản trị</title>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
</head>
<body style="background-color: whitesmoke">
<div class="container-fluid pt-1">
    <div class="row">
        <div class="col col-1 bg-success bg-gradient border-end border-black border-1">
            <a href="" class="link-dark">
                <img src="../../resources/Images/ava-web.png" style="width: 100%">
            </a>
            <ul class="nav nav-pills mb-auto text-center">
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link py-3 border-bottom border-black border-2">
                        <img src="../../resources/Images/bar-chart.png" style="width: 80%">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link py-3 bg-warning border-bottom border-black border-2">
                        <img src="../../resources/Images/football-field.png" style="width: 80%">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customers.custIndex') }}" class="nav-link py-3 border-bottom border-black border-2">
                        <img src="../../resources/Images/customer.png" style="width: 80%">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-bottom border-black border-2">
                        <img src="../../resources/Images/clipboard.png" style="width: 80%">
                    </a>
                </li>
            </ul>
            <div class="dropdown border-top">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../../resources/Images/ava-web.png" alt="" width="50" height="50" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.login') }}" >Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col col-11">
            <div class="" style="background-color: #e0e0e0">
                <p><a href="{{ route('customers.index') }}" class="link-primary">Trang chủ</a> / <a href="#" class="link-secondary" aria-disabled="true">Quản lý sân</a></p>
            </div>
            <div>
                <h1 class="text-success mt-4" style="font-family: 'Segoe UI Black'; font-size: xxx-large">QUẢN LÝ SÂN</h1>
            </div>
            <div class="border-top border-success border-4 my-4"></div>
            <table class="table table-success table-striped" border="1px" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <a class="btn" href="{{ route('fields.create') }}">Thêm</a>
{{--                    <a href="{{  }}" class="btn"></a>--}}
                    <th scope="col">ID sân</th>
                    <th scope="col">Tên sân</th>
                    <th scope="col">Ảnh sân</th>
                    <th scope="col">Mô tả sân</th>
                    <th scope="col">Loại sân</th>
                    <th scope="col">Tuỳ chọn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fields as $item)
                    <tr>
                        <th scope="row">{{ $item -> id }}</th>
                        <td>{{ $item -> name }}</td>
                        <td>
                            <img src="{{ asset(\Illuminate\Support\Facades\Storage::url('admin/img/').$item->image) }}" width="100px" height="100px">
                        </td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->types->type }}</td>
                        <td>
                            <a class="btn" href="{{ route('fields.edit', $item->id) }}">Sửa</a>
                            <form method="post" action="{{ route('fields.destroy', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn">Xoá</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $fields->links() }}
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
