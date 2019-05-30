<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit account</title>
    <link rel="stylesheet" href="../public/css/loginStyles.css">
    <script>
        function returnPage() {
            window.history.back();
        }
    </script>
</head>
<body>
<div class="outer middle inner">
    <div class="text-center">
    </div>
    <div class=" text-center center">
        <div><input class="form-control dataField" placeholder="site/application name"
                    id="siteName" style="margin-top:70px;"
        ></div>
        <div><input class="form-control dataField" placeholder="username"
                    id="username"
        ></div>
        <div><input type="password" class="form-control dataField" placeholder="password"
                    id="password"
        ></div>
        <div><input class="form-control dataField" placeholder="address"
                    id="address"
        ></div>
        <div><input class="form-control dataField" placeholder="comments"
                    id="comments"
        ></div>
        <h3>Reset reminder date:</h3>
        <div style="margin-top:-40px;"><input type="date" class="form-control dataField"
                                              id="resetReminder"
        ></div>
        <button onclick="returnPage();" id="newAccount" type="button" style="margin-top:35px;"
                class="button middle innerButton"><b>Create new account</b></button>
        <button onclick="returnPage();" id="resetPassword" type="button"
                class="button middle innerButton"><b>Cancel</b></button>
    </div>
</div>

</body>
</html>