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
            $('#fields').hide();
            $('#customers').hide();
            $('#img').hide();
        });
        function call()
        {

            // Nếu check thì hiện form tiếp theo
            var types  = $('#types').val();
            if(types)
            {
                $('#fields').show();
            }
            else
            {
                $('#fields').hide();
            }
        }
        function call2()
        {
            var fields  = $('#fields').val();
            if(fields)
            {
                $('#customers').show();
                $('#img').show();
            }
            else
            {
                $('#customers').hide();
                $('#img').hide();
            }
        }
    </script>
    <title>== TESTING AJAX SCRIPT ==</title>
</head>
<body>

<div class="container-fluid" style="background-color: white; color: red; font-size: 30px">
    <marquee behavior="" direction="right" scrollamount="15">== THIS WEBSITE WAS MADE FOR TESTING FUNCTION ==</marquee>
</div>

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
<select class="my-3" name="selectfields" required onchange="call2();" id="fields">
    <option value="">Please Select</option>
    @foreach($fields as $item)
    <option value="{{ $item -> id }}">{{ $item -> name }}</option>
    @endforeach
</select>
<br>

<label>Image:</label>
<table class="my-3" id="img">
    @foreach($fields as $item)
    <tr>
        <td>
            <img src="{{ asset(\Illuminate\Support\Facades\Storage::url('admin/img/').$item->image) }}" width="100px" height="100px">
        </td>
    </tr>
    @endforeach
</table>
<br>

<label>Select Customer ???:</label>
<select class="my-3" name="selectcustomer" required id="customers">
    <option value="">Please Select</option>
    @foreach($customers as $item)
        <option value="{{ $item -> id }}">{{ $item -> name }}</option>
    @endforeach
</select>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
