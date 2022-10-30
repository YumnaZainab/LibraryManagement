<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/542f8a648d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Dashboard</title>
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
    .boxes{
        display:flex;
        width: 100%;
    }
    .boxxx{
        margin: auto;
    }
    .boxxxx{
        margin-top:14%;
        background-color:white;
        width:100%
    }
    .contentt{
        padding:12px;
    }
    .inside-header{
        background-color:#D58326;
        padding:7px   
    }
    .btn{
        border: 2px solid black;
        height: 38px;
        width: 120px;
        border-radius: 0px;
        color: black;
        background-color: #72C7D9;
        display:block;
        margin: auto;
    }
    .errors{
        color:red;
    } 
    @media(max-width: 804px){
        .box h3{
            font-size:1.2rem;
        }
    }
    @media (max-width: 612px){
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
            <div class="container">
                <div class="boxes">
                <div class="boxxxx">
                <div class="boxxx">
                <div class="inside-header">
                    <h3 style="font-family: Serif;">ADD BOOKS</h3>
                </div>
                <div style="font-family: Serif;" class="contentt">

                <form action="bookAdd" method="post" onsubmit="return validate()">
                    @csrf
                    <label for="tb">Title of Book</label>
                    <input type="text" placeholder="Enter title of the book here..." name="tb" id="tb" style="width:100%"> <br>
                    <label for="tberror" class="errors" id="tberror"></label> <br> <br>
                    <label for="ab">Author Name</label>
                    <input type="text" placeholder="Enter author of the book here..." name="ab" id="ab" style="width:100%"> <br>
                    <label for="aberror" class="errors" id="aberror"></label> <br><br>
                    Description of Book <br>
                    <textarea placeholder ="Enter few lines about the book here" rows = "2" style="width:100%" cols = "120" name="db">
                    </textarea><br> 
                    <label for="dberror" class="errors" id="dberror"></label> <br> <br>
                    <label for="catg">Category</label>

                    <select name="catg" id="catg">
                        <?php
                        foreach ($categories as $category){
                        print "<option value='$category->category'>" .$category->category. "</option>";
                        }
                        ?>
                    </select>
                   
                    <br><br>
                    <label for="num">Number of Issues</label>
                    <input type="text" placeholder="How many issues are there?" name="num" id="num" style="width:100%"> <br>
                    <label for="numerror" class="errors" id="numerror"></label> <br><br>
                    <div class="center">
                        <input class="btn" type="submit" value="Add Book">
                    </div>

                </form>
                    
                </div>
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

    <script>

        var msg = '{{Session::get('alert')}}';

        var exist = '{{Session::has('alert')}}';

        if(exist){

            alert(msg);

        }  

        function validate(){
            titlee = document.getElementById('tb').value;
            authorr = document.getElementById('ab').value;
            des = document.getElementByName('db').value;
            issues = document.getElementById('num').value;

            if(titlee.length == 0){
                document.getElementById('tberror').innerHTML = "Field Must not be Empty";
                return false;
            }else if(authorr.length == 0){
                document.getElementById('aberror').innerHTML = "Field Must not be Empty";
                return false;
            }
            else if(des.length == 0){
                document.getElementById('dberror').innerHTML = "Field Must not be Empty";
                return false;
            }
            else if(issues.length == 0){
                document.getElementById('numerror').innerHTML = "Field Must not be Empty";
                return false;
            }
    }

    </script>

</body>
</html>