<?php
	
	function auth($login, $passwd)
	{
		if (empty($login) || empty($passwd))
			return (false);
		if (!file_exists('../private')) 
        	return (false);
        if (!file_exists('../private/passwd'))
        	return (false);

        $account = unserialize(file_get_contents('../private/passwd'));

        if ($account)
        {
        	foreach ($account as $k => $v) {
                if ($v['login'] === $login && $v['passwd'] === hash('whirlpool', $passwd))
                    return (true);
            }
            return (false);
        }
        else
        {
        	return (false);
        }
	}

	//debug FNC
	//echo "Account exists : " .auth("qwerty", "qwerty") ." wrong psq : " .auth("qwerty", "qwertgygygyy") ." wrong id : " .auth("qweawawawrty", "qwerty");

?>