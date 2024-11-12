<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Para hacer solicitudes HTTP

class ChatGPTController extends Controller
{
    public function processChatGPT(Request $request)
    {
        try {
            // Llamada a la API de ChatGPT
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'), // Asegúrate de tener esta clave en tu .env
                'Content-Type' => 'application/json',
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4o', // Modelo a usar, ajusta según tu necesidad
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => $request->input('message') // Recibe el mensaje del usuario desde el request
                    ]
                ]
            ]);

            // Verificar si la solicitud fue exitosa
            if ($response->successful()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'ChatGPT response received',
                    'data' => $response->json(), // Devuelve la respuesta de la API
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to connect to ChatGPT API',
                    'error' => $response->body(), // Información sobre el error
                ], $response->status());
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while connecting to ChatGPT',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
