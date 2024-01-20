<?php 
include '../Controller/productp.php';
$categoryc = new categoryc();
$list = $categoryc->listcategory();
?> 
 <!-- CSS only -->
 <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous" />
    <title>Car Wash</title>
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
              href="../products and services/productsAndServices.html"
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
    <!-- Navbar : End -->
    <div class="container text-center">
<h1 class="pt-4">List of categories </h1>
<table class="table"> 
    <tr> 
    <th>   product type </th> 
    <th>   category name </th> 
        <th> description </th>
        <th> Update </th>
        <th> Delete </th> 
</tr>

<?php 
foreach($list as $c) {
    ?>
    <tr> 
    <td> <?= $c['producttype']; ?> </td>
    <td> <?= $c['namecategory']; ?> </td>
        <td> <?= $c['discription']; ?> </td> 
        <td>
        <form method="POST" action="updatecategory.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $c['producttype']; ?> name="producttype">
                    </form>
                    </td>
        <td> <a href="delete_category.php?id=<?= $c['producttype']; ?>">Delete</a> </td>

</tr> 
<?php 
} ?>

</table>
<center> <a class="btn btn-primary mt-4" href="addcategory.php">Add category </a> </center>
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