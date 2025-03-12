<?php
require dirname(__DIR__, 2) . '/core.php';

$_SESSION['r'] = [
    'project_id' => (int) ($_POST['project_id'] ?? 0),
    'summary' => $_POST['summary'],
    'description' => $_POST['description'],
    'steps_to_reproduce' => $_POST['steps_to_reproduce'],
    'additional_info' => $_POST['additional_info'],
];

http_response_code(302);
header("Location: /plugin.php?page=TicketCreation/bugreport");
