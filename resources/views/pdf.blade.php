<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <title>Document</title>
</head>
<body>

    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="max-w-md w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-4">
                <div class="border-b border-gray-200 pb-4">
                    <h1 class="text-3xl font-bold text-center mb-2 text-blue-600">Event Ticket</h1>
                </div>
                <!-- Ticket items -->
                <div class="p-4">
                    {{--  @foreach($users as $user)  --}}
                        <div class="border border-gray-300 rounded-lg p-4 mb-4 bg-gray-50">
                            <h1 class="text-xl font-semibold text-gray-800">{{ $users->name }}</h1>
                            <p class="text-sm text-gray-600">{{ $users->name }}</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-xs text-gray-500">{{ $users->name }}</span>
                                <button class="text-xs text-white bg-blue-600 px-3 py-1 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Details</button>
                            </div>
                        </div>
                    {{--  @endforeach  --}}
                </div>
            </div>
        </div>
    </div>


</body>
</html>
