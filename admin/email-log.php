<?php

require_once("../require.php");
require_once("../" . INCLUDED_FILES . "config.inc.php");
require_once("../" . INCLUDED_FILES . "dbConn.php");
require_once("../" . INCLUDED_FILES . "functionsInc.php");
check_auth_admin();
$conn = dbconnect();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    print "<pre>";
    print_r($_REQUEST);
} else {
    try {
        $sql = "select * from "
                . "email_log order by id desc";
        $q = $conn->prepare($sql);
        //$category_id = 2;
       
        $q->execute();
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $count = $q->rowCount();
        while ($row = $q->fetch()) {
            $elog_list[] = array(
                'id' => $row['id'],
                'email' => $row['email'],
                'email_name' => $row['email_name'],
                'subject' => $row['subject'],
                'text' => $row['text'],
                'date' => $row['date']
            );
        }
    } catch (PDOException $pe) {
        echo db_error($pe->getMessage());
    }

    include(ADMIN_HTML . "admin-headerInc.php");
    include(ADMIN_HTML . 'email-log-tpl.php');
    include(ADMIN_HTML . "admin-footerInc.php");
}