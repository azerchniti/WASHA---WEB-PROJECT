<?php
include '../Controller/productp.php';
$productp = new productp();
$categoryc1 = new categoryc();
$list1 = $categoryc1->listcategory();
if (isset($_GET['nameproduct']) && !empty($_GET['nameproduct'])) {
    $list = $productp->listproduct_search($_GET['nameproduct']);
    $name=$_GET['nameproduct'];
    $searchfound=1;
} else {
  $name='';
    $list = $productp->listproduct();
    $searchfound=0;
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- CSS only -->
 <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous" />
    <title>Car Wash</title>
   

    <style>

.card 
{
  transition: .4s all ease-in;
  border: none;
  
}

.carousel-control-next-icon 
{
  padding: 0 4px 0 0; 
}
.product_price 
{
  float:right;
  font-family: lato;
	color:#6b7270;
	font-size: 20px;
	font-weight:400;
}


.product-detail {
  position: absolute;
  height: 75px;
  left: 15px;
  right: 15px;
  bottom: 15px;
  overflow: hidden;
  padding: 15px;
  background-color: rgba(223, 217, 217, 0.75);
  transition: all 0.35s;
  text-align: center;
box-sizing: border-box;
}
.card .product-detail h5
{
  font-family: 'Oswald';
  text-transform: uppercase;
  font-size: 20px;
  font-weight: 400;
  line-height: 24px;
  margin: 3px 0;
 
}

.card .product-detail .subheading {
  font-weight: 400;
  margin: 0;
  text-transform: uppercase;
  letter-spacing: 1px;
  text-align: center;
  color: rgba(0,0,0,0.6);
}

.card .product-detail blockquote 
{
  padding: 0;
  margin: 0;
  font-style: italic;
  font-size: 1em;
  
}
.card:hover .product-detail {
  height: calc(92%);
  padding-top: 100px;
}








/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

.form-control:focus {
  box-shadow: none;
}

.form-control-underlined {
  border-width: 0;
  border-bottom-width: 1px;
  border-radius: 0;
  padding-left: 0;
}

/*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/



.form-control::placeholder {
  font-size: 0.95rem;
  color: #aaa;
  font-style: italic;
}




.dropdown:hover>.dropdown-menu {

  position: relative;
  display: block;

}

.dropdown>.dropdown-toggle:active {
  /*Without this, clicking will make it sticky*/
    pointer-events: none;
}

div.c {
  text-align: right;
} 
</style>

  </head>
  <body>
    <!-- Navbar : Start-->
    <div class="bg-light">
      <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 pt-4 mx-5">
        <a
          href="/"
          class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <img
            class="bi pe-2"
            width="158"
            height="45"
            role="img"
            aria-label="Bootstrap"
            src="logo.png"
            alt="Car wash" />
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li>
            <a href="home.html" class="nav-link px-2 link-dark">Home</a>
          </li>
          <li>
            <a
              href="show_product.php"
              class="nav-link px-2 link-dark"
              >Products and Services</a
            >
          </li>
          <li>
            <a
              href="../authentication/washer/signUpWasher.html"
              class="nav-link px-2 link-dark"
              >Become a washer</a
            >
          </li>
          <li>
            <a
              href="../enviroment/enviroment.html"
              class="nav-link px-2 link-dark"
              >Enviroment</a
            >
          </li>
          <li><a href="/login" class="nav-link px-2 link-dark">Log in</a></li>
          <li>
            <a href="/register" class="nav-link px-2 link-dark">Register</a>
          </li>
        </ul>

        
      </header>
    </div>

 
    <div class="container text-center">
<h1 class="pt-4">Our products </h1>


<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

 <!--[Start] Search input -->
 <div class="container">
  <!-- For demo purpose -->
  <!-- End -->


   <div class="row mb-5">
    <div class="col-lg-8 mx-auto">


        <!-- Custom rounded search bars with input group -->
        <form action="" method="GET">
          <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
            <div class="input-group">
              <input  type="text" name="nameproduct" id="nameproduct" placeholder="search" value="<?php echo $name; ?>" aria-describedby="button-addon1" class="form-control border-0 bg-light">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </form>
        <!-- End -->
    </div>
  </div> 
    <!--[End] Search input -->






<div class="container">
<div class="dropdown" style="float:right;">

  <button  class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    FILTER BY
  </button>


  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton ">
    <a  class="dropdown-item"  href="show_product.php">LATEST</a>
    <a class="dropdown-item"  href="show_product_ascname.php">ASCENEDENT NAME</a>
    <a class="dropdown-item"  href="show_product_descname.php">DESCENEDENT NAME</a>
    <a class="dropdown-item"  href="show_product_ascprice.php">ASCENEDENT PRICE</a>
    <a class="dropdown-item"  href="show_product_descprice.php">DESCENEDENT PRICE</a>
  </div>
  
</div>
</div>





<!--<div class="dropdown">FILTER BY
        <ul class="dropdown-menu">
          <li><a href="show_product.php">LATEST</a></li>
          <li><a href="how_product_ascname.php">ASCENEDENT NAME</a></li>
          <li><a href="show_product_descname.php">DESCENEDENT NAME</a></li>
          <li><a href="show_product_ascprice.php">ASCENEDENT PRICE</a></li>
          <li><a href="show_product_descprice.php">DESCENEDENT PRICE</a></li>
        </ul>
      </div>
