<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 30. 7. 2015
 * Time: 13:02
 */
$delete = new Database($db);
$delete->deleteMember($_GET['id']);
header("location: admin.php?page=clenove");