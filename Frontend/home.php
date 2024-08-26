<?php 
include 'Components/index.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Red Social</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="vh-100"> 
    <div class="h-100 d-flex flex-column justify-content-between">
        <?php
        $header = new HeaderPage();
        $header->render();
        $footer = new Footer();
        $footer->render();
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/c7e1fdae8a.js" crossorigin="anonymous"></script>
</body>
</html>
