<x-layout>
    <x-slot:title>Buat Tugas</x-slot:title>
    <div class="max-w-lg mx-auto my-4 bg-white h-80 shadow-lg rounded-lg overflow-hidden border border-gray-200">
        <div class="flex">
            <!-- Bagian Kiri -->
            <div class="w-4/5 p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Judul Card yang Menarik</h2>
                <p class="text-gray-600 mb-4">
                    Ini adalah deskripsi singkat mengenai konten yang ada di dalam card ini. Anda dapat menambahkan informasi lebih lanjut di sini.
                </p>
                <a href="#" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-blue-700 transition duration-300 ease-in-out">Tindakan</a>
            </div>
            
            <!-- Bagian Kanan -->
            <div class="w-1/5 bg-blue-50 p-4 flex items-center justify-center">
                <div class="text-center ">
                    
                    <div x-show="openTab === 2" class="p-4" x-show.transition>
                        <div x-show="openTab === 2" class="p-4" x-show.transition>
                            <div x-data="{ openDropdown: false }" class="relative">
                                <!-- Form Input untuk Tambah -->
                                <input @click="openDropdown = !openDropdown" type="text" placeholder="Masukkan Judul" class="border border-gray-300 rounded px-4 py-2 w-48 focus:outline-none focus:ring-2 focus:ring-sky-500" />
                                <!-- Dropdown Menu -->
                                <div x-show="openDropdown" @click.away="openDropdown = false" class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded z-20">
                                    <a href="{{route('buat_tugas')}}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Tambah Tugas</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Tambah Pengumuman</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</x-layout>