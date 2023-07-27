<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotech</title>
    <link rel="stylesheet" href="./styles.css">

</head>

<body>
    <header>
        <img src="./assets/Logo.svg" />
    </header>
    <?php
require('Controller/SeeData.php');
require('View/FormSave.php');
?>
    <footer>
        <div class='box'>
            <div class='flexbox'>
                <ul class='flex'>
                    <li class='margin-li'>About us</li>
                    <li>Contact</li>
                </ul>
                <ul class='flex'>
                    <li class='flex margin-li'><img src='./assets/Twitter.svg' alt='twitter icon'
                            class='logo-icons' />Twitter
                    </li>
                    <li class='flex'><img src='./assets/Facebook.svg' alt='facebook icon' class='' />Facebook
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>