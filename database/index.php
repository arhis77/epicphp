$pdo = new PDO(
'mysql:host=localhost;dbname=polyclinic;charset=utf-8', 'root', '');
$statement = $pdo->query("SELECT name FROM patients");
$row = $statement->fetch(PDO::FETCH_ASSOC); echo htmlentities($row['name']);
try{$conn = new PDO('mysql:host=localhost;dbname=polyclinic', 'root', '');
$conn->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
catch(PDOException $e) {echo 'ERROR: ' . $e->getMessage();
