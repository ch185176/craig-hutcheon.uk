<!DOCTYPE html>
<html> 
    <head>
        <?php
        require_once 'config.php';
        $page = "Contact Me";
        require_once 'includes/header.php'
        ?>
    </head>
    <body>
        <?php require_once 'includes/nav.php' ?>
        <div class="container" style="margin-top:10px">
            <h1>Contact Me</h1>
            <p>If you wish to contact me, please use this form to get in touch.</p>
        </div>
        <div class="container" style="margin-top:10px">
            <form action="includes/form.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="query">Query:</label>
                    <textarea rows="5" class="form-control" name="query"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
        <?php require_once 'includes/footer.php'?>
</html>


