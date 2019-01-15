

$(document).ready(function() {
/*
    //sets a strong password

    $validator.addMethod('strongPassword', function(value, element){
        return this.optional(element)
        || value.length >= 6
        && /\d/.test(value)
        && /[a-ö]/i.test(value);  
    });
*/

    //redirect after submit
/*
    $.validator.setDefaults({
        submitHandler: function() {
            //window.location.replace('validatemessagepage.html');
            window.location.replace('registrera.php');
            //alert("submitted!");
        }
    });
*/
    //change location on error message

    $.validator.setDefaults({
        highlight: function(element) {
            $(element)
            .closest('.form-control')
            .addClass('needs-validation');
        },
        unhighlight: function(element) {
            $(element)
            .closest('.form-control')
            .removeClass('needs-validation');
        },
        errorPlacement: function(error, element){
            if (element.prop('type') === 'text', 'email') {
                error.insertBefore(element.parent());
            } else {
                error.insertBefore(element);
            }
        }
 
    });


    //validate signup form on keyup and submit

    $("#signupForm").validate({
        rules: {
            firstname: {
                required: true,
                minlength: 2,
                nowhitespace: true,
                lettersonly: true
            },
            lastname: {
                required: true,
                minlength: 2,
                nowhitespace: true,
                lettersonly: true
            },
            phone: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true
                //minlength: 5
                //strongPassword: true
            },
            confirm_password: {
                required: true,
                //minlength: 5,
                equalTo: "#password"
            },
            comment: {
                required: true,
                maxlength: 150
            },
            business: "required",
            radios: "required",
            agree: "required"
        },
        messages: {
            firstname: {
            required: "Ange ditt förnamn",
            minlength: "Måste innehålla minst 2 tecken",
            nowhitespace: "Du kan inte använda några mellanslag",
            lettersonly: "Du kan bara använda bokstäver"
            },
            lastname: {
                required: "Ange ditt efternamn",
                minlength: "Måste innehålla minst 2 tecken",
                nowhitespace: "Du kan inte använda några mellanslag",
                lettersonly: "Du kan bara använda bokstäver"
            },
            phone: {
                required: "Ange ett mobilnummer",
            },
            email: {
                required: "Ange en epostadress",
                email: "Ange en <em>giltig</em> epostadress"
            },
            password: {
                required: "Du måste ange ett lösenord",
                //strongPassword: "Ditt lösenord måste innehålla jada jada jada",
                minlength: "Lösenordet måste innehålla minst 5 tecken"
            },
            confirm_password: {
                required: "Ange lösenordet igen",
                //minlength: "Your password must be at least 5 characters long",
                equalTo: "Du måste ange samma lösenord som ovan"
            },
            comment: {
                required: "Din kommentar är ovärderlig för oss, men om du inte vill ange någon text gör ett - (bindestreck)",
                maxlength: "Du kan bara använda 150 tecken!"
            },
            business: "Välj ett område",
            radios: "Välj ett av alternativen!",
            agree: "Du måste godkänna våra villkor",
        }
    });

/*
    //används för att skriva över standardmeddelandet

    $extend($validator.messages,{
        required: "Ett felmeddelande som skriver över generic meddelandet",
        email: "Ett meddelande som bara gäller för emaildelen"
    });
*/

/*
    // propose username by combining first- and lastname

    $("#username").focus(function() {
        let firstname = $("#firstname").val();
        let lastname = $("#lastname").val();
        if (firstname && lastname && !this.value) {
            this.value = firstname + "." + lastname;
        }
    });
*/
    //textarea character counter
    $('textarea').on("input", function(){
        let maxlength = $(this).attr("maxlength");
        let currentLength = $(this).val().length;
    
        if( currentLength >= maxlength ){
            //console.log("You have reached the maximum number of characters.");
            document.getElementById('charNum').innerHTML = 'Du har nått maximalt med tecken!';
        }else{
            //console.log(maxlength - currentLength + " chars left");
            document.getElementById('charNum').innerHTML = (maxlength - currentLength + " tecken kvar");
        }
    });

    // mask for phonenumber
    $('#phone').mask("999 999 99 99", {placeholder: "XXX XXX XX XX"});

    //$('#comment').val(today); //writes to textfield with jquery

    //server validation

    

});

/*

    //date printed inside of textarea

    let today = new Date();
    let dd = today.getDate();
    let mm = today.getMonth()+1; //January is 0!
    let yyyy = today.getFullYear();

    if(dd<10) {
        dd = '0'+dd
    } 

    if(mm<10) {
        mm = '0'+mm
    } 

    today = yyyy + '-' + mm + '-' + dd;
    //document.write(today);
    //document.getElementById('comment').value = today; //with javascript

*/
