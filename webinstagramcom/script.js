let email = document.getElementById("username");
let password = document.getElementById("password");
let login = document.getElementById("login-button");

function checkInputs() {
  if (email.value.length > 0 && password.value.length >= 6) {
    login.disabled = false;
  }
  else {
    login.disabled = true;
  }
}

email.addEventListener('input', checkInputs);
password.addEventListener('input', checkInputs);

checkInputs();

// let error = document.getElementsByClassName("error-box")[0];

// function showError() {
//   error.style.bottom = '0';
// }

// showError();

// function hideError() {
//   error.style.bottom = '-100px';
// }

// setTimeout(hideError, 5000);