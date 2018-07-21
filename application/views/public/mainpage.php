<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo $pagetitle; ?></title>
        <meta name="author" content="">
        <meta name="description" content="<?php echo $metadesc; ?>">
        <meta name="keyword" content="<?php echo $metakey; ?>"> 
        <link rel="shortcut icon" type="image/png" href=""/>
        <meta name="robots" content="all,follow">
        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap and Font Awesome css-->
        <!-- we use cdn but you can also include local files located in css directory-->
        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.png">
    </head>
    <body>
		<?php $this->view($layout);?>
	</body>
</html>