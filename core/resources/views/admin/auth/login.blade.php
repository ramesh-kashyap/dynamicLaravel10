<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMC P2P Exchange - Admin Login</title>

    <link rel="shortcut icon" type="image/png" href="assets/images/logoIcon/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/admin/css/vendor/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="assets/global/css/all.min.css">
    <link rel="stylesheet" href="assets/global/css/line-awesome.min.css">

    
    <link rel="stylesheet" href="assets/admin/css/vendor/select2.min.css">
    <link rel="stylesheet" href="assets/admin/css/app.css">

    </head>
<body>
        <div class="login-main" style="background-image: url('assets/admin/images/login.jpg')">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8 col-sm-11">
                    <div class="login-area">
                        <div class="login-wrapper">
                            <div class="login-wrapper__top">
                                <h3 class="title text-white">Welcome to <strong>TMC P2P Exchange</strong></h3>
                                <p class="text-white">Admin Login to TMC P2P Exchange
                                    Dashboard</p>
                            </div>
                            <div class="login-wrapper__body">
                                <form action="http://localhost/p2pexchange/p2pexchange/admin" method="POST" class="cmn-form mt-30 verify-gcaptcha login-form">
                                    <input type="hidden" name="_token" value="0JKpFwvIZB83vRIRHxhDr00QBV96aRY9pClgwoXH">                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" value="" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                                                        <div class="d-flex flex-wrap justify-content-between">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" name="remember" type="checkbox" id="remember">
                                            <label class="form-check-label" for="remember">Remember Me</label>
                                        </div>
                                        <a href="http://localhost/p2pexchange/p2pexchange/admin/password/reset" class="forget-text">Forgot Password?</a>
                                    </div>
                                    <button type="submit" class="btn cmn-btn w-100">LOGIN</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="assets/admin/js/vendor/bootstrap-toggle.min.js"></script>
    <script src="assets/admin/js/vendor/jquery.slimscroll.min.js"></script>


    <link rel="stylesheet" href="assets/global/css/iziToast.min.css">
<script src="assets/global/js/iziToast.min.js"></script>



<script>
    "use strict";

    function notify(status, message) {
        if(typeof message == 'string'){
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }else{
            $.each(message, function(i, val) {
                iziToast[status]({
                    message: val,
                    position: "topRight"
                });
            });
        }
    }
</script>
    
    <script src="assets/admin/js/nicEdit.js"></script>

    <script src="assets/admin/js/vendor/select2.min.js"></script>
    <script src="assets/admin/js/app.js"></script>
    <script src="assets/admin/js/cu-modal.js"></script>

    
    <script>
        "use strict";
        bkLib.onDomLoaded(function() {
            $( ".nicEdit" ).each(function( index ) {
                $(this).attr("id","nicEditor"+index);
                new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
            });
        });
        (function($){
            $( document ).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain',function(){
                $('.nicEdit-main').focus();
            });
        })(jQuery);

        function titleCase(string){
            return string.replaceAll("_", ' ').replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
        };
    </script>

    

</body>
</html>