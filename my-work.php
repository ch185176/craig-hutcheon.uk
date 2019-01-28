<!DOCTYPE html>
<html> 
    <head>
        <?php
        require_once 'config.php';
        $page = "My Work";
        require_once 'includes/header.php'
        ?>
    </head>
    <body>
        <?php require_once 'includes/nav.php' ?>
        <div class="container" style="margin-top:10px">
            <?php
                $MyWorkPage = $ContentRepo->retrieveMyWork();
            ?>
            <h1><?=$MyWorkPage->heading?></h1>
            <h2><?=$MyWorkPage->sub_heading?></h2>
            <p><?=$markdown->defaultTransform($MyWorkPage->content);?></p>
        </div>
    </body>
    <footer>
        <?php require_once 'includes/footer.php'?>
    </footer>
</html>