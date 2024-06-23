<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class WhatsappHelper
{
    public static function sendConfirmationMessageByOrder()
    {
        $clientId = 'UnUu1JuypgRJwpTE0huxnO8GoZ3nA80gNm5tSoXu4tcvUyKoEOAVD5l0OtLOh8fC';
        $clientSecret = 'XiMIt5CKL4BYg4cIA8Ezg1SlIyeZQhyCkM2dkpYCLCSvEEmvyS5FsQSTXPPmxLC0';

        $response = Http::withHeaders([
            'Host' => 'api.vatansms.net',
            'client-id' => $clientId,
            'client-secret' => $clientSecret,
        ])->post('https://api.vatansms.net/api/whatsapp/v1/login/phone', [
            'phone' => '+905377434267'
        ]);

        // Check if the request was successful
        if ($response->successful()) {
            // Handle successful response
            return $response->json()['data'];
        } else {
            // Handle failed response
            return $response->body();
        }
    }

    public static function firstCheck()
    {
        $clientId = 'UnUu1JuypgRJwpTE0huxnO8GoZ3nA80gNm5tSoXu4tcvUyKoEOAVD5l0OtLOh8fC';
        $clientSecret = 'XiMIt5CKL4BYg4cIA8Ezg1SlIyeZQhyCkM2dkpYCLCSvEEmvyS5FsQSTXPPmxLC0';

        $regId = self::getRegId();

        $response = Http::withHeaders([
            'client-id' => $clientId,
            'client-secret' => $clientSecret,
        ])->timeout(300)
            ->post('https://api.vatansms.net/api/whatsapp/v1/login/check', [
                'reg_id' => $regId
            ]);

        if ($response->successful()) {
            return $response->json()['data'];
        } else {
            return $response->body();
        }
    }

    public static function isActive()
    {
        $clientId = 'UnUu1JuypgRJwpTE0huxnO8GoZ3nA80gNm5tSoXu4tcvUyKoEOAVD5l0OtLOh8fC';
        $clientSecret = 'XiMIt5CKL4BYg4cIA8Ezg1SlIyeZQhyCkM2dkpYCLCSvEEmvyS5FsQSTXPPmxLC0';

        $regId = self::getRegId();

        $response = Http::withHeaders([
            'client-id' => $clientId,
            'client-secret' => $clientSecret,
        ])->timeout(300)
            ->post('https://api.vatansms.net/api/whatsapp/v1/login/check/active', [
                'reg_id' => $regId
            ]);

        if ($response->successful()) {
            return $response->json()['data'];
        } else {
            return $response->body();
        }
    }

    public static function sendMessage($phone, $message)
    {
        $clientId = 'UnUu1JuypgRJwpTE0huxnO8GoZ3nA80gNm5tSoXu4tcvUyKoEOAVD5l0OtLOh8fC';
        $clientSecret = 'XiMIt5CKL4BYg4cIA8Ezg1SlIyeZQhyCkM2dkpYCLCSvEEmvyS5FsQSTXPPmxLC0';
        ini_set('max_execution_time', 300);
        $regId = self::getRegId();

        $response = Http::withHeaders([
            'client-id' => $clientId,
            'client-secret' => $clientSecret,
        ])->timeout(300)
//            ->attach('attachment', file_get_contents($attachment))
            ->post('https://api.vatansms.net/api/whatsapp/v1/messages/send', [
                'reg_id' => $regId,
                'to' => $phone,
                'message' => $message,
                'send_speed' => 1,
                'report_id' => rand(100000000,900000000),
            ]);

        if ($response->successful()) {
            return $response->json()['data'];
        } else {
            return $response->body();
        }
    }

    public static function getRegId()
    {
        return "1421156046";
        $clientId = 'UnUu1JuypgRJwpTE0huxnO8GoZ3nA80gNm5tSoXu4tcvUyKoEOAVD5l0OtLOh8fC';
        $clientSecret = 'XiMIt5CKL4BYg4cIA8Ezg1SlIyeZQhyCkM2dkpYCLCSvEEmvyS5FsQSTXPPmxLC0';

        $response = Http::withHeaders([
            'Host' => 'api.vatansms.net',
            'client-id' => $clientId,
            'client-secret' => $clientSecret,
        ])->post('https://api.vatansms.net/api/whatsapp/v1/login/qr', [
            'phone' => '+905377434267'
        ]);
        dd($response->json());
        if ($response->successful()) {
            return $response->json()['data']['regId'];
        }
    }
}
