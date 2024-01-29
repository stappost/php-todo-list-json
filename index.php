<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center my-3">TO-DO-LIST</h1>
                </div>
                <div class="col-12">
                    <ul class="list-unstyled">
                        <li v-for='todo, index in toDoList' :key='index' class='py-2 text-capitalize cursor-pointer d-flex'  :class="todo.done ? 'text-decoration-line-through' : '' ">
                            <button @click='todo.done = !todo.done' class="btn btn-sm rounded-circle me-3" :class="todo.done ? 'btn-danger' : 'btn-success'"><i :class="todo.done ? 'fas fa-x' : 'fas fa-check' "></i></button>
                            <div @click='todo.done = !todo.done'> {{ todo.name }} </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="input-group">
                        <input type="text" placeholder='Aggiungi una nuova task' v-model='newTask'>
                        <button @click='addTask()'>Aggiungi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js" type="text/javascript"></script>
</body>
</html>