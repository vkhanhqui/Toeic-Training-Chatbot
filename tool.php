<?php
//text
function text($str)
{
    $temp['messages'][] = array(
        "text" => $str,
    );
    return $temp;
}
//audio
function audio($url)
{
    $temp['messages'][] = array(
        "attachment" =>
        array(
            "type" => "audio",
            "payload" =>
            array(
                "url" => $url
            )
        )

    );
    return $temp;
}
//image
function image($url)
{
    $temp['messages'][] = array(
        "attachment" =>
        array(
            "type" => "image",
            "payload" =>
            array(
                "url" => $url
            )
        )

    );
    return $temp;
}
//quick replies
function quick_reply_link($urlA,$urlB,$urlC,$urlD,$urlThua)
{
    //example $urlA
    // "https://fe67dd7a.jp.ngrok.io/BotMan4/checkAnswerP5.php?saverand={$rand}&answer=A"
    $temp['messages'][] = array(
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
    return $temp;
}
?>