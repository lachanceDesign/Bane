<!--Table row for post # <?php echo $id; ?> -->
<tr class="bPosts">

    <td>
        <a href="/skilled-nursing-news-<?php echo $id; ?>">
            <?php echo $title; ?>
        </a>
    </td>

    <td>
        <?php echo substr(strip_tags($script),0,155).'...'; ?>
    </td>

    <td><a href="apps/dropzone/upload/Posts/<?php echo $img; ?>" rel="prettyPhoto"><img style="width:100px;" src="apps/dropzone/upload/Posts/<?php echo $img; ?>" alt="<?php echo $img; ?>" /></a></td>


    <td>
        <?php if($imgCap == 'false'){ echo ''; }else{ echo $imgCap; } ?>
    </td>

    <td>
        <?php echo $date; ?>
    </td>

    <td>
        <?php if($update == '0000-00-00'){ echo 'Not Updated'; }else{ echo $update; } ?>
    </td>

    <td>

        <div style="position:relative;top:0;right:0;" class="fixed-action-btn horizontal">
            <a class="btn-floating btn-large blue">
                <i class="large material-icons">add</i>
            </a>
            <ul>

                <li><a href="<?php echo ROOT.'tp-Post-'.$id; ?>" type="button" class="orange waves-effect waves-red btn-floating btn-large">

                    <i class="material-icons left">mode_edit</i>

                </a></li>

                <li><a class="modal-trigger waves-effect waves-light btn-floating btn-large red" data-toggle="modal" href="#myModal-<?php echo $id; ?>">

                    <i class="material-icons left">delete</i>

                </a></li>
            </ul>
        </div>

                <!-- Delete Modal -->
                <div class="modal fade" id="myModal-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h4 class="modal-title" id="myModalLabel">Are you sure you want to delete - Id# <?php echo $id; ?></h4>
                            </div>
                            <div class="modal-body">

                                <form method="post" style="text-align:center;">

                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <input type="submit" name="delete" class="btn btn-default" value="Delete" />

                                </form>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <!--Close Delete Modal-->
    </td>

</tr>
<!--End table row for post # <?php echo $id; ?> -->