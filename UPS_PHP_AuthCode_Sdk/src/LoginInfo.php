<?php

namespace UpsPhpAuthCodeSdk;

class LoginInfo
{
    public $redirect_uri;

    public function __construct($redirect_uri)
    {
        $this->redirect_uri = $redirect_uri;
    }

    public function toArray()
    {
        return array(
            "redirect_uri" => $this->redirect_uri
        );
    }
}