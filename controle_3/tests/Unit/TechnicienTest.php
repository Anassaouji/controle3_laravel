<?php

namespace Tests\Unit;

use App\Events\TechnicienCreated;
use App\Models\Technicien;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use PHPUnit\Framework\TestCase;

class TechnicienTest extends TestCase
{
    use RefreshDatabase;

    public function test_technicien_created_event_is_dispatched()
    {
        Event::fake();

        // Create a new technicien
        $technicien = Technicien::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'salaire' => 50000,
        ]);

        Event::assertDispatched(TechnicienCreated::class, function ($event) use ($technicien) {
            return $event->technicien->id === $technicien->id;
        });
    }
}
