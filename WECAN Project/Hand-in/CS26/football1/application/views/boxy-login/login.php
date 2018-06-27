<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>boxy-login</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div id="wrapper">

      <div id="boxy-login-wrapper">

             <form id="boxy-login-form" name="boxy-login-form" > 
              
                  <fieldset>
                      <div class="boxy-form-inner rotateFirst3d">
            
                          <span class="end-cap left"><span class="glyphicon glyphicon-user" data-toggle="tooltip" title="click to login"></span></span>
                      
                            <span class="side front">
                                  <span class="glyphicon glyphicon-user" data-toggle="tooltip" title="enter your username"></span>
                                  <input id="boxy-input"  type="input" name="username" class="rotate" placeholder="username" required />
                                  <button class="boxy-button next-field" data-step="0"></button>
                            </span>

                            <span class="side bottom">
                                  <span class="glyphicon glyphicon-asterisk" data-toggle="tooltip" title="enter your password"></span>
                                  <input id="boxy-password" step="2" type="password" name="password" class="rotate" placeholder="password" required />
                                  <button class="boxy-button next-field sub" data-step="1"></button>
                            </span>

                            <span class="side back">
                                  <span class="boxy-checked glyphicon glyphicon-check"></span>
                                  <span class="boxy-unchecked glyphicon glyphicon-unchecked"></span>
                                      <label for="remember-me">
                                        <input id="remember-me" type="checkbox" name="remember-me" checked />remember me next time?
                                      </label>
                                  <button class="boxy-button boxy-final-button" data-step="2">OK</button>
                            </span>

                            <span class="side top">
                                  <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" title="we'll email login details."></span>
                                  <input id="boxy-email" step="9" type="email" name="email" class="rotate" placeholder="email" />
                                  <button class="boxy-button next-field forgot-btn" data-step="9"></button>
                            </span>
                            <span class="end-cap right">
                                <span class="glyphicon glyphicon-remove-circle icon-failure" data-toggle="tooltip" title="login failed, try again"></span>
                                <span class="glyphicon glyphicon-user icon-success" data-toggle="tooltip" title=""></span>
                            </span>
                      </div>
                  </fieldset>
               </form>

            <span class="boxy-refresh glyphicon glyphicon-refresh"></span>
            <em class="small-forgot">
                      <a href="#" class="boxy-forgot">forgot?</a>
            </em>

        </div>
   </div>
<div id="r8-logo-coin" ></div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.2.0/bootbox.min.js'></script>
<script src='http://s3-us-west-2.amazonaws.com/s.cdpn.io/1251/bootstrap.glyphs.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
