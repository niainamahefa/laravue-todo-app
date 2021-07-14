<template>
    <div class="container">
        <add-task @task-added="refresh"></add-task>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"   v-for="task in tasks" :key="task.id">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h4 class="text-success">{{ task.title }}</h4>
                                <p class="card-text">{{ task.description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#editModal">
                                            Edit
                                        </button>
                                        <edit-task v-bind:taskToEdit="taskToEdit"></edit-task>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            // retourne un tableau vide
            return {
                tasks: {},
                taskToEdit: ''
            }
        },
        /*
        Méthode pour faire du server rendering
         */
        created() {
            axios.get('http://localhost:8000/tasksList')
                .then(response => this.tasks = response.data)
                .catch(error => console.log(error));
        },
        methods: {
          refresh(tasks) {
              this.tasks = tasks.data
          },
            getTask(id) {
                axios.get('http://localhost:8000/tasks/edit' + id)
                    .then(response => console.log(response.data))
                    .catch(error => console.log(error))
            }
        },

        mounted() {
            console.log("Task")
        }
    }
</script>