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
<body class="bg-info">
    <div id="app">
        <div class="container border p-5 mt-5 bg-light">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center my-3">TO-DO-LIST</h1>
                </div>
                <div class="col-12">
                    <ul class="list-unstyled">
                        <!-- LIST TASK  -->
                        <li v-for='todo, index in toDoList' :key='index' class='py-3 text-capitalize border-bottom d-flex justify-content-between'>
                            <div>
                                <!-- BUTTON CHECK  -->
                                <button @click='done(index)' class="btn btn-sm rounded-circle me-3" :class="todo.done ? 'btn-danger' : 'btn-success'"><i :class="todo.done ? 'fas fa-x' : 'fas fa-check' "></i></button>
                                <div @click='done = !todo.done' class='d-inline fs-5' :class="todo.done ? 'text-decoration-line-through' : '' "> {{ todo.name }} </div>
                            </div>
                            <!-- BUTTON REMOVE  -->
                            <button @click='leaveItem(index)' class="btn btn-sm rounded-circle ms-3 btn-danger"><i class="fas fa-trash"></i></button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <!-- INPUT FOR ADD TASK  -->
                    <div class="input-group mt-5">
                        <input type="text" placeholder='Aggiungi una nuova task' v-model='newTask' @keyup.enter='addTask' class='form-control'>
                        <button @click='addTask()' class='btn btn-sm btn-success'>Aggiungi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js" type="text/javascript"></script>
</body>
</html>