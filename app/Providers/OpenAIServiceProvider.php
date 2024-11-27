<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use OpenAI\Client as OpenAIClient;

class OpenAIServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(OpenAIClient::class, function ($app) {
            return OpenAIClient::factory([
                'api_key' => env('OPENAI_API_KEY'),
            ]);
        });
    }

    public function boot()
    {
        //
    }
}
