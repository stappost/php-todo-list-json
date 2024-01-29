const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            toDoList: [],
        }
    },
    mounted() {
        this.getTodoList()
    },
    methods: {
        getTodoList() {
            axios.get(this.apiUrl).then((response) => {
                this.toDoList = response.data;
                console.log(response.data)
            })
        },
    }
}).mount('#app')