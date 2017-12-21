<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form action="" method="POST">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email">
                </div>
                 <button type="submit" class="">Submit</button>
                </form>
                @foreach($employees as $employee)
                    <h1>{{$employee->email}}</h1>
                @endforeach
            </div>
        </div>
    </body>
</html>
