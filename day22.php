<?php
show_source(__FILE__);
if (isset($_POST['password'])) {
    setcookie('hash', md5($_POST['password']));
    header("Refresh: 0");
    exit;
}

$password = '0e836584205638841937695747769655';
if (!isset($_COOKIE['hash'])) {
    echo '<form><input type="password" name="password" />'
       . '<input type="submit" value="Login" ></form >';
    exit;
} elseif (md5($_COOKIE['hash']) == $password) {
    echo 'Login succeeded';
} else {
    echo 'Login failed';
}