-->


 <!--ORDER BY <select name="order" onchange="location = this.value;"> 
<option value="show_product.php" SELECTED>LATEST</option> 
 <option value="show_product_ascname.php">ASCENEDENT NAME</option> 
 <option value="show_product_descname.php">DESCENEDENT NAME</option> 
 <option value="show_product_ascprice.php">ASCENEDENT PRICE</option> 
 <option value="show_product_descprice.php">DESCENEDENT PRICE</option> 
</select> 
-->
<br><br><br><br><br>
<div class="container">
<div class="dropdown" style="float:left;">

  <button  class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Category 
  </button>

  <?php 
                    foreach($list1 as $c) {  ?>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
    <a  class="dropdown-item"  href="category_order.php?producttype=<?= $c['producttype']; ?>" ><?= $c['namecategory'];  ?></a>

  </div>
  <?php 
                    }
    ?>
</div>
</div>
    <br><br>  











<?php

    $perPage = 6;
    $db  = config ::getConnexion();
    // Calculate Total pages
    $stmt = $db->query('SELECT count(*) FROM product');
    $total_results = $stmt->fetchColumn();
    $total_pages = ceil($total_results / $perPage);
  
    // Current page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $test=$page;
    $starting_limit = ($page - 1) * $perPage;

    // Query to fetch product
    $query = "SELECT * FROM product  WHERE nameproduct LIKE '%" . $name . "%' ORDER BY price ASC LIMIT $starting_limit,$perPage ";
    
    // Fetch all product for current page
    $product = $db->query($query)->fetchAll();

    if($product==NULL)
    echo 'nothing to display' ;
    else{
$nb=null;
?>

<div class="row">

<?php foreach ($product as $key => $user): $nb=$nb+1;?>


        <div class="col-md-4">
          <br><br>
          
            <div class="card mb-3" style="width:20rem;">
                <img class="card-img-top" src=<?= $user['img']; ?> height="380" alt="Card image cap">
                <div class="product-detail">
                    <h5 class="card-title heading text-center"> <?= $user['nameproduct']; ?> </h5>
                    <span class="subheading"><?= $user['price']; ?></span>
                    <blockquote>
                   <p><?= $user['discription']; ?></p>
                    </blockquote>
                    <button type="button" class="btn btn-outline-dark">ORDER NOW</button>  
                   </div>
            </div>
            </div>
            <?php endforeach;?>
 </div>



<div class="container"> <ul class="pagination">
  <?php if($page==1){ ?>
<li class="page-item disabled"><a class="page-link"  <?php $page--;?> href="<?php echo "?page=$page"; ?>">Previous</a></li>
<?php } 
else { ?>
<li class="page-item" ><a class="page-link"  <?php $page--;?> href="<?php echo "?page=$page"; ?>">Previous</a></li>
<?php }?> 
 <?php 
 if(($nb==6)||(($nb!=6)&&($searchfound==0))){
 for ($page = 1; $page <= $total_pages ; $page++):?>
       <li class="page-item"> <a href='<?php echo "?page=$page"; ?>' class="page-link"> <?php  echo $page; ?></a></li>
    <?php endfor; 
    } 
    ?>
  <?php if($test==$total_pages){ ?>
<li class="page-item disabled"><a class="page-link"  <?php $test++;?> href="<?php echo "?page=$test"; ?>">Next</a></li>
<?php } 
else { ?>
<li class="page-item" ><a class="page-link"  <?php $test++;?> href="<?php echo "?page=$test"; ?>">Next</a></li>
<?php }?>   </ul> </div> 
    <?php } ?>
<center> <a class="btn btn-primary mt-4" href="addproduct.php">Add product </a> </center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- Footer : Start -->
<div class="container">
      <footer class="py-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h5>WASHA</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Home</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Pricing</a>
              </li>
              <li class="nav-item mb-2">
                <a
                  href="../authentication/washer/signUpWasher.html"
                  class="nav-link p-0 text-muted"
                  >Become a washer</a
                >
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Ennviroment</a>
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>Legal</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Privacy</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted"
                  >Terms & conditions</a
                >
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>Help</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Contact us</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">support@washa.tn</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">+216 29241717</a>
              </li>
            </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden"
                  >Email address</label
                >
                <input
                  id="newsletter1"
                  type="text"
                  class="form-control"
                  placeholder="Email address" />
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>

        <div
          class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>© 2022 Washa, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3">
              <a class="link-dark" href="#">
                <svg class="bi" width="24" height="24">
                  <use xlink:href="#twitter"></use>
                </svg>
              </a>
            </li>
            <li class="ms-3">
              <a class="link-dark" href="#">
                <svg class="bi" width="24" height="24">
                  <use xlink:href="#instagram"></use>
                </svg>
              </a>
            </li>
            <li class="ms-3">
              <a class="link-dark" href="#">
                <svg class="bi" width="24" height="24">
                  <use xlink:href="#facebook"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </footer>
    </div>
    <!-- Footer : End -->