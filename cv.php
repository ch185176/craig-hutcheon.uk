<!DOCTYPE html>
<html> 
    <head>
        <?php
        require_once 'config.php';
        $page = "CV";
        require_once 'includes/header.php'
        ?>
        <?php require_once 'includes/nav.php' ?>
    </head>
    <body style="padding-bottom:20%;">
        <div class="container" style="margin-top:10px">
            <?php
                $CVPage = $ContentRepo->retrieveCVPage();
            ?>
            <h1><?=$CVPage->heading?></h1>
            <h2><?=$CVPage->sub_heading?></h2><br>

            <a class="btn btn-primary" href="<?= "http://craig-hutcheon.uk/". $CVPage->cv_file ?>" download="Craig_CV.pdf">Download</a>
            <p><?=$markdown->defaultTransform($CVPage->content);?></p>
        </div>
    </body>
        <?php require_once 'includes/footer.php'?>
</html>