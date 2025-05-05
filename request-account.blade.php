<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Account | Vento Inventory</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Assuming you're using Laravel Vite -->
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-900 text-white flex flex-col justify-between py-6 px-4">
            <div>
                <!-- Logo -->
                <div class="mb-8 text-center">
                    <img src="/logo.png" alt="Vento Inventory Logo" class="h-12 mx-auto mb-2">
                    <h1 class="text-xl font-bold leading-tight">Vento<br>INVENTORY</h1>
                </div>

                <!-- Navigation Links -->
                <nav class="space-y-3">
                    <a href="{{ route('dashboard') }}" class="block bg-yellow-400 text-black font-semibold px-4 py-2 rounded shadow">
                        Dashboard
                    </a>
                    <a href="{{ route('users.index') }}" class="block bg-yellow-400 text-black font-semibold px-4 py-2 rounded shadow">
                        User Management
                    </a>
                    <a href="{{ route('request.account') }}" class="block bg-yellow-400 text-black font-semibold px-4 py-2 rounded shadow">
                        Request Account
                    </a>
                </nav>
            </div>

            <!-- Sign Out -->
            <form method="POST" action="{{ route('logout') }}" class="mt-8">
                @csrf
                <button class="w-full flex items-center justify-center bg-yellow-400 text-black font-bold px-4 py-2 rounded shadow">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 002 2h3a2 2 0 002-2v-1" />
                    </svg>
                    Sign Out
                </button>
            </form>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 bg-white">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold">Request Account</h2>
                <button class="bg-blue-600 text-white px-4 py-2 rounded shadow">Admin</button>
            </div>

            <div class="bg-gray-100 p-6 rounded shadow-md">
                <h3 class="text-lg font-semibold mb-4">Pending Accounts</h3>

                <div class="border border-gray-300 bg-white text-gray-500 p-6 text-center rounded">
                    No Pending Request yet
                </div>
            </div>
        </main>
    </div>

</body>
</html>
