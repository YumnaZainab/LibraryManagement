<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<style>
    *{
        font-size:0.9rem;
    }
    html{
        height:95%
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
        /* position:absolute;
        bottom:0px;
        display:flex;
        align-items:center; */
        color:black;
        background-color:grey;
        display:flex;
        align-items:center
        
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

    .boxx{
        margin: auto;
    }
    .box{
        margin-top:15.5%;
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
    input[type="text"], input[type="password"], input[type="email"]{
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
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .errors{
        color:red;
    }   
    @media (max-width: 990px){
        .body, html{
            position:relative; <!--Also give it a position -->
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

    }
    @media (max-width: 580px){
        .box{
            width:85%;
            /* height: 400px; */
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

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-md-12">
            <div class="box">
                <div class="boxx">
                <div class="inside-header">
                    <h3 style="font-family: Serif; text-align:center;">SIGN UP</h3>
                </div>
                <div style="font-family: Serif;" class="content">
                <form action="/addAdmin" method="post" onsubmit="return validate()">
                    @csrf
                    <label for="username">Enter Username</label> <br>
                    <input type="text" name="username" id="username"> <br>
                    <label for="usrnameerror" class="errors" id="usrnameerror"></label> <br>
                    <label for="email">Email</label> <br>
                    <input type="email" name="email" id="email"><br>
                    <label for="emailerror" class="errors" id="emailerror"></label> <br>
                    <label for="pass">Password</label> <br>
                    <input type="password" name="pass" id="pass"><br>
                    <label for="passerror" class="errors" id="passerror"></label> <br>
                    <label for="cpass">Confirm Password</label> <br>
                    <input type="password" name="cpass" id="cpass"><br>
                    <label for="cpasserror" class="errors" id="cpasserror"></label> <br>
                    <div class="center">
                        <input class="btn"  type="submit" value="Create Account">
                    </div>
                    <br>
                    <a href="/home">Already a User?</a>
                </form>
                    
                </div>
                </div>
                
            </div>
            </div>

        </div>
    </div>
    <br><br><br><br>
    <div class="footer">
        <div class="container md-auto">
            <b class="copyright">&copy; {{ date('Y') }} - Online Library Management System </b> All rights reserved.
        </div>
    </div>
<script>

    var msg = '{{Session::get('alert')}}';

    var if_exist = '{{Session::has('alert')}}';

    if(if_exist){
        alert(msg);
    }

    function validate(){
        username = document.getElementById('username').value;
        email = document.getElementById('email').value;
        pass = document.getElementById('pass').value;
        cpass = document.getElementById('cpass').value;

        if(username.length == 0){
            document.getElementById('usrnameerror').innerHTML = "Field Must not be Empty";
            return false;
        }else if(email.length == 0){
            document.getElementById('emailerror').innerHTML = "Field Must not be Empty";
            return false;
        }
        else if(pass.length == 0){
            document.getElementById('passerror').innerHTML = "Field Must not be Empty";
            return false;
        }
        else if(cpass.length == 0){
            document.getElementById('cpasserror').innerHTML = "Field Must not be Empty";
            return false;
        }else{
            if(pass.length < 8){
                document.getElementById('passerror').innerHTML = "Password Length Must be Greater than 8";
                return false;
            }else if(pass != cpass){
                document.getElementById('passerror').innerHTML = "Password doesnot match";
                document.getElementById('cpasserror').innerHTML = "Password doesnot match";
                return false;
            }
        }
    }

</script>
</body>
</html>