<tr>

    <td>
        <a class="btn blue" href="<?php echo ROOT; ?>Employment-Opportunities-<?php echo $id; ?>">
            View
        </a>
    </td>
    <td>
        <?php echo $job; ?>
    </td>
    <td>
        <?php echo $facility; ?>
    </td>
    <td>
        <?php echo $reg; ?>
    </td>
    <td>
        <?php echo substr($script,0,100).'...'; ?>
    </td>
    <td>
        <?php echo $date; ?>
    </td>
    <td>
        <div style="position:relative;top:0;right:0;" class="fixed-action-btn horizontal">
            <a class="btn-floating btn-large blue">
                <i class="large material-icons">add</i>
            </a>
            <ul>
                <li>
                    <a href="<?php echo ROOT.'tp-Jobs-'.$id; ?>" type="button" class="waves-effect waves-light btn-floating btn-large orange">

                        <i class="material-icons left">mode_edit</i>

                    </a>
                </li>

                <li>
                    <a class="modal-trigger waves-effect waves-light btn-floating btn-large red" data-toggle="modal" href="#myModal-<?php echo $id; ?>">

                        <i class="material-icons left">delete</i>

                    </a>
                </li>
            </ul>
        </div>

        <!-- Modal -->
        <div class="modal" id="myModal-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title" id="myModalLabel">Are you sure you want to delete - Id# <?php echo $id; ?></h4>
                    </div>
                    <div class="modal-body">

                        <form method="post" style="text-align:center;">

                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="title" value="<?php echo $title; ?>">
                            <input type="submit" name="delete" class="btn btn-default" value="Delete" />

                        </form>
                        <br>
                        <br>

                    </div>
                </div>
            </div>
        </div>
        <!--Close Modal-->
    </td>

</tr>