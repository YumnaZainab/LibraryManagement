<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/542f8a648d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Find Issued Book</title>
</head>

<style>
    *{
        font-size:0.9rem;
    }
    body{
        background-color:#D0D8DA;
    }
    .footer{
        
        display:flex;
        align-items:center;
        color:black;
        background-color:grey;
        margin-top:2%;
    }
    .header{
        background-color:#D58326;
        padding: 12px;
        line-height: 15px;
        left:0px;
        width: 100%;
        height: 45px;
        left:0%;
    }
    .container-fluid{
        display:flex;
        padding: 0% 12%;
        
    }
    .navBar ul{
        padding-left:0px;
        margin-bottom:0px;
    }
    .navBar ul li{
        list-style: none;
        padding: 9.5% 14%;
    }
    .navBar ul li a{
        text-decoration: none;
        padding: 12px 0px;
    }
    .navBar{
        background-color: #34302A;
        width: 25%;
        overflow: hidden;
    }
    .box{
        background-color:#D58326;
        padding: 18px 12px;
        /* line-height: 15px; */
        width: 100%;
        height: 70px;
        text-align:center;
    }
    .content{
        display:flex;
        flex-direction:column;
    }
    li{
        border-bottom: 1px solid lightgrey;
        padding bottom: 1%;
    }
    a:hover{
        color:white;
    }
    .aside{
       width:80% 
    }
    .boxxx{
        background-color:white;
    }
    .contentt{
        padding:12px;
    }
    .boxes{
        margin: 6% 0%;
        display:flex;
        width: 100%;
    }
    .field{
        background-color:white;
        text-align:center;
        width: 50%;
        padding:3% 0%;
        margin: 0% 2%
    }
    .field i{
        margin-bottom:3%;
        font-size:2.6rem;
        color:#249aff;
    }
    .btn{
        border: 2px solid black;
        height: 38px;
        width: 120px;
        border-radius: 0px;
        color: black;
        background-color: #72C7D9;
    }
    @media (max-width: 770px){
        .box h3{
            font-size:1.2rem;
        }
        .boxes{
            flex-direction:column;
        }
        .field{
            width:100%;
            margin: 2% 2%
        }
    }
    @media(max-width: 650px){
        .boxes h4{
            font-size:0.9rem;
        }
        .boxes{
            flex-direction:row;
            
        }
        .container-fluid{
            flex-direction:column;
        }
        .navBar{
            width:90%;
            margin:3% auto;
        }
        .navBar ul li{
            padding: 3% 6%;
        }
        .aside{
            width:100%;
        }
    }
    
</style>

<body>
    <div class="header">
        <h3>O.L.M.S</h3>
        <h3 style="text-align:center;" >Dashboard</h3>  
    </div>
<br><br> <br>
    <div class="container-fluid">
        <nav class="navBar">
            <ul>
            <li><a href="/adminDashboard" style="color:darkgrey;"><strong> Home </strong></a></li>
                <li><a href="/booksAvailable" style="color:darkgrey;"><strong> All Books in Library </strong></a></li>
                <li><a href="/bookCategory" style="color:darkgrey;"><strong> Add Book Category </strong></a></li>
                <li><a href="/addBook" style="color:darkgrey;"><strong> Add Books </strong></a></li>
                <li><a href="/askUpdate" style="color:darkgrey;"><strong> Update Books </strong></a></li>
                <li><a href="/deleteBook" style="color:darkgrey;"><strong> Delete Books </strong></a></li>
                <li><a href="/issueBook" style="color:darkgrey;"><strong> Issue Books </strong></a></li>
                <li><a href="/returnBook" style="color:darkgrey;"><strong> Return Books </strong></a></li>
                <li><a href="/viewIssued" style="color:darkgrey;"><strong> View All Currently Issued Books </strong></a></li>
                <li><a href="/home" style="color:darkgrey;"><strong> LOG OUT </strong></a></li>
            </ul>
            
        </nav>

        <div class="aside">
            <div class="container">
                <div class="box">
                    <h3>Online Library Management System</h3>
                </div>
            </div>
            <div class="container" style="display:flex; flex-direction:column;">
                <div class="boxes">
                    <div style = "cursor:pointer;" class="field" onclick="location.href='./findBook'">
                        <i class="fa fa-bars"  aria-hidden="true"></i>
                        <h4>Find Book</h4>
                    </div>
                    <div style = "cursor:pointer;" class="field" onclick="location.href='./findIssueBook'">
                    <i class="fa fa-book"  style="color:grey;" aria-hidden="true"></i>
                        <h4>Find Issue Book</h4>
                    </div>
            </div>
            <div class="boxxx">
                <div style="font-family: Serif;" class="contentt">
                <form action="/issued" method="get">
                    <label for="title">Enter Name of the book</label> <br>
                    <input type="text" name="title" id="title" style="width:100%;"> <br><br>
                    <div class="center">
                        <input class="btn"  type="submit" value="Search">
                    </div>
                </form>
                    
                </div>
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