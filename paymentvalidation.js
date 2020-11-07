     //Validate Card Number:
     function validateCardNum(){
        var num = document.getElementById('paymentnum');
        if (num.value.length >0 && !num.value.match(/^\d{4}-\d{4}-\d{4}-\d{4}$/)){
            alert('Please input a valid card number!');
        }
    } 

    //Validate CVV:
    function validateCVV(){
        var cvv = document.getElementById('cvv');
        if (cvv.value.length >0 && !cvv.value.match(/^\d{3}$/)){
            alert('Please input 3 digit CVV!');
           
        }
    }
    