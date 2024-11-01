
    <div x-show="openTab === 2" class="p-4" x-show.transition>
        <div x-show="openTab === 2" class="p-4" x-show.transition>
            <div x-data="{ openDropdown: false }" class="relative">
                <button @click="openDropdown = !openDropdown" class="bg-sky-500 text-white rounded px-4 py-2">
                    Tambah
                </button>
        
                <!-- Dropdown Menu -->
                <div x-show="openDropdown" @click.away="openDropdown = false" class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded z-20">
                    <a href="{{route('buat_tugas')}}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Tambah Tugas</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Tambah Pengumuman</a>
                </div>
            </div>
        
        </div>
    </div>