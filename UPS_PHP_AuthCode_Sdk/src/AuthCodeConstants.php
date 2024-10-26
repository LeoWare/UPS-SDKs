<?php

namespace UpsPhpAuthCodeSdk;

class AuthCodeConstants
{
    public const AUTHORIZE_URL = "https://onlinetools.ups.com/security/v1/oauth/authorize";
    public const TOKEN_URL = "https://onlinetools.ups.com/security/v1/oauth/token";
    public const REFRESH_TOKEN_URL = "https://onlinetools.ups.com/security/v1/oauth/refresh";
    public const GET_TIMEOUT = 15;  // Timeout in seconds, adjusted from milliseconds
    public const POST_TIMEOUT = 15;  // Timeout in seconds, adjusted from milliseconds
    public const INTERNAL_SERVER_ERROR = "{\"code\":\"10500\",\"message\":\"Unable to redirect: Response or RequestUri is null.\"}";
    public const UNABLE_TO_REDIRECT = "{\"code\":\"10400\",\"message\":\"Unable to redirect: Response or RequestUri is null.\"}";
    public const TIMED_OUT = "{\"code\":\"10500\",\"message\":\"Request Timed out.\"}";
    public const BASE_URL = "https://onlinetools.ups.com/security/v1/oauth";
}
