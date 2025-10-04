<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\GroupChat;

class GroupChatController extends Controller
{
    public function addMember(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();

        if ($user) {
            // Logic to add user to the group chat
            return response()->json(['message' => 'สมาชิกถูกเพิ่มเรียบร้อยแล้ว']);
        } else {
            return response()->json(['message' => 'ไม่พบสมาชิกที่มีอีเมลนี้'], 404);
        }
    }

    public function sendMessage(Request $request)
    {
        $message = $request->input('message');
        $user = \Illuminate\Support\Facades\Auth::user();

        // Logic to send message to the group chat
        GroupChat::create([
            'user_id' => $user->id,
            'message' => $message,
        ]);

        return response()->json(['message' => 'ส่งข้อความเรียบร้อยแล้ว']);
    }
}