<?php
include '../controller/productp.php';
include '../model/product.php';
include '../model/category.php';
$error = "";
$categoryc = new categoryc();
$list = $categoryc->listcategory();
// create product
$product = null;

// create an instance of the controller
$productp = new productp();
if (    isset($_POST["idproduct"]) &&
    isset($_POST["nameproduct"]) &&
    isset($_POST["price"]) &&
    isset($_POST["discription"]) &&
    isset($_POST["producttype"]) &&
    isset($_POST["quantity"]) &&
    isset($_POST["img"]) 
) {
   if (        !empty($_POST["idproduct"]) &&
        !empty($_POST["nameproduct"]) &&
        !empty($_POST["price"]) &&
        !empty($_POST["discription"]) &&
        !empty($_POST["producttype"])&&
        !empty($_POST["quantity"]) &&
        !empty($_POST["img"])
    ) {
        $product = new product(
            $_POST["idproduct"],
            $_POST["nameproduct"],
            $_POST["price"],
            $_POST["discription"],
            $_POST["producttype"],
            $_POST["quantity"],
            $_POST["img"]

        );
        $productp->updateproduct($product, $_POST["idproduct"]);
        header('Location:listproduct.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
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
    <!-- Navbar : End -->
    <div class="container text-center">
    
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idproduct'])) {
        $product = $productp->showDetails_product($_POST['idproduct']);

    ?>

        <form action="" method="POST">
            <table class="table" align="center">
                <tr>
                    <td>
                        <label for="idproduct">Id product:
                        </label>
                    </td>
                    <td><input type="text" min="0" name="idproduct" id="idproduct" value="<?php echo $product['idproduct']; ?>" maxlength="20" readonly></td>
                </tr>
                <tr>
                    <td>
                        <label for="nameproduct">product name:
                        </label>
                    </td>
                    <td><input type="text" name="nameproduct" id="nameproduct" value="<?php echo $product['nameproduct']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="price">price:
                        </label>
                    </td>
                    <td><input type="number" min="0" step="0.1" name="price" id="price" value="<?php echo $product['price']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="discription">description:
                        </label>
                    </td>
                    <td>
                    <input type="text" name="discription" id="discription"  value="<?php echo $product['discription']; ?>"> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="producttype">product type:
                        </label>
                    </td>
                    <td>

                    <select name="producttype" id="producttype" >
                    <?php 
                    foreach($list as $c) {
                        ?>
                    <option value ="<?= $c['producttype']; ?>"> <?= $c['namecategory']; ?>  </option>
                    <?php 
                    }
    ?>
</select>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="quantity">quantity:
                        </label>
                    </td>
                    <td>
                        <input type="number" min="0" name="quantity" id="quantity" value="<?php echo $product['quantity']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="img">image:
                        </label>
                    </td>
                    <td>
                        <input type="file" accept="image" name="img" id="img" placeholder="enter the text" value="enter the text">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-success" type="submit" value="Update">
                    </td>
                    <td>
                        <input class="btn btn-danger" type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
    <a class="btn btn-primary mt-2" href="listproduct.php">Back to list</a>
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
</body>

</html>