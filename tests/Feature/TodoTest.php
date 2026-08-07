<?php

namespace Tests\Feature;

use App\Models\Todo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TodoTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_a_todo_in_the_database(): void
    {
        $response = $this->post('/todos', [
            'title' => 'Write the technical test',
        ]);

        $response->assertRedirect('/todos');
        $this->assertDatabaseHas('todos', [
            'title' => 'Write the technical test',
            'completed' => false,
        ]);
    }

    public function test_it_can_mark_a_todo_as_completed(): void
    {
        $todo = Todo::create([
            'title' => 'Ship the feature',
            'completed' => false,
        ]);

        $response = $this->patch("/todos/{$todo->id}", [
            'completed' => true,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('todos', [
            'id' => $todo->id,
            'completed' => true,
        ]);
    }

    public function test_it_can_delete_a_todo(): void
    {
        $todo = Todo::create([
            'title' => 'Delete this todo',
        ]);

        $response = $this->delete("/todos/{$todo->id}");

        $response->assertRedirect();
        $this->assertDatabaseMissing('todos', [
            'id' => $todo->id,
        ]);
    }
}
