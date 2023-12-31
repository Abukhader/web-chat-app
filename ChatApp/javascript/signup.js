const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");
const errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault(); //Block continue
}

continueBtn.onclick = ()=>{
    /*Start Ajax*/
    let xhr = new XMLHttpRequest(); //Creating XML object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "users.php";
            }else{
                errorText.textContent = data;
                errorText.style.display = "block";
            }
        }
    }
}
    // send the form data through ajax to php
    let formData = new FormData(form);
    xhr.send(formData);
}