<?php
    // define variables and set to empty values

    $firstNameErr = $lastNameErr = $phoneErr = $emailErr = $passwordErr = $confirm_passwordErr = $commentErr = $businessErr = $radiosErr = $agreeErr = "";
    $firstName = $lastName = $phone = $email = $password = $comment = $business = $radios = $agree = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["firstname"])) {
          $firstNameErr = "Du måste ange ett förnamn som innehåller minst 2 tecken";
        } else {
          $firstName = test_input($_POST["firstname"]);
            if (!preg_match("/^[a-öA-Ö]*$/",$firstName)) {
            $firstNameErr = "Bara bokstäver är tillåtna"; 
          }
        }
        
        if (empty($_POST["lastname"])) {
            $lastNameErr = "Du måste ange ett efternamn som innehåller minst 2 tecken";
          } else {
            $lastName = test_input($_POST["lastname"]);
            if (!preg_match("/^[a-öA-Ö]*$/",$lastName)) {
              $lastNameErr = "Bara bokstäver är tillåtna"; 
            }
          }
          
        if (empty($_POST["phone"])) {
            $phoneErr = "Du måste ange ett mobilnummer";
          } else {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^[0-9 ]*$/",$phone)) {
              $phoneErr = "Bara siffror är tillåtna"; 
            }
          }

        if (empty($_POST["email"])) {
            $emailErr = "Du måste ange en giltig E-postadress";
          } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Ogiltigt E-postformat"; 
            }
          }

          if (empty($_POST["password"])) {
            $lastNameErr = "Du måste ange ett lösenord med minst 8 tecken, max 12 tecken, en bokstav, en siffra och ett av dessa tecken !@#$%";
          } else {
            $password = test_input($_POST["password"]);
            if(!preg_match('/^(?=.*\d)(?=.*[A-Öa-ö])[0-9A-Öa-ö!@#$%]{8,12}$/', $password)) {
              $passwordErr = "Lösenordet måste innehålla en bokstav, en siffra och någon av följande tecken !@#$% "; 
            }
          }

            if ($_POST["password"] === $_POST["confirm_password"]) {
                $confirm_password = test_input($_POST["confirm_password"]);
            } else {
                $confirm_passwordErr = "Dina lösenord matchar inte!";
            }

        if (empty($_POST["comment"])) {
            $commentErr = "Vi tar gärna emot din kommentar, vill du inte skriva något, gör ett - (bindestreck)";
          } else {
            $comment = test_input($_POST["comment"]);
          }

        if (empty($_POST["business"])) {
            $businessErr = "Du måste välja ett område";
          } else {
            $business = test_input($_POST["business"]);
          }

        if (empty($_POST["radios"])) {
            $radiosErr = "Du måste välja ett alternativ";
          } else {
            $radios = test_input($_POST["radios"]);
          }

          if (empty($_POST["agree"])) {
            $agreeErr = "Du måste godkänna villkoren";
          } else {
            $agree = test_input($_POST["agree"]);
          }

          if (!$firstNameErr && !$lastNameErr && !$phoneErr && !$emailErr && !$passwordErr && !$confirm_passwordErr && !$commentErr && !$businessErr && !$radiosErr && !$agreeErr) {

            include "include/conn.inc.php";
            include "registrera.php";
          }

    }   
      
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Javascript & JQuery - inlämningsuppgift 1</title>

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--FONTAWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded">
        <p><span class="error">* obligatoriska fält</span></p>
            <form class="" id="signupForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <fieldset>
                    <legend>Javascript & JQuery - inlämningsuppgift 1</legend>
                </fieldset>
                    <div class="form-group input-group col-md-12">
                        <span class="input-group error">* <?php echo $firstNameErr;?></span>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" id="firstname" name="firstname" type="text" placeholder="Ange ditt förnamn"  value="<?php echo $firstName;?>">
                    </div>
                    <div class="form-group input-group col-md-12">
                    <span class="input-group error">* <?php echo $lastNameErr;?></span>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Ange ditt efternamn"  value="<?php echo $lastName;?>">
                    </div>
                    <div class="form-group input-group col-md-12">
                        <span class="input-group error">* <?php echo $phoneErr;?></span>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="Ange ett mobilnummer"  value="<?php echo $phone;?>">
                    </div>
                    <div class="form-group input-group col-md-12">
                        <span class="input-group error">* <?php echo $emailErr;?></span>
                        <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                        </div>
                        <input class="form-control" type="email" id="email"  name ="email" placeholder="Ange din epostadress"  value="<?php echo $email;?>" aria-label="email" aria-describedby="email">
                    </div>
                    <div class="form-group input-group col-md-12">
                        <span class="input-group error">* <?php echo $passwordErr;?></span>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input class="form-control" id="password" name="password" type="password" placeholder="Ange ett lösenord">
                    </div>
                    <div class="form-group input-group col-md-12">
                        <span class="input-group error">* <?php echo $confirm_passwordErr;?></span>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input class="form-control" id="confirm_password" name="confirm_password" type="password" placeholder="Ange ditt lösenord igen">
                        
                    </div>
                    <div class="form-group input-group col-md-12">
                        <span class="input-group error">* <?php echo $commentErr;?></span>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
                        </div>
                        <textarea class="form-control" id="comment" maxlength="150" name="comment" placeholder="Skriv gärna några rader här! (max 150 tecken)"><?php echo $comment;?></textarea>
                        
                        <div id="charNum"></div>
                    </div>
                    <div class="form-group input-group col-md-7 mb">
                        <span class="input-group error">* <?php echo $businessErr;?></span>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                        </div>
                        <select class="form-control" id="business" name="business">
                            <option value="null" selected disabled hidden>Vad har du utbildning?</option>
                            <option value="front" <?php if (isset($business) && $business=="front") echo "selected";?>>FrontEnd developer</option>
                            <option value="back" <?php if (isset($business) && $business=="back") echo "selected";?>>BackEnd developer</option>
                            <option value="full" <?php if (isset($business) && $business=="full") echo "selected";?>>FullStack developer</option>
                        </select>
                    </div>
                    <div class="custom-control custom-radio">
                    <span class="error"><?php echo $radiosErr;?></span>
                        <p class="form-control-static" id="p_radios">Vad vill du lära dig mer om?</p>
                        <input type="radio" id="radio1" name="radios" <?php if (isset($radios) && $radios=="html") echo "checked";?> class="custom-control-input" value="html">
                        <label class="custom-control-label" for="radio1">HTML5</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="radio2" name="radios" <?php if (isset($radios) && $radios=="css") echo "checked";?> class="custom-control-input" value="css">
                        <label class="custom-control-label" for="radio2">CSS3</label>
                    </div>
                    <div class="custom-control custom-radio mb">
                        <input type="radio" id="radio3" name="radios" <?php if (isset($radios) && $radios=="js") echo "checked";?> class="custom-control-input" value="js">
                        <label class="custom-control-label" for="radio3">Javascript</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="agree" name="agree">
                        <label class="custom-control-label" for="agree">Jag godkänner villkoren!</label>
                        <span class="error">* <?php echo $agreeErr;?></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary submit" id="submit" name="submit" type="submit">Skicka</button>
                    </div>
            </form>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>   
<script src="js/script.js"></script>
</body>
</html>
