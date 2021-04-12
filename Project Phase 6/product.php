<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/stylep.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=Your API key&lang=en_US" type="text/javascript">
    </script>
     <title></title>
  </head>
  <body>
    <div class="container">
      <div class="heading">
        <nav class="menu">
            <ul>
              <li class="persik"><a href="#"><i class="fas fa-bars"></i></a>
                <ul >
                  <div class="all">
                    <div class="text1">
                      <li><a href="">New</a></li>
                      <li><a href="#">Smartphone</a></li>
                      <li><a href="#">Smartwatch</a></li>
                      <li><a href="#">Headphones</a></li>
                      <li><a href="#">Monitor</a></li>
                      <li><a href="#">Printer</a></li>



                    </div>
                    <div class="text2">
                      <li><a href="#">New</a></li>
                      <li><a href="#">Apple XS Max</a></li>
                      <li><a href="#">Apple watch series 5</a></li>
                      <li><a href="#">Macbook</a></li>



                    </div>
                    <div class="text3">
                      <li><a href="#">New</a></li>
                      <li><a href="#">Samsung Galaxy S10</a></li>
                      <li><a href="#">Samsung Galaxy S8</a></li>
                      <li><a href="#">Iphone 6s</a></li>
                      <li><a href="#">Airpods</a></li>
                      <li><a href="#">Lenovo ideapad 320S</a></li>



                    </div>

                    <div class="text3">
                      <li><a href="#">New</a></li>
                      <li><a href="#">Samsung Galaxy Note 5</a></li>
                      <li><a href="#">Samsung Galaxy A5</a></li>
                      <li><a href="#">Samsung Gear 3</a></li>
                      <li><a href="#">Apple watch serias 4</a></li>


                    </div>
                    <div class="text3">
                      <li><a href="#">New</a></li>
                      <li><a href="#">Meizu DS500</a></li>
                      <li><a href="#">Meizu AS700</a></li>
                      <li><a href="#">Airpods Pro</a></li>



                    </div>



                  </div>
                </ul>


              </li>
            </ul>

        </nav>
        <div class="catalog">
          Catalog



        </div>
        <img class="img" src="img/logo.jfif" width="20%"height="35%">
        <div class="wrap">
           <div class="search">
              <input type="text" class="searchTerm" placeholder="What are you looking for?">
              <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
             </button>
           </div>
      </div>
      <i class="far fa-user"></i>
      <i class="fas fa-shopping-basket"></i>
      <i class="far fa-heart"></i>

      </div>

    <div class="path">
      <nav>
        <a href="http://localhost/tasks/index.php">Menu</a>
         > 
        <a href="http://localhost/tasks/Catalog.php">Smartphone</a>
        >
        <a href="http://localhost/tasks/product.php">Smartphone GSM Apple iPhone XS Max 256GB THX-6.5-12-4 Gold</a>
    </nav>

</div>
<div class="product">
  <div class="iphone">
    <img src="img/prod1.jpg" width="500px" height="500px">
  </div>
  <div class="run">
    <h2>Smartphone Apple iPhone XS Max 256GB Gold</h2>
    <h1 class="pik">Price: 350000 Tg</h1>
    <div class="in">
      <div class="basket">
        <form method="post">
          <input type="submit" name="test" id="test" class="hof" value="ADD TO CART" /><br/>
        </form>
      </div>
<?php
if(array_key_exists('test', $_POST)) { 
            button1(); } 
function button1() { 
$conn = oci_connect('system', 'oracle', 'localhost/orcl');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$p1 = 12;
$p2 = 1;
$p3 = 3;

$stim = oci_parse($conn, 'begin add_cart(:p1,:p2,:p3); end;');
oci_bind_by_name($stim, ':p1', $p1);
oci_bind_by_name($stim, ':p2', $p2);
oci_bind_by_name($stim, ':p3', $p3);

oci_execute($stim);

oci_free_statement($stim);
oci_close($conn);
}

    ?>
      <div class="fovarite">
        <form method="post">
          <input type="submit" name="test" id="test" class="hof" value="DELETE" /><br/>
        </form>
      </div>
      
    </div>
    <div class="dec">
    <p class="desc1"><b>Description</b></p>
    <p class="desc">| All characteristics</p>
  </div>
  <p>Description:  <?php
