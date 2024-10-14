function myFunction() {
    var x = document.getElementById("psw");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
function myFunction2() {
    var x = document.getElementById("psw2");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function formatPhoneNumber(value){
    if(!value)return value;
    const phonenumber=value.replace(/[^\d]/g,'');
    const phonenumberLength=phonenumber.length;
    if(phonenumberLength <4)return phonenumber;
    if (phonenumber<7){
      return `(${phonenumber.slice(0,3)}) ${phonenumber.slice(3)}`;
    }
    return `(${phonenumber.slice(0,3)}) ${phonenumber.slice(3,
      6,
      )}--${phonenumber.slice(6,9)}`; 
  }
function phonenumber(){
  const inputfield = document.getElementById('phone-number');
const formattedInputValue = formatPhoneNumber(inputfield.value);
inputfield.value = formattedInputValue;
}