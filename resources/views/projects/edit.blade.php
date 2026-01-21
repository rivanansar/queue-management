<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Edit Manajemen Proyek
        </h2>
    </x-slot>

    <div class="py-10 bg-slate-900 min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 shadow-lg rounded-xl p-8">

                <form method="POST" action="{{ route('projects.update', $project->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-5">
                        <label class="block text-white font-medium mb-1">Nama Proyek</label>
                        <input type="text" name="nama_proyek"
                            value="{{ old('nama_proyek', $project->nama_proyek) }}"
                            class="w-full bg-white border border-gray-400 text-black rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                            required>
                    </div>

                    
                    <div class="mb-5">
                        <label class="block text-white font-medium mb-1">Nama Alat</label>
                        <input type="text" name="nama_alat"
                            value="{{ old('nama_alat', $project->nama_alat) }}"
                            class="w-full bg-white border border-gray-400 text-black rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                            required>
                    </div>

                    
                    <div class="mb-5">
                        <label class="block text-white font-medium mb-1">Tipe Layanan</label>
                        <select name="tipe_layanan"
                            class="w-full bg-white border border-gray-400 text-black rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                            required>
                            <option value="">-- Pilih Tipe Layanan --</option>
                            <option value="Soil Investigation" {{ $project->tipe_layanan == 'Soil Investigation' ? 'selected' : '' }}>
                                Soil Investigation
                            </option>
                            <option value="Survey" {{ $project->tipe_layanan == 'Survey' ? 'selected' : '' }}>
                                Survey
                            </option>
                            <option value="Engineering" {{ $project->tipe_layanan == 'Engineering' ? 'selected' : '' }}>
                                Engineering
                            </option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div class="mb-5">
                        <label class="block text-white font-medium mb-1">Status</label>
                        <select name="status"
                            class="w-full bg-white border border-gray-400 text-black rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                            required>
                            <option value="Aktif" {{ $project->status == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                            <option value="Selesai" {{ $project->status == 'diperiksa' ? 'selected' : '' }}>Diperiksa</option>
                            <option value="Selesai" {{ $project->status == 'diperbaiki' ? 'selected' : '' }}>Diperbaiki</option>
                            <option value="Selesai" {{ $project->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>

                    <!-- Tombol -->
                    <div class="flex justify-between items-center border-t border-slate-700 pt-6">
                        <a href="{{ route('projects.index') }}"
                            class="text-white hover:text-gray-300 transition">
                            <- Kembali
                        </a>

                        <button type="submit"
                            class="bg-black text-white px-8 py-3 rounded-md hover:bg-gray-800 transition">
                            Update Proyek
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>