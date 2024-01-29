<?php 
    $todoList = file_get_contents('toDoList.json');

    $list = json_decode($todoList, true);
    // FOR ADD TASK 
     if(isset($_POST['item'])){
        $name = $_POST['item'];
        $todoItem = [
            "name" => "$name",
            "done"=> false
        ];
        array_push($list, $todoItem);
        file_put_contents('todoList.json', json_encode($list));
    }

    // FOR REMOVE TASK 
    if(isset($_POST['key'])){
        $index = $_POST['key'];
        array_splice($list, $index, 1);
        file_put_contents('todoList.json', json_encode($list));
    }
    if(isset($_POST['done_index'])){
        $check = $_POST['done_index'];
        $list[$check]['done'] = !$list[$check]['done'];
        // $list["check"] = !$list["check"];
        file_put_contents('todoList.json', json_encode($list));
    }

    header('content-type: application/json');
    echo json_encode($list)
?>