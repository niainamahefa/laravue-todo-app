<template>
    <div class="container mt-5">
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
            + Add task
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New task</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="Title">Title</label>
                                    <input type="text" class="form-control" v-model="title" placeholder="Task title">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea class="form-control"  v-model="description" rows="3" placeholder="Task description"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success btn-sm" @click="taskStore">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: '',
                description: ''
            }
        },
         methods: {
             taskStore() {
                axios.post('http://localhost:8000/tasksList', {
                        title: this.title,
                        description: this.description
                    })
                    .then(response => this.$emit('task-added', response))
                    .catch(error => console.log(error))
             }
         },

        name: "AddTaskComponent"
    }
</script>

<style scoped>

</style>