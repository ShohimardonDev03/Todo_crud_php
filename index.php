<?php
include './db_conf.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
    <script src="js/handle.js"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>


<div class=" main-section">

    <!-- Add section -->
    <div class="add-section">

        <form method="post" autocomplete="off" action="app/add.php">


            <input type="text" name="title" id="title" placeholder="This field is required"/>

            <button type="submit">Add &nbsp; <span>&#43;</span></button>

        </form>

    </div>
    <!-- / Add section -->


    <!-- Todo section  -->

    <div class="show-todo-section">


        <?php
        if (count($allTasks) <= 0) {

            //            echo "Task ID: " . $task['id'] . ", title: " . $task['title'] . "<br>";

            ?>
            <!-- todo-item -->
            <div class="todo-item">

                <div class="empty">

                    <img src="image/f.png" width="100%"/>
                    <img src="image/Ellipsis.gif" width="20%">
                </div>
            </div>

        <?php } ?>


        <?php


        foreach ($allTasks as $task) {

//            echo "Task ID: " . $task['id'] . ", title: " . $task['title'] . "<br>";

            ?>
            <!-- todo-item -->

            <div class="todo-item">
                <span onclick="handleDelete(<?php
                $id = $task["id"];
                echo $id ?> )" class="remove-to-do">X</span>


                <input type="checkbox" onclick="handleClick(<?php echo $id; ?>,this)" <?php

                if ($task["checked"] == "t") {
                    print "checked";
                };
                ?>

                <h2><?php print $task['title'] ?></h2>


                <small> <?php

                    $date = new DateTime($task['date_time']);


                    echo $date->format('Y-m-d H:i:s');

                    ?></small>

            </div>

        <?php } ?>
        <!-- /todo-item -->


    </div>
    <!-- / Todo section  -->

</div>

</body>

</html>