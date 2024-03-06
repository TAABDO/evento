<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 shadow-md rounded-md overflow-hidden">
        <div class="text-center bg-gray-100 dark:bg-gray-700 py-4">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Create User</h2>
        </div>
        <form class="p-6" action="#" method="POST">
            <!-- User Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                <input type="text" name="name" id="name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Enter user name">
            </div>
            <!-- Status -->
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                <select id="status" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white dark:bg-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
            <!-- Role -->
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Role</label>
                <select id="role" name="role" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white dark:bg-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <option>Administrator</option>
                    <option>User</option>
                </select>
            </div>
            <!-- Create Button -->
            <div class="mt-6">
                <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Create User
                </button>
            </div>
        </form>
    </div>

</body>
</html>
