function showPassword(){
    var password = document.getElementById("password");
    if(password.type === "password"){
        password.type = "text";
    }
    else{
        password.type = "password";
    }
}

function icon1(){
    var password1 = document.getElementById("password1");
    var icon = document.getElementById("icon1");
    if(password1.type === "password"){
        password1.type = "text";
        icon.className = "bi bi-eye-fill"
        icon.style = "float: right; font-size: 20px; margin-right: 40px; margin-top: -50px; cursor: pointer; position: relative";
    }
    else{
        password1.type = "password";
        icon.className = "bi bi-eye-slash-fill"

    }
}
    
    


function icon2(){
    var password2 = document.getElementById("password2");
    var icon = document.getElementById("icon2");
    if(password2.type === "password"){
        password2.type = "text";
        icon.className = "bi bi-eye-fill"
        icon.style = "float: right; font-size: 20px; margin-right: 40px; margin-top: -50px; cursor: pointer; position: relative";
    }
    else{
        password2.type = "password";
        icon.className = "bi bi-eye-slash-fill"
    }
}

function check(){
    var pass1 = document.getElementById("password1").value;
    var pass2 = document.getElementById("password2").value;

    if(pass1 == pass2){
        document.getElementById("password_match").innerHTML = "Password Match";
    }
    else{
        document.getElementById("password_match").innerHTML = "Password does not match";
    }
}


// function strength(){
//     var password = document.getElementById("password1").value;

//     if(password.length < 8){
//         document.getElementById("warning").innerHTML = "Password should have at least 8 characters";
//     }
//     else if(password.length > 10){
//         document.getElementById("warning").innerHTML = "Password should less than 10 characters";
//     }
//     else{
//         document.getElementById("warning").innerHTML = "";
//     }
// }

function sellerOver(){
    var seller = document.getElementById("seller");
    var para = document.getElementById("user_para").innerHTML = "Welcome!!! Shoe Factory is lucky by your prformance and happy to give you lots of more opportunites. You can work as you want by your choice. If you are already login as a Seller then go to proceed for login.";
    var loginBox = document.getElementById("loginBox");
    var loginBtn = document.getElementById("login_btn").innerHTML = "Proceed";
    var loginBtn = document.getElementById("login_btn").style.backgroundColor = "black";
    loginBox.style.cursor = "pointer";
    seller.style.fontSize = "40px";
    seller.style.paddingTop = "50px";
    seller.style.transition = "1s";
    loginBtn.style.backgroundColor = "black";
    
}

function customerOver(){
    var customer = document.getElementById("customer");
    var para = document.getElementById("customer_para").innerHTML = "Welcome!!! Shoe Factory is lucky by your prformance and happy to give you lots of more opportunites. You can work as you want by your choice. If you are already login as a Customer then go to proceed for login.";
    var customerBox = document.getElementById("loginBox2");
    var loginBtn = document.getElementById("customer_btn").innerHTML = "Proceed";
    var loginBtn = document.getElementById("customer_btn").style.backgroundColor = "black";
    customerBox.style.cursor = "pointer";
    customer.style.fontSize = "40px";
    customer.style.paddingTop = "50px";
    customer.style.transition = "1s";
}


function sellerOut(){
    var seller = document.getElementById("seller");
    var para = document.getElementById("user_para").innerHTML = "";
    var loginBtn = document.getElementById("login_btn").innerHTML = "";
    var loginBtn = document.getElementById("login_btn").style.backgroundColor = "transparent";
    seller.style.fontSize = "50px";
    seller.style.paddingTop = "150px";
    seller.style.transition = "1s";
}

function customerOut(){
    var customer = document.getElementById("customer");
    var para = document.getElementById("customer_para").innerHTML = "";
    var loginBtn = document.getElementById("customer_btn").innerHTML = "";
    var loginBtn = document.getElementById("customer_btn").style.backgroundColor = "transparent";
    customer.style.fontSize = "50px";
    customer.style.paddingTop = "150px";
    customer.style.transition = "1s";
}


function quantityofprod(){
    var qty = document.getElementById("qty").value;
    var prize = document.getElementById("prize").value;

    document.getElementById("total").innerHTML = qty * prize;
}