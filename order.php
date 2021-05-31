

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo 'Hey Foodie!!';?></title>
        <link rel="stylesheet" type="text/css" href="Styles/order.css">
    </head>
    <body>
         <header> <?php echo 'ORDER HERE'; ?> </header>
         <form method="post" action="bill.php" id="form1" >
         <div id="sidebar" >
       <h3>TANDOOR SPECIAL</h3>
       <input type="checkbox" name="cb[]" value="TANDOORI VEG KEBAB">TANDOORI VEG KEBAB---80 <input type="number" name="cb[]" value=""><br> 
       <input type="checkbox" name="cb[]" value="PANEER TIKKA">PANEER TIKKA---75 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="TANDOORI ALOO">TANDOORI ALOO----110 <input type="number" name="cb[]" value=""><br>
        
       <h3>MAIN COURSE</h3>
       <input type="checkbox" name="cb[]" value="SHAHI PANEER">SHAHI PANEER---225 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="KADAI PANEER">KADAI PANEER----225 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="PALAK PANEER">PALAK PANEER---235 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="GOBHI MASALA">GOBHI MASALA----200 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="JEERA ALOO">JEERA ALOO---150 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="KASHMIRI KOFTA">KASHMIRI KOFTA---220 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="MALAI KOFTA">MALAI KOFTA---225 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="NAVRATAN KORMA">NAVRATAN KORMA---250 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="BHINDI MASALA">BHINDI MASALA---190 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="DAL MAKHANI">DAL MAKHANI---160 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="DAL FRY">DAL FRY---175 <input type="number" name="cb[]" value=""><br>
             
       <h3>ICE-CREAM</h3>
       <input type="checkbox" name="cb[]" value="VANILLA">VANILLA---105 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="CHOCOLATE">CHOCOLATE---75 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="BUTTER SCOTCH">BUTTER SCOTCH----110 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="STRAWBERRY">STRAWBERRY----100 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="CASATTA">CASATTA-----100 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="KESAR PISTA">KESAR PISTA-----100 <input type="number" name="cb[]" value=""><br> 
             
       <h3>BEVERAGES</h3>
       <input type="checkbox" name="cb[]" value="COLA">COLA---55 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="SPRITE">SPRITE---40 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="PEPSI">PEPSI----45 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="MOUNTAIN DEW">MOUNTAIN DEW-----40 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="CHOCOLATE MILK SHAKE">CHOCOLATE MILK SHAKE-----60 <input type="number" name="cb[]" value=""><br> 
       <input type="checkbox" name="cb[]" value="COLD COFFEE">COLD COFFEE-----75 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="STRAWBERRY SHAKE">STRAWBERRY SHAKE-----60 <input type="number" name="cb[]" value=""><br> 
       <input type="checkbox" name="cb[]" value="TEA">TEA-----20 <input type="number" name="cb[]" value=""><br>
       <input type="checkbox" name="cb[]" value="COFFEE">COFFEE-----35 <input type="number" name="cb[]" value=""><br><br>
                
       <input type="submit" name="b1" value="SUBMIT" align="center">
    </div>
    
    <div id="content-area">
       <h3>SALAD  BAR</h3>
        <input type="checkbox" name="cb[]" value="GREEN SALAD">GREEN SALAD---80 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="BOONDI RAITA">BOONDI RAITA---75 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="FRUIT SALAD">FRUIT SALAD----110 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="MIX SPROUT">MIX SPROUT-----80 <input type="number" name="cb[]" value=""><br>
                    
       <h3>SOUPS</h3>
        <input type="checkbox" name="cb[]" value="TOMATO SOUP">TOMATO SOUP---80 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="SWEET CORN">SWEET CORN----95 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="VEG MANCHOW">VEG MANCHOW---115 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="HOT N SOUR">HOT N SOUR----100 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="CLEAR VEG SOUP">CLEAR VEG SOUP-----80 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="MUSHROOM SOUP">MUSHROOM SOUP-----80 <input type="number" name="cb[]" value=""><br>
                              
       <h3>APPETIZERS</h3>
        <input type="checkbox" name="cb[]" value="PANEER CHILLY">PANEER CHILLY---105 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="VEG SPRING ROLL">VEG SPRING ROLL---75 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="GARLIC CHILLY CHOWMEIN">GARLIC CHILLY CHOWMEIN----110 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="BABY CORN MANCHURIAN">BABY CORN MANCHURIAN-----100 <input type="number" name="cb[]" value=""><br> 
        <input type="checkbox" name="cb[]" value="CHEEZE BURGER">CHEEZE BURGER-----110 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="FRENCH FRIES">FRENCH FRIES-----60 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="CHEEZE CUTLET">CHEEZE CUTLET----115 <input type="number" name="cb[]" value=""><br>
             
       <h3>RICE</h3>
        <input type="checkbox" name="cb[]" value="KASHMIRI PULAO">KASHMIRI PULAO---115 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="VEG FRIED RICE">VEG FRIED RICE---140 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="VEG SCHEZWAN FRIED RICE">VEG SCHEZWAN FRIED RICE----160 <input type="number" name="cb[]" value=""><br> 
        <input type="checkbox" name="cb[]" value="JEERA RICE">JEERA RICE-----90 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="STEAMED RICE">STEAMED RICE-----60 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="MUSHROOM FRIED RICE">MUSHROOM FRIED RICE-----60 <input type="number" name="cb[]" value=""><br> 
             
       <h3>ROTI N NAAN</h3>
        <input type="checkbox" name="cb[]" value="TANDOORI ROTI">TANDOORI ROTI---20 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="BUTTER ROTI">BUTTER ROTI---15 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="PLAIN ROTI">PLAIN ROTI----10 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="PLAIN NAAN">PLAIN NAAN-----45 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="STUFFED NAAN">STUFFED NAAN-----60 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="MISSI ROTI">MISSI ROTI-----60 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="ONION KULCHA">ONION KULCHA-----60 <input type="number" name="cb[]" value=""><br>
        <input type="checkbox" name="cb[]" value="CHEEZE KULCHA">CHEEZE KULCHA-----70 <input type="number" name="cb[]" value=""><br>
    </div>
    </form>
       
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