$conn = oci_connect('system', 'oracle', 'localhost/ORCL');
    $stid = oci_parse($conn, 'SELECT description FROM product_description where product_id=2198');
    oci_execute($stid);
    $row = oci_fetch_array($stid);
    echo $row[0];
    oci_free_statement($stid);
oci_close($conn);
?></p>
  <p>Display diagonal: 6.5 inch</p>
  <p>Display resolution: 2688x1242</p>
  <p>Operating system: iOS 12</p>
  <p>Random-access memory: 4</p>
  <p>Built-in memory: 256</p>
  <p>The number of SIM-cards: 1</p>
  <p>Communication standard: 4G(LTE)</p>
  <p>Dust and moisture protection standard: IP68 </p>
</div>
</div>
<div class="zhay"></div>
<div class="puk">
  <div class="puk1">
    <h1>Main characteristic</h1>
    <p>Series..........................iPhone XS, iphone, iPhone XS Max</p>
<p>Model year...........................................2018</p>

<h1 class="prob">Processor</h1>
<p>Operating system...................................iOS 12</p>
<p>Processor model................................A12 Bionic
</p>
<p>Number of cores.........................................6</p>
<p>Processor manufacturer..............................Apple</p>


<h1 class="prob2">SIM card</h1>
<p>The number of SIM-cards.................................1</p>
<p>Size of SIM card.................................Nano-SIM</p>
</div>
  <div class="puk2">
    <h1>Display</h1>
<p>Number of pixels per inch (PPI)..................................458</p>
<p>Matrix type..............................Super Retina LCD</p>
<p>The display resolution..........................2688x1242</p>
<p>Display diagonal, inch................................6.5</p>

<h1 class="prob1">Memory</h1>
<p>The maximum amount of supported memory cards..................Not support</p>
<p>Amount of Random-Access memory..........................4</p>
<p>The amount of internal memory.........................256</p>


<h1 class="prob">Communication</h1>
<p>Connectors......................................Lightning</p>
<p>Interfaces..........................Wi-Fi, NFC, Bluetooth</p>
<p>Navigation..........................GLONASS, Galileo, GPS</p>
<p>Communication standard...........................4G (LTE)</p>



    
  </div>
</div>
</div>
<div class="zhay"></div>
<footer>
      <div class="end">
          <div class="end2">
            <h1>Remeber</h1>
            <p>Remember that we have weekly discounts on which you can profitably buy goods!!!</p>
            <h3>We're on social media</h3>
          <div class="soc">
          <a href=""><img src="https://i2.wp.com/1btctools.com/wp-content/uploads/2019/05/youtube-logo-1.png?fit=1836%2C1364&ssl=1" width="50px" ></a>
          <a href=""><img src="https://smajlik.ru/wp-content/uploads/2017/12/2.png" width="50px;"></a>
          <a href=""><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_new.svg/1024px-Instagram_new.svg.png" width="50px" ></a>
          <a href=""><img src="https://www.beyid.com.tr/wp-content/uploads/Facebook_icon.svg_.png?w=640"  width="50px"></a>
        </div>
          </div>
          <div class="end3">
            <h1>Online store</h1>
            <a href="">Stock</a>
            <a href="">News</a>
            <a href="">Newspaper</a>
            <a href="">Technoservice</a>
            <a href="">Gift card</a>
            <a href="">Equipmenton credit</a>
            <a href="">Low price guarantee</a>
          </div>
          <div class="end4">
            <h1>The Company "EXCALIBUR"</h1>
            <a href="http://localhost/tasks/information.php">About company</a>
            <a href="">Customer</a>
            <a href="">Career in excalibur</a>
            <a href="">Corporate sales</a>
            <a href="">Contacts</a>
            <a href="">Our shop</a>
            
          </div>
          <div class="end5">
            <h1>Buyer assistance</h1>
            <a href="">How to order</a>
            <a href="">Shipping</a>
            <a href="">Return and exchange terms</a>
            <a href="">Credit in the online store</a>
            <a href="">Suppliers</a>


          </div>

      </div>
      <div class="footer1">
        <div class="register">
          <h2 class="reg">Register for free</h2>

        </div>
        <div>
          <button type="button" name="button" class="red1">SIGN UP!</button>

        </div>


      </div>
      <div class="fabrik">
        <div class="year">
          <p class="cen">© 2018 Copyright:</p>
        </div>
        <div class="name">
          <p >EXCALIBUR</p>
        </div>

      </div>



  </footer>


  </body>
</html>
