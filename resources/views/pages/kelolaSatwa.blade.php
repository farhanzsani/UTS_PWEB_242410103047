@extends('layout.layout')

@section('title', 'Tambah Satwa')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    
    <div class="mb-8 animate-fade-in">
        <div class="flex items-center space-x-3 mb-2">
            <div class="w-1 h-8 bg-gradient-to-b from-green-500 to-teal-600 rounded-full"></div>
            <h2 class="text-3xl font-bold text-gray-800">Kelola Satwa</h2>
        </div>
        <p class="text-gray-600 ml-4">Tambah dan kelola data satwa kebun binatang</p>
    </div>

    
    <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/20 p-6 mb-8 hover:shadow-2xl transition-shadow duration-300">
        <div class="flex items-center space-x-2 mb-6">
            <span class="text-2xl">➕</span>
            <h3 class="text-xl font-bold text-gray-800">Tambah Satwa Baru</h3>
        </div>

        <form id="formTambahSatwa" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
               
                <div>
                    <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">
                        Nama Satwa <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="nama" 
                        name="nama" 
                        required
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200"
                        placeholder="Contoh: Harimau Sumatra"
                    >
                </div>

                
                <div>
                    <label for="spesies" class="block text-sm font-semibold text-gray-700 mb-2">
                        Spesies <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="spesies" 
                        name="spesies" 
                        required
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200"
                        placeholder="Contoh: Panthera tigris"
                    >
                </div>

               
                <div>
                    <label for="usia" class="block text-sm font-semibold text-gray-700 mb-2">
                        Usia (tahun) <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="number" 
                        id="usia" 
                        name="usia" 
                        required
                        min="0"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200"
                        placeholder="Contoh: 5"
                    >
                </div>
            </div>

          
            <div class="flex justify-end">
                <button 
                    type="submit"
                    class="px-6 py-3 bg-gradient-to-r from-green-500 to-teal-600 text-white font-semibold rounded-xl hover:shadow-lg transition-all duration-300 flex items-center space-x-2"
                >
                    <span>💾</span>
                    <span>Simpan Data</span>
                </button>
            </div>
        </form>
    </div>

    
    <div id="alertSuccess" class="hidden bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6 animate-fade-in">
        <div class="flex items-center">
            <span class="text-2xl mr-3">✅</span>
            <div>
                <p class="font-bold">Berhasil!</p>
                <p class="text-sm">Data satwa berhasil ditambahkan (simulasi)</p>
            </div>
        </div>
    </div>

   
    <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/20 p-6 hover:shadow-2xl transition-shadow duration-300">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-bold text-gray-800 flex items-center space-x-2">
                <span class="text-2xl">🦁</span>
                <span>Daftar Satwa</span>
            </h3>
            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-semibold">
                <span id="totalSatwa">{{ count($Satwa) }}</span> Satwa
            </span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b-2 border-gray-200">
                        <th class="text-left py-4 px-4 text-sm font-bold text-gray-600">No</th>
                        <th class="text-left py-4 px-4 text-sm font-bold text-gray-600">Nama</th>
                        <th class="text-left py-4 px-4 text-sm font-bold text-gray-600">Spesies</th>
                        <th class="text-left py-4 px-4 text-sm font-bold text-gray-600">Usia</th>
                        <th class="text-center py-4 px-4 text-sm font-bold text-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody id="tableSatwa">
                    @foreach($Satwa as $index => $satwa)
                    <tr class="border-b border-gray-100 hover:bg-green-50/50 transition-colors duration-200">
                        <td class="py-4 px-4 text-sm text-gray-600">{{ $index + 1 }}</td>
                        <td class="py-4 px-4 text-sm font-semibold text-gray-800">{{ $satwa['nama'] }}</td>
                        <td class="py-4 px-4 text-sm text-gray-600 italic">{{ $satwa['spesies'] }}</td>
                        <td class="py-4 px-4 text-sm text-gray-600">
                            <span class="px-3 py-1 bg-teal-50 text-teal-700 rounded-lg font-medium">
                                {{ $satwa['usia'] }} tahun
                            </span>
                        </td>
                        <td class="py-4 px-4 text-center">
                            <button class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-sm font-semibold hover:bg-blue-200 transition-colors duration-200 mr-2">
                                ✏️ Edit
                            </button>
                            <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-sm font-semibold hover:bg-red-200 transition-colors duration-200">
                                🗑️ Hapus
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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