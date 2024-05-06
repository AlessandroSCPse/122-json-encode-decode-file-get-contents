const { createApp } = Vue;

createApp({
    data() {
        return {
            todos: [],
            newTodo: ''
        };
    },
    methods: {
        getTodosFromApi() {
            axios.get('server.php').
            then((response) => {
                this.todos = response.data;
            }); 
        },
        addTodo() {
            this.todos.push(this.newTodo);

            this.newTodo = '';
        }
    },
    mounted() {
        this.getTodosFromApi();
    }
}).mount('#app');