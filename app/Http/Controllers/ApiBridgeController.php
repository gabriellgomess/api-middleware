<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ApiBridgeService;
use Symfony\Component\HttpFoundation\Response;

class ApiBridgeController extends Controller
{
    protected ApiBridgeService $service;

    public function __construct()
    {
        $this->service = new ApiBridgeService();
    }

    public function conectar(Request $request)
    {
        return $this->handle($request, 'Conectar');
    }

    public function desconectar(Request $request)
    {
        return $this->handle($request, 'Desconectar');
    }

    public function status(Request $request)
    {
        return $this->handle($request, 'Status');
    }

    public function mensagensNaFila(Request $request)
    {
        return $this->handle($request, 'MensagensNaFila');
    }

    public function buscarMensagem(Request $request)
    {
        return $this->handle($request, 'BuscarMensagem');
    }

    public function buscarMensagemMultiplas(Request $request)
    {
        return $this->handle($request, 'BuscarMensagemMultiplas');
    }

    public function enviarMensagem(Request $request)
    {
        return $this->handle($request, 'EnviarMensagem');
    }

    public function dictAtualizar(Request $request)
    {
        return $this->handle($request, 'DictAtualizar');
    }

    public function dictVerificarChaves(Request $request)
    {
        return $this->handle($request, 'DictVerificarChaves');
    }

    public function dictCriar(Request $request)
    {
        return $this->handle($request, 'DictCriar');
    }

    public function dictConsultar(Request $request)
    {
        return $this->handle($request, 'DictConsultar');
    }

    public function dictConsultarTodasChaves(Request $request)
    {
        return $this->handle($request, 'DictConsultarTodasChaves');
    }

    private function handle(Request $request, string $endpoint)
    {
        try {
            $response = $this->service->process($request, $endpoint);
            return response()->json($response['data'], $response['status']);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Bridge error',
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
