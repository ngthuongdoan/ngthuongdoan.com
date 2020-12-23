const form = document.getElementById("form");
const username = document.getElementById("username");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirm-password");
let usernameError = document.getElementById("username-error");
let passwordError = document.getElementById("password-error");
let confirmError = document.getElementById("confirm-error");
const usernameRegex = /^[A-Za-z][A-Za-z0-9]{5,14}$/gi;
const passwordRegex = /^(?=.*[0-9])(?=.*[a-z]).{5,16}$/gi;

let isValid = true;

username.addEventListener("blur", async () => {
  try {
    const response = await fetch(
      `/ct428/Buoi3/checkUsername.php?tendangnhap=${username.value}`
    );
    const msg = await response.json();
    console.log(msg.status);
    if (msg.status !== 200) {
      isValid = false;
    }
    usernameError.innerText = msg.msg;
  } catch (err) {
    console.log(err);
  }
});

form.addEventListener("submit", (e) => {
  e.preventDefault();

  if (!usernameRegex.test(username.value)) {
    usernameError.innerText =
      "Tên đăng nhập bắt đầu phải là chữ cái, theo sau có thể là chữ cái hoặc là số; dài từ 6 đến 15 ký tự.";
    isValid = false;
  } else {
    usernameError.innerText = "";
  }
  if (!passwordRegex.test(password.value)) {
    passwordError.innerText =
      "Phải có cả chữ cái và số; không được có ký tự khác ngoài chữ cái và số; dài từ 6 đến 15 ký tự";
    isValid = false;
  } else {
    passwordError.innerText = "";
  }
  if (password.value.localeCompare(confirmPassword.value) !== 0) {
    confirmError.innerText = "Password không trùng nhau";
    isValid = false;
  } else {
    confirmError.innerText = "";
  }

  if (isValid) {
    form.submit();
  } else {
    alert("Invalid data. Please check again")
    console.log(
      usernameRegex.test(username.value),
      passwordRegex.test(password.value),
      password.value,
      confirmPassword.value
    );
  }
});
