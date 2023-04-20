const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            newtask: '',
        }
    },
    methods: {
        readList() {
            axios.get('server.php')
            .then(response => {
                this.todoList = response.data;
            })
        },
    },
    mounted() {
        this.readList();
    }
}).mount('#app')