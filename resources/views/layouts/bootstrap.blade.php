<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple Blog</title>

        <link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
        <link href="/css/blog.css" rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </body>
</html>
