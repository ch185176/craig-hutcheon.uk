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
            <div class="row">
                <?php
                    $MyWorkPage = $ContentRepo->retrieveMyWork();
                ?>
                <h1><?=$MyWorkPage->heading?></h1>               
            </div>
            <div class="row">
                <h2><?=$MyWorkPage->sub_heading?></h2>
            </div>
            <div class="row">
                <p><?=$markdown->defaultTransform($MyWorkPage->content);?></p>
            </div>
            <?php
                $Articles = $ContentRepo->retrieveArticles();
                
                foreach($Articles as $Article)
                {
                    $thumbnail = $Article->thumbnail->path;
                    $title = $Article->title;
                    $description = $Article->description;
                    echo('<div class="row">');
                    echo('<div class="col-sm-4">');
                    echo('<h3>'. $title .'</h3>');
                    echo('</div>');
                    echo('<div class="col-sm-4">');
                    echo('<img src="https://craig-hutcheon.uk/'. $thumbnail .'" alt="'. $title .'" class="img-thumbnail">');
                    echo('</div>');
                    echo('<div class="col-sm-4">');
                    echo('<p>'. $markdown->defaultTransform($description) .'</p>');
                    echo('</div>');
                    echo('</div>');
                }
            ?>
        </div>
    </body>
        <?php require_once 'includes/footer.php'?>
</html>