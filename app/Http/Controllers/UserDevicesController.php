<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDevices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserDevicesController extends Controller
{
    public function store(Request $request)
    {
        $userDevice = UserDevices::where('fcm_token',$request->get('token'))->firstOrCreate([
            'user_id' => auth()->id(),
            'fcm_token' => $request->get('token'),
        ]);
    }

    public function sendNotification()
    {
        $token = UserDevices::first()->fcm_token;


        if (!$token) {
            return response()->json(['error' => 'User does not have a valid FCM token'], 400);
        }

        $response = Http::withHeaders([
//            'Authorization' => 'key=AIzaSyAn2IJ-74cdjcS7J9moq4VNNsybr4CJDUM',
            'Authorization' => 'key=BHA9O10lUxiuM_YLDXhZDzno4XCRjgFdWD0oBYNRzW8dEt6aXuZ7JUbhHyHUG-Fl5mpc2JCXJuOisqR8vKOD9W0',
            'Content-Type' => 'application/json',
        ])->post('https://fcm.googleapis.com/fcm/send', [
            'to' => $token,
            'notification' => [
                'title' => 'Test Notification',
                'body' => 'This is a test notification',
                'icon' => 'https://example.com/icon.png',
            ],
        ]);

        // Debugging the response
        $statusCode = $response->status();
        $responseBody = $response->body();
        $responseJson = $response->json();

        return response()->json([
            'status_code' => $statusCode,
            'response_body' => $responseBody,
            'response_json' => $responseJson,
        ]);
    }
}
