
<h3 style="text-align: center;text-decoration: underline;color: #337ab7;">You are in Move To page: </h3>

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
                        <?php $select = $db->query("SELECT DISTINCT main_topic FROM topics WHERE main_topic<>'' "); ?>
                        <label for="maintopic">Main Topic: </label>
                        <select name="select1" id="select1" class="form-control">
                            <option value="test">Select Topic</option>
                            <?php
                            while($rows2 = $select->fetch_array()){ ?>
                                <option><?php echo strtoupper($rows2['main_topic']); ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <div id="data_present2"></div>
                    </div>
                    <div class="form-group">
                        <div id="data_present23"></div>
                    </div>
                    <div class="form-group">
                        <label for="url">URL: </label>
                        <input type="text" class="form-control" id="url" name="url" value="<?php echo $org_url; ?>" />
                        <input type="hidden" class="form-control" id="org_sub" name="org_sub" value="<?php echo $rows->sub_topic; ?>" />
                        <input type="hidden" class="form-control" id="org_sub_sub" name="org_sub_sub" value="<?php echo $rows->sub_sub_topic;; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3"><?php echo $rows->description; ?></textarea>
                    </div>
                    <button type="button" id="submitformmovetoid" onclick="submitform_moveto()" class="btn btn-default">Move</button>
                </form>
            </div>
        <?php }
    }?>