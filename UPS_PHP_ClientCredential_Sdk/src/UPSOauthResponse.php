<?php

namespace UpsPhpClientCredentialSdk;


class UPSOauthResponse
{
    private $response;
    private $error;

    public function __construct($response = null, $error = null)
    {
        $this->response = $response;
        $this->error = $error;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setResponse($response)
    {
        $this->response = $response;
    }

    public function getError()
    {
        return $this->error;
    }

    public function setError($error)
    {
        $this->error = $error;
    }

    public function toArray()
    {
        return [
            "response" => $this->response ? $this->response->toArray() : null,
            "error" => $this->error ? $this->error->toArray() : null,
        ];
    }
}
