<script>
    import { initializeApp } from "database/app";
     import { getAuth } from "database/auth";
</script>
<?php
$host = '';
$dbname = 'login';
$username = 'leta';
$password = 'TensorFl0w';

$database =  = mysqli_connect($host, $username, $password, $dbname);
// $speed = $_GET['s']?? '';
// (string)$names = $_GET['n']?? '';
// (string)$ip1 = $_GET['ip1']?? '';
// $name1 = "'$names'";
// $ip = "'$ip1'";

// (string)$ip2 = $_GET['ip2']?? '';
// (string)$ip3 = $_GET['ip3']?? '';
// (string)$ip4 = $_GET['ip4']?? '';


if (!$database) {
echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
exit;
}
$test = mysqli_query($link, "INSERT INTO `technoproriv` (`speed`, `name_client`, `ip_1`) VALUES ($speed,$name1,$ip)");
?>

<script>
    const app = initializeApp();
    const auth = getAuth(app)
</script>