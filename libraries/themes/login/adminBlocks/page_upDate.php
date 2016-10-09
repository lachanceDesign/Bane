<!-- Modal -->
<div class="modal" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Insert New Page</h4>
            </div>
            <div class="modal-body">

                <form class="form" method="post" style="">

                    <input type="hidden" name="id" value="">

                    <div class="input-field col s6">
                        
                        <br>
                        <input id="names" class="form-control" required type="text" name="name" value="">
                        <label for="names" >Page Name:</label>
                        <br>
                        <br>
                    </div>

                    <div class="input-field col s6">
                        
                        <br>
                        <select id="pgs" required class="form-control" id="change" type="text" name="editable">
                            <option value="Please choose a selection." active>Select</option>
                            <option value="false">No</option>
                            <option value="true">Yes</option>
                        </select>
                        <label for="pgs" >Page Editable <span class="text-muted">(Yes or No)</span>?</label>
                        <br>
                        <br>
                    </div>

                    <div style="margin-bottom:10px;" class="form-group" id="html">

                    </div>

                    <div class="input-field col s12">
                        
                        <br>
                        <input id="titles" class="form-control col-md-12" requires type="text" name="title" value="">
                        <label for="titles" >Page Title:</label>
                        <br>
                        <br>
                    </div>

                    <div class="input-field col s12">
                        
                        <br>
                        <input id="key" class="form-control col-md-12" requires type="text" name="key" value="">
                        <label for="key" >Page Key Words:</label>
                        <br>
                        <br>
                    </div>

                    <div style="margin-bottom:10px;" class="input-field col s12">
                        
                        <br>
                        <textarea id="script" class="materialize-textarea form-control" length="120" rows="5" name="script" value=""></textarea>
                        <label for="script" >Page Description:</label>
                        <br>
                        <br>
                    </div>

                    <span><br></span>

                    <input type="submit" name="inserted" class="btn blue" value="Submit" />

                </form>

            </div>
        </div>
    </div>
</div>
<!--Close Modal-->