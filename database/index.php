$pdo = new PDO(
'mysql:host=localhost;dbname=polyclinic;charset=utf-8', 'root', '');
$statement = $pdo->query("SELECT name FROM patients");
$row = $statement->fetch(PDO::FETCH_ASSOC); echo htmlentities($row['name']);
