<?php
$code = $_POST['code'];
$lang = $_POST['lang'];
$broker_id = md5(base64_encode(mt_rand(0,123781293789)+mt_rand(0,3247823947)));
file_put_contents("/tmp/{$lang}{$broker_id}",$code);
switch($lang) {
    case 'php':
        shell_exec("./exec/php -r 'ini_set(\"display_errors\",\"1\"); include(\"/tmp/{$lang}{$broker_id}\");' 2>/dev/null 1>./sessions/{$broker_id}.output");
        file_put_contents("./sessions/{$broker_id}",json_encode(Array('lang'=>$lang,'code'=>$code,'response'=>file_get_contents("./sessions/{$broker_id}.output"))));
        header("location: /?completed_id={$broker_id}");
    break;
    case 'wct':
        shell_exec("./exec/wct /tmp/{$lang}{$broker_id} ./sessions/{$broker_id}");
        rename("./sessions/{$broker_id}","./output/{$broker_id}.exe");
        header("location: /output/{$broker_id}.exe");
    break;
}
unlink('./sessions/'.$broker_id.'.output');