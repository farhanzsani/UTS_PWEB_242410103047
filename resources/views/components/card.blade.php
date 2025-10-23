<div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-white/20 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-sm font-medium text-gray-500 mb-2">{{ $title }}</p>
            <h3 class="text-4xl font-bold bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                {{ $value }}
            </h3>
        </div>
        <div class="text-5xl group-hover:scale-110 transition-transform duration-300">
            {{ $icon }}
        </div>
    </div>
    <div class="mt-4 h-1 bg-gradient-to-r from-green-400 to-teal-500 rounded-full"></div>
</div>