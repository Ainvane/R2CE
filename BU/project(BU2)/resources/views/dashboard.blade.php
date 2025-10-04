<x-app-layout>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="assets/images/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
        <title>เว็บแอปพลิเคชันช่วยสรรหางาน</title>
    
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/owl.css">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/faqs/faq-3/assets/css/faq-3.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Additional JS -->
        <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <script>
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;
        
            var pusher = new Pusher('876d2da4d27268adb0a2', {
              cluster: 'ap1'
            });
        
            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
              alert(JSON.stringify(data));
            });
          </script>
    
      </head>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Login สำเร็จ") }}
                </div>
            </div>
        </div>
    </div> --}} 
    
    <!-- Group Chat Section -->
{{--     <div class="container mt-4">

        <div class="row">

            @if (count($users) > 0)

                <div class="col-md-3">

                    <ul class="list-group">
                        @foreach ($users as $user)

                            <li class="list-group-item list-group-item-dark">
                                {{$user->name}}
                            </li>
                            
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-9">

                </div>
            @else

            <div class="cod-md-12">
                <h6>ไม่พบสมาชิก</h6>
            </div>

            @endif

        </div>

    </div> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                        {{ __('Group Chat') }}
                    </h2>
                    <div id="chat-box" class="border p-4 mb-4" style="height: 300px; overflow-y: scroll;">
                        <!-- Chat messages will be displayed here -->
                        <div class="current-user-chat">
                            <h5>Hi</h5>
                        </div>
                        <div class="distance-user-chat">
                            <h5>Hello</h5>
                        </div>
                    </div>
                    <form id="chat-form">
                        <input type="text" id="chat-message" class="form-control mb-2" placeholder="Type your message here...">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <button id="add-member-btn" class="btn btn-secondary mt-4">เพิ่มสมาชิก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding Members -->
    <div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="addMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMemberModalLabel">เพิ่มสมาชิก</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add-member-form">
                        <div class="mb-3">
                            <label for="member-email" class="form-label">Email สมาชิก</label>
                            <input type="email" class="form-control" id="member-email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">เพิ่ม</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <body>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container mx-auto p-8">
                        <h1 class="text-2xl font-bold">List of User</h1>

                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border-collapse border border-grey-300">
                                <thead>
                                    <tr class="bg-grey-100">
                                        <th class="border border-gray-300 px-4 py-2 text-left w-12">#</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left w-32">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $loop->index + 1 }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $user->name }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <a navigate href="{{ route('chat', $user->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                                </svg>
                                            </a>                                              
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                            

                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Enter Your Name</div>
                        <div class="card-body">
                            <form action="{{ route('chatroom') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Enter Chat</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </body>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <script>
        document.getElementById('add-member-btn').addEventListener('click', function() {
            var addMemberModal = new bootstrap.Modal(document.getElementById('addMemberModal'));
            addMemberModal.show();
        });

        document.getElementById('add-member-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var email = document.getElementById('member-email').value;
            // Add member to the group chat (implement the logic here)
            alert('สมาชิก ' + email + ' ถูกเพิ่มเรียบร้อยแล้ว');
            var addMemberModal = bootstrap.Modal.getInstance(document.getElementById('addMemberModal'));
            addMemberModal.hide();
        });

        document.getElementById('chat-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var message = document.getElementById('chat-message').value;
            // Send message to the group chat (implement the logic here)
            axios.post('{{ route('group-chat.send-message') }}', {
                message: message
            }).then(response => {
                console.log(response.data.message);
            }).catch(error => {
                console.error(error);
            });
            document.getElementById('chat-message').value = '';
        });

        Echo.channel('group-chat')
            .listen('MessageSent', (e) => {
                var chatBox = document.getElementById('chat-box');
                var newMessage = document.createElement('div');
                newMessage.textContent = e.message.message;
                chatBox.appendChild(newMessage);
            });
    </script>

</html>
</x-app-layout>
