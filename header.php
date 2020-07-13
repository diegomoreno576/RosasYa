<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="<?php  echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">
    <title><?php wp_title();?></title>
    <?php wp_head();?>
</head>
<body>

  <header id="fixed-top">
      <nav class="nav-color"></nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-main">
    <div class="container">
      <div class="main-logo">
        <div class="main-logo-item">
          <a class="navbar-brand" href="#">
            <img src="<?php  echo get_template_directory_uri(); ?>/public/image/logo-web-rosas-01.png" alt="">
          </a>
        </div>
      </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <?php wp_list_pages(
                        'title_li='
                    ); 
                    ?>
    
       
      </ul>
    </div>
   
  </nav>
    </div>
  </header>
  <section>