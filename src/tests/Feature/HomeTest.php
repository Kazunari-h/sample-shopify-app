<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    /**
     * Bodyのテスト
     *
     * @return void
     */
    public function testBody()
    {
        $response = $this->get('/home');
        $response->assertSeeText("<div>こんにちは</div>");

    }
}