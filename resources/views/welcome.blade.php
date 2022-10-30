<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Library</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
           
            .container2{

                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .btn{
                border: 2px;
                height: 38px;
                width: 200px;
                border-radius: 0px;
                background-color: #D58326;
                color: white;
            }
        </style>
    </head>

    <body>

        <div style="padding: 0px;" class="container-fluid">

            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div>
                    <img src="{{ URL::to('/assets/img/custom-library.jpg') }}" alt="" height="745px" width="100%">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="container2">
                        <h1>Online library</h1>
                        <button onclick="location.href='/home'"class="btn">Get Started</button>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>
