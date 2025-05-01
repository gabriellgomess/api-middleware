<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiBridgeService
{
    public function process(Request $request, string $endpoint): array
    {
        // Mapeia o nome do endpoint para o método correspondente
        $methodName = lcfirst($endpoint);

        // Verifica se o método existe
        if (!method_exists($this, $methodName)) {
            throw new \InvalidArgumentException("Endpoint não suportado: {$endpoint}");
        }

        // Chama o método dinâmicamente e retorna o resultado
        return $this->{$methodName}($request);
    }

    public function conectar(Request $request): array
    {
        $this->logRequest('Conectar', $request);

        $this->validateConectar($request);
        $data = $this->mapConectar($request);
        $response = $this->sendToNewApi('POST', 'conectar', $data);

        return [
            'data' => $this->adaptConectarResponse($response),
            'status' => 200
        ];
    }

    public function desconectar(Request $request): array
    {
        $this->logRequest('Desconectar', $request);
        return [
            'data' => $this->sendToNewApi('POST', 'desconectar', []),
            'status' => 200
        ];
    }

    public function status(Request $request): array
    {
        $this->logRequest('Status', $request);
        return [
            'data' => $this->sendToNewApi('GET', 'status', []),
            'status' => 200
        ];
    }

    public function mensagensNaFila(Request $request): array
    {
        $this->logRequest('MensagensNaFila', $request);
        return [
            'data' => $this->sendToNewApi('GET', 'mensagens-na-fila', []),
            'status' => 200
        ];
    }

    public function buscarMensagem(Request $request): array
    {
        $this->logRequest('BuscarMensagem', $request);
        return [
            'data' => $this->sendToNewApi('GET', 'buscar-mensagem', $request->all()),
            'status' => 200
        ];
    }

    public function buscarMensagemMultiplas(Request $request): array
    {
        $this->logRequest('BuscarMensagemMultiplas', $request);
        return [
            'data' => $this->sendToNewApi('GET', 'buscar-mensagem-multiplas', $request->all()),
            'status' => 200
        ];
    }

    public function enviarMensagem(Request $request): array
    {
        $this->logRequest('EnviarMensagem', $request);
        return [
            'data' => $this->sendToNewApi('POST', 'enviar-mensagem', $request->all()),
            'status' => 200
        ];
    }

    public function dictAtualizar(Request $request): array
    {
        $this->logRequest('DictAtualizar', $request);
        return [
            'data' => $this->sendToNewApi('POST', 'dict-atualizar', $request->all()),
            'status' => 200
        ];
    }

    public function dictVerificarChaves(Request $request): array
    {
        $this->logRequest('DictVerificarChaves', $request);
        return [
            'data' => $this->sendToNewApi('POST', 'dict-verificar-chaves', $request->all()),
            'status' => 200
        ];
    }

    public function dictCriar(Request $request): array
    {
        $this->logRequest('DictCriar', $request);
        return [
            'data' => $this->sendToNewApi('POST', 'dict-criar', $request->all()),
            'status' => 200
        ];
    }

    public function dictConsultar(Request $request): array
    {
        $this->logRequest('DictConsultar', $request);
        return [
            'data' => $this->sendToNewApi('POST', 'dict-consultar', $request->all()),
            'status' => 200
        ];
    }

    public function dictConsultarTodasChaves(Request $request): array
    {
        $this->logRequest('DictConsultarTodasChaves', $request);
        return [
            'data' => $this->sendToNewApi('POST', 'dict-consultar-todas-chaves', $request->all()),
            'status' => 200
        ];
    }



    // 🔽 Métodos auxiliares reaproveitáveis

    private function logRequest(string $action, Request $request): void
    {
        Log::info("[$action] Requisição recebida", [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'headers' => $request->headers->all(),
            'payload' => $request->all(),
        ]);
    }

    private function validateConectar(Request $request): void
    {
        $request->validate([
            'usuario' => 'required|string',
            'senha' => 'required|string',
        ]);
    }

    private function mapConectar(Request $request): array
    {
        return [
            'user' => $request->input('usuario'),
            'pass' => $request->input('senha'),
        ];
    }

    private function adaptConectarResponse(array $response): array
    {
        return $response; // Pode adaptar se necessário
    }

    private function sendToNewApi(string $method, string $endpoint, array $data): array
    {
        // Aqui vai o código real para enviar para a API Nova
        // return Http::withHeaders([...])->{$method}(url, $data)->json();
        return ['message' => "Resposta simulada de {$endpoint}"];
    }
}