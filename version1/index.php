<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Javascript & JQuery - inlämningsuppgift 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded">
            <form class="" id="signupForm" method="POST" action="registrera.php" autocomplete="off">
                <fieldset>
                    <legend>Javascript & JQuery - inlämningsuppgift 1</legend>
                </fieldset>
                    <div class="form-group input-group col-md-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" id="firstname" name="firstname" type="text" placeholder="Ange ditt förnamn">
                    </div>
                    <div class="form-group input-group col-md-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Ange ditt efternamn">
                    </div>
                    <div class="form-group input-group col-md-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="Ange ett mobilnummer">
                    </div>
                    <div class="form-group input-group col-md-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                        </div>
                        <input class="form-control" type="email" id="email"  name ="email" placeholder="Ange din epostadress" aria-label="email" aria-describedby="email">
                    </div>
                    <div class="form-group input-group col-md-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input class="form-control" id="password" name="password" type="password" placeholder="Ange ett lösenord">
                    </div>
                    <div class="form-group input-group col-md-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input class="form-control" id="confirm_password" name="confirm_password" type="password" placeholder="Ange ditt lösenord igen">
                    </div>
                    <div class="form-group input-group col-md-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
                        </div>
                        <textarea class="form-control" id="comment" maxlength="150" name="comment" placeholder="Skriv gärna några rader här! (max 150 tecken)"></textarea>
                    </div>
                        <div id="charNum"></div>
                    <div class="form-group input-group col-md-7 mb">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                    </div>
                        <select class="form-control" id="business" name="business">
                            <option value="" selected disabled hidden>Vad har du för utbildning?</option>
                            <option value="front">FrontEnd developer</option>
                            <option value="back">BackEnd developer</option>
                            <option value="full">FullStack developer</option>
                        </select>
                    </div>
                    <div class="custom-control custom-radio">
                        <p class="form-control-static">Vad vill du lära dig mer om?</p>
                        <input type="radio" id="radio1" name="radios" class="custom-control-input" value="html">
                        <label class="custom-control-label" for="radio1">HTML5</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="radio2" name="radios" class="custom-control-input" value="css">
                        <label class="custom-control-label" for="radio2">CSS3</label>
                    </div>
                    <div class="custom-control custom-radio mb">
                        <input type="radio" id="radio3" name="radios" class="custom-control-input" value="js">
                        <label class="custom-control-label" for="radio3">Javascript</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="agree" name="agree">
                        <label class="custom-control-label" for="agree">Jag godkänner villkoren!</label>
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
