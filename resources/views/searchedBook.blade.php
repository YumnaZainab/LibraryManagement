<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search</title>
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
        background-image:url({{url('assets/img/search.jpg')}});   
        
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
    .footer{
        display:flex;
        align-items:center
        
    }
    .boxx{
        margin: auto;
    }
    .box{
        margin-top:14%;
        background-color:white;
        width:130%
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
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
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

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-md-12">
            <div class="box">
                <div class="boxx">
                <div class="inside-header">
                    <h3 style="font-family: Serif;">SEARCHED BOOK</h3>
                </div>
                <!-- <div style="font-family: Serif;" class="content">
                <form action="">
                    <label for="username">Enter Name or Author of the book</label> <br>
                    <input type="text" name="username" id="username"> <br><br>
                    <div class="center">
                        <input class="btn"  type="submit"  value="Search">
                    </div>
                </form>
                    
                </div> -->
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

</body>
</html>