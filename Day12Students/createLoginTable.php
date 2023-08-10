
<?php
require_once 'database_connection.php';

$sql = "create table login(
id int(6) auto_increment primary key,
email varchar(60) not null,
password varchar(100) not null
)";

if($conn->query($sql)==true){
    echo("Table created Successfully!");
}
else{
    echo("Error in creating table".$conn->error);
}


?>
