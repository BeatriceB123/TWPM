<?php 
    function unsetCookiesForAddNewAccount()
    {
        setcookie('siteName', null, -1, '/');
        setcookie("username", null,-1, '/');
        setcookie("address", null, -1, '/');
        setcookie("comments", null,-1, '/');
        setcookie("reminderDate", null,-1, '/');
        setcookie("response", null ,-1, '/');
    }

    function unsetCookie($nameOfCookieToUnset)
    {
        setcookie($nameOfCookieToUnset, null, -1, '/');
    }

?>
