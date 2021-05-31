<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <form action="" id="form1" method="POST">
            <input type="text" name="user" placeholder="username" required><br><br>
            <input type="password" name="pwd" maxlength="8" placeholder="Password" required><br><br>
            <input type="submit" name="submit" value="submit" onclick="" ><br><br></form>
        <?php
  $u=$_POST['user'];
  echo $u;
       
      ?>
    </body>
</html>
