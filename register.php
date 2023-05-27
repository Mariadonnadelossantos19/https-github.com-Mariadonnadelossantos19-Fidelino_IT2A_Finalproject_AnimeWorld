<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password !== $confirmPassword) {
        $error = "Passwords do not match!";
    } else {
        $xmlFilePath = 'Fidelino_IT2A_AnimeWolrd.xml';

        if (file_exists($xmlFilePath)) {
            $xml = simplexml_load_file($xmlFilePath);

            foreach ($xml->user as $user) {
                if ($user->username == $username) {
                    $error = "Username already exists!";
                    break;
                }
            }
        } else {
            $xml = new SimpleXMLElement('<users></users>');
        }

        if (empty($error)) {
            $user = $xml->addChild('user');
            $user->addChild('username', $username);
            $user->addChild('password', $password);

            $xml->asXML($xmlFilePath);

            echo "<script>window.location.href = 'login.php';</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Register"?></title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="script/login1.css">
</head>

<body>
    <div class="container">
        <div class="design">
            <div class="pill-1 rotate-45"></div>
            <div class="pill-2 rotate-45"></div>
            <div class="pill-3 rotate-45"></div>
            <div class="pill-4 rotate-45"></div>
        </div>
        <div class="login">
            <h3 class="title"><?php echo "Create account"?></h3>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="text-input">
                <i class="ri-user-fill"></i>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="text-input">
                <i class="ri-lock-fill"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="text-input">
                <i class="ri-lock-fill"></i>
                <input type="password" name="confirm_password" placeholder="Confirm Password">
            </div>
            <?php if (!empty($error)): ?>
                    <p class="error" style="color: red; font-size: 10px;"><?php echo $error; ?></p>
                <?php endif; ?>
            <button type="submit" class="login-btn"><?php echo "REGISTER"?></button>
            
            <div class="create">
                
                <h1><?php echo "Already have an account?"?></h1>
                <a href="login.php"><?php echo "Login"?></a>
                <i class="ri-arrow-right-fill"></i>
            </div>
        </div>
    </div>
</body>

</html>