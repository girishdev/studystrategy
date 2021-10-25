<?php
ob_start();
session_start();
//	$db = new mysqli('127.0.0.1','root','root','studytest');
//	// $db = new mysqli('212.1.210.1','tetsi202_DBname','girish618642','tetsi202_study');
//	if($db->connect_errno){
//		echo 'Error';
//		die();
//	}

require_once('init/database.php');

// http://192.168.43.1:8080/vendor/vrana/adminer/adminer/index.php?server=192.168.43.1%3A3306&username=root&db=study&select=study_list&columns%5B0%5D%5Bfun%5D=&columns%5B0%5D%5Bcol%5D=&where%5B0%5D%5Bcol%5D=&where%5B0%5D%5Bop%5D=%3D&where%5B0%5D%5Bval%5D=&order%5B0%5D=&limit=5000000000&text_length=100
// This Link is to Get Database Connetion

// http://192.168.43.1:8080/vendor/vrana/adminer/adminer/index.php?server=192.168.43.1
// include("edit.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Study strategies Testing...</title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" language="javascript" src="js/jquery-3.1.1.min.js"></script>
    <!--	<script type="text/javascript" src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qde4lcvt09fira8t7ploif7b2awn3iu5wdvppouqxo2mdaid"></script>-->
    <!-- <script type="text/javascript" >tinymce.init({ selector:'textarea' });</script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" language="javascript">
        $(document).ready(function() {
            $(document).ajaxStart(function() {
                $("#wait").css("display", "block");
            });
            $(document).ajaxComplete(function() {
                $("#wait").css("display", "none");
            });
            $("a, h5, span").click(function() {
                $("#txt").load("demo_ajax_load.asp");
            });
        });
    </script>
</head>

