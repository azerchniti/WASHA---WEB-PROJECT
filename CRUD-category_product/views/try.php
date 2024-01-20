





    <?php
include '../controller/productp.php';
include '../model/product.php';
include '../model/category.php';
$categoryc = new categoryc();
$list = $categoryc->listcategory();
$productp=new productp();
if ((isset($_POST['producttype'])&& !empty($_POST['producttype']))&&(isset($_POST['discription'])&& !empty($_POST['discription']))&&(isset($_POST['img'])&& !empty($_POST['img']))){
    //if the user clicked on the save button
 //see if the information came from the form

$product=new product(NULL, $_POST['nameproduct'],$_POST['price'],$_POST['discription'],$_POST['producttype'],$_POST['quantity'],$_POST['img']);//new DateTime to covert date from string to date

$productp->add($product);
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
      <style>
        .fileinput-upload-button {
          display: none;
        }
      </style>
    <title>Car Wash</title>
    <style>

  @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');

body{
  background: url('http://all4desktop.com/data_images/original/4236532-background-images.jpg');
  font-family: 'Roboto Condensed', sans-serif;
  color: #262626;
  margin: 5% 0;
}
.container{
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 1200px)
{
  .container{
    max-width: 1140px;
  }
}
.d-flex{
  display: flex;
  flex-direction: row;
  background: #f6f6f6;
  border-radius: 0 0 5px 5px;
  padding: 25px;
}
form{
  flex: 4;
}
.Yorder{
  flex: 2;
}
.title{
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));
  background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: linear-gradient(to bottom right, #5195A8 0%, #70EAFF 100%);
  border-radius:5px 5px 0 0 ;
  padding: 20px;
  color: #f6f6f6;
}
h2{
  margin: 0;
  padding-left: 15px; 
}
.required{
  color: red;
}
label, table{
  display: block;
  margin: 15px;
}
label>span{
  float: left;
  width: 25%;
  margin-top: 12px;
  padding-right: 10px;
}
input[type="text"], input[type="tel"], input[type="email"], select
{
  width: 70%;
  height: 30px;
  padding: 5px 10px;
  margin-bottom: 10px;
  border: 1px solid #dadada;
  color: #888;
}
select{
  width: 72%;
  height: 45px;
  padding: 5px 10px;
  margin-bottom: 10px;
}
.Yorder{
  margin-top: 15px;
  height: 600px;
  padding: 20px;
  border: 1px solid #dadada;
}
table{
  margin: 0;
  padding: 0;
}
th{
  border-bottom: 1px solid #dadada;
  padding: 10px 0;
}
tr>td:nth-child(1){
  text-align: left;
  color: #2d2d2a;
}
tr>td:nth-child(2){
  text-align: right;
  color: #52ad9c;
}
td{
  border-bottom: 1px solid #dadada;
  padding: 25px 25px 25px 0;
}

p{
  display: block;
  color: #888;
  margin: 0;
  padding-left: 25px;
}
.Yorder>div{
  padding: 15px 0; 
}

button{
  width: 100%;
  margin-top: 10px;
  padding: 10px;
  border: none;
  border-radius: 30px;
  background: #52ad9c;
  color: #fff;
  font-size: 15px;
  font-weight: bold;
}
button:hover{
  cursor: pointer;
  background: #428a7d;
}

</style>
 <style>
 
:root{
    --succes-color: #2ecc71;;
    --error-color: #e74c3c;
}


*{
    box-sizing: border-box;
}





.form-control{
    margin-bottom: 10px;
    padding-bottom: 20px;
    position: relative;
}

 

.form-control input:focus{
    outline: 0;
    border-color: #777;

}

.form-control.success input {
    border-color: var(--succes-color);
}

.form-control.error input {
    border-color: var(--error-color);    
}

.form-control small{
    color: var(--error-color);
    position: absolute;
    bottom: 0;
    left: 0;
    visibility: hidden;
}

.form-control.error small{
    visibility: visible;
}

</style> 
<!-- style drag and drop begin -->

    </style>
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
<!--   <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
 --> <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/css/fileinput.min.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>


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
    <br>
<br>
<div class="container text-center">
    
    










<!-- style drag and drop end -->


<div class="container">
  <div class="title">
      <h2>Product Order Form</h2>
  </div>
