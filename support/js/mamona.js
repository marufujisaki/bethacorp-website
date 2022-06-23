const form = document.querySelector("form"),
  continueBtn = form.querySelector(".button input");

form.onsubmit = (e) => {
  e.preventDefault(); // preventing form from submitting
};

continueBtn.onclick = () => {
  // Ajax code
  let xhr = new XMLHttpRequest(); // creating XML object
  xhr.open("POST", "php/soymamona.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data == "success") {
          location.href = "users.php";
        } else {
          alert(data);
        }
      }
    }
  };
  // how to send the form from data to php
  let formData = new FormData(form); // creating new form data object
  xhr.send(formData); // sending the form to php
};
