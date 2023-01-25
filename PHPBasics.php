<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-1: PHP Basics</title>
</head>
<body>
    <?php 
    $yourName = 'Gabriel Lanphier';
    echo "<h1>Assignment 3:1 PHP Basics</h1>";
    $number1 = 8;
    $number2 = 15;
    $total = $number1 + $number2;
    ?>
    <h2><?php echo $yourName ?></h2>
    <?php 
    echo "Number 1: $number1, Number 2: $number2, Total: $total";
    $array = array("PHP","HTML","JavaScript");
    echo "<script>jsArray = []</script>";
    ?>
    <script>
            jsArray = <?php echo json_encode($array); ?>;
       
        document.write("<br>" + jsArray);
    </script>
    
</body>
</html>