"use strict";

function init(){ 
    var doc1 = document.getElementById("details");
    doc1.onsubmit = validate;//isn't being called
}

window.onload = init;

function validate(){ 
    var errMsg = "";
    var tempMsg = "";
    var result = true;
    var needsValidate = false;
    cacheCreation();   //&&&&&&&&&&&&&&&&&&&&  function call, use ()
    if(needsValidate == true){
    tempMsg = stateCheck() ;   //&&&&&&&&&&&&&&&&&&  function call , use ()
    if(tempMsg != ""){   //&&&&&&&&&&&&
        errMsg = errMsg + tempMsg;
        result = false;
    }
	if (errMsg!="")
		alert(errMsg);  //&&&&&&&&&&&&&&&&&&&&&
    return result;}
}

function cacheCreation() { //is working guaranteed     alert("hi");
    var name = document.getElementById("name1").value;
    if(name != ""){sessionStorage.nameSS = name;} 

    var lname = document.getElementById("name2").value;
    if(lname != ""){sessionStorage.name2SS = lname;}

    var email = document.getElementById("email").value;
    if(email != ""){sessionStorage.emailSS = email;}

    var street = document.getElementById("street").value;
    if(street != ""){sessionStorage.streetSS = street;}

    var suburb = document.getElementById("suburb").value;
    if(suburb != ""){sessionStorage.suburbSS = suburb;}

    var state = document.getElementById("state").value;
    if(state != ""){sessionStorage.stateSS = state;}

    var pstcode = document.getElementById("pstcode").value;
    if(pstcode != ""){sessionStorage.pstcodeSS = pstcode;}

    var phone = document.getElementById("ph").value;
    if(phone != ""){sessionStorage.phoneSS = phone;}

    var venu = document.getElementById("droom").value;
    var bookTime = document.getElementById("timespent").value;
    var water = document.getElementById("water").checked;
    var food = document.getElementById("foood").checked;
    var rub = document.getElementById("rub").checked;
    var headCount = document.getElementById("pplattending").value;
    var cost = 0;
    switch(venu){
        case "r1":
            cost = 30 * bookTime;
            break;
        case "r2":
            cost = 40 * bookTime;
            break;
        case "r3":
            cost = 330 * bookTime;
            break;
    }
    if(water != ""){
        cost = cost + 4 * headCount;
    }
    if(food != ""){
        cost = cost + 40 * headCount;
    }
    if(rub != ""){
        cost = cost + 50 * bookTime;
    }
    sessionStorage.costSS = cost;
}


function stateCheck(){ 
    var errMsg = "";
    var postcode = Number(sessionStorage.pstcodeSS);
    var state = sessionStorage.stateSS;
    switch(state){
        case "VIC":
            if(!(3000 <= postcode && postcode <= 4000 || 7999 < postcode && postcode < 9000)){
                errMsg = errMsg + "Please Select a Correct Post Code\n";
            }
        break;
       
        case "NSW":
            if(!(1000 <= postcode && postcode <= 2599 || 2619 <= postcode && postcode <=2899 || 2921 <= postcode && postcode <= 2999)){
                errMsg = errMsg + "Please Select a Correct Post Code\n";
            }
        break;
        
        case "ACT":
            if(!(200 <= postcode && postcode <= 299 || 2600 <= postcode && postcode <= 2618 || 2900 <= postcode && postcode <=2920)){
                errMsg = errMsg + "Please Select a Correct Post Code\n";
            }
        break;
        
        case "QLD":
            if(!(4000 <= postcode && postcode <= 4999 || 9000 <= postcode && postcode <= 9999)){
                errMsg = errMsg + "Please Select a Correct Post Code\n";
            }
        break;
        
        case "SA":
            if(!(5000 <= postcode && postcode <= 5999)){
                errMsg = errMsg + "Please Select a Correct Post Code\n";
            }
        break;
        
        case "WA":
            if(!(6000 <= postcode && postcode <= 6797 || 6800 <= postcode && postcode <= 6999)){
                errMsg = errMsg + "Please Select a Correct Post Code\n";
            }
        break;
        
        case "TAS":
            if(!(7000 <= postcode && postcode <= 7999)){
                errMsg = errMsg + "Please Select a Correct Post Code\n";
            }
        break;
        
        case "NT":
            if(!(800 <= postcode && postcode <= 999)){  //&&&&&&&&&&&&&&& no leading 0 in strict mode
                errMsg = errMsg + "Please Select a Correct Post Code\n";
            }
        break;
    } 
    return errMsg;
}
/*
if ( !postcode.match(/^[38]\d{3}$/)) {   }

   var errMsg = "";
var tempMsg = "";
var result = true;
var pstcode = document.getElementById("pstcode").value;
var state = document.getElementById("state").value;

tempMsg = stateCheck(pstcode, state);
if (tempMsg != "") {
    errMsg = errMsg + tempMsg;
    result = false;
}

if (errMsg != "") {
    alert(errMsg);
}

return result;*/