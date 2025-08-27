// Side Navbar display
var sidenav= document.querySelector(".side-navbar")

function showNavbar(){
    sidenav.style.left = "0"
}

function closeNavbar(){
    sidenav.style.left = "-75%"
}

//Connect with Database Alert
function handleSubmit() {
    alert("Please Connect with the DataBase :("); 
}

var passWord = document.getElementById("PassWord");
var userName = document.getElementById("UserName")
//show password
document.getElementById("show").addEventListener("click", function () {
    if (passWord.type === "password") {
        passWord.type = "text";
        document.getElementById("hide").style.display = "block"
        document.getElementById("show").style.display = "none"
    }
    else {
        passWord.type = "password";
    }
})


//hide password
document.getElementById("hide").addEventListener("click", function () {
    if (passWord.type === "text") {
        passWord.type = "password";
        document.getElementById("show").style.display = "block"
        document.getElementById("hide").style.display = "none"
    }
    else {
        passWord.type = "text";
    }
})

function handleLogin(){
    if (userName.value === "Vijay" & passWord.value === "vh143"){
        document.location.href = "Index.html";
    }
    else {
        
        document.location.href = "Invalid_Login.html";
    }
    
}



