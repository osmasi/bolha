<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BOLHA</title>

    <?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		//echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!-- Bootstrap Core CSS -->
	<link href="/bolha/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Fonts -->
	<link href="/bolha/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/bolha/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="/bolha/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="/bolha/css/animate.css" rel="stylesheet" />
	<!-- Squad theme CSS -->
	<link href="/bolha/css/style.css" rel="stylesheet">
	<link href="/bolha/color/default.css" rel="stylesheet">

</head>

<body style="background:#F7F7F7;">
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form heading-about marginbot-50" style='text-align: center;'>
                <section class="login_content">
                        <br>
                        <h1>Login</h1>
                        <div>
                            <?php echo $this->Session->flash(); ?>
                            <?php echo $this->fetch('content'); ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <p>©2015 All Rights Reserved. By <a>Os</a></p>
                            </div>
                        </div>

                </section>
                <!-- content -->
            </div>

</body>

</html>
