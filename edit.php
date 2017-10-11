
<h3 style="text-align: center;text-decoration: underline;color: #337ab7;">You are in Edit page: </h3>

<?php

    $org_url = $_REQUEST['url'];
    $select = $db->query("SELECT * FROM study_list WHERE url='".$org_url."'");
    $count = $select->num_rows;
    if($count > 0){
        while($rows = $select->fetch_object()){ ?>
            <div class="panel-body" id="topic">
                <div class="form_content col-md-12">
                    <form id="myForm" method="post" action="select.php">
                        <div class="form-group">
                            <label for="subtopic">Main Topic: </label>
                            <input type="text" class="form-control" id="up_select1" name="select1" value="<?php echo $rows->main_topic; ?>" id="url" placeholder="Url" />
                        </div>
                        <div class="form-group">
                            <label for="subtopic">Sub Topic: </label>
                            <input type="text" class="form-control" id="up_select2" name="select2" value="<?php echo $rows->sub_topic; ?>" id="url" placeholder="Url" />
                        </div>
                        <div class="form-group">
                            <label for="subtopic">Sub Sub Topic: </label>
                            <input type="text" class="form-control" id="up_select3" name="select3" value="<?php echo $rows->sub_sub_topic; ?>" id="url" placeholder="Url" />
                        </div>
                        <div class="form-group">
                            <label for="url">URL: </label>
                            <input type="text" class="form-control" id="up_url" name="opturl" value="<?php echo $_REQUEST['url']; ?>" id="url" placeholder="Url" />
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3"><?php echo $rows->description; ?></textarea>
                        </div>
                        <button type="button" id="submitformupdateid" onclick="submitformupdate()" class="btn btn-default">Update</button>
                    </form>
                </div>
            </div>
        <?php }
    } else {
        echo 'No Record matches: ';
    }

?>
