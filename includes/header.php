<?php
    $headers = $ContentRepo->retrieveHeader($page);
?>
<?php foreach($headers as $header): ?>
<div class="jumbotron text-center" style="margin-bottom:0; background-image:url(<?='https://craig-hutcheon.uk/'.$header->banner->path;?>); background-size: cover;">
    <div class="row align-items-center justify-content-center">
        <div class="p-3 mb-2 bg-dark text-light" style="width:40%; font-family:playfair_displayregular;">
            <h1><?=$header->title;?></h1>
            <p><?=$markdown->defaultTransform($header->content);?></p>
        </div>
    </div>
</div>
<?php endforeach;