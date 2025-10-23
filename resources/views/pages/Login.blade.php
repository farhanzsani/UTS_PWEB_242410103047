<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kebun Binatang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center p-4 bg-gray-50">

    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="text-5xl mb-3">🦁</div>
                <h1 class="text-2xl font-bold text-gray-800">Kebun Binatang</h1>
                <p class="text-gray-500 text-sm mt-1">Silakan login untuk melanjutkan</p>
            </div>

            <!-- Error Message -->
            @if(session('error'))
            <div class="mb-6 bg-red-50 border border-red-200 text-red-600 p-3 rounded-lg text-sm">
                {{ session('error') }}
            </div>
            @endif

            <!-- Form -->
            <form action="/login" method="POST" class="space-y-5">
                @csrf
                
                <div>
                    <label for="username" class="block text-gray-700 text-sm font-medium mb-2">
                        Username
                    </label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username"
                        required
                        value="{{ old('username') }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition"
                        placeholder="Masukkan username">
                </div>

                <div>
                    <label for="password" class="block text-gray-700 text-sm font-medium mb-2">
                        Password
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        required
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition"
                        placeholder="Masukkan password">
                </div>

                <button 
                    type="submit"
                    class="w-full bg-green-600 text-white font-medium py-2.5 rounded-lg hover:bg-green-700 transition duration-200">
                    Masuk
                </button>
            </form>

            <!-- Demo Info -->
            <div class="mt-6 pt-6 border-t text-center">
                <p class="text-xs text-gray-500">
                    Demo: <span class="font-semibold text-gray-700">admin</span> / <span class="font-semibold text-gray-700">12345678</span>
                </p>
            </div>
        </div>
    </div>

</body>
</html>