"use strict";

function init() {
    var needsValidate = false;
    cacheWrite();
    var finalForm = document.getElementById("payinfo");
    if(needsValidate == false){
        finalForm.onsubmit = assignValues;
    }
    else{
    finalForm.onsubmit = validate;
    }
}

window.onload = init();

function cacheWrite(){ //is working guaranteed
    var message = document.getElementById("infoDump");
    message.textContent =         
        "Name: " + sessionStorage.nameSS + "<br>" +
        "Second Name: " + sessionStorage.name2SS +"<br>" +
        "Email: " + sessionStorage.emailSS +"<br>" +
        "Street: " + sessionStorage.streetSS +"<br>" +
        "Suburb: " + sessionStorage.suburbSS +"<br>" +
        "State: " + sessionStorage.stateSS +"<br>" +
        "Post Code: " + sessionStorage.pstcodeSS +"<br>" +
        "Phone: " + sessionStorage.phoneSS +"<br>" +
        "Total Cost: $" + sessionStorage.costSS +"<br>";
}

function assignValues(){
    var cardName = document.getElementById("crdname").value;
    if(cardName != ""){sessionStorage.cardName = cardName;} 

    var cardExpire = document.getElementById("crdexpire").value;
    if(cardExpire != ""){sessionStorage.cardExpire = cardExpire;} 

    var crdnumber = document.getElementById("crdnumber").value;
    if(crdnumber != ""){sessionStorage.crdnumber = crdnumber;} 

    var crdccv = document.getElementById("crdccv").value;
    if(crdccv != ""){sessionStorage.crdccv = crdccv;} 

    var cardtype = document.getElementById("cardtype").value;
    if(cardtype != ""){sessionStorage.cardtype = cardtype;} 
}

function validate(){ //Doesn't work
    var errMsg = "";
    var result = true;
    var tempMsg = "";
 
    var cardName = document.getElementById("crdname").value;
    if (!cardName.match(/^[a-zA-Z]+$/)) {
        errMsg = errMsg + "Your card's name must only contain alpha characters\n";
        result = false;
    }
 
    tempMsg = ceditNO_Validate();  //&&&&&&&&&&&&&&&&&&&&   ()
    if(tempMsg != ""){
        errMsg = errMsg + tempMsg;
        result = false;
    }

    var cardExpire = document.getElementById("crdexpire").value;
    if (!cardExpire.match(/^\d{2}\/\d{2}$/)) {
        errMsg = errMsg + "Your card's name must only contain alpha characters\n";
        result = false;
    }
    var cardCCV = document.getElementById("crdccv").value;
    if (!cardCCV.match(/^[0-9]{3,4}$/)) {
        errMsg = errMsg + "Your card's name must only contain alpha characters\n";
        result = false;
    }

    if(errMsg != ""){
        alert(errMsg);
    }

    return result;
}

function ceditNO_Validate(){ 
    var cardNumber = document.getElementById("crdnumber").value;
    var cardType = document.getElementById("cardtype").value; //&&&&&&&&&&&&&&&&&&&&  value not checked
    var errMsg = "";
 
    switch(cardType){
        case "visa": 
            if(!cardNumber.match(/^[4]\d{15}$/)){
                errMsg = errMsg + "Please enter your correct credit card number.\n"
            }
            break;

        case "mstcard":
            if(!cardNumber.match(/^[51-55]\d{14}$/)){
                errMsg = errMsg + "Please enter your correct credit card number.\n"
            }
            break;

        case "usaexpress":
            if(!cardNumber.match(/^[34-37]\d{13}$/)){
                errMsg = errMsg + "Please enter your correct credit card number.\n"
            }
            break;
    }
    
    return errMsg;
}