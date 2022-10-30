<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Library</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<style>
    *{
        font-size:0.9rem;
    }
    body{
        background-position: center center;
  
        /* Image doesn't repeat */
        background-repeat: no-repeat;
        
        /* Makes the image fixed in the viewport so that it doesn't move when 
            the content height is greater than the image height */
        background-attachment: fixed;
        
        /* This is what makes the background image rescale based on its container's size */
        background-size: cover;
        background-image:url({{url('assets/img/study.jpg')}});   
    }
    .footer{
        position:absolute;
        bottom:0px;
        display:flex;
        align-items:center;
        color:black;
        background-color:grey;
    }
    .header{
        background-color:#D58326;
        padding: 23px;
        line-height: 24px;
        left:0px;
        width: 100%;
        height: 120px;
    }
    .pic{
        right:0px;
        left:0px;
    }
    .box{
        margin-top:14%;
        background-color:white;
        width:73%     
    }
    .content{
        padding:12px;
    }
    .inside-header{
        background-color:#D58326;
        padding:7px   
    }
    .anchor{
        color:black;
    }
    input[type="text"], input[type="password"]{
        width:100%
    }
    .btn{
        border: 2px solid black;
        height: 38px;
        width: 120px;
        border-radius: 0px;
        color: black;
        background-color: #72C7D9;
    }

    @media (max-width: 990px){
        .body, html{
            position:relative; 
            margin:0;
            padding:0;
            overflow:auto; 
        }
        .footer{
            positon:absolute;
        }
        .box{
            width:100%;
        }
        .container{
            padding:2%;
        }
        .footer{
            postion:relative;
        }
    }
    @media (max-width: 580px){
        .box{
            width:65%;
            height: 400px;
            margin: 14% auto;
            background-position:none;
        }
    }

</style>

<body>

    <div class="header">
        <h1>O.L.M.S</h1>
        <marquee class="brand" style="color:#fff"  behavior="" direction=""><h2>WELCOME  TO  ONLINE  LIBRARY  MANAGEMENT  SYSTEM</h2></marquee>
    </div>

    <div style="padding:0" class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
            <div class="box">
                <div class="inside-header">
                    <h3 style="font-family: Serif; text-align:center;" >LIBRARIAN / ADMIN SIGN IN</h3>
                </div>
                <div class="content">
                    <form action="/adminLogin" method="post">
                        @csrf
                        <label for="username">Enter Username</label> <br>
                        <input type="text" name="username" id="username"> <br><br>
                        <label for="pass">Password</label> <br>
                        <input type="password" name="pass" id="pass"><br><br>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <input onclick="location.href='/adminDashboard'" class="btn" type="submit" value="Log In"> <br><br>
                        <a href="/signUp">New librarian?  Sign Up</a>
                    </form>
                </div>
            </div>
            </div>
            <div class="col-lg-6 col-md-12">
            <div class="box">
                <div class="inside-header">
                    <h3 style="font-family: Serif; text-align:center;">READER SECTION</h3>
                </div>
                <div class="content">
                    <a class="anchor" href="/SsearchBook">Search Book</a> <br><br>
                </div>
            </div>
            </div>

        </div>
    </div>

    <div class="footer">
        <div class="container md-auto">
            <b class="copyright">&copy; {{ date('Y') }} - Online Library Management System </b> All rights reserved.
        </div>
    </div>

    <script>

                var alert_message = '{{Session::get('alert')}}';

                var if_exist = '{{Session::has('alert')}}';

                if(if_exist){
                    alert(alert_message);
                }

    </script>
</body>
</html>