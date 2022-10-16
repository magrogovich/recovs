document.getElementById('button').addEventListener('click',function(){
    userName = document.getElementsByClassName("input_name")[0].value;
    lastName = document.getElementsByClassName('input_Last')[0].value
    email = document.getElementsByClassName('email')[0].value
    confEmail = document.getElementsByClassName('confemail')[0].value
    day = document.getElementsByClassName('dd')[0].value
    month = document.getElementsByClassName('mm')[0].value
    year = document.getElementsByClassName('year')[0].value
    check = document.getElementById('check')

    verif = true
    test = true
    if ((userName.length == 0 )||( lastName.length == 0) || (email.length == 0) || (confEmail.length == 0) || (day.length == 0) || (month.length == 0) || (year.length == 0)){
        alert('fill all the coordinates')
        test = false
        verif = false
    }
    if (test == true){
        test2 = true

        for (i = 0;i<userName.length ;i++){
            if ((userName[i].toUpperCase()< 'A' || userName[i].toUpperCase()> 'Z')){
                test2 = false
                verif = false
                break
            }
        }


        if(test2 == false){
            alert("user name can contains letter")
        }
        test3 = true
        for (i = 0;i<lastName.length ;i++){
            if ((lastName[i].toUpperCase()< 'A' || lastName[i].toUpperCase()> 'Z')){
                test3 = false
                verif = false
                break
            }
        }


        if(test3 == false){
            alert("user lastname can contains letter")
        }

        test4 = true
        for (i = 0;i<email.length ;i++){
            if ((email[i].toUpperCase()< 'A' || email[i].toUpperCase()> 'Z') && (email[i]< '0' || email[i]> '9') && (email[i] != '@') && (email[i] != '.')){
                test4 = false
                verif = false
                break
            }
        }


        if(test4 == false){
            alert("email is uncorrect")
        }

        test5 = true
        if (confEmail != email){
            test5 = false
            verif = false
        }


        if(test5 == false){
            alert("email do not match")
        }


        test6 = true
        if ((day< '1' || day> '31')){
            test6 = false
            verif = false
        }
        


        if(test6 == false){
            alert("day is uncorrect")
        }

        num = ['1', '2', '3', '4', '5', '6', '7', '8', '9' ,'10' ,'11' ,'12']

        test7 = true
        if (num.includes(month) == false){
            test7 = false
            verif = false
        }


        if(test7 == false){
            alert("month is uncorrect")
        }


        test8 = true
        if ((year< '1960' || year> '2010')){
            test8 = false
            verif = false
        }


        if(test8 == false){
            alert("year is uncorrect")
        }

        test9 = true
        if (check.checked != 1){
            test9 = false
            verif = false
        }


        if(test9 == false){
            alert("cheak the box")
        }
    
    }

    if(verif == true){
        obj = {
            name : userName,
            last : lastName,
            Email:email,
            dateDay:day,
            dateMonth:month,
            dateYear:year
        }
        
        window.location.href = "passwordcreate.html"

    }
})

