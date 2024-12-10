<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class HelpersTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    #[test]
    public function create_default_users(): void
    {
        $user = create_default_user();
        $professor = create_default_professor();

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($user->name, 'alumne');
        $this->assertEquals($user->email, 'alumne@iesebre.com');
        //$this->assertEquals(1,$user->current_team_id);
        $this->assertDatabaseHas('teams', [
            'id' => 1,
            'user_id' => $user->id,
            'name' => $user->name. '\'s Team',
            'personal_team' => true,
        ]);
        $this->assertInstanceOf(User::class, $professor);
        //$this->assertEquals(2, $professor->current_team_id);
        $this->assertEquals($professor->name, 'professor');
        $this->assertEquals($professor->email, 'professor@iesebre.com');
        $this->assertDatabaseHas('teams', [
            'id' => 2,
            'user_id' => $professor->id,
            'name' => $professor->name. '\'s Team',
            'personal_team' => true,
        ]);

    }
}
