<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .content {
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            form {
                width: 50vw;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
            }

            .input {
                width: 70%;
            }

            .button {
                flex: .5;
            }

            .title {
                font-size: 84px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="my-container">
            <div class="content">
                <div class="title m-b-md">
                    URL Shortener by Vianney
                </div>
                <div class="app">
                    <form action="/shorten" method="post">
                        <!-- To prevents CORS attack. Generates a hidden input and generates a random id for identification. -->
                        @csrf
                        <input class="input" name="original_link" type="url" placeholder="Type a link to shorten" />
                        <input class="button" type="submit" value="Shorten" />
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
