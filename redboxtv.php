<?php
  $headers = [
    "http" => [
      "method" => "GET",
      "header" =>
        "Authorization: Basic QDA3NzEyMSM6QDA3NzEyMSM\r\n"
    ]
  ];

  $token = file_get_contents("http://135.181.2.111:8800/cip/4c.rbt/", false, stream_context_create($headers));
  $stream_link = "http://" . $_GET["server"] . "/" . $_GET["channel"] . "/playlist.m3u8$token";
  header("Location: $stream_link");
//end redboxtv.php