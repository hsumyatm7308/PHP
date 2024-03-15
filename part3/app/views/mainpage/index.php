<?php
// echo "i am manpage index form view";
// error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo APPNAME ?>
    </title>
</head>

<body>

    <!-- <p>Hi</p> -->

    <h1>
        <!-- <?php echo $data['greeting']; ?> -->
        <h3>
            <?php echo URLROOT ?>
        </h3>
        <h3>
            <?php echo APPROOT ?>
        </h3>

        <h3>
            <?php echo APPNAME ?>
        </h3>
    </h1>

    <!-- <h1>
        <?php echo $data['title'] ?>
    </h1>
    <h1>
        <?php echo $data['articles'] ?>
    </h1> -->

    <!-- <?php var_dump($data['brandnames']); ?> -->
    <ul>
        <?php foreach ($data['brandnames'] as $brandname): ?>
            <li>
                <?php echo $brandname['brandname']; ?>
            </li>
        <?php endforeach; ?>
    </ul>


</body>

</html>