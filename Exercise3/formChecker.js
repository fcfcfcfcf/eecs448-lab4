function validateForm(){
    let oneDollarQuantity = document.getElementById('1usd');
    let fiveDollarQuantity = document.getElementById('5usd');
    let tenDollarQuantity = document.getElementById('10usd');
    let shippingCost = document.getElementsByName('shipping');

    let username = document.getElementById('username');
    let password = document.getElementById('password');
    let errorMsg = document.getElementById('ErrorMsg');
    console.log("running js");

    if (isNaN(oneDollarQuantity.value) || isNaN(fiveDollarQuantity.value) || isNaN(tenDollarQuantity.value)){
      errorMsg.innerHTML = "Please enter integer quantities!";
      return false;
    }
    else if(oneDollarQuantity.value == "" || fiveDollarQuantity.value == "" || tenDollarQuantity.value == ""){
      errorMsg.innerHTML = "Please enter valid quantities";
      return false;
    }
    else if(oneDollarQuantity.value < 0 || fiveDollarQuantity.value <0 || tenDollarQuantity.value < 0){
      errorMsg.innerHTML = "Please enter non-negative quantities!";
      return false;
    }
    else if(shippingCost.value === null){
      errorMsg.innerHTML = "Please choose a shipping option!";
      return false;
    }
    else if((username.value || password.value) === ""){
      errorMsg.innerHTML = "Please enter user details!";
      return false;
    }
    else if(!validateEmail(username.value)){
      errorMsg.innerHTML = "Please enter a valid email!";
      return false;
    }
    else{
      return true;
    }
}



function validateEmail(inputText){
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(inputText.match(mailformat)){
      return true;
    }
    else{
      return false;
    }
}
