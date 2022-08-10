<?php
  $headers = [
    "http" => [
      "method" => "GET",
      "header" =>
        "Authorization: Bearer C71DC9899540377EF4F24536AA7004A0\r\n" .
        "Cookie: timezone=GMT; stb_lang=en; mac=00:1A:79:4F:55:BB\r\n"
    ]
  ];

  $channel_info = json_decode(file_get_contents("http://ip.xtremetv.eu:8000/server/load.php?type=itv&action=create_link&cmd=ffmpeg%20http%3A%2F%2Flocalhost%2Fch%2F" . $_GET["channel"] . "_&JsHttpRequest=1-xml", false, stream_context_create($headers)), JSON_PRETTY_PRINT);
  $stream_link = explode(" ", $channel_info["js"]["cmd"])[1];
  header("Location: $stream_link");
//end xtremetv.php