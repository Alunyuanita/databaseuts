<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $F_Name = $_POST['F_Name'];
    $L_Name = $_POST['L_Name'];
    $email = $_POST['email'];
    $email2 = $_POST['email2'];
    $profesi = $_POST['profesi'];

    $list = array (
        array($id, $F_Name, $L_Name, $email, $email2, $profesi)
    );
    $file = fopen ('datakopi.csv', 'a');
    foreach($list as $fields) {
        fputcsv($file, $fields);
    }
    fclose($file);
    include 'index.php';
}
?>
