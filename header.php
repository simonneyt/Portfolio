<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Assistant:400,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Portfolio</title>
        <?php wp_head();?>
    </head>
    <body>
        <header id="home">
          <div class="page-header">
            <nav class="navbar">
                <span class="navbar__logo"></span>
                <ul class="navbar__list">
                    <li class="navbar__item"><a href="#home" class="navbar__item__link">Home</a></li>
                    <li class="navbar__item"><a href="#work" class="navbar__item__link">Work</a></li>
                    <li class="navbar__item"><a href="#about" class="navbar__item__link">About</a></li>
                </ul>
            </nav>
            <div class="textbox">
                <span class="textbox__head" id="Naam"><?php echo get_bloginfo( 'description' ); ?></span>
                <span class="textbox__type-cursor">|</span>
            </div>
          </div>
        </header>