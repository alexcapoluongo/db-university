<?php
require_once __DIR__ . '/database.php';
require_once __DIR__ . '/Department.php';

//prelevo le info del singolo dipartiento del db
$id = $_GET['id'];
$sql = "SELECT * FROM `departments` WHERE `id`=$id";
//conessione query
$result = $conn->query($sql);

//condizione della connessione 
$departments = [];

if($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $curr_department = new Department($row['id'], $row['name'], $row['address'], $row['phone'], $row['email'], $row['website'], $row['head_of_department']);
        $departments[] = $curr_department;
    }
} elseif ($result) {
    echo 'department not found';
} else {
    echo 'Query error';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Department</title>
</head>
<body>
    <?php foreach ($departments as $department) {
        echo $department->printInfo();
    }
    ?>
</body>
</html>