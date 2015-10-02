<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 9. 8. 2015
 * Time: 10:30
 */
$delete = new Database($db);
$delete->deletePhotobox($_GET['id']);
header("location: admin.php?page=home");