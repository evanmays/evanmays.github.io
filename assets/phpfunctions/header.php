<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <title><?php echo $title; ?></title>
    <meta name="author" content="Evan Mays">
    <meta name="google-site-verification" content="ESYt_bLI3ggJnOUMFqc-Gg5AODP6qbLGT3xl3BQNJqU" />

    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:type" content="<?php echo $ogType; ?>" />
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta property="og:image" content="<?php echo $img; ?>" />
    <meta property="og:url" content="<?php echo $url; ?>" />

    <!-- Twitter Card Tags -->
    <meta property="twitter:title" content="<?php echo $title; ?>" />
    <meta name="twitter:card" content="summary" />
    <meta property="twitter:description" content="<?php echo $description; ?>" />
    <meta name="twitter:site" content="@evanisagenius" />
    <meta name="twitter:creator" content="@evanisagenius" />
    <meta name="twitter:url" content="<?php echo $url; ?>" />
    <meta property="twitter:image" content="<?php echo $img; ?>" />
    
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom styles for this website that need to load first -->
    <link href="//evanmays.com/assets/css/main.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <?php if(isset($blog)) { ?>
    <!-- BEGIN PRIVY WIDGET CODE -->
    <script type='text/javascript'> var _d_site = _d_site || 'D572DD87773D21994C7D36E8'; </script>
    <script src='//widget.privy.com/assets/widget.js'></script>
    <!-- END PRIVY WIDGET CODE -->
    <?php } ?>

  </head>

  <body>
    <div id="topcontainer">