const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            newtask: '',
            status: '',
        }
    },
    methods: {
        readList() {
            axios.get('server.php')
            .then(response => {
                this.todoList = response.data;
            });
        },

        addNewTask(){
            const data = {
                newtask: this.newtask
            };
            axios.post('server.php', data,
            {
                headers: {'content-type': 'multipart/form-data' }
            }
            ).then(response => {
                this.todoList = response.data;
                this.newtask = '';
            });
        },
    },
    mounted() {
        this.readList();
    }
}).mount('#app')