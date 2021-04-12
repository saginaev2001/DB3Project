<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/stylec.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=Your API key&lang=en_US" type="text/javascript">
    </script>
     <title></title>
  </head>
  <body>
    <?php 
          $conn = oci_connect("system", "oracle", "localhost/orcl");
?>
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
      <a class="fas fa-shopping-basket" id="checkout" href="http://localhost/tasks/sql/allBasketData.php"></a>
      <i class="far fa-heart"></i>

      </div>
    <div class="path">
      <nav>
        <a href="http://localhost/tasks/index.php">Menu</a>
         > 
        <a href="http://localhost/tasks/Catalog.php">Smartphone</a>
    </nav>

    </div>
    <div class="red">
      <h3>Price</h3>
      <input type="text" id = "from" class="price" placeholder="0">
      -
      <input type="text" id = "to" class="price" placeholder="999999">
      <button class="enter" id = "search" onclick="search()">Enter</button>

    </div>

    <div class="set">
      <div class="set1">
        <div class="page">
          <a href="http://localhost/tasks/product.php"><img src="img/apple1.jpg"></a>
          <p class="item_title">Apple Iphone <?php
    $stid = oci_parse($conn, 'SELECT product_name, price FROM products where product_id=1717');
    oci_execute($stid);
    $row = oci_fetch_array($stid);
    echo $row[0]
?> Max</p>
          <p >256GB Gold</p>
          <h2 class="item_price"><?php  echo $row[1]?> Tg</h2>
          <a class="add_item" data-id="10" ><img width="30px" class="icon" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon1" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
          
        </div>
        <div class="page">
          <a href="#"><img width="30px" class="icon2" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon3" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
          <img src="img/apple2.jpg">
          <p class="item_title">Apple Iphone <?php
    $stid = oci_parse($conn, 'SELECT product_name, price FROM products where product_id=1718');
    oci_execute($stid);
    $row = oci_fetch_array($stid);
    echo $row[0]
?> Max</p>
          <p>256GB Gold</p>
          <h2 class="item_price"><?php  echo $row[1]?> Tg</h2>
        </div>
        <div class="page">
          <img src="img/apple3.jpg">
          <p class="item_title">Apple Iphone <?php
    $stid = oci_parse($conn, 'SELECT product_name, price FROM products where product_id=1719');
    oci_execute($stid);
    $row = oci_fetch_array($stid);
    echo $row[0]
?> Max</p>
          <p>256GB Gold</p>
          <h2 class="item_price"><?php  echo $row[1]?> Tg</h2>
          <a href="http://localhost/tasks/sql/insertToBasket.php"><img width="30px" class="icon4" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon5" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
        </div>
      </div>
      <div class="set2">
        <div class="page">
          <img src="img/apple5.jpg">
          <p class="item_title">Apple Iphone <?php
    $stid = oci_parse($conn, 'SELECT product_name, price FROM products where product_id=1719');
    oci_execute($stid);
    $row = oci_fetch_array($stid);
    echo $row[0]
?></p>
          <p>256GB Gold</p>
          <h2 class="item_price"><?php  echo $row[1]?> Tg</h2>
          <a href="#"><img width="30px" class="icon6" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon7" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
        </div>
      
        <div class="page">
          <img src="img/apple6.jpg">
          <p class="item_title">Apple Iphone <?php
    $stid = oci_parse($conn, 'SELECT product_name, price FROM products where product_id=1720');
    oci_execute($stid);
    $row = oci_fetch_array($stid);
    echo $row[0]
?></p>
          <p>256GB Gold</p>
          <h2 class="item_price"><?php  echo $row[1]?> Tg</h2>
          <a href="#"><img width="30px" class="icon8" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon9" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
        </div>
        <div class="page">
          <img src="img/apple7.jpg">

          <p class="item_title">Apple Iphone 
            <?php
    $stid = oci_parse($conn, 'SELECT product_name, price FROM products where product_id=1721');
    oci_execute($stid);
    $row = oci_fetch_array($stid);
    echo $row[0]
