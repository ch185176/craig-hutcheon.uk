<!DOCTYPE html>
<html> 
    <head>
        <?php
        require_once 'config.php';
        $page = "Home";
        require_once 'includes/header.php'
        ?>
    </head>
    <body>
        <?php require_once 'includes/nav.php' ?>
        <div class="container" style="margin-top:10px">
            <?php
                $homePage = $ContentRepo->retrieveHomePage();
            ?>
            <h1><?=$homePage->heading?></h1>
            <h2><?=$homePage->sub_heading?></h2>
            <p><?=$markdown->defaultTransform($homePage->content);?></p>
        </div>
    </body>
        <?php require_once 'includes/footer.php'?>
</html>
