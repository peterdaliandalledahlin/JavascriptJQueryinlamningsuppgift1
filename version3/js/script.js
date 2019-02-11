$(function () {
    
        var radioChecked = false;
    
        // check form inputs (type: text, password, email) on blur
        $("form input").blur(function() {
            
            if( $(this).attr("type") === "radio" ) {
                $("#learnMore > div > input").each(function() {
    
                    if( $(this).prop("checked") ) {
                        radioChecked = true;
                    }
    
                    if(radioChecked) {
                        $("#learnMore > div > input").each( function() {
                            $(this).removeClass("is-invalid");
                        })
                    } else {
                        $("#learnMore > div > input").each( function() {
                            $(this).addClass("is-invalid");
                        })                   
                    }
    
                });
            }
    
    
    
    
            // validate if value is empty and is required
            if( !$(this).val() && $(this).prop("required") ) {
                setInvalidClass($(this));
            } 
            // validate if value is empty and is not required     
            if( !$(this).val() && !$(this).prop("required") ) {
                setValidClass($(this));          
            }
    
        });
    
        // check form selects on blur
        $("form select").blur(function() {
            
            // validate if value is empty and is required
            if( !$(this).val() && $(this).prop("required") ) {
                setInvalidClass($(this));
            } 
            // validate if value is empty and is not required     
            if( !$(this).val() && !$(this).prop("required") ) {
                setValidClass($(this));          
            }
    
        });

        // check form textfield on blur
        $("form textarea").blur(function() {
    
            // validate if value is empty and is required
            if( !$(this).val() && $(this).prop("required") ) {
                setInvalidClass($(this));
            } 
            // validate if value is empty and is not required     
            if( !$(this).val() && !$(this).prop("required") ) {
                setValidClass($(this));          
            }
    
        });

        $("form textarea").change(function() {

            if( !$(this).val() && $(this).prop("required") ) {
                setInvalidClass($(this));
            } 

            if( $(this).val() && !$(this).prop("required") ) {
                setValidClass($(this));          
            }

        });
    
    
    
        // check form inputs (type: text, password, email) on change
        $("form input").change(function() {
    
            if( $(this).val() && $(this).prop("required") ) {
    
                if( $(this).val().length < 2 ) {
                    setInvalidClass($(this));
                
                } else if( $(this).attr("type") === "email" && !validateEmail( $(this).val() ) ) {
                    setInvalidClass($(this));              
                                
                } else if( $(this).attr("type") === "password" && $(this).val().length < 8 ) {
                    setInvalidClass($(this));              
                                
                } else if( $(this).attr("type") === "password" && $(this).attr("id") === "confirm_password" && !confirmPassword($("#password").val(), $(this).val()) ) {
                    setInvalidClass($(this));
                    $("#confirmPasswordInvalidFeedback").html("Lösenordet måste matcha ovanstående lösenord");              
                                
                } else if( $(this).attr("id") === "postalCode" && $(this).val().length != 5  && !onlyNumbers( $(this).val() ) ) {
                    setInvalidClass($(this));              
                    $("#postalCodeInvalidFeedback").html("Postnumret får bara innehålla 5 siffror");              
                                  
                } else if( $(this).attr("type") === "radio" ) {
                    $("#learnMore > div > input").each(function() {
                        var checked = false;
    
                        if( $(this).prop("checked") ) {
                            checked = true;
                        }
    
                        if(checked) {
                            $("#learnMore > div > input").each(function() {
                                $(this).removeClass("is-invalid");
                            });
                        }
                    });
                                
                } else {
                    setValidClass($(this));                 
                }
    
            }
    
        });
        
    
    
        // check form selects on change
        $("form select").change(function() {
            var value = $($(this).attr("id") + " option:selected").val();
    
            if(value === "") {
                setInvalidClass($(this)); 
            } else {
                setValidClass($(this)); 
            }
    
        });
    
    
    
        
    
    
        function setValidClass($input) {
            $input.addClass("is-valid");
            $input.removeClass("is-invalid");           
        }
    
        function setInvalidClass($input) {
            $input.addClass("is-invalid");
            $input.removeClass("is-valid");           
        }
    
        function onlyNumbers($input) {
            return /^\d+$/.test($input);
        }
    
        function validateEmail($email) {
            return /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,6})+$/.test($email);
        }
    
        function confirmPassword($password, $confirmPassword) {
            return ($password === $confirmPassword) ? true : false;
        }
    
        window.addEventListener("click", function() {
            var forms = document.getElementsByClassName("needs-validation");
            Array.prototype.filter.call(forms, function(form) {
                form.addEventListener("submit", function(event) {
                    if(form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add("was-validated");
                }, false);
            });
        }, false);


        $('[data-toggle="popover"]').popover();
    
    });

