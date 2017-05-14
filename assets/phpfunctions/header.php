<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($currentPage == "websites"){
    	echo '<meta name="description" content="The portfolio page of websites worked on by Evan Mays.">';
    }
    elseif ($currentPage == "home") {
    	echo '<meta name="description" content="The portfolio website of Evan Mays. The website designer, software developer, and manager.">';
    }
    elseif ($currentPage == "contact") {
    	echo '<meta name="description" content="Evan Mays'."'".'contact info.">';
    }
    ?>
    
    <meta name="author" content="Evan Mays">
    <meta name="google-site-verification" content="ESYt_bLI3ggJnOUMFqc-Gg5AODP6qbLGT3xl3BQNJqU" />
    <?php if ($currentPage == "websites"){
    	echo '<title>Websites by Evan Mays</title>';
    }
    elseif ($currentPage == "home") {
    	echo '<title>Evan Mays Websites & More</title>';
    }
    elseif ($currentPage == "contact") {
        echo '<title>Contact Evan Mays</title>';
    }
    elseif ($currentPage == "wordpressplugins") {
        echo '<title>Wordpress Plugins by Evan Mays</title>';
    }
    elseif ($currentPage == "allwebsites") {
    	echo '<title>Websites by Evan Mays</title>';
    }
    ?>
    

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom styles for this website that need to load first -->
    <link href="//evanmays.com/assets/css/main.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="topcontainer">