<?php 

    namespace auth;

    function hasUse() : bool 
    {
        if(isset($_SESSION['loggedUser'])) {
            return true;
        } else {
            return false;
        }
    }

    function logout() : void 
    {
        unset($_SESSION['loggedUser']);
        unset( $_SESSION['userData']);
        session_destroy();
    }