<?php
// размер файла
echo filesize(filename: './one/t1.txt');
//Создаем файл
$fp=fopen(filename: './one/data.txt', mode: 'w');
fwrite($fp,date('Y m d H:i:s', time()));
fclose($fp);
