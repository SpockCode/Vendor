/* select = document.getElementById('user'); // or in jQuery use: select = this;
if (select.value) {
  // value is set to a valid option, so submit form
  return true;
}
return false;
*/



if (select == "") {
 
    document.getElementById('msg').innerHTML="Please Select a User Type!";
    return false;
 }

else if (select.value) {
    return true;
}