*<?php $zip = new ZipArchive(); $res = $zip->open('public_html.zip'); if ($res === true){
$zip->extractTo('./');
$zip->close();
echo 'ok'; } else
echo 'failed'; ?>*