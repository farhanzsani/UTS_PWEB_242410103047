<nav class="bg-white/80 backdrop-blur-md shadow-lg border-b border-white/20 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            

            <div class="flex items-center space-x-3">
                <div class="bg-gradient-to-br from-green-400 to-teal-600 p-2 rounded-xl shadow-lg">
                    <span class="text-2xl">🦁</span>
                </div>
                <div>
                    <h1 class="text-xl font-bold bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                        Lihat Kebun-ku
                    </h1>
                    <p class="text-xs text-gray-500">Management System</p>
                </div>
            </div>


            <div class="hidden md:flex items-center space-x-2">
                <a href="/dashboard" class="px-4 py-2 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 font-medium transition-all duration-200">
                    Dashboard
                </a>
                <a href="/kelola-satwa" class="px-4 py-2 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 font-medium transition-all duration-200">
                    Satwa
                </a>
            </div>

            
                <div class="flex items-center space-x-4">
                    <a href="/profile">
                    <div class="hidden sm:flex items-center space-x-3 px-4 py-2 bg-gradient-to-r from-green-50 to-teal-50 rounded-lg border border-green-200">
                        <div class="flex items-center justify-center w-8 h-8 bg-gradient-to-br from-green-400 to-teal-600 rounded-full text-white font-bold text-sm">
                            
                                {{ strtoupper(substr($currentUsername ?? 'A', 0, 1)) }}
                        
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Logged in as</p>
                            <p class="text-sm font-bold text-gray-800">{{ $currentUsername ?? 'guest' }}</p>
                        </div>
                    </div>
                    </a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-red-50 text-red-600 hover:bg-red-100 rounded-lg font-medium transition-all duration-200">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>