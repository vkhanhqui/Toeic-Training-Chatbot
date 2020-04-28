<?php
require "dbCon.php";

$response = [];
$response['messages'] = [];
$saverand = $_GET['saverand'];
$stt = random_p2_stt($saverand);
$row_stt = mysqli_fetch_array($stt);
$userinput = $_GET['answer'];
$key = $row_stt['answer'];
switch ($userinput) {
    case $key:
        $response['messages'][] = array(
            "text" => "Đúng rùi",
        );
        break;
    case "thua":
        $response['messages'][] = array(
            "text" => "Sao hông quánh lụi chòi :)))",
        );
        break;
    default:
        $response['messages'][] = array(
            "text" => "Sai rùi",
        );
}
$response['messages'][] = array(
    "text" => "Giải thích chi tiết nè",
);
//img
$response['messages'][] = array(
    "attachment" =>
    array(
        "type" => "image",
        "payload" =>
        array(
            "url" => $row_stt['giaithich']
        )
    )

);
//quick reply
$response['messages'][] = array(
    "text" => "Làm tiếp hăm?",
    "quick_replies" => [
        array(
            "title" => "Oke",
            "type" => "json_plugin_url",
            "url" => "https://vkhanhqui.000webhostapp.com/index.php?msg=part2"
        ),
        array(
            "title" => "Quay lại từ đầu",
            "block_names" => array("Welcome Message")
        )
    ]
);
echo json_encode($response);
