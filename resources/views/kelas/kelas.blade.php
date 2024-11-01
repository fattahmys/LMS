<x-layout>
    <x-slot:title>Kelas</x-slot:title>
    
    <div class="flex flex-col">
        <div class="flex-1 w-full px-4 sm:px-6 lg:px-8"> <!-- Pastikan w-full digunakan -->
            <h1 class="text-2xl font-bold mb-4 mt-5">Daftar Kelas Guru</h1>
    
            @if($kelas->isEmpty())
                <p>Tidak ada data kelas yang ditemukan.</p>
            @else
                <div class="mt-10 mb-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($kelas as $k)
                        <a href="{{ route('kelas.show', ['id' => $k->id]) }}" class="block">
                            <div class="bg-white h-56 w-72 rounded-lg shadow-md text-center hover:bg-gray-200 transition duration-300 overflow-hidden relative">
                                <img src="{{ Storage::url('images/'.$k->image_path) }}" alt="Gambar" class="object-cover h-28 w-full">
                                
                                <h5 class="text-md my-3 mx-5 font-semibold text-gray-800 text-left hover:text-gray-700 transition-transform transform hover:scale-110">{{ $k->matapelajaran }}</h5>
                                
                                <!-- Garis Pemisah -->
                                <hr class="border-t border-gray-300 my-2 mx-4">
                                
                                <p class="text-sm m-5 text-gray-800 text-left">{{ Str::limit($k->deskripsi, 50) }}</p>
                                
                                <!-- Gambar Profil Bulatan di Tengah Kanan -->
                                <div class="absolute right-4 top-14">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Gambar Profil" class="w-20 h-20 rounded-full border-2 border-gray-300">
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-layout>
