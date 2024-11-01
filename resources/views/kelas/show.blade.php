<x-layout>
    <x-slot:title>Kelas</x-slot:title>

    

    <!-- Navigasi Tab di Bawah Form -->
    <h1 class="text-2xl font-bold mb-4 mt-5 text-start">Kelas {{$kelas->nama}} Guru</h1>

    <div class="container mx-auto mt-10 mb-10" x-data="{ openTab: 1 }">
        <div class="bg-white shadow-md rounded-lg overflow-hidden min-h-80">
            <!-- Navigasi Tab -->
            <div class="border-b">
                <nav class="flex space-x-4">
                    <button @click="openTab = 1" class="py-2 px-4" :class="{ 'text-blue-500': openTab === 1, 'text-gray-700': openTab !== 1 }">Forum</button>
                    <button @click="openTab = 2" class="py-2 px-4" :class="{ 'text-blue-500': openTab === 2, 'text-gray-700': openTab !== 2 }">Tugas Kelas</button>
                    <button @click="openTab = 3" class="py-2 px-4" :class="{ 'text-blue-500': openTab === 3, 'text-gray-700': openTab !== 3 }">Orang</button>
                    <button @click="openTab = 4" class="py-2 px-4" :class="{ 'text-blue-500': openTab === 4, 'text-gray-700': openTab !== 4 }">Nilai</button>
                </nav>
            </div>

            <!-- Konten Tab -->
            <div x-show="openTab === 1" class="p-4">
                <div class="w-full max-w-3xl p-6"> <!-- Mengatur lebar maksimum form -->
                
                    <!-- Form to Display and Edit Kelas Data -->
                    <form method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf <!-- Tambahkan token CSRF -->
                        
                        <!-- Field for Kelas Name -->
                        <div class="mb-4">
                            <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama Kelas:</label>
                            <input type="text" id="nama" name="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan nama kelas" value="{{ old('nama', $kelas->nama) }}">
                        </div>
                
                        <!-- Field for Description -->
                        <div class="mb-4">
                            <label for="deskripsi" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi:</label>
                            <textarea id="deskripsi" name="deskripsi" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan deskripsi kelas">{{ old('deskripsi', $kelas->deskripsi) }}</textarea>
                        </div>
                
                        <!-- Field for Mata Pelajaran -->
                        <div class="mb-4">
                            <label for="matapelajaran" class="block text-gray-700 text-sm font-bold mb-2">Mata Pelajaran:</label>
                            <input type="text" id="matapelajaran" name="matapelajaran" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan mata pelajaran" value="{{ old('matapelajaran', $kelas->matapelajaran) }}">
                        </div>
                
                        <!-- Submit Button -->
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            @include('kelas.tugaskelas')

            <div x-show="openTab === 3" class="p-4" x-show.transition>
                <h2 class="text-xl font-bold">Konten Bagian 3</h2>
                <p>Ini adalah deskripsi untuk bagian 3. Anda dapat menambahkan konten yang relevan di sini.</p>
            </div>

            <div x-show="openTab === 4" class="p-4" x-show.transition>
                <h2 class="text-xl font-bold">Konten Bagian 4</h2>
                <p>Ini adalah deskripsi untuk bagian 4. Anda dapat menambahkan konten yang relevan di sini.</p>
            </div>
        </div>
    </div>

</x-layout>
