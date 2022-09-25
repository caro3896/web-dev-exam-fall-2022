function validate(callback){
    console.log("Validating");
    const form = event.target;
    const validate_error = "rgba(240, 130, 240, 0.2)";

    document.querySelectorAll("[data-validate]",form).forEach(function(element){ 
        element.classList.remove("validate_error")
        element.style.backgroundColor = "white"
      })
    
    document.querySelectorAll("[data-validate]", form).forEach( function(element){
        switch(element.getAttribute("data-validate")){
            case "str":
                if( element.value.length < parseInt(element.getAttribute("data-min")) ||
                    element.value.lenght > parseInt(element.getAttribute("data-max")) 
                ){
                    element.classList.add("validate_error");
                    element.style.backgroundColor = validate_error;
                };
            break;
            case "email":
                let re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(  ! re.test(element.value.toLowerCase()) ){
                    element.classList.add("validate_error");
                    element.style.backgroundColor = validate_error;
                };
                if( element.value == "a@a.com" ){
                    element.classList.add("validate_error");
                    element.style.backgroundColor = validate_error;
                };
            break;
            case "regex":
                var regex = new RegExp(element.getAttribute("data-regex"));
                if ( ! regex.test(element.value) ){
                    element.classList.add("validate-error");
                    element.style.backgroundColor = validate_error;
                };
            break;
            case "match":
                if( element.value != document.querySelector(`[name='${element.getAttribute("data-match-name")}']`, form).value ){
                    console.log(element.value);
                    console.log(document.querySelector(`[name='${element.getAttribute("data-match-name")}']`));
                    element.classList.add("validate-error");
                    element.style.backgroundColor = validate_error;
                    console.log("no match")
                };
        }
    })
    if( ! document.querySelector(".validate_error", form) ){ callback(); return }
    document.querySelector(".validate_error", form).focus();
}

async function isEmailAvailable(){
    const form = document.querySelector("#sign-up-form");
    const connection = await fetch("api-is-email-available", {
        method: "POST",
        body: new FormData(form)
    });
    if ( ! connection.ok ) {
        document.querySelector(".error").style.visibility = "visible";
    };
 };

 function clearInput(){
     event.target.value = "";
     document.querySelector(".error").style.visibility = "hidden";
 }

 function validateImage(callback){
    const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if(!allowedExtensions.exec(document.querySelector('#fileToUpload').value)){
            // alert('Please upload file having extensions .jpeg/.jpg/.png only.');
            document.querySelector(".image-error").style.visibility = "visible";
            // document.querySelector('#fileToUpload').value = '';
            return;
        }
    Swal.fire({
        title: 'Upload succesful!',
        text: 'Do you want to continue',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
    callback();
    return;
 };

 function clearImageInput(){
    document.querySelector(".image-error").style.visibility = "hidden";
}



 
 