?>
          </p>
          <p>256GB Gold</p>
          <h2 class="item_price"><?php  echo $row[1]?> Tg</h2>
          <a href="#"><img width="30px" class="icon10" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon11" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
        </div>
        
      </div>
      <div class="set3">
        <div class="page">
          <img src="img/apple9.jpg">
          <p class="item_title">Samsung Galaxy <?php
    $stid = oci_parse($conn, 'SELECT product_name, price FROM products where product_id=1722');
    oci_execute($stid);
    $row = oci_fetch_array($stid);
    echo $row[0]
?></p>
          <p>256GB Gold</p>
          <h2 class="item_price"><?php  echo $row[1]?> Tg</h2>
          <a href="#"><img width="30px" class="icon12" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon13" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
        </div>
        <div class="page">
          <img src="img/apple10.jpg">
          <p class="item_title">Samsung Galaxy <?php
    $stid = oci_parse($conn, 'SELECT product_name, price FROM products where product_id=1723');
    oci_execute($stid);
    $row = oci_fetch_array($stid);
    echo $row[0]
?></p>
          <p>256GB Gold</p>
          <h2 class="item_price"><?php  echo $row[1]?> Tg</h2>
          <a href="#"><img width="30px" class="icon14" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon15" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
          
        </div>
        <div class="page">
          <img src="img/apple11.jpg">
          <p class="item_title">Smartphone <?php
    $stid = oci_parse($conn, 'SELECT product_name, price FROM products where product_id=1724');
    oci_execute($stid);
    $row = oci_fetch_array($stid);
    echo $row[0]
?></p>
          <p>256GB Gold</p>
          <h2 class="item_price"><?php  echo $row[1]?> Tg</h2>
          <a href="#"><img width="30px" class="icon16" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon17" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
          
        </div>
        
      </div>
      <div class="set4">
        <div class="page">
          <img src="img/apple13.jpg">
          <p class="item_title">Smartphone Apple Iphone XS Max</p>
          <p>256GB Gold</p>
          <h2 class="item_price">410990 Tg</h2>
          <a href="#"><img width="30px" class="icon18" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon19" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
          
        </div>
        <div class="page">
          <img src="img/apple14.jpg">
          <p class="item_title">Smartphone Apple Iphone XS Max</p>
          <p>256GB Gold</p>
          <h2 class="item_price">210990 Tg</h2>
          <a href="#"><img width="30px" class="icon20" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon21" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
          
        </div>
        <div class="page">
          <img src="img/apple15.jpg">
          <p class="item_title">Smartphone Apple Iphone XS Max</p>
          <p>256GB Gold</p>
          <h2 class="item_price">450990 Tg</h2>
          <a href="#"><img width="30px" class="icon22" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon23" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
        </div>  
          
        
      </div>
      <div class="set5">
        <div class="page">
          <img src="img/apple4.jpg">
          <p class="item_title">Smartphone Apple Iphone XS Max</p>
          <p>256GB Gold</p>
          <h2 class="item_price">4409900 Tg</h2>
          <a class="add_item" data-id="2"><img width="30px" class="icon24" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon25" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
          
        </div>
        <div class="page">
          <img src="img/apple12.jpg">
          <p class="item_title">Smartphone Apple Iphone XS Max</p>
          <p>256GB Gold</p>
          <h2 class="item_price">550990 Tg</h2>
          <a class="add_item" data-id="3"><img width="30px" class="icon26" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a ><img width="30px" class="icon27" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
          
          
        </div>
        <div class="page">
          <img src="img/apple8.jpg">
          <p class="item_title">Smartphone Apple Iphone XS Max</p>
          <p>256GB Gold</p>
          <h2 class="item_price">870990 Tg</h2>
          <a class="add_item" data-id="7"><img width="30px" class="icon28" src="https://image.flaticon.com/icons/png/512/2/2772.png"/></a>
          <a href="#"><img width="30px" class="icon29" src="http://cdn.onlinewebfonts.com/svg/img_487588.png"/></a>
          
          
        </div>
      </div>  


    </div>

</div>
</body>



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

  
  <?php
oci_free_statement($stid);
oci_close($conn);
?>
  
</html>
