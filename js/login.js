var working = false;
function submitLogin()  {
    var pass = document.getElementById("password").value;
    var user = document.getElementById("name").value;
    //var captcha = grecaptcha.getResponse();
    var returnurl = document.getElementById("returnurl").value;
    $.ajax({
        type: "POST",
        url: "https://api-v3.nfls.io/user/login",
        data: {
            username: user,
            password: pass,
        },
        statusCode: {
            200: function() {
                alert('Success');
            },

            401: function() {
                alert('Wrong username or password');
            },

            500: function() {
                alert('server crashed');
            },


        }
/*
        dataType: "json",
        success: function (message) {
            if (message.status == "succeed") {
                if(message.info.status == "success" ){
                    setTimeout(function () {
                        if (returnurl == "")
                            window.location.href = "https://center.nfls.io/center/";
                        else
                            window.location.href = returnurl;
                    }, 500);
                } else {
                    setTimeout(function () {
                        grecaptcha.reset();
                    }, 1500);
                }

            }
            else {
                $this.addClass('error');
                $state.html(message.message);
                setTimeout(function () {
                    window.location.href = "index.php?action=login";
                }, 1500);

            }


        },
        error: function (message) {
            working = false;
            alert("Server error, please try again.");
            window.location.href = "index.php?action=login";
        }*/
    });


}
