


<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ; ?></title> 
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css">
    </head>
    <body>
        
    <header> <?php echo 'FOODIE'; ?> </header>
    
    <div id="banner"></div>
    
    <div id="content-area">
        <img src="Images/img1.jpg" alt="image" class="imgLeft"/>
        <div id="sidebar" align="center">
            <?php echo "NEW USER?" ?><a href="newuser.php">Click Here</a><br><br>
            
            <form action="" method="post">
            <input type="text" name="user" placeholder="username" required><br><br>
            <input type="password" name="pwd" maxlength="8" placeholder="Password" required><br><br>
            <input type="submit" name="submit" value="submit" onclick="" ><br><br></form>
            
             <?php echo "PROBLEM IN LOGIN--" ?><a href="login.php">Click Here</a><br><br>
        <?php
        $user="";
        $pass="";
        $row=0;
         if(isset($_POST['submit'])){
          $user=$_POST['user'];
         $pass=$_POST['pwd'];  
        
        $db_hostname="localhost";
        $db_username="root";
        $db_password="";
        $db_database="foodie_users";
        
        $db_server= mysqli_connect($db_hostname,$db_username,$db_password);
        mysqli_select_db($db_server, $db_database);
          
           $query="SELECT * from user where username='$user' and password='$pass';"; 
           $result=mysqli_query($db_server, $query);
          $row=mysqli_num_rows($result);
           
                  if($row==1)
                  echo '<script>window.open("order.php") </script>';  
         }
                ?>
            
        </div>
        <img src="Images/img2.jpg" alt="image" class="imgRight"/>
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
    <footer></footer>
      
    </body>
</html>
