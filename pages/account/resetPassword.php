<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset password</title>
    <link rel="stylesheet" href="../../public/css/loginStyles.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../../public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../public/images/favicon/favicon-96x96.png">
</head>
<body>
<div class="outer middle inner">
    <h1 class="text-center"><u><b>Reset password</b> </u></h1>
    <div class="text-center">
    </div>
    <div class=" text-center center">
        <div><input class="form-control dataField" placeholder="username" id="username" style="margin-top:90px;"
        ></div>
        <div><input class="form-control dataField" placeholder="reset code" id="resetCode"
        ></div>
        <div><input type="password" class="form-control dataField" placeholder="new password" id="password"
        ></div>
        <div><input type="password" class="form-control dataField" placeholder="confirm new password"
                    id="confirmPassword"
        ></div>
        <button onclick="location.href = 'login.php';" id="resetPassword" type="button" style="margin-top:35px;"
                class="button middle innerButton"><b>Confirm reset password</b></button>
    </div>
</div>

</body>
</html>