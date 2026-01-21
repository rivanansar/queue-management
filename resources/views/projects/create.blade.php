<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Tambah manajemen Proyek Alat 
        </h2>
    </x-slot>

    <div class="py-10 bg-slate-900 min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 shadow-lg rounded-xl p-8">

                <form method="POST" action="{{ route('projects.store') }}">
                    @csrf

                    <div class="mb-5">
                        <label class="block text-white font-medium mb-1">Nama Proyek</label>
                        <input type="text" name="nama_proyek"
                            class="w-full bg-white border border-gray-400 text-black rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                            required>
                    </div>

                    
                    <div class="mb-5">
                        <label class="block text-white font-medium mb-1">Nama Alat</label>
                        <input type="text" name="nama_alat"
                            class="w-full bg-white border border-gray-400 text-black rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                            required>
                    </div>


                    <div class="mb-5">
                        <label class="block text-white font-medium mb-1">Tipe Layanan</label>
                        <select name="tipe_layanan"
                            class="w-full bg-white border border-gray-400 text-black rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                            required>
                            <option value="">-- Pilih Tipe Layanan --</option>
                            <option value="Soil Investigation">Soil Investigation</option>
                            <option value="Survey">Survey</option>
                            <option value="Engineering">Engineering</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label class="block text-white font-medium mb-1">Status</label>
                        <select name="status"
                            class="w-full bg-white border border-gray-400 text-black rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                            required>
                            <option value="Aktif">menunggu</option>
                            <option value="diperiksa">diperiksa</option>
                            <option value="diperbaiki">diperbaiki</option>
                            <option value="selesai">selesai</option>

                        </select>
                    </div>

                    <div class="flex justify-between items-center border-t border-slate-700 pt-6">
                        <a href="{{ route('projects.index') }}"
                            class="text-white hover:text-gray-300 transition">
                            <- Kembali
                        </a>

                        <button type="submit"
                            class="bg-black text-white px-8 py-3 rounded-md hover:bg-gray-800 transition">
                            Simpan Proyek
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>