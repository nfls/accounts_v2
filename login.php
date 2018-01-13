<!DOCTYPE html>
<html>
<title>nfls.io Game center</title>
<head>
    <!--Import Google Icon Font-->
    <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>

<body bgcolor="#FFFFFF">
    <style type="text/css">

    
      @media screen and (max-width: 640px){
        body{
         width: 100%;
         height: 85%;
         background: url(images/bg.svg);
         background-color: rgb(255,255,255);
         position: absolute;
         margin: auto;
         left: 0;
         right: 0;
         top: 0;
         bottom: 0;
        }
    }

    @media screen and (min-width: 640px){
        body{
         width: 640px;
         height: 640px;
         background: url(images/bg.svg);
         background-color: rgb(255,255,255);
         overflow: auto;
         margin: auto;
         position: absolute;
         left: 0;
         right: 0;
         top: 0;
         bottom: 0;
         z-index: 999;
        }
    }


   
  </style>

    <div class="row">
        <div class="card">
            <div class="row">
                <div style="line-height:150%;">
                    <br>
                </div>
                <div class="card-image col s2 offset-s1">
                    <img src="images/nfls.png" style="width:75px;height:75px;">
                </div>
                <div class="col s10 offset-s1">
                    <div style="line-height:150%;">
                        <br>
                    </div>
                    <font size="4">Sign in with your nfls.io account</font>
                </div>
                <div class="col s10 offset-s1">
                    <div style="line-height:150%;">
                        <br>
                    </div>
                </div>
                <div class="input-field col s10 offset-s1">
                    <input id="name" type="text" class="validate">
                    <label for="name">Enter your Email Address or Phone number</label>
                </div>
                <div class="input-field col s10 offset-s1">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>

                <div class="input-field col s10 offset-s1">
                    <input type="hidden" id="returnurl" value=<?php
        if(isset($_GET['redir']))
            echo '"'.$_GET['redir'].'"';
        else if(isset($_SERVER['HTTP_REFERER']))
            echo '"'.$_SERVER['HTTP_REFERER'].'"' ;
        else
            echo '""';
    ?>
    />
                </div>
                <div>
                    <a class="col s5 offset-s1 grey-text text-lighten-1" href="?action=forget">Forgot my password</a>
                </div>

                <div class="col s10 offset-s1">
                    <div style="line-height:50%;">
                        <br>
                    </div>
                </div>

                <div>
                    <a class="col s5 offset-s1 grey-text text-lighten-1" href="?action=forget">Doesn't have an io account?</a>
                </div>

                <div class="col s10 offset-s1">
                    <div style="line-height:150%;">
                        <br>
                    </div>
                </div>

                <div class="g-recaptcha col s10 offset-s1" data-sitekey="6Lc0GTMUAAAAAARFMMHvdwE14X3nIgoLXx7SF2F5"></div>
                
                <div class="col s10 offset-s1">
                    <div style="line-height:200%;">
                        <br>
                    </div>
                </div>
                <div>
                    <a class="waves-effect waves-light blue btn col s3 offset-s8" onclick="submitLogin()">Sign in</a>
                </div>
                
                <div class="col s10 offset-s1">
                    <div style="line-height:150%;">
                        <br>
                    </div>
                </div>

            </div>
    </div>



</body>




</html>
<script>
    $(document).ready(function(){
        $('.slider').slider();
    });
</script>
<script src="js/login.js"></script>
<script src='https://www.recaptcha.net/recaptcha/api.js'></script>