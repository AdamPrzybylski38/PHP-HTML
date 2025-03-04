<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
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

    <!-- Comments in html are visible -->
    <?php
    // Comments in PHP are not visible
    # Single line comment
    /*
    Multi-line comment
    */
    ?>

    <!-- <?php
    echo "comment visible in source";
    ?> -->

    <?php
    echo "<!-- this is also visible -->";
    ?>

    <!-- JavaScript usage in PHP example -->
<!--
    <script>
        <?php echo 'alert("Wykryto wirums!!1!1");'; ?>
        <?php echo 'confirm("OK");'; ?>
    </script>
-->
    
</body>

</html>