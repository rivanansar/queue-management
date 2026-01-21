<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-10 bg-slate-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 shadow-lg rounded-xl p-6">

                <p class="text-white mb-6">
                    Selamat datang, Anda berhasil login.
                </p>

                <div class="flex gap-4">
                    <a href="{{ route('projects.index') }}"
                        class="bg-black text-white px-6 py-3 rounded-md hover:bg-gray-800 transition">
                         Kelola Proyek
                    </a>

                    <a href="{{ route('projects.create') }}"
                        class="bg-slate-700 text-white px-6 py-3 rounded-md hover:bg-slate-600 transition">
                        Tambah Proyek
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
