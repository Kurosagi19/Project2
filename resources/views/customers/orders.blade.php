<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function call() {
            const types = $('#types').val();
{{--            @dd($ajaxFields)--}}
            if(types) {
                $.ajax({
                    uploadUrl: '{{ url("customers.ajaxFields") }}',
                });
            }
        }
    </script>
    <title>== TESTING AJAX SCRIPT ==</title>
</head>
<body>

<div class="container-fluid" style="background-color: white; color: red; font-size: 30px">
    <marquee behavior="" direction="right" scrollamount="15">== THIS WEBSITE WAS MADE FOR TESTING FUNCTION ==</marquee>
</div>

{{--@dd($ajaxFields)--}}

<a href="{{ route('customers.index') }}" class="btn btn-warning mb-5">Get the f*** out of here!</a><br>

<label for="">Select Field Type:</label>
<select class="my-3" name="selecttypes" required onchange="call();" id="types" >
    <option value="">Please Select</option>
    @foreach($types as $item)
        <option value="{{ $item -> id }}">{{ $item -> type }}</option>
    @endforeach
</select>
<br>

<label>Select Field:</label>
<select class="my-3" name="selectfields" required id="fields">
    <option value="">Please Select</option>
    @foreach($ajaxFields as $item)
    <option value="{{ $item -> id }}">{{ $item -> name }}</option>
    @endforeach
</select>
<br>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
