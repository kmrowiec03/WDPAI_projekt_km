<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zarejestruj sie</title>
    <link href="public/styles/text.css" rel="stylesheet" >
    <link href="public/styles/component.css" rel="stylesheet" >
    <link href="public/styles/button.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body> 
  <div class="Toolbar">
    <div class="LogoContainer">
      <img src="public/images/logo.png" alt="Logo firmy" class="Logo">
    </div>
    <div class ="Container_text">
      <div class="Text"><a href="https://www.twitch.tv" target="_blank">Twitch</a></div>
    </div>
    <div class ="Container_text">
      <div class="Text"><a href="https://www.youtube.com" target="_blank">Youtube</a></div>
    </div>
    <div class ="Container_text">
      <div class="Text"><a href="https://www.google.com" target="_blank">Google</a></div>
    </div>
    
  </div>
  <div class="Container_column">  
    <div class="LogoContainer">
      <img src="public/images/logo.png" alt="Logo firmy" class="Logo Logo-big" width="450px">
    </div>
    <div class="SignInComponent">
        <div class="BigText">Zarejestruj sie</div>
          <form action="/login" method="POST">
            <div class="Big-Button Sign_Button">
              <input type="email" name="eMail"></input>
            </div>
            <div class="Big-Button Sign_Button">
                <input type="password"name="password"></input>
            </div>
            <div class="Big-Button Sign_Button">
              <input type="password"></input>
            </div>
            <div  class="Big-Button Sign_Button Confirm-button" >
              <button type="submit">SIGN IN</button>
            </div>
          </form>
          
    </div>
  </div>
  
</body>
</html>