<?php

use App\Models\Team;
use App\Models\User;

if(!function_Exists('create_default_user')) {
    function create_default_user() {
        $user = User::create([
                'name' => config('videosapp.default_user.name', 'alumne'),
                'email' => config('videosapp.default_user.email', 'alumne@iesebre.com'),
                'password' => bcrypt(config('videosapp.default_user.password', 'alumne')),
                'current_team_id' => config('videosapp.default_user.current_team_id', 1),
        ]);

        add_personal_team($user);

        return $user;
    }
}

if(!function_Exists('create_default_professor')) {
    function create_default_professor() {
        $professor = User::create([
            'name' => config('videosapp.default_professor.name', 'professor'),
            'email' => config('videosapp.default_professor.email', 'professor@iesebre.com'),
            'password' => bcrypt(config('videosapp.default_professor.password', 'professor')),
            'current_team_id' => config('videosapp.default_professor.current_team_id', 2),
        ]);

        add_personal_team($professor);

        return $professor;
    }
}

if(!function_exists('add_personal_team')) {
    function add_personal_team($user): void {
        try{
            Team::forceCreate([
                'name' => config('videosapp.default_team.name', $user->name.'\'s Team'),
                'user_id' => config('videosapp.default_team.user_id', $user->id),
                'personal_team' => config('videosapp.default_team.personal_team', true),
            ]);
        } catch(Exception $e) {
        }
    }
}
