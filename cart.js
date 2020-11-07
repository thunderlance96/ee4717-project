// set value of 0 for the Subtotals
function init(){
    document.getElementById("SDSubtotal").value = 0;
    document.getElementById("KASubtotal").value = 0;
    document.getElementById("FCSubtotal").value = 0;
}

// Resets Qty and Subtotal values 
function resetValues(qty,subtotal){ 
    qty.value='';
    subtotal.value = 0;
    subtotal.innerHTML = "Subtotal\n" + "$0.00";
}

// When user changes option from Single to Double (or vice versa)
function clearExisting(name){
    let idQty = name.substring(0,4) + 'Qty';    // concat first 4 chars of LaitOption or CappOption (ie 'Lait" or 'Capp') with 'Qty'
    let idSubtotal = name.substring(0,4) + 'Subtotal';  // concat first 4 chars of LaitOption or CappOption (ie 'Lait" or 'Capp') with 'Subtotal'
    let input = document.getElementById(idQty);
    let output = document.getElementById(idSubtotal);
    resetValues(input,output);
    calcTotal();
}

// Calculates and updates SD subtotal price, given input quantity by user
function SDPrice(){
    let input = document.getElementById("SDQty");
    let output = document.getElementById("SDSubtotal");
    let val = Number(input.value);
    

    if (Number.isInteger(val) && val >= 0){
        output.value = val*8.50;
        output.innerHTML = "Subtotal\n" + "$" + (output.value).toFixed(2);  // set to 2dp
    }
    else {
        alert("Please only input integer values from 0 onwards!");
        resetValues(input,output);
    }
    calcTotal();
}

// Calculates and updates SD subtotal price, given input quantity by user
function KAPrice(){
    let input = document.getElementById("KAQty");
    let output = document.getElementById("KASubtotal");
    let val = Number(input.value);
    

    if (Number.isInteger(val) && val >= 0){
        output.value = val*7.50;
        output.innerHTML = "Subtotal\n" + "$" + (output.value).toFixed(2);  // set to 2dp
    }
    else {
        alert("Please only input integer values from 0 onwards!");
        resetValues(input,output);
    }
    calcTotal();
}

// Calculates and updates SD subtotal price, given input quantity by user
function FCPrice(){
    let input = document.getElementById("FCQty");
    let output = document.getElementById("FCSubtotal");
    let val = Number(input.value);
    

    if (Number.isInteger(val) && val >= 0){
        output.value = val*9.50;
        output.innerHTML = "Subtotal\n" + "$" + (output.value).toFixed(2);  // set to 2dp
    }
    else {
        alert("Please only input integer values from 0 onwards!");
        resetValues(input,output);
    }
    calcTotal();
}

// Calculates total price, updates after any subtotal price is updated
function calcTotal(){
    let SDSubtotal = document.getElementById("SDSubtotal");
    let KASubtotal = document.getElementById("KASubtotal");
    let FCSubtotal = document.getElementById("FCSubtotal");
    document.getElementById("GrandTotal").innerHTML = "$" + (SDSubtotal.value + KASubtotal.value + FCSubtotal.value).toFixed(2);  // set to 2dp
}