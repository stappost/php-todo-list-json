<?php 
    $todoList = file_get_contents('toDoList.json');

    $list = json_decode($todoList, true);

     if(isset($_POST['item'])){
        $name = $_POST['item'];
        $todoItem = [
            "name" => "$name",
            "done"=> false
        ];
        // aggiungo l'elemento della lista
        array_push($list, $todoItem);

        // salvo il nuovo contenuto nel file todo-list.json
        file_put_contents('todoList.json', json_encode($list));
    }
    header('content-type: application/json');
    echo json_encode($list)
?>