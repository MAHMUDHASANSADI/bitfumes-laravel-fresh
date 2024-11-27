<?php

namespace App\Http\Controllers;

use OpenAI\Client as OpenAIClient;

class OpenAIController extends Controller
{
    public function generateText(OpenAIClient $client)
    {
        $response = $client->chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                ['role' => 'user', 'content' => 'Generate a Laravel integration guide for OpenAI.'],
            ],
        ]);

        return response()->json([
            'response' => $response['choices'][0]['message']['content'],
        ]);
    }
}