<body>

    <div class="container-fluid">
        <?php

        require_once('files/navbar.php');

        if (isset($_REQUEST['module']) && !empty($_REQUEST['module'])) { ?>
            <div class="panel-body clearfix">
                <?php
                switch ($_REQUEST['module']) {
                    case 'readme':
                        require_once('readme.php');
                        break;
                    case 'info':
                        require_once('info.php');
                        break;
                    case 'job':
                        require_once('files/job_profile.php');
                        break;
                    case 'edit':
                        require_once('edit.php');
                        break;
                    case 'move':
                        require_once('move.php');
                        break;
                    case 'php':
                        require_once('files/php.php');
                        break;
                    case 'mysql':
                        require_once('files/mysql.php');
                        break;
                    case 'wordpress':
                        require_once('files/wordpress.php');
                        break;
                    case 'symfony':
                        require_once('files/symfony.php');
                        break;
                    case 'laravel':
                        require_once('files/laravel.php');
                        break;
                    case 'codeigniter':
                        require_once('files/codeigniter.php');
                        break;
                    case 'ajax':
                        require_once('files/ajax.php');
                        break;
                    case 'jquery':
                        require_once('files/jquery.php');
                        break;
                    case 'javascript':
                        require_once('files/javascript.php');
                        break;
                    case 'html':
                        require_once('files/html.php');
                        break;
                    case 'css':
                        require_once('files/css.php');
                        break;
                    case 'bootstrap':
                        require_once('files/bootstrap.php');
                        break;
                    case 'add_topic':
                        require_once('add_topic.php');
                        break;
                    case 'logout':
                        require_once('logout.php');
                        break;
                    case 'ubuntu':
                        require_once('files/ubuntu.php');
                        break;
                    case 'aptitude':
                        require_once('files/aptitude.php');
                        break;
                    case 'english':
                        require_once('files/english.php');
                        break;
                    case 'doubts':
                        require_once('files/doubts.php');
                        break;
                    case 'imp_links':
                        require_once('files/imp_Links.php');
                        break;
                    case 'imp_noted':
                        require_once('files/imp_Noted.php');
                        break;
                    case 'java':
                        require_once('files/java.php');
                        break;
                    case 'w3schools':
                        require_once("http://www.w3schools.com/html/default.asp");
                        break;
                } ?>
            </div>
            <?php } else { ?>
                <div class="panel-body" id="topic">
                    <div class="form_content col-md-12">
                        <form id="myForm" method="post" action="select.php">
                            <?php
                            if (isset($_REQUEST['delete']) == 'delete') {
                                echo 'Are you sure you want to delete';
                                $org_sub = $_REQUEST['sub_topic'];
                                $org_sub_sub = $_REQUEST['sub_sub_topic'];
                                $org_url = $_REQUEST['url'];
                                echo '<form action="main_page.php" method="POST">
                                    <button type="submit" name="yes" value="YES" >YES</button>
                                    <input type="text" name="" value=' . $org_sub . ' />
                                    <input type="text" name="" value=' . $org_sub_sub . ' />
                                    <input type="text" name="" value=' . $org_url . ' />
                                    <button type="submit" name="no" value="NO" >NO</button>
                            </form>';
                                exit();
                                $delete = $db->query("DELETE FROM study_list WHERE sub_topic='$org_sub' AND sub_sub_topic='$org_sub_sub' AND url='$org_url'");
                                if ($delete == true) {
                                    echo 'Deleted Successfully...';
                                    // sleep(5);
                                    header("Refresh:2; url=main_page.php");
                                    // header("Location: main_page.php");
                                } else {
                                    echo 'Delete Unsuccessfull...!';
                                }
                            } else { ?>
                                <div class="subjectCount col-md-12">
                                    <?php
                                    $selectDistintTopics = $db->query("SELECT main_topic as topic, COUNT(*) as count FROM study_list GROUP BY main_topic ");
                                    while ($rows = $selectDistintTopics->fetch_array()) { ?>
                                        <div class="row col-md-2 topic <?= strtolower($rows['topic']) ?>">
                                            <div class="topic-logo col-md-6">
                                                <img src="images/<?= strtolower($rows['topic']) ?>.png" alt="<?= $rows['topic'] ?>">
                                            </div>
                                            <div class="topic-count col-md-6">
                                                <span>
                                                    <?= strtoupper($rows['topic']) ?>
                                                    <br>
                                                    <?= $rows['count'] ?>
                                                </span>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <?php $select = $db->query("SELECT DISTINCT main_topic FROM topics WHERE main_topic<>'' "); ?>
                                    <label for="maintopic">Main Topic: </label>
                                    <select name="select1" id="select1" class="form-control">
                                        <option value="test">Select Topic</option>
                                        <?php
                                        while ($rows = $select->fetch_array()) { ?>
                                            <option><?php echo strtoupper($rows['main_topic']); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div id="data_present2"></div>
                                </div>
                                <div class="form-group">
                                    <div id="data_present23"></div>
                                </div>
                                <?php if (isset($_REQUEST['move_to']) == 'move_to') {
                                    $org_sub = $_REQUEST['sub_topic'];
                                    $org_sub_sub = $_REQUEST['sub_sub_topic'];
                                    $org_url = $_REQUEST['url']; ?>
                                    <div class="form-group">
                                        <label for="url">URL: </label>
                                        <input type="text" class="form-control" name="url" value="<?php echo $_REQUEST['url']; ?>" id="url" placeholder="Url" />
                                        <input type="hidden" class="form-control" id="org_sub" name="org_sub" value="<?php echo $org_sub; ?>" id="url" placeholder="Url" />
                                        <input type="hidden" class="form-control" id="org_sub_sub" name="org_sub_sub" value="<?php echo $org_sub_sub; ?>" id="url" placeholder="Url" />
                                        <input type="hidden" class="form-control" id="org_url" name="org_url" value="<?php echo $org_url; ?>" id="url" placeholder="Url" />
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description" rows="3"><?php echo $_REQUEST['description']; ?></textarea>
                                    </div>
                                    <button type="button" id="submitformmovetoid" onclick="submitform_moveto()" name="add_topic" class="btn btn-default">Move</button>
                                <?php } else {
                                ?>
                                    <div class="form-group">
                                        <label for="url">URL: </label>
                                        <input type="text" class="form-control" name="url" id="url" placeholder="Url" />
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                    </div>
                                    <button type="button" id="submitformid" onclick="submitform()" name="add_topic" class="btn btn-default">Save</button>
                            <?php }
                            } ?>
                        </form>
                        <div id="message"></div>
                    </div>
                </div>

                <div class="panel-body">
                    <?php require_once('files/urgent-topic.php'); ?>
                </div>
                <div class="panel-body" id="data_present4"></div>

            <?php
            } ?>

            <div class='index2 col-md-4 clearfix'>
                <?php
                ob_end_flush();
                ?>
            </div>

        <div id="message"></div>
        <div id="wait" style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='demo_wait.gif' width="64" height="64" /><br>Loading..</div>
        <div class="top"><i>Go Top</i></div>
        <script type="text/javascript" language="javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" language="javascript" src="js/tutorial.js"></script>
        <script type="text/javascript" language="javascript" src="js/tutorial2.js"></script>
    </div>
</body>

</html>