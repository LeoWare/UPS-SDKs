<?php

namespace UpsPhpAuthCodeSdk;

class UpsOauthResponse
{
    public $response;
    public $error;

    public function __construct($response = null, $error = null)
    {
        $this->response = $response;
        $this->error = $error;
    }

    public function toArray()
    {
        return [
            "response" => $this->response,
            "error" => $this->error,
        ];
    }
}
