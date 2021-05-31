<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "USER VERIFICATION" ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/login.css">
    </head>
    <body>
        <header> <?php echo 'FOODIE'; ?> </header>
        <div id="content-area" align="center">
            <?php echo 'ENTER YOUR REGISTERED MOBILE NUMBER' ; ?>
            <form name="f1" action="" method="post">
                <input type="tel" name="mob"><br><br>
                <input type="submit" name="submit" value="submit" onclick=""><br>
                </form>
             <?php
             $mobile=(int)"";
             if(isset($_POST['submit']))
             { 
                 $mobile=(int)$_POST['mob'];
             }
            
              $db_hostname="localhost";
        $db_username="root";
        $db_password="";
        $db_database="foodie_users";
        
        $db_server= mysqli_connect($db_hostname,$db_username,$db_password);
     
        if(!$db_server)
            die("unable to connect :". mysqli_error($db_server));
        else 
            {
            mysqli_select_db($db_server, $db_database);
            $query="SELECT * from user where mobile='$mobile';";
            $result=mysqli_query($db_server,$query);
           if(!$result) die("NO". mysqli_error($db_server));
          $r=mysqli_fetch_assoc($result);
          $row= mysqli_num_rows($result);
         if($row==1)
            echo "USERNAME:  $r[username] AND PASSWORD:  $r[password]";
            }   
               
           
             ?>
        </div>
        <nav id="navigation" >
            <ul id="nav">
                <li> <a href="index.php">Home</a> </li>
                <li> <a href="Template1.php">About Us</a> </li>
                <li> <a href="menu.php">Menu</a> </li>
                <li> <a href='Template2.php'>Deals</a> </li>
                <li> <a href='Template3.php'>Policies</a> </li>
            </ul>
        </nav>
    </body>
</html>
