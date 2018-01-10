<?php

    if (!empty($_POST['login']) && !empty($_POST['oldpw']) && !empty($_POST['newpw']) && !empty($_POST['submit']) && $_POST['submit'] === "OK") 
    {
        if (!file_exists('../private')) 
        {
            echo "ERROR\n";
            exit();
        }
        if (!file_exists('../private/passwd')) {
            echo "ERROR\n";
            exit();
        }

        $account = unserialize(file_get_contents('../private/passwd'));

        if ($account) {
            $exist = 0;
            foreach ($account as $k => $v) {
                if ($v['login'] === $_POST['login'] && $v['passwd'] === hash('whirlpool', $_POST['oldpw'])) {
                    $exist = 1;
                    $account[$k]['passwd'] =  hash('whirlpool', $_POST['newpw']);
                }
            }
            if ($exist) {
                file_put_contents('../private/passwd', serialize($account));
                echo "OK\n";
                 exit();
            } else {
                echo "ERROR\n";
                 exit();
            }
        } else {
            echo "ERROR\n";
             exit();
        }
    } else {
        echo "ERROR\n";
        exit();
    }
?>