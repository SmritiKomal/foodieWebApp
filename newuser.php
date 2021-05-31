<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "REGISTER  HERE" ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/newuser.css">
    </head>
    <body>
        <header> <?php echo 'FOODIE'; ?></header>
        <div id="content-area" align="center">
            <form action="" method="post">
           <?php echo 'Register Here';?><br><br>
           NAME: <input type="text" name="name"><br><br>
           Age: <input type="number" name="age"><br><br>
           Sex: <select name="sex"> 
               <option value="male">MALE</option>
               <option value="female">FEMALE</option>
               <option value="other">OTHER</option>
                </select><br><br>
                MOBILE: <input type="tel" name="mob"><br><br> 
                EMAIL: <input type="email" name="email"><br><br>
                USERNAME: <input type="text" name="user"><br><br>
                
                PASSWORD(maximum 8 characters): <input type="password" name="pwd" maxlength="8"><br><br>
           <input type="submit" name="submit" value="Submit" align="center" >
       </form>
            <?php
            $name=""; $age=(int)""; $sex=""; $mobile=(int)""; $email=""; $username=""; $password="";
            if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $age=(int)$_POST['age'];
            $sex=$_POST['sex'];
            $mobile=(int)$_POST['mob'];
            $email=$_POST['email'];
            $username=$_POST['user'];
            $password=$_POST['pwd'];
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
            $query="INSERT into user(name,age,sex,mobile,email,username,password) VALUES('$name','$age','$sex','$mobile','$email','$username','$password');";
            $r=mysqli_query($db_server,$query);
           if(!$r) die("NO". mysqli_error($db_server));
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
