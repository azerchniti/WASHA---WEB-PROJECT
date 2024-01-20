const form = document.getElementById('form');
const nameproduct = document.getElementById('nameproduct');
const price = document.getElementById('price');
const quantity = document.getElementById('quantity');

form.addEventListener('ajouter', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};



const validateInputs = () => {
    const nameproductValue = nameproduct.value.trim();
    const priceValue = price.value.trim();
    const quantityValue = quantity.value.trim();


    if (nameproductValue === '') {
        setError(nameproduct, 'Product name is required');
    } else {
        setSuccess(nameproduct);
    }

    if (priceValue === '') {
        setError(price, 'Price is required');
    } else if (priceValue < 0) {
        setError(price, 'Please enter a positive value');
    } else {
        setSuccess(price);
    }
    if (quantityValue === '') {
        setError(quantity, 'Please confirm your password');
    } else if (quantityValue < 0) {
        setError(quantity, "Please enter a positive value");
    } else {
        setSuccess(quantity);
    }
};