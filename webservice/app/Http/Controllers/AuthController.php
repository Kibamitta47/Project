<?php 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $token = $user->createToken('token_name')->plainTextToken; // สร้าง token

            return response()->json(['message' => 'Login successful', 'user' => $user, 'token' => $token]);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    // เมธอดสำหรับการออกจากระบบ
    public function logout(Request $request)
    {
        // ลบ token ของผู้ใช้
        $user = Auth::user();
        $user->tokens()->delete(); // ทำลายทุก token ที่มีอยู่

        return response()->json(['message' => 'Logout successful']);
    }
}
