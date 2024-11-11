<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Para hacer solicitudes HTTP

class GeminoController extends Controller
{
    public function processGemini(Request $request)
    {
        // Aquí configuras tu lógica de llamada a la API de Gemini
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('GEMINI_API_KEY'), // Asegúrate de tener esta clave en tu .env
                'Content-Type' => 'application/json',
            ])->post('https://api.gemini.com/v1/your-endpoint', [
                'inputData' => $request->input('inputData'), // Ajusta los parámetros según la API de Gemini
            ]);

            // Verificar si la solicitud fue exitosa
            if ($response->successful()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Gemini response received',
                    'data' => $response->json(), // Devuelve la respuesta de la API
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to connect to Gemini API',
                    'error' => $response->body(), // Información sobre el error
                ], $response->status());
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while connecting to Gemini',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}

