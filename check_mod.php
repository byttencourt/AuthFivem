<?php
$hwid = $_POST['hwid'] ?? '';
$ip = $_POST['ip'] ?? '';
$file = $_POST['file'] ?? '';
$steam = $_POST['steam'] ?? '';

$allowed = [
    '200873825700243' => ['ip' => '186.192.219.235', 'file' => 'teste.scs', 'steam' => 'ninoseg']
];

foreach ($allowed as $auth => $data) {
    if ($auth === $hwid && $data['file'] === $file && fnmatch($data['ip'], $ip) && $data['steam'] === $steam) {
        echo "AUTHORIZED"; exit;
    }
}
http_response_code(403);
echo "DENIED";
?>

