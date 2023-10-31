<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Laravel 8: Dynamic Dependent Dropdown</title>
</head>
<body>
<div class="container my-5">
    <h1 class="fs-5 fw-bold my-4 text-center">How to Create Dependent Dropdown in Laravel</h1>
    <div class="row">
        <form action="">
            <div class="mb-3">
                <label for="types" class="form-label">Category</label>
                <select class="form-control" name="types" id="types">
                    <option hidden>Choose field type</option>
                    @foreach ($types as $item)
                        <option value="{{ $item -> id }}">{{ $item -> type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fields" class="form-label">Field</label>
                <select class="form-control" name="fields" id="fields"></select>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#types').on('change', function() {
            var type_id = $(this).val();
            if(type_id) {
                $.ajax({
                    url: 'ajax/getFields/' + type_id,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",
                    success:function(data)
                    {
                        if(data){
                            $('#fields').empty();
                            $('#fields').append('<option hidden>Choose field</option>');
                            $.each(data, function(key, fields){
                                $('select[name="fields"]').append('<option value="'+ key +'">' + fields.name + '</option>');
                            });
                        }else{

                            $('#fields').empty();
                        }
                    }
                });
            }else{
                $('#fields').empty();
            }
        });
    });
</script>
</body>
</html>
