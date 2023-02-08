<?php
// array dei caratteri
$characters = [
    'abcdefghijklmnopqrstuvwxyz',
    'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
    '0123456789',
    '!$%&'
];
// funzione per creare una password randomica
function create_random_password($length, $characters)
{
    if (!$length || $length < 8 || $length > 16) return;
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        // variabile per ricavare random index dell'array    
        $random_index = rand(0, 3);
        // ricavo la lunghezza di una stringa dell'array
        $string_length = strlen($characters[$random_index]) - 1;
        // prendo randomicamente una delle lettere/numeri/segni e li monto per creare la password
        $password .= $characters[$random_index][rand(0, $string_length)];
    };
    return $password;
};

$generated_password = create_random_password($password_length, $characters);
