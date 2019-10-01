<?php
$file1 = '/home/ddhindi/backup/databases.sql';
$file2 = '/home/ddhindi/backup/files.tar.gz';
 
//Use the function is_file to check if the file already exists or not.
if(!is_file($file1)){
    //Some simple example content.
    $contents = '';
    //Save our content to the file.
    file_put_contents($file1, $contents);
}
if(!is_file($file2)){
    //Some simple example content.
    $contents = '';
    //Save our content to the file.
    file_put_contents($file2, $contents);
}

$dbname='database_old.sql';
$filename='files_old.tar.gz';
unlink('/home/ddhindi/backup/database_old.sql');
unlink('/home/ddhindi/backup/files_old.tar.gz');

/*exec("cp -r /home/ddhindi/backup/databases.sql /home/ddhindi/backup/$dbname");
exec("cp -r /home/ddhindi/backup/files.tar.gz /home/ddhindi/backup/$filename");
*/
copy('/home/ddhindi/backup/databases.sql', '/home/ddhindi/backup/database_old.sql');
copy('/home/ddhindi/backup/files.tar.gz', '/home/ddhindi/backup/files_old.tar.gz');

?>