<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CompanysModel;
use App\Models\ProfessionalsModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller {

    public function status(Request $request, User $users) {
        return response()->json(['message' => 'ok']);
    }

    public function auth(Request $request, User $users) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = $users->where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Dados Incorretos.'], 404);
        }

        $token = $user->createToken($request->device_name)->plainTextToken;

        return response()->json(['token' => $token]);
    }

    public function me(Request $request) {
        $cliente = $request->user();
        return response()->json([$cliente], 200);
    }

    public function logout(Request $request) {
        $client = $request->user();

        // Revoke all tokens client...
        $client->tokens()->delete();

        return response()->json([], 204);
    }
}
