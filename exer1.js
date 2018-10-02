function validate_pass() {
  let x = document.getElementById("passw").value;
  let y = document.getElementById("confpass").value;
  if (x.length < 8){
    alert("Passwords must be at least 8 characters long!");
  }else if (x != y){
    alert("Passwords entered don't match!");
  }else{
    alert("Passwords Validated");
  }
}
