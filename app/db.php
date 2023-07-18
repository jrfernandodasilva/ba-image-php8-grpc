<?

$db       = 'teste';
$host     = 'mariadb';
$username = 'root';
$password = 'root';

try 
{
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<h2>Database connected with success.<h2>';
} 
catch(PDOException $e) 
{
    echo 'ERROR: ' . $e->getMessage();
}