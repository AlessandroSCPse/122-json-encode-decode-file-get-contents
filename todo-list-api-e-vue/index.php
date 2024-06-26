<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <h1>TODOLIST</h1>

            <div>
                <label>Aggiungi una todo</label>
                <input type="text" v-model="newTodo" @keyup.enter="addTodo">
            </div>

            <div class="todo-list">
                <div v-for="todo in todos" class="todo">{{ todo }}</div>
            </div>
        </div>
    </div>

    
    <script src="js/script.js"></script>
</body>
</html>