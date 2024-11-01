<div x-data="{ open: true, openDropdown: false }" class="flex h-screen">
    <!-- Sidebar -->
    <div :class="open ? 'w-64' : 'w-16'" class="bg-gray-900 text-white shadow-md transition-all duration-500 ease-in-out">
        <div class="flex items-center justify-between p-6">
            <h1 :class="open ? 'block' : 'hidden'" class="text-lg font-semibold transition-all duration-500 ease-in-out">{{$slot}}</h1>
            <template x-if="open">
                <div class="flex justify-end items-center ml-3">
                    <button @click="open = !open; openDropdown = false" 
                            class="flex-grow p-2 rounded text-white focus:outline-none z-10 transition-all duration-300 ease-in-out hover:bg-gray-600 bg-gray-800">
                        <x-fluentui-line-horizontal-3-20 class="w-6 h-6" />
                    </button>
                </div>
            </template>
            <template x-if="!open">
                <div class="flex justify-center items-center">
                    <button @click="open = !open" 
                            class="p-2 rounded text-white focus:outline-none z-10 transition-all duration-300 ease-in-out hover:bg-gray-600 bg-gray-800">
                        <x-gravityui-arrow-shape-right-from-line class="w-6 h-6" />
                    </button>
                </div>
            </template>
        </div>
        
        <nav class="mt-0">
            @if (request()->is('kelas*'))
            <div>
                <a href="#" @click="if (!open) open = true; openDropdown = !openDropdown" 
                   class="flex items-center px-4 py-4 text-gray-300 hover:bg-gray-700 hover:text-white transition-all duration-300 ease-in-out">
                    <x-gravityui-square-chart-bar class="w-6 h-6 mr-2" />
                    <span x-show="open" class="sidebar-text">Materi dan Tugas</span>
                    <svg x-show="open && !openDropdown" class="w-4 h-4 ml-auto transform transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <!-- SVG icon A untuk dropdown tertutup -->
                        <path d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                    </svg>
                    <svg x-show="openDropdown" class="w-4 h-4 ml-auto transform transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <!-- SVG icon B untuk dropdown terbuka -->
                        <path d="M14.707 10.707a1 1 0 01-1.414 0L10 7.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" />
                    </svg>
                </a>

                <!-- Isi Dropdown -->
                <div x-show="openDropdown && open" x-cloak class="pl-8 py-2 space-y-2 bg-gray-900">
                    <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Laporan Nilai</a>
                    <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Rekapitulasi Nilai</a>
                    <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Rincian Nilai</a>
                </div>
            </div>
            <a href="#" class="flex items-center px-4 py-4 text-gray-300 hover:bg-gray-700 hover:text-white transition-all duration-300 ease-in-out">
                <x-gravityui-persons class="w-6 h-6 mr-2"/>
                <span x-show="open" class="sidebar-text">Orang</span>
            </a>
            <a href="#" class="flex items-center px-4 py-4 text-gray-300 hover:bg-gray-700 hover:text-white transition-all duration-300 ease-in-out">
                <x-gravityui-list-ul class="w-6 h-6 mr-2"/>
                <span x-show="open" class="sidebar-text">Nilai</span>
            </a>
            @endif
        </nav>
    </div>
</div>

<style>
    .sidebar-text {
        transition: opacity 0.3s ease, margin-left 0.3s ease;
    }

    [x-cloak] {
        display: none;
    }
</style>
