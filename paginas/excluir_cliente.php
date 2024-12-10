<?php
require_once('../config/auth.php');
require_once('../config/bancodedados.php');

$id = $_GET['id'];
$pdo = getConexao();
$stmt = $pdo->prepare("DELETE FROM clientes WHERE id = ?");
$stmt->execute([$id]);

header("Location: clientes.php");
exit();
?>
