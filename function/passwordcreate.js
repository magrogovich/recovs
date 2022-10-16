document.getElementById('button').addEventListener('click',function(){
    password = document.getElementById('input1').value
    passwordconf = document.getElementsByClassName('input2')[0].value

    test = true
    verif = true
    if((password.length == 0)||(passwordconf.length == 0)){
        test = false
        verif = false
        alert('fill all the coordinates')
    }
    if(test == true){
        if(password != passwordconf){
            alert("password do not match")
            verif = false
        }
    }
    if(verif == true){
        window.location.href = 'code.html'
    }
})