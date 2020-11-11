<?php

// Handle Post
if (count($_POST))
{
    // Parse
    $loginData = file('BD.txt');
    $accessData = array();
    foreach ($loginData as $line) {
        list($username, $password) = explode(' ', $line);
        $accessData[trim($username)] = trim($password);
    }

    // Parse form input
    $mid = isset($_POST['mid']) ? $_POST['mid'] : '';
    $mpassword = isset($_POST['mpassword']) ? $_POST['mpassword'] : '';

    // Check input versus
    if (array_key_exists($mid, $accessData) && $mpassword == $accessData[$mid]) {
        echo "Username and Password is correct";
    } else {
        echo "Invalid username and/or password";
    }
}

?>

<html lang="en">
<head>
    <title>test</title>
</head>
<body>
<h1>Login Page</h1>
<form id="regform" method="post" action="">
    <p>Manager ID:<input type="text" name="mid" required="required" /></p>
    <p>Password:<input type="password" name="mpassword" required="required" /></p>
    <input type="submit" value="Login"/>
</form>
</body>
</html>