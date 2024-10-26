<?php

namespace UpsPhpClientCredentialSdk;

class ErrorResponse
{
    private $errors = [];

    public function __construct($errors = [])
    {
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getMessage()
    {
        if ($this->errors && count($this->errors) > 0) {
            return $this->errors[0]->getMessage();
        }
        return null;
    }

    public function addErrorMessage($code, $message)
    {
        $error = new ErrorModel();
        $error->setCode($code);
        $error->setMessage($message);
        $this->errors[] = $error;
    }

    public function toArray()
    {
        $errorsArray = [];
        foreach ($this->errors as $error) {
            $errorsArray[] = [
                'code' => $error->getCode(),
                'message' => $error->getMessage(),
            ];
        }
        return ['errors' => $errorsArray];
    }
}
