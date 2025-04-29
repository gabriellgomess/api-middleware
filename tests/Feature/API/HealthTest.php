<?php

it('retorna uma resposta saudável da rota /api/healthy', function () {
    $this->getJson('/api/healthy')
        ->assertStatus(200)
        ->assertJson(['status' => 'ok', 'message' => 'API is healthy']);
});