<div id="updateModal" class="modal fade modal-lg" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add new category</h4>
            </div>
            <div class="modal-body">
                <form><br>
                <div>
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-8">
                        <input id="category_name" type="text" class="form-control name" name="category_name" required autofocus>
                        <span style="color: red" id = "nameError"></span>
                    </div>
                </div>
                </form>
                
            </div>
            <div class="modal-footer">
                <br><br>
                <button type="button" id = "save_update" class="btn btn-success"> Save
                </button>
            </div>
        </div>
    </div>
</div>