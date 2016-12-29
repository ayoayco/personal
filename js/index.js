function checkPw(){
    var newPwInput = document.getElementById("newpw"),
        newPwValue = newPwInput.value;
    

    var newPw2Input = document.getElementById("newpw2"),
        newPw2Value = newPw2Input.value;
    
    //console.log(newPwValue+" - "+newPw2Value );

    if(newPw2Value){
        if(newPw2Value != newPwValue){
            newPw2Input.style.borderColor = "red";
        }else{
            newPw2Input.style.borderColor = "green";
        }
    }else{
            newPw2Input.style.borderColor = "#ccc";
    }

}

function checkPw2(){
    var newPwInput = document.getElementById("newpw"),
        newPwValue = newPwInput.value;
    

    var newPw2Input = document.getElementById("newpw2"),
        newPw2Value = newPw2Input.value;
    
    //console.log(newPwValue+" - "+newPw2Value );

    if(newPw2Value){
        if(newPw2Value != newPwValue){
            newPw2Input.style.borderColor = "red";
        }else{
            newPw2Input.style.borderColor = "green";
        }
    }else{
            newPw2Input.style.borderColor = "#ccc";
    }
}