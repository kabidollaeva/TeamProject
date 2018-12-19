<?php
session_start();
require_once("index11.php");
$db_handle = new DBController();
?>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Food Network</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="script2.js" defer></script>

    </head>
    <body>
    
    <div id="site_container">
      <div id="site_header">
          <div id="site_title"></div>
        </div> <!-- end of header -->
        
        <div id="site_menu">
            <ul>
              <li class="current"><a href="index.php"><b>Home</b></a></li>
                <li><a href="index2.php"><b>Food Menus</b></a></li>
                <li ><a href="index1.php"><b>Contact us</b></a></li>
            </ul>
        </div> <!-- end of menu -->
   <div class ="main">
        <div class="categories">    
            <ul >
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
            </ul>
        </div> 

        <div class="types">
        <div class ="t">
        <?php
        $types = $_REQUEST["types"];
        $name = $_REQUEST["name"];
        $product_array = $db_handle->runQuery("SELECT * FROM product WHERE types = '$types' ");

        if (!empty($product_array)) { 
            foreach($product_array as $key=>$value){
        ?>
          <div  class= "ttt"><img src="<?php echo $product_array[$key]["image1"]; ?>" height ="150px" width="200px"/><a href="index3.php" ><?php echo $product_array[$key]["name"]; ?></a></div>
          <?php
        }
    }
    ?>
</div>
        </div>
   </div>

    <div id="site_footer">
        
          <a href="#">Home</a> | <a href="#">Contact Us</a><br />
           
    </div>
    </body>
    </html>