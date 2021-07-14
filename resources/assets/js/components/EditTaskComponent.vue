<template>
    <div>
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit task</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="Title">Title</label>
                                <input type="text" class="form-control"  placeholder="Task title" v-model="taskToEdit">
                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea class="form-control"   rows="3" placeholder="Task description"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['taskToEdit']
    }
</script>