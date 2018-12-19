
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Food Network</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
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
       
       <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="https://www.fuersie.de/sites/fuersie/files/styles/590x443/public/images/rezept-fuer-amerikanischen-caesar-salad.png" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="http://www.menslife.com/upload/iblock/e9d/italyanskaya_pasta_za_30_minut_samye_prostye_i_vkusnye_retsepty.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="https://www.fuersie.de/sites/fuersie/files/styles/590x443/public/images/rezept-fuer-amerikanischen-caesar-salad.png" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<div>
<h2>FOOD NETWORK is a unique lifestyle network, website and magazine that connects viewers to the power and joy of food. The network strives to be viewers' best friend in food and is committed to leading by teaching, inspiring, empowering and entertaining through its talent and expertise.FOOD NETWORK is a unique lifestyle network, website and magazine that connects viewers to the power and joy of food. The network strives to be viewers' best friend in food and is committed to leading by teaching, inspiring, empowering and entertaining through its talent and expertise. FOOD NETWORK is a unique lifestyle network, website and magazine that connects viewers to the power and joy of food. The network strives to be viewers' best friend in food and is committed to leading by teaching, inspiring, empowering and entertaining through its talent and expertise.  <h2>

        </div>

   </div>
    <div id="site_footer">
        
          <a href="#">Home</a> | <a href="#">Contact Us</a><br />
           
    </div>
    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
    </body>
    </html>