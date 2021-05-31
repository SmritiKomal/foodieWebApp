<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<!--
To change this license 
header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo 'Hey Foodie!!';?></title>
        <link rel="stylesheet" type="text/css" href="Styles/bill.css">
    </head>
    <body>
         <header> <?php echo 'ORDER SUMMARY'; ?> </header>
         <div id="content-area">
        <?php
        
            if(isset($_POST['cb']))
            {  
                  $x=$_POST["cb"];
                  $n=sizeof($x);
                  foreach ($x as $item)
                   {
                    echo "$item ";
                    echo "\n";
                   }
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
