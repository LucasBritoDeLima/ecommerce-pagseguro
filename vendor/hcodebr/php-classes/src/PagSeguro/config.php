<?php

namespace Hcode\PagSeguro;

class Config
{

    const SANDBOX = true;
    const SANDBOX_EMAIL = "cabecote100@hotmail.com";
    const PRODUCTION_EMAIL = "cabecote100@hotmail.com";

    const SANDBOX_TOKEN = "3D986C8B3448412F8869EF8F42B2799B";
    const PRODUCTION_TOKEN = "294d7be5-465a-4862-b832-208945a34aabec6ba6834fb499460c350f1f98212c2e25c4-65b4-4e42-80fb-d8210765a7aa";

    const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";
    const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";

    const SANDBOX_URL_JS = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    const PRODUCTION_URL_JS = "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";


    public static function getAuthentication(): array
    {
        if (Config::SANDBOX === true) {
            return [
                "email" => Config::SANDBOX_EMAIL,
                "token" => Config::SANDBOX_TOKEN
            ];
        } else {
            return [
                "email" => Config::PRODUCTION_EMAIL,
                "token" => Config::PRODUCTION_TOKEN
            ];
        }
    }

    public static function getUrlSessions(): string
    {
        return (Config::SANDBOX === true) ? Config::SANDBOX_SESSIONS : Config::PRODUCTION_SESSIONS;
    }

    public static function getUrlJS()
    {
        return (Config::SANDBOX === true) ? Config::SANDBOX_URL_JS : Config::PRODUCTION_URL_JS;
    }
}
