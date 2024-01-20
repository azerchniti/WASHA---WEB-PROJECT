<style>

.error input {
    border:3px red solid;
}

.success input {
    border:3px green solid;
}

 .input-group p {
     font-size: 15px;
     color:red;
     visibility: hidden;
 }

 .error p {
     visibility: visible;
 }

</style>
<!DOCTYPE html>
<html lang="en">
<head>,
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM VALIDATION</title>
</head>
<body>
    <form  id="create-account-form" action="result.html" method="GET">
        
        <div class="title">
            <h2>Create Account</h2>
        </div>
        <!-- USERNAME -->
        <div class="input-group">
            <label for="username">Name</label>
            <input type="text" id="username" placeholder="Name" name="username">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>
        <!-- EMAIL -->
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email" name="email">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>
        <!-- PASSWORD -->
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password" name="password">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>
        <!-- CONFIRM PASSWORD -->
        <div class="input-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" placeholder="Password" name="confirmpassword">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>

        <button type="submit" class="btn">Submit</button>
    </form>


    <!-- JAVASCRIPT -->
</body>
</html>

<!-- 

    <i class="fas fa-check-circle"></i>
    <i class="fas fa-exclamation-circle"></i>

 -->
 <script>
    const form = document.querySelector('#form');
const nameproduct = document.querySelector('#nameproduct');
const price = document.querySelector('#price');
const quantity = document.querySelector('#quantity');

form.addEventListener('submit', (event)=>{
    
    validateForm();
    console.log(isFormValid());
    if(isFormValid()==true){
        form.submit();
     }else {
         event.preventDefault();
     }

});

function isFormValid(){
    const inputContainers = form.querySelectorAll('.input-group');
    let result = true;
    inputContainers.forEach((container)=>{
        if(container.classList.contains('error')){
            result = false;
        }
    });
    return result;
}

function validateForm() {
    //product name
    if(nameproduct.value.trim()==''){
        setError(nameproduct, 'Product name can not be empty');
    }else {
        setSuccess(nameproduct);
    }
    //price
    if(price.value.trim()==''){
        setError(price, 'Price cannot be empty');
    }else     if(price.value<0){
        setError(price, 'Price cannot be negative');
    }else
    {setSuccess(price); }
    

    //CONFIRM PASSWORD
    if(quantity.value.trim()==''){
        setError(quantity, 'Quantity cannot be empty');
    }else     if(quantity.value<0){
        setError(quantity, 'Quantity cannot be negative');
    }else
    {setSuccess(price); }
}

function setError(element, errorMessage) {
    const parent = element.parentElement;
    if(parent.classList.contains('success')){
        parent.classList.remove('success');
    }
    parent.classList.add('error');
    const paragraph = parent.querySelector('p');
    paragraph.textContent = errorMessage;
}

function setSuccess(element){
    const parent = element.parentElement;
    if(parent.classList.contains('error')){
        parent.classList.remove('error');
    }
    parent.classList.add('success');
}

 </script>