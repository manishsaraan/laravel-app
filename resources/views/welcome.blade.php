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
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    @if($users->count() > 0)
                    there are {{ $users->count() }} users<br>
                    @foreach($users as $user)
                    <b> {{  $user->name }} </b> with email <small>{{ $user->email }}</small><br>
                    @endforeach
                    @else 
                    ther are no users
                    @endif
                    
                </div>
            </div>
        </div>
    </body>
</html>
