<?php

    if (!empty($_POST['login']) && !empty($_POST['passwd']) && !empty($_POST['submit']) && $_POST['submit'] === "OK") 
    {
        if (!file_exists('../private')) {
            mkdir("../private");
        }
        if (!file_exists('../private/passwd')) {
            file_put_contents('../private/passwd', null);
        }
        $account = unserialize(file_get_contents('../private/passwd'));
        $exist = false;
        if ($account) {
            foreach ($account as $elem) {
                if ($elem['login'] === $_POST['login'])
                    $exist = true;
            }
        }
        if ($exist) {
            echo "ERROR\n";
        } else {
            $tmp['login'] = $_POST['login'];
            $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
            $account[] = $tmp;
            file_put_contents('../private/passwd', serialize($account));
            echo "OK\n";
        }
    } else {
        echo "ERROR\n";
    }
?>