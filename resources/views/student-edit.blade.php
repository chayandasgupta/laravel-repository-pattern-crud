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
                        <form action="{{ route('student.update', $student->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Name</label>
                                <input id="fName" name="name" class="form-control form-control-sm" value="{{ $student->name }}"/>
                            </div>
                            <div class="form-group">
                                <label>Dept.</label>
                                <input name="dept" id="gender" class="form-control form-control-sm" value="{{ $student->dept }}" />
                            </div>
                            <div class="form-group">
                                <label>Shift</label>
                                <input name="shift" id="age" class="form-control form-control-sm" value="{{ $student->shift }}"/>
                            </div>
                            <button type="submit" id ="display" class="btn btn-sm btn-primary">Update</button>
                        </form>
                        <br>
                        <br>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </body>
</html>
