const email1 = document.querySelector("#signupEmail");
const email2 = document.querySelector("#signupEmailConfirm");

// Validation of email structure
email1.addEventListener("change", function () {
  // remove, if they're any validation classes set
  email1.classList.remove("is-valid");
  email1.classList.remove("is-invalid");
  // set regular expression for a valid email
  const emailRegexp = new RegExp(
    "^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$"
  );
  // verify if email is not according to regexp
  if (!emailRegexp.test(email1.value)) {
    // displays invalid alert
    email1.classList.add("is-invalid");
  } else {
    // otherwise, display a valid green check
    email1.classList.add("is-valid");
  }
});

// Match of email and its confirmation
email2.addEventListener("change", function () {
  email2.classList.remove("is-invalid");

  if (email1.value == email2.value) {
    email2.classList.add("is-valid");
  } else {
    email2.classList.add("is-invalid");
  }
});

const pass1 = document.querySelector("#signupPassword");
const pass2 = document.querySelector("#signupPasswordConfirm");

const pwValid = {
  charLenght: document.querySelector("li.length"),
  lowercase: document.querySelector("li.lowercase"),
  uppercase: document.querySelector("li.uppercase"),
  number: document.querySelector("li.number"),
  charSpecial: document.querySelector("li.charSpecial"),
};

const fullValidation = false;

// Password strength validation
pass1.addEventListener("keyup", function () {
  // Minimum 8 characters
  if (pass1.value.length > 7) {
    pwValid.charLenght.classList.add("valid");
  } else {
    pwValid.charLenght.classList.remove("valid");
  }
  // Must contain a lowercase
  var regex = /^(?=.*[a-z]).+$/;
  if (!regex.test(pass1.value)) {
    pwValid.lowercase.classList.remove("valid");
  } else {
    pwValid.lowercase.classList.add("valid");
  }
  // Must contain an uppercase
  var regex = /^(?=.*[A-Z]).+$/;
  if (!regex.test(pass1.value)) {
    pwValid.uppercase.classList.remove("valid");
  } else {
    pwValid.uppercase.classList.add("valid");
  }
  // Must contain a number
  var regex = /^(?=.*[0-9]).+$/;
  if (!regex.test(pass1.value)) {
    pwValid.number.classList.remove("valid");
  } else {
    pwValid.number.classList.add("valid");
  }
  // Must contain a special character
  var regex = /^(?=.*[@$!%*?#&]).+$/;
  if (!regex.test(pass1.value)) {
    pwValid.charSpecial.classList.remove("valid");
  } else {
    pwValid.charSpecial.classList.add("valid");
  }

  // disable button in password restrictions are not fulfilled
  const signupBtn = document.querySelector("#signupBtn");

  if (
    pwValid.charLenght.classList.contains("valid") &&
    pwValid.lowercase.classList.contains("valid") &&
    pwValid.uppercase.classList.contains("valid") &&
    pwValid.number.classList.contains("valid") &&
    pwValid.charSpecial.classList.contains("valid")
  ) {
    signupBtn.classList.remove("disabled");
  } else {
    signupBtn.classList.add("disabled");
  }
});

// Match of password and its confirmation
pass2.addEventListener("change", function () {
  pass2.classList.remove("is-invalid");

  if (pass1.value == pass2.value) {
    pass2.classList.add("is-valid");
  } else {
    pass2.classList.add("is-invalid");
  }
});
