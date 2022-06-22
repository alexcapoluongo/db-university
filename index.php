<!-- - creare una pagina index.php dove visualizzare nomi di tutti i dipartimenti;
- al click sul link dei dettagli di ogni dipartimento visualizzare una pagina con le informazioni dettagliate del dipartimento cliccato.
Usare mysqli per prelevare i dati dal database;
Creare una classe del dipartimento e usarla per stampare i dati nelle pagine. -->
<?php
require_once __DIR__ . '/Department.php';
require_once __DIR__ . '/database.php';

//query
$sql = "SELECT `id`, `name` FROM `departments`;";
//connetti la query
$result = $conn->query($sql);
// var_dump($result); -> current field = 2 (id,name) - num_rows = 12

$departments = [];
//controllo se il result esiste e se non è vuoto
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $curr_department = new Department($row['id'], $row['name']);
        $departments[] = $curr_department;
    }
} elseif ($result){
} else {
    echo 'Query error';
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>
</head>
<body> 
    <?php 
        foreach ($departments as $item) {
            echo '<h1>' . $item->name . '</h1>';
        } 
    ?>
   
</body>
</html>