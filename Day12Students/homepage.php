<?php
require_once 'database_connection.php';
if(isset($_GET['success'])){
    echo '<h2 style="">'.$_GET['success'].'</h2>';
}
echo '<a href="login.php"> <input type="submit" name="submit" value="Admin Login"></a>';

$sql = 'select * from student';
$result = $conn->query($sql);
if($result->num_rows >0){
    echo '<table border =1 cellspacing=0 cellpadding=5';
    echo'<tr><th>SN</th><th>Name</th><th>Program</th><th>Email</th><th>Reg_data</th><th>Address</th><th>Rollno</th></tr>';

    $i =1;
    while($row = $result->fetch_assoc()){
        echo '<tr><td>'.$i.'</td><td>'.$row['name'].'</td>';
        echo '<td>'.$row['program'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '<td>'.$row['reg_data'].'</td>';
        echo '<td>'.$row['address'].'</td>';
        echo '<td>'.$row['rollno'].'</td>';
        $i++;
    }
    echo '</table>';
}
else{
    echo '0 results';
}
$conn->close();

?>