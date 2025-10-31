<?php

namespace rkmaxwell\smsleopard\Services;

use Illuminate\Support\Facades\Http;

class SmsLeopardClient
{
    protected string $apiKey;
    protected string $apiSecret;
    protected string $source;

    public function __construct(string $apiKey, string $apiSecret, string $source)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->source = $source;
    }

    public function send(string $message, string $to)
    {
        $response = Http::get("https://api.smsleopard.com/v1/sms/send", [
            'username' => $this->apiKey,
            'password' => $this->apiSecret,
            'message' => $message,
            'destination' => $to,
            'source' => $this->source,
        ]);

        return $response->json();
    }
}
