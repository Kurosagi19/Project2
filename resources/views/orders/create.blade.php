<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/dfb2727f7d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../../resources/Images/ava-web.png">
    <title>Trang chủ - SugmaStadium</title>
    <link rel="stylesheet" href="../../resources/css/customer.css">

</head>
<body>
<div class="intro">
    <div style="background-color: rgba(0, 0, 0, 0.7)">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:#05b50b">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('customers.index')}}"><img src="../../../resources/Images/ava-web.png" alt="" height=10% width=10%> SugmaStadium</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offset-md-5 collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-2">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{route('customers.index')}}">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('admin.index') }}">Quản trị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Đặt sân</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="">Liên hệ</a>
                        </li>
                    </ul>
                    {{--                <div id="register" class="col-2">--}}
                    {{--                    <a type="button" class="btn btn-outline-success" href="#">Đăng ký</a>--}}
                    {{--                    <a type="button" class="btn btn-outline-primary" href="#">Đăng nhập</a>--}}
                    {{--                </div>--}}
                </div>
            </div>
        </nav>
        <!-- End navbar -->
        {{--        Main--}}
        <div class="container-fluid" style="background-color: white; color: black">
            <marquee behavior="" direction="right" scrollamount="15">Trang web cho thuê sân bóng đá số 1 Châu Phi moidaden</marquee>
        </div>
        <div class="container-fluid my-md-3 bd-layout">
            <div class="row">
                <div class="col col-sm-3 col-lg-2 sidebar">
                    <nav class="nav menu" aria-label="Docs navigation">
                        <ul class="list-unstyled mb-0 py-3 pt-md-1">
                            <li class="mb-1 text-white">
                                <b>Tỉ số</b><br>
                                <p>
                                    <img src="../../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 3-4 BM
                                    <img src="../../../resources/Images/Bayern_Munchen.ico" alt="" height=10% width=10%>
                                </p>
                                <p>
                                    <img src="../../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 1-3 Brighton
                                    <img src="../../../resources/Images/Brighton.ico" alt="" height=10% width=10%>
                                </p>
                                <p>
                                    <img src="../../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 1-3 Arsenal
                                    <img src="../../../resources/Images/Arsenal.ico" alt="" height=10% width=10%>
                                </p>
                                <p>
                                    <img src="../../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 0-2 Tottenham
                                    <img src="../../../resources/Images/Tottenham.ico" alt="" height=10% width=10%>
                                </p>
                                <p>
                                    <img src="../../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 2-3 Dortmund
                                    <img src="../../../resources/Images/Dortmund.ico" alt="" height=10% width=10%>
                                </p>
                                <p>
                                    <img src="../../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 0-2 RM
                                    <img src="../../../resources/Images/Real-Madrid.ico" alt="" height=10% width=10%>
                                </p>
                                <p>
                                    <img src="../../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 1-3 Wrexham
                                    <img src="../../../resources/Images/Wrexham.ico" alt="" height=10% width=10%>
                                </p>
                                <p>
                                    <img src="../../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 0-3 Sevilla
                                    <img src="../../../resources/Images/Sevilla.ico" alt="" height=10% width=10%>
                                </p>
                                <p>
                                    <img src="../../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 0-7 Liverpool
                                    <img src="../../../resources/Images/Liverpool.ico" alt="" height=10% width=10%>
                                </p>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col">
                    <div class="col-5 col-md-8 offset-md-1">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img height="300" src="https://backyardsidekick.com/wp-content/uploads/2020/04/soccer-field-with-white-marks.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img height="300" src="https://dxbhsrqyrr690.cloudfront.net/sidearm.nextgen.sites/ung.sidearmsports.com/images/2023/3/28/IMG_8243_F57vK.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img height="300" src="https://yoursoccerhome.com/wp-content/uploads/2019/09/AdobeStock_264249960-1024x682.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img height="300" src="https://patch.com/img/cdn20/users/103600/20210910/073254/styles/patch_image/public/turf-field-opens-goal-___10185029396.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Trang trước</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Trang sau</span>
                            </button>
                        </div>
                    </div>
                    <div class="row mt-3" style="background-color: #05b50b">
                        <b class="text-white" style="font-size: x-large">ĐẶT SÂN</b>
                    </div>
                    <div class="row py-2" style="background-color: white">
                        <div class="col-6">
                            <form class="" action="" method="post">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingName" placeholder="Họ tên">
                                    <label for="floatingName">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input placeholder="Select date" class="form-control" type="date" id="Date" placeholder="Ngày đặt">
                                    <label for="Date">Ngày đặt sân</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input placeholder="Select tim" class="form-control" type="time" id="TimeOp" placeholder="Giờ bắt đầu">
                                    <label for="TimeOp">Giờ bắt đầu</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input placeholder="Select date" class="form-control" type="time" id="TimeEn" placeholder="Giờ kết thúc">
                                    <label for="TimeEn">Giờ kết thúc</label>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--End Main--}}

        {{--Footer--}}
        <footer class="d-flex flex-warp justify-content-between align-items-center py-2" style="background-color: #05b50b">
            <div class="col-md-4 align-items-center text-white ms-3" style="--bs-text-opacity: .75;">© 2023 SugmaStadium Copyright. Developed by SaikiroMurphy and Kurosagi19</div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-3">
                <li class="ms-3" style="font-size: 25px">
                    <a href="https://twitter.com" class="text-white" style="--bs-text-opacity: .75;"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li class="ms-3" style="font-size: 25px">
                    <a href="https://www.facebook.com" class="text-white" style="--bs-text-opacity: .75;"><i class="fa-brands fa-facebook"></i></a>
                </li>
                <li class="ms-3" style="font-size: 25px">
                    <a href="https://github.com" class="text-white" style="--bs-text-opacity: .75;"><i class="fa-brands fa-github"></i></a>
                </li>
            </ul>
        </footer>
        {{--        End Footer--}}
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
