<?php

namespace App\Livewire;

use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Events\MessageSent;
use Livewire\Attributes\On;

class Chat extends Component
{
    public $user;
    public $message;
    public $senderId;
    public $receiverId;
    public $messages;

    public function mount($userId)
    {
        $this->user = $this->getUser($userId);

        $this->senderId = Auth::user()->id;
        $this->receiverId = $userId;

        $this->messages = $this->getMessages();
    }

    public function render()
    {
        return view('livewire.chat');
    }

    public function getUser($userId)
    {
        return User::find($userId);
    }

    public function getMessages()
    {
        return Message::with('sender:id,name', 'receiver:id,name')
            ->where(function($query){
                $query->where('sender_id', $this->senderId)
                    ->where('receiver_id', $this->receiverId);
            })
            ->orwhere(function($query){
                $query->where('sender_id', $this->receiverId)
                    ->where('receiver_id', $this->senderId);
            })
            
            ->get();
    }

    public function sentMessage() //sendMessage
    {
        $sentMessage = $this->savemessage();

        $this->messages[] = $sentMessage;

        broadcast(new MessageSent($sentMessage));

        $this->message = null;
    }

    #[On('echo-private:chat-channel.{senderId},MessageSent')]
    public function listenMessage($event) {
        dd($event);
    }

    public function saveMessage() //saveMessage
    {
        return Message::create([
            'sender_id' => $this->senderId,
            'receiver_id' => $this->receiverId,
            'message' => $this->message,
            //'file_name',
            //'file_original_name',
            //'folder_path',
            'is_read'=> false
        ]);
    }

    public function index()
    {
        $currentUserId = Auth::id();

        $users = User::whereHas('messages', function($q) use ($currentUserId) {
            $q->where('receiver_id', $currentUserId)
            ->orWhere('sender_id', $currentUserId);
        })
        ->where('id', '!=', $currentUserId)
        ->get();

        return view('dashboard', compact('users'));
    }

}
