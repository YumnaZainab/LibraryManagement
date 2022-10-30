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
        /* position:absolute;
        bottom:0px; */
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
        padding:0% 12%;
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
        width:130%
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
        .container{
            width:100%;
        }
        .boxxxx{
            width:max-content;
        }
    }
     @media (max-width: 665px){
        .boxxxx{
            width:100%;
            overflow:auto;
        }
    }
    @media (max-width: 728px){
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
                    <h3 style="font-family: Serif;">CURRENTLY ISSUED BOOKS</h3>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Ttile</th>
                                <th scope="col">Author</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category</th>
                                <th scope="col">Issued Books</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php

                            foreach ($bookData as $bData) {

                                print "<tr>";
                                    print "<td>" .$bData->title. "</td>";
                                    print "<td>" .$bData->author_name. "</td>";
                                    print "<td>" .$bData->description. "</td>";
                                    print "<td>" .$bData->category. "</td>";
                                    $issue = $bData->issues - $bData->available;
                                    print "<td>" .$issue. "</td>";
                                    print "</tr>";
                            }

                            ?>

                            </tbody>
                        </table>
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
</body>
</html>