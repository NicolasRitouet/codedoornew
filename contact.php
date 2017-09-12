<?php
$email_from = $_POST['email'];
$to      = 'karan@codedoor.org';
$subject = 'I am interested in joining the Party';
$message = 'Please get back to me in 24h';
$headers = 'From: newuser@codedoor.org' . "\r\n" .
    'Reply-To: no-reply@codedoor.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $email_from, $headers);
?>
<!DOCTYPE html>
<head>
    <title>CodeDoor - We teach what people want.</title>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <meta name=viewport content="width=device-width">
    <meta name=robots content="index,follow,archive">
    <meta property="og:description" content="CodeDoor empowers you to improve your coding skills by building stuff with peers.">
    <meta property="og:image:height" content="100">
    <meta property="og:image:width" content="100">
    <meta property="og:image" content="https://raw.githubusercontent.com/CodeDoorHQ/codedoor.org/gh-pages/images/codedoor-logo.png">
    <meta property="og:title" content="CodeDoor empowers you to improve your coding skills by building stuff with peers">
    <meta property="og:type" content="website">
    <meta property="og:url" content="codedoor.org">
    <title>CodeDoor - We teach what people want.</title>
    <meta name=description content="CodeDoor empowers you to improve your coding skills by building stuff with peers.">
    <link rel=canonical href=http://codedoor.com/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="194x194" href="/favicon-194x194.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
    <div class="main">
            <?php include( 'home/headerthankyou.html');?>
            <!--How it works -->
            <!-- Refrencess  -->
            <?php include( 'home/ref.html');?>
            <!-- Footer  -->
            <?php include( 'home/footer.html');?>
        </div>
    <script src="js/deya.js"></script>
    <script src="js/fadein.js"></script>
</body>
</html>