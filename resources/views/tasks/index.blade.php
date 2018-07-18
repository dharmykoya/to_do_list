
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

            <div class="row">
                <form method="POST" action="{{ route('tasks.store') }}">
                    {{ csrf_field() }}
                    <div class="col-md-8">
                        <input type="text" name="task_name" placeholder="Enter Task" required class="form-control">
                    </div>

                    <div class="col-md-2">
                       <input type="submit" class="btn btn-primary btn-block" value="Add Task">
                    </div>
                </form>

                <form method="POST" >
                    {{--{{ csrf_token() }}--}}
                    {{--{{ method_field('DELETE') }}--}}

                    <div class="col-md-2">
                        <input type="submit" class="btn btn-primary btn-block" value="Clear List">
                    </div>
                </form>

            </div>

            <div class="row">
                @if(count($tasks) > 0)
                    <table class="table">
                        <thead>
                            <th>Task #</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <th>{{ $task->id }}</th>
                                    <td>{{ $task->name }}
                                    <td>
                                        <a href="{{ route('tasks.edit', [$task->id]) }}" class="btn btn-default">Edit</a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('tasks.destroy', [$task->id]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <input type="submit" class="btn btn-danger" value="DELETE">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</body>
</html>


