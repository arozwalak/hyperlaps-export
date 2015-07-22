<?php
header('content-type: image/jpg');

if (isset($_REQUEST['frame'])) {
    $frame = $_REQUEST['frame'];
    $i = $_REQUEST['i'];
}
else {
    $frame = 'test';
}

if ($i > 9)         { $name = 'frame000'; }
else if ($i > 19)   { $name = 'frame00'; }
else if ($i > 199)  { $name = 'frame0'; }
else if ($i > 1999) { $name = 'frame'; }
else                { $name = 'frame0000'; }

$frame = base64_decode($frame);
$result = file_put_contents(dirname(__FILE__).'/frames/'.$name.$i.'.jpg', $frame) or die('can`t create file, check write permissions');
