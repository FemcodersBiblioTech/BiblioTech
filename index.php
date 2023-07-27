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
    <?php
require('View/Header.php');
require('View/SeeData.php');
require('View/FormSave.php');
?>
    <footer class= 'container-footer'>
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
                    <li class='flex flex-col items-center xl:flex-row'><img src='./assets/Facebook.svg'
                            alt='facebook icon' className=' h-[1.2em] w-[1.2em] mb-[0.15em] xl:mr-3 xl:mb-0' />Facebook
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>