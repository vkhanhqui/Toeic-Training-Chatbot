<?php
require "dbCon.php";

if (isset($_GET['msg']) && !empty($_GET['msg'])) {
    //select part
    $msg = $_GET['msg'];
    switch ($msg) {
        case "part1":
            //random quiz
            $rand = rand(1, 6);
            $stt = random_p1_stt($rand);
            $row_stt = mysqli_fetch_array($stt);
            //image
            $response['messages'][] = array(
                "attachment" =>
                array(
                    "type" => "image",
                    "payload" =>
                    array(
                        "url" => $row_stt['image']
                    )
                )
        
            );
            //audio
            $response['messages'][] = array(
                "attachment" =>
                array(
                    "type" => "audio",
                    "payload" =>
                    array(
                        "url" => $row_stt['audio']
                    )
                )
        
            );
            //quick reply link (send cho server)
            $urlA = "https://vkhanhqui.000webhostapp.com/checkAnswerP1.php?saverand={$rand}&answer=A";
            $urlB = "https://vkhanhqui.000webhostapp.com/checkAnswerP1.php?saverand={$rand}&answer=B";
            $urlC = "https://vkhanhqui.000webhostapp.com/checkAnswerP1.php?saverand={$rand}&answer=C";
            $urlD = "https://vkhanhqui.000webhostapp.com/checkAnswerP1.php?saverand={$rand}&answer=D";
            $urlThua = "https://vkhanhqui.000webhostapp.com/checkAnswerP1.php?saverand={$rand}&answer=thua";
            $response['messages'][] = array(
                "text" => "Chọn đáp án nè",
                "quick_replies" => [
                    array(
                        "title" => "A",
                        "type" => "json_plugin_url",
                        "url" => $urlA
                    ),
                    array(
                        "title" => "B",
                        "type" => "json_plugin_url",
                        "url" => $urlB
                    ),
                    array(
                        "title" => "C",
                        "type" => "json_plugin_url",
                        "url" => $urlC
                    ),
                    array(
                        "title" => "D",
                        "type" => "json_plugin_url",
                        "url" => $urlD
                    ),
                    array(
                        "title" => "Thua òi :))",
                        "type" => "json_plugin_url",
                        "url" => $urlThua
                    )
                ]
            );
            break;
        case "part2":
            //random quiz
            $rand = rand(1, 25);
            $stt = random_p2_stt($rand);
            $row_stt = mysqli_fetch_array($stt);
            //audio
            $response['messages'][] = array(
                "attachment" =>
                array(
                    "type" => "audio",
                    "payload" =>
                    array(
                        "url" => $row_stt['audio']
                    )
                )
        
            );
            //quick reply link (send cho server)
            $urlA = "https://vkhanhqui.000webhostapp.com/checkAnswerP2.php?saverand={$rand}&answer=A";
            $urlB = "https://vkhanhqui.000webhostapp.com/checkAnswerP2.php?saverand={$rand}&answer=B";
            $urlC = "https://vkhanhqui.000webhostapp.com/checkAnswerP2.php?saverand={$rand}&answer=C";
            $urlD = "https://vkhanhqui.000webhostapp.com/checkAnswerP2.php?saverand={$rand}&answer=D";
            $urlThua = "https://vkhanhqui.000webhostapp.com/checkAnswerP2.php?saverand={$rand}&answer=thua";
            $response['messages'][] = array(
                "text" => "Chọn đáp án nè",
                "quick_replies" => [
                    array(
                        "title" => "A",
                        "type" => "json_plugin_url",
                        "url" => $urlA
                    ),
                    array(
                        "title" => "B",
                        "type" => "json_plugin_url",
                        "url" => $urlB
                    ),
                    array(
                        "title" => "C",
                        "type" => "json_plugin_url",
                        "url" => $urlC
                    ),
                    array(
                        "title" => "D",
                        "type" => "json_plugin_url",
                        "url" => $urlD
                    ),
                    array(
                        "title" => "Thua òi :))",
                        "type" => "json_plugin_url",
                        "url" => $urlThua
                    )
                ]
            );
            break;
        case "part5":
            //random quiz
            $rand = rand(1, 60);
            $stt = random_p5_stt($rand);
            $row_stt = mysqli_fetch_array($stt);
            //image
            $response['messages'][] = array(
                "attachment" =>
                array(
                    "type" => "image",
                    "payload" =>
                    array(
                        "url" => $row_stt['image']
                    )
                )
        
            );
            //quick reply link (send cho server)
            $urlA = "https://vkhanhqui.000webhostapp.com/checkAnswerP5.php?saverand={$rand}&answer=A";
            $urlB = "https://vkhanhqui.000webhostapp.com/checkAnswerP5.php?saverand={$rand}&answer=B";
            $urlC = "https://vkhanhqui.000webhostapp.com/checkAnswerP5.php?saverand={$rand}&answer=C";
            $urlD = "https://vkhanhqui.000webhostapp.com/checkAnswerP5.php?saverand={$rand}&answer=D";
            $urlThua = "https://vkhanhqui.000webhostapp.com/checkAnswerP5.php?saverand={$rand}&answer=thua";
            $response['messages'][] = array(
                "text" => "Chọn đáp án nè",
                "quick_replies" => [
                    array(
                        "title" => "A",
                        "type" => "json_plugin_url",
                        "url" => $urlA
                    ),
                    array(
                        "title" => "B",
                        "type" => "json_plugin_url",
                        "url" => $urlB
                    ),
                    array(
                        "title" => "C",
                        "type" => "json_plugin_url",
                        "url" => $urlC
                    ),
                    array(
                        "title" => "D",
                        "type" => "json_plugin_url",
                        "url" => $urlD
                    ),
                    array(
                        "title" => "Thua òi :))",
                        "type" => "json_plugin_url",
                        "url" => $urlThua
                    )
                ]
            );
            break;
    }
    echo json_encode($response);
}
