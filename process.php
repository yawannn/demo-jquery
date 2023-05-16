<?php
header('Content-Type: application/json'); // set response content type to JSON

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numData = $_POST['number'];
    $textData = $_POST['text'];

    $dataArray = array();
    for ($i = 0; $i < $numData; $i++) {
        $dataArray[$i] = $textData . ' ' . $i;
    }

    echo json_encode($dataArray);
} else {
    echo json_encode(array('error' => 'Invalid request method'));
}
?>
