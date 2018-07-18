
<!DOCTYPE html>
<html>
<head>
    <title>To do List</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div class="container">
    <div class="col-md-offset-2 col-md-8">
        <div class="row">
            <h2>To do List App</h2>
        </div>

        {{--Displays success message--}}
        @if($flash = session('success'))
            <div class="alert alert-success">
                {{ $flash }}
            </div>
        @endif

        {{-- Displays error message --}}
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        </div>
    </div>
</div>
</body>
</html>


