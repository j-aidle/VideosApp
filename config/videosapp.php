<?php

return [
    'default_user' => [
        'name' => env('DEFAULT_USER_NAME', 'alumne'),
        'email' => env('DEFAULT_USER_EMAIL', 'alumne@iesebre.com'),
        'password' => env('DEFAULT_USER_PASSWORD', 'alumne'),
        'current_team_id' => env('DEFAULT_USER_CURRENT_TEAM_ID', 1),
        'team_id' => env('DEFAULT_USER_TEAM', 1),
        'team_name' => env('DEFAULT_USER_TEAM_NAME', 'alumne\'s Team'),
        'user_id' => env('DEFAULT_USER_ID', 1),
        'personal_team' => env('DEFAULT_USER_PERSONAL_TEAM', true),
    ],
    'default_professor' => [
        'name' => env('DEFAULT_PROFESSOR_NAME', 'professor'),
        'email' => env('DEFAULT_PROFESSOR_EMAIL', 'professor@iesebre.com'),
        'password' => env('DEFAULT_PROFESSOR_PASSWORD', 'professor'),
        'current_team_id' => env('DEFAULT_PROFESSOR_CURRENT_TEAM_ID', 2),
        'team_id' => env('DEFAULT_PROFESSOR_TEAM', 2),
        'team_name' => env('DEFAULT_PROFESSOR_TEAM_NAME', 'professor\'s Team'),
        'user_id' => env('DEFAULT_PROFESSOR_ID', 2),
        'personal_team' => env('DEFAULT_PROFESSOR_PERSONAL_TEAM', true),
    ],
];
