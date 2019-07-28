<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
        #wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .form-group {
            padding: 1rem;
        }

        .form-group input, .form-group button  {
            border-radius: 0.125rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.125rem;
        }

        .form-group input {
            padding: 0.50rem;
            font-size: 1rem;
            border: 1px solid #ccc;
        }

        .form-group button {
            padding: 0.75rem;
        }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <div class="page-content">
                <form action="">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password">
                    </div>

                    <div class="form-group">
                        <button type="sumit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
