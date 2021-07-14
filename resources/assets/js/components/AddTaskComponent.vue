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
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success btn-sm">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        name: "AddTaskComponent"
    }
</script>

<style scoped>

</style>