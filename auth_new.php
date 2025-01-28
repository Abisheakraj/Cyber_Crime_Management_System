<?php
  include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homepage_dbms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <style>
        body{
            background-color: #5b5b5b;
            align-content: center;
        }
        .data{
            text-align: center;
            background-color: #5b5b5b;
            height: 10cm;
            width:20cm ;
            padding-top: 15px;
            margin-left: 50vh;
            margin-top: 2cm;
            margin-bottom:2.5cm ;
        }
        .but button{
            margin-top: 2cm;
            margin-left: 10px;
            height: 55px;
            width: 170px;
            border-radius: 5px;
            border: none;
            border: 2px solid white;
            font-size: 20px;
            font-weight: 500;
            padding: 0 10px;
            cursor: pointer;
            outline: none;
            transition: all 0.3s ease;
        }
        .but button:first-child{
            color: #fff;
            background: none;
        }
        .but button:first-child:hover{
            background: white;
            color: black;
        }
        .but button:last-child{
            color: #fff;  
            background: none;
        
        }
        .but button:last-child:hover{
            background: white;
            color: black; 
        }
        th,td{
            padding: 5px;
        }
        .filter input{
            width: 8cm;
            height: 0.8cm;
        }
        .filter button{
            height: 0.8cm;
            width: 2cm;
            padding: 2px;
            margin-left: 10px;
        }

        .bu{
            margin-top: 2cm;
            margin-left: 20px;
            margin-bottom: 3cm;
            height: 40px;
            width: 120px;
            border-radius: 5px;
            border: none;
            border: 2px solid white;
            font-size: 20px;
            font-weight: 500;
            padding: 0 10px;
            cursor: pointer;
            outline: none;
            transition: all 0.3s ease;
        }
        .bu:first-child{
            color: #fff;
            background: none;
        }
        .bu:first-child:hover{
            background: rgb(0, 0, 0);
            color: black;
        }
        .bu:last-child{
            color: #fff;  
            background: none;
        
        }
        .bu:last-child:hover{
            background: rgb(0, 0, 0);
            color: black; 
        }
        a{
            color: white;
            text-decoration: none;
        }
        .filter{
            
        }
        table , th , td{
            color: white;
            border-color: white;
            padding: 10px;
            
    }

    </style>
</head>
<body>
    <nav>
        <div class="menu">
          <div class="logo">
            <table style="border-style: hidden;">
              <tr>
                <td><img src="national-emblem-of-india-satyamev-jayate-vector-25883 (1).jpg"></td>
              
                <td><h2 style="color: white;">
                  Cyber Crimes (State/UTs)-2020 <br>
                  National Crime Records Bureau
                </h2></td>
              </tr>
            </table>
    
          </div>
          <ul>
            <li><a href="homepage_dbms.html">Home</a></li>
            <li><a href="homepage_dbms.html">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Feedback</a></li>
          </ul>
        </div>
    </nav>

    

    
    <div class="data">

    <?php
        $sql = "select * from crime;";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        
    ?>

    <table align="center" style="margin: 50px auto;">
        <tr>
            <th>case_id</th>
            <th>subject</th>
            <th>motive</th>
            <th>status</th>
            <th>c_date</th>
            <th>location</th>
        </tr>
        <?php
            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result))
                {
        ?>
        <tr>
            <td><?php echo $row["case_id"] ?></td>
            <td><?php echo $row["subject"] ?></td>
            <td><?php echo $row["motive"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td><?php echo $row["c_date"] ?></td>
            <td><?php echo $row["location"] ?></td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
        
    </div>
        
    <div>
        <center>
        <div class="but">
            <a href=""><button>SLL</button></a>
            <a href=""><button>IPC</button></a>
            <a href=""><button>ITC</button></a>
        </div>
        <br><br>

        <div class="filter">
            <form id="form"> 
                <input type="search" id="query" name="q" placeholder="Search crimewise">
                <button>Filter</button><br><br>
                <input type="search" id="query" name="q" placeholder="Search state wise">
                <button>Filter</button><br><br>
                <input type="search" id="query" name="q" placeholder="Search date wise">
                <button>Filter</button><br><br>
                <input type="search" id="query" name="q" placeholder="Search criminal id wise">
                <button>Filter</button><br><br>
                <input type="search" id="query" name="q" placeholder="Search victim id wise">
                <button>Filter</button><br><br>
                <input type="search" id="query" name="q" placeholder="Search case id wise">
                <button>Filter</button><br><br>
        </div>
    
        <div>
            <button class="bu"><a href="add.html">ADD</a></button>
           <button class="bu"><a href="delete.html">DELETE</a></button>
        </div>
        <center>
    </div>
 
    
</body>
</html>