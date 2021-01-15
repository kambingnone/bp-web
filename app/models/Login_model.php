<?php

class Login_model
{
    public function getHasil()
    {
        if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
            if ($_REQUEST['username'] == 'admin' && $_REQUEST['password'] == 'admin') {
                return true;
            }
        } else {
            return false;
        }
    }
}
