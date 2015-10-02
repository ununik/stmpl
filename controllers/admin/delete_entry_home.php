<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 30. 7. 2015
 * Time: 16:09
 */
$delete = new Database($db);
$delete->deleteHomeEntries($_GET['id']);
header("location: admin.php?page=home");