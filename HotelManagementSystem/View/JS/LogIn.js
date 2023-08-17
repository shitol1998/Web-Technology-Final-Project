function validation() {

  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;


  if (username == "") {
    document.getElementById("usernameErr").innerHTML =
      "Username must be filled out";
    return false;
  } else if (password == "") {
    document.getElementById("passwordErr").innerHTML =
      "Password must be filled out";
    return false;
  }

  return true;
}
