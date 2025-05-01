<?php

use App\Services\ApiBridgeService;
use Illuminate\Http\Request;

it('conecta com dados válidos', function () {
    $request = Request::create('/api/conectar', 'POST', [
        'usuario' => 'admin',
        'senha' => '123456',
    ]);

    $service = new ApiBridgeService();

    $response = $service->conectar($request);

    expect($response)
        ->toBeArray()
        ->and($response['status'])->toBe(200)
        ->and($response['data'])->toHaveKey('message');
});

it('lança erro se dados faltam ao conectar', function () {
    $request = Request::create('/api/conectar', 'POST', [
        'usuario' => 'admin',
        // senha ausente
    ]);

    $service = new ApiBridgeService();

    $this->expectException(\Illuminate\Validation\ValidationException::class);

    $service->conectar($request);
});