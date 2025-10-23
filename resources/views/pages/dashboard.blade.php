@extends('layout.layout')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    <!-- Page Header with Animation -->
    <div class="mb-8 animate-fade-in">
        <div class="flex items-center space-x-3 mb-2">
            <div class="w-1 h-8 bg-gradient-to-b from-green-500 to-teal-600 rounded-full"></div>
            <h2 class="text-3xl font-bold text-gray-800">Dashboard</h2>
        </div>
        <p class="text-gray-600 ml-4">Selamat datang di sistem manajemen kebun binatang</p>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <x-card 
            title="Total Satwa" 
            :value="$totalSatwa" 
            icon="🦁" 
        />
        
        <x-card 
            title="Total Spesies" 
            :value="$totalspesies" 
            icon="🦋" 
        />
        
        <x-card 
            title="Total Petugas" 
            :value="$totalZookeepers" 
            icon="👨‍🔧" 
        />
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Daftar Satwa -->
        <div class="lg:col-span-2 bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/20 p-6 hover:shadow-2xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-800 flex items-center space-x-2">
                    <span class="text-2xl">🦁</span>
                    <span>Daftar Satwa</span>
                </h3>
                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-semibold">
                    {{ count($Satwa) }} Satwa
                </span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b-2 border-gray-200">
                            <th class="text-left py-4 px-4 text-sm font-bold text-gray-600">Nama</th>
                            <th class="text-left py-4 px-4 text-sm font-bold text-gray-600">Spesies</th>
                            <th class="text-left py-4 px-4 text-sm font-bold text-gray-600">Usia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Satwa as $satwa)
                        <tr class="border-b border-gray-100 hover:bg-green-50/50 transition-colors duration-200">
                            <td class="py-4 px-4 text-sm font-semibold text-gray-800">{{ $satwa['nama'] }}</td>
                            <td class="py-4 px-4 text-sm text-gray-600 italic">{{ $satwa['spesies'] }}</td>
                            <td class="py-4 px-4 text-sm text-gray-600">
                                <span class="px-3 py-1 bg-teal-50 text-teal-700 rounded-lg font-medium">
                                    {{ $satwa['usia'] }} tahun
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            
            <!-- Petugas Card -->
            <div class="bg-gradient-to-br from-blue-500 to-cyan-600 rounded-2xl shadow-xl p-6 text-white hover:shadow-2xl transition-shadow duration-300">
                <div class="flex items-center space-x-2 mb-4">
                    <span class="text-2xl">👨‍🔧</span>
                    <h3 class="text-xl font-bold">Petugas Shift</h3>
                </div>
                <div class="space-y-3">
                    @foreach($zookeepers as $keeper)
                    <div class="flex items-center justify-between p-4 bg-white/20 backdrop-blur-sm rounded-xl hover:bg-white/30 transition-all duration-200">
                        <span class="font-semibold">{{ $keeper['nama'] }}</span>
                        <span class="px-3 py-1 bg-white text-blue-600 rounded-lg text-sm font-bold shadow-md">
                            {{ $keeper['shift'] }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Persediaan Pakan Card -->
            <div class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl shadow-xl p-6 text-white hover:shadow-2xl transition-shadow duration-300">
                <div class="flex items-center space-x-2 mb-4">
                    <span class="text-2xl">🥩</span>
                    <h3 class="text-xl font-bold">Persediaan Pakan</h3>
                </div>
                <div class="space-y-3">
                    @foreach($persediaanPakan as $jenis => $jumlah)
                    <div class="flex items-center justify-between p-4 bg-white/20 backdrop-blur-sm rounded-xl hover:bg-white/30 transition-all duration-200">
                        <span class="font-semibold">{{ $jenis }}</span>
                        <span class="px-3 py-1 bg-white text-orange-600 rounded-lg text-sm font-bold shadow-md">
                            {{ $jumlah }}
                        </span>
                    </div>
                    @endforeach
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