<div class="d-flex">
  <form  action="" method="POST" >
  <div class='parent'>
    <label>
      <span class="fname">Product name <span class="required">*</span></span>
      <td><input type="text" name="nameproduct" id="nameproduct" maxlength="20" placeholder="Enter the name of the product" style="width: 40%;height: 40px;"></td>
      
    </label>
    <label>
      <span class="lname">Price <span class="required">*</span></span>
      <td><input type="number"  step="0.1" name="price" id="price"  maxlength="20" placeholder="Enter the price of the product" style="width: 40%;height: 40px;"></td>
     
    </label>
    <label>
      <span>Description of the product </span>
      <textarea type="text" name="discription" id="discription"  cols="40%" rows="5" placeholder="Enter the description of the product"> </textarea>
      
    </label>
    <label>
      <span>Product type <span class="required">*</span></span>
      <select name="producttype" id="producttype" style="width: 40%;height: 40px;" >
                    <?php 
                    foreach($list as $c) {
                        ?>
                    <option value ="<?= $c['producttype']; ?>"> <?= $c['namecategory']; ?>  </option>
                    <?php 
                    }
    ?>
</select>

    </label>
    <label>
      <span>Quantity <span class="required">*</span></span>
      <input type="number" min="0" name="quantity" id="quantity" placeholder="Enter the quantity of the product" style="width: 40%;height: 40px;">
    </label>

                      </div>

  <!--begin-->
	

 

<div class="container">
  <div class="text-center">

    
      <!-- This file input will automatically converted into "Bootstrap File Input" -->
      <!-- Iconic preview for thumbs and detailed preview for zoom -->
      <div class="file-loading">
        <input  id="input-ficons-5" type="file" accept="image" name="img" multiple >
      </div>

  </div>
</div>
<!-- end-->	
      <br><br>
  <input class="btn btn-success" type="submit" value="Add the product">
                        <input class="btn btn-danger" type="reset" value="Reset">


  </div>
</form>
<!-- <script>
      const form = document.getElementById('form');
const nameproduct = document.getElementById('nameproduct');
const price = document.getElementById('price');
const producttype = document.getElementById('producttype');
const  quantity = document.getElementById('quantity');

//Show input error messages
function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}

//show success colour
function showSucces(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

//checkRequired fields
function checkRequired(inputArr) {
    inputArr.forEach(function(input){
        if(input.value.trim() === ''){
            showError(input,`${getFieldName(input)} is required`)
        }else {
            showSucces(input);
        }
    });
}


//check input Length
function checkLength(input, min ,max) {
    if(input.value.length < min) {
        showError(input, `${getFieldName(input)} must be at least ${min} characters`);
    }else if(input.value.length > max) {
        showError(input, `${getFieldName(input)} must be less than ${max} characters`);
    }else {
        showSucces(input);
    }
}
//check input Length
function checksign(input) {
    if(input.value < 0) {
        showError(input, `${getFieldName(input)} must be at least 0 `);
    }else {
        showSucces(input);
    }
}

//get FieldName
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}



//Event Listeners
form.addEventListener('submit',function(e) {
    e.preventDefault();

    checkRequired([nameproduct, price, producttype, quantity]);
    checkLength(nameproduct,3,100);
    checksign(price);
    checksign(quantity);
   });
    </script>


 -->







<!--end-->
 </div>
</div>

<!--script drag and drop begin -->



<!-- partial:index.partial.html -->

<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.2.1.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/piexif.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/sortable.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/purify.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/fileinput.js'></script>
<script>
$("#input-ficons-5").fileinput({
  uploadUrl: "",
  uploadAsync: false,
  previewFileIcon: '<i class="fa fa-file"></i>',

  previewFileExtSettings: {
    // configure the logic for determining icon file extensions
    mov: function(ext) {
      return ext.match(/(avi|mpg|mkv|mov|mp4|3gp|webm|wmv)$/i);
    },
    mp3: function(ext) {
      return ext.match(/(mp3|wav)$/i);
    },
    img: function(ext) {
      return ext.match(/(jpg|gif|png|svg)$/i)
    },
    model: function(ext) {
      return ext.match(/(obj|fbx)$/i)
    }
  }
});
</script>


<!-- script drag and drop end-->


       

    <a class="btn btn-primary mt-2" href="listproduct.php">Back to list</a>
    <br>
<br>
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