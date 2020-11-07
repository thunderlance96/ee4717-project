     //Validate Email:
     function validateEmail(){
        var email = document.getElementById('deliveryemail');
        if (email.value.length >0 && !email.value.match(/^[\w-.]+@(\w+\.){1,3}[\w]{2,3}$/)){
            alert('Please input a valid email address!');
           
        }
    } 


    //Validate Postal:
    function validatePostal(){
        var postal = document.getElementById('deliverypostal');
        if (postal.value.length >0 && !postal.value.match(/^\d{6}$/)){
            alert('Please input 6 digit postal code!');
           
        }
    }
    