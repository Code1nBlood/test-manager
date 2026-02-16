<?php
    require "vendor/autoload.php";

    use App\User;
    use App\Task;

    $user = new User("Иван", "0bM2p@example.com");
    $task = new Task("Помыть посуду");

    echo $user -> getInfo() . "<br>" . $task -> getTitle();

    $task -> complete();
    echo "<br>" . $task -> isCompleted() ? "Задача выполнена" : "Задача не выполнена";
?>