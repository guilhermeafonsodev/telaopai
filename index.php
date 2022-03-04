<!DOCTYPE html>
<html lang="pt-br">
<?php
include_once('fn/scripts.php');
strip_php_extension();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">
    <title>&lt;Tela o Pai&gt;</title>
    <?php include('assets/includes/head.php') ?>
</head>

<body>
    <nav>
        <a href="./"><img src="assets/img/logotipo.svg" width="100" /></a>
        <?php include('assets/includes/main-menu.php'); ?>
    </nav>

    <main id="home">
        <?php include('assets/includes/slider.php'); ?>
    </main>

    <div class="personagem1 personagens"></div>
    <?php include('assets/includes/footer.php'); ?>
    <script type='text/Javascript'>
        for (let i = 0; i < document.links.length; i++) {
        if (document.links[i].href == document.URL) {
            document.links[i].className = 'active';
        } else {
            document.links[0].className = 'active';
        }
    }

    let splide = new Splide('#slide', {
        type: 'fade',
        perPage: 1,
        rewind: true,
        autoplay: true,
        arrowPath: '0',
    });
    splide.mount();
    </script>
</body>

</html>