<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Update User</title>
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto bg-white shadow-md rounded-md overflow-hidden my-8">
        <div class="bg-gray-100 dark:bg-gray-700 py-4">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 text-center">Update User</h2>
        </div>
        <form action="{{ route('admin.update', $admin->id) }}" method="POST" class="px-6 py-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Role</label>
                <select id="role" name="role_id"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white dark:bg-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}"> {{ $role->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-6">
                <button type="submit" name="submit"
                    class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Update User
                </button>
            </div>
        </form>
    </div>
</body>

</html>
