@extends('layout.layout')

@section('title', 'Profile')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
   
    <div class="mb-8 animate-fade-in">
        <div class="flex items-center space-x-3 mb-2">
            <div class="w-1 h-8 bg-gradient-to-b from-blue-500 to-cyan-600 rounded-full"></div>
            <h2 class="text-3xl font-bold text-gray-800">Profile</h2>
        </div>
        <p class="text-gray-600 ml-4">Informasi akun Anda</p>
    </div>

   
    <div class="max-w-2xl mx-auto">
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/20 p-8 hover:shadow-2xl transition-shadow duration-300">
            
            
            <div class="flex flex-col items-center mb-8">
                <div class="w-24 h-24 bg-gradient-to-br from-green-400 to-teal-600 rounded-full flex items-center justify-center text-white text-4xl font-bold shadow-lg mb-4">
                     {{ strtoupper(substr($currentUsername ?? 'A', 0, 1)) }}
                </div>
            </div>

           
            <div class="space-y-6">
                <div class="p-4 bg-gray-50 rounded-xl">
                    <label class="text-sm text-gray-500 font-semibold uppercase mb-2 block">Username</label>
                    <p class="text-gray-800 font-semibold text-lg">{{$currentUsername ?? 'guest' }}</p>
                </div>
            </div>

        </div>
    </div>

</div>

@push('scripts')
<style>
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 0.6s ease-out;
}
</style>
@endpush
@endsection