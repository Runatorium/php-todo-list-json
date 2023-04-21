const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],

            newtask: '',

            newTaskFinal: {
                nome: "",
                status: false
            },
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
            this.newTaskFinal.nome = this.newtask;
            const data = {
                newtask: this.newTaskFinal
            }
            axios.post('server.php', data,
            {
                headers: {'content-type': 'multipart/form-data' }
            }
            )
            .then(response => {
                this.todoList = response.data;
                this.newTaskFinal.name = ''
            });
        },
    },
    mounted() {
        this.readList();
    }
}).mount('#app')