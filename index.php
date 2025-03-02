<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="color: red;">index.php = default script in directory</h1>

    <!-- Showing things in PHP -->
    <?php
    echo "Hello,";
    print ("World!");
    ?>

    <!-- Same as above but shorter (don't use) -->
    <?= ":3"; ?>
    <hr>
    <!-- Print vs Echo -->
    <?php
    $printA = print ("A");
    //$printB = echo("B"); // echo doesn't return anything
    ?>
</body>

</html>