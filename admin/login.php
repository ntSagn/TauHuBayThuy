<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="bg">
        <div class='loginContainer'>
            <h1>Đăng nhập Admin</h1>
            <div class="modal-content">
                <a href="../index.html" style="color: black;"><span class="close">&times;</span></a>
                <form id="loginForm" action="login.php" method="post">
                    <label for="username"></label>
                    <input type="text" name="username" required placeholder="Tên đăng nhập">

                    <label for="password"></label>
                    <input type="password" name="password" required placeholder="Mật Khẩu">

                    <button type="submit">Đăng Nhập</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<!-- <script>
    $(document).ready(function(){
        $('#eye').click(function(){
            $(this).toggleClass('open');
            $(this).children('i').toggleClass('fa-eye-slash fa-eye');
            if($(this).hasClass('open')){
                $(this).prev().attr('type', 'text');
            }else{
                $(this).prev().attr('type', 'password');
                }
        }   );
    });
</script> -->
</html>