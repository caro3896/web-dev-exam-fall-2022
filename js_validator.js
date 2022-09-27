function validate(callback) {
    const form = event.target;
    const validate_error = "rgba(240, 130, 240, 0.2)";
    document.querySelectorAll("[data-validate]", form).forEach(function (element) {
      element.classList.remove("validate_error");
      element.style.backgroundColor = "rgb(245, 245, 245, 0.94)";
    });
    document.querySelectorAll("[data-validate]", form).forEach(function (element) {
      switch (element.getAttribute("data-validate")) {
        case "str":
          if (element.value.length < parseInt(element.getAttribute("data-min")) || element.value.length > parseInt(element.getAttribute("data-max"))) {
            element.classList.add("validate_error");
            element.style.backgroundColor = validate_error;
          }
          break;
        case "email":
          let re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          if (!re.test(element.value.toLowerCase())) {
            element.classList.add("validate_error");
            element.style.backgroundColor = validate_error;
          }
          break;
        case "regex":
          var regex = new RegExp(element.getAttribute("data-regex"));
          // console.log(regex);
          // var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
          if (!regex.test(element.value)) {
            console.log(element.value);
            console.log("regex error");
            element.classList.add("validate_error");
            element.style.backgroundColor = validate_error;
          }
          break;
        case "match":
          if (element.value != document.querySelector(`[name='${element.getAttribute("data-match-name")}']`, form).value) {
            element.classList.add("validate_error");
            element.style.backgroundColor = validate_error;
          }
          break;
      }
    });
    if (!document.querySelector(".validate_error", form)) {
      callback();
      return;
    }
    document.querySelector(".validate_error", form).focus();
  }
  
async function isEmailAvailable(){
    console.log("Checking email");
    const form = document.querySelector("#sign-up-form");
    const connection = await fetch("api-is-email-available", {
        method: "POST",
        body: new FormData(form)
    });
    if ( ! connection.ok ) {
        document.querySelector("#email-error").style.visibility = "visible";
        document.querySelector("input[name='user_email']").style.backgroundColor = "rgba(240, 130, 240, 0.2)";
    };
 };

 function clearInput(){
     event.target.value = "";
     document.querySelector("#email-error").style.visibility = "hidden";
     document.querySelector("input[name='user_email']").style.backgroundColor = "white";
 }

 function validateImage(callback){
    const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if(!allowedExtensions.exec(document.querySelector('#fileToUpload').value)){
            // alert('Please upload file having extensions .jpeg/.jpg/.png only.');
            document.querySelector(".image-error").style.visibility = "visible";
            // document.querySelector('#fileToUpload').value = '';
            return;
        }
    callback();
    return;
 };

 function clearImageInput(){
    document.querySelector(".image-error").style.visibility = "hidden";
}
 