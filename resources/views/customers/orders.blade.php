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
        $(function(){
            $('#s1').hide();

        });
        function call()
        {

            // Nếu check thì hiện form tiếp theo
            var check=$('#s2').val();
            if(check)
            {
                $('#s1').show();
            }
            else { $('#s1').hide(); }

        }
    </script>
    <title>== TESTING AJAX SCRIPT ==</title>
</head>
<body>

<label for="">Select Shipping Method:</label>
<select class="mb-3" name="selectcourier" required onchange="call();" id="s2" >
    <option value="">Please Select</option>
    @foreach($types as $item)
        <option value="{{ $item -> id }}">{{ $item -> type }}</option>
    @endforeach
</select>
<br>

<label>Select Shipping Courier:</label>
<select name="selectcourier" required id="s1">
    <option value="">Please Select</option>
    @foreach($fields as $item)
    <option value="{{ $item -> id }}">{{ $item -> name }}</option>
    @endforeach
</select>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
