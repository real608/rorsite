<!DOCTYPE html>
<html>
    <head>
        <title>Forbidden</title>
        <meta charset="UTF-8">
    </head>
        <h1>Forbidden</h1>
        <?php $url = $_SERVER['REQUEST_URI']; ?>
        <div>You don't have permission to access <?= $url ?> on this server.</div>
</html>