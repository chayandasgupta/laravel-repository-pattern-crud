<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Styles -->
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
        <div class="container">
            <br>
            <br>
            <h3 class="text-center">Display answers of form fill in inside a table</h3>
            <br>
            <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="{{ route('student.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input id="fName" name="name" class="form-control form-control-sm" />
                            </div>
                            <div class="form-group">
                                <label>Dept.</label>
                                <input name="dept" id="gender" class="form-control form-control-sm" />
                            </div>
                            <div class="form-group">
                                <label>Shift</label>
                                <input name="shift" id="age" class="form-control form-control-sm" />
                            </div>
                            <button type="submit" id ="display" class="btn btn-sm btn-primary">Display</button>
                        </form>
                        <br>
                        <br>
                        <table  class="table table-bordered" id= "table" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Dept</th>
                                    <th>Shift</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $key=>$student)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->dept }}</td>
                                    <td>{{ $student->shift }}</td>
                                    <td>
                                        <button class="bg-danger border-none">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </body>
</html>
