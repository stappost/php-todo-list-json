const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            toDoList: [],
            newTask: ''
        }
    },
    mounted() {
        this.getTodoList()
    },
    methods: {
        // GET LIST 
        getTodoList() {
            axios.get(this.apiUrl).then((response) => {
                this.toDoList = response.data;
            })
        },
        // FUCTION ADD TASK 
        addTask() {
            const data = {
                item: this.newTask,
            }
            axios.post(this.apiUrl, data, {
                headers: { 'content-type': 'multipart/form-data' }
            }).then((response) => {
                this.newTask = '';
                this.toDoList = response.data
            })
        },
        // FUNCTION REMOVE TASK 
        leaveItem(index) {
            const data = {
                key: index
            }
            axios.post(this.apiUrl, data, {
                headers: { 'content-type': 'multipart/form-data' }
            }).then((response) => {
                this.toDoList = response.data
            })
        },
        // FUNCTION CHECK 
        done(index) {
            const data = {
                done_index: index
            }
            axios.post(this.apiUrl, data, {
                headers: { 'content-type': 'multipart/form-data' }
            }).then((response) => {
                this.toDoList = response.data
            })
        }
    }
}).mount('#app')