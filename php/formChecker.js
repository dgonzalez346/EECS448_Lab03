function validateForm()
{
  switch(checkFields())
  {
    case 1:
      alert("Please select a product!");
      //returnToPreviousPage()
      return false;
      break;
    case 2:
      alert("please enter a username!");
      //returnToPreviousPage()
      return false;
      break;
    case 3:
      alert("Please enter a password!");
      //returnToPreviousPage()
      return false;
      break;
    case 0:
      return true;
  }
}

function checkFields()
{
  if (document.getElementById("frontendForm")["product1"].value == 0
  && document.getElementById("frontendForm")["product2"].value == 0
  && document.getElementById("frontendForm")["product3"].value == 0)
  {
    return 1;
  }
  else if (document.getElementById("frontendForm")["user"].value === "")
  {
    return 2;
  }
  else if (document.getElementById("frontendForm")["passw"].value === "")
  {
    return 3;
  }else {
    return 0;
  }
}
function returnToPreviousPage()
{
  //window.history.back();
}
