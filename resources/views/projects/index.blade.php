<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Manajemen Proyek Alat 
        </h2>
    </x-slot>

    <div class="py-10 bg-slate-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 shadow-lg rounded-xl p-6">

                <!-- Header -->
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-semibold text-white">Daftar Proyek</h3>

                    <a href="{{ route('projects.create') }}"
                        class="bg-black text-white px-5 py-2 rounded-md hover:bg-gray-800 transition">
                        + Tambah Proyek
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full border border-slate-600 bg-white">
                        <thead class="bg-gray-200 text-black">
                            <tr>
                                <th class="border border-gray-400 p-3 text-left">Nama Proyek</th>
                                <th class="border border-gray-400 p-3 text-left">Nama Alat</th>
                                <th class="border border-gray-400 p-3 text-left">Tipe</th>
                                <th class="border border-gray-400 p-3 text-left">Status</th>
                                <th class="border border-gray-400 p-3 text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="text-black">
                            @forelse($projects as $p)
                                <tr class="hover:bg-gray-100 transition">
                                    <td class="border border-gray-400 p-3">{{ $p->nama_proyek }}</td>
                                    <td class="border border-gray-400 p-3">{{ $p->nama_alat }}</td>
                                    <td class="border border-gray-400 p-3">{{ $p->tipe_layanan }}</td>
                                    <td class="border border-gray-400 p-3">
                                        <span class="px-3 py-1 rounded-full text-sm
                                            {{ $p->status == 'Aktif' ? 'bg-green-600 text-white' : 'bg-gray-600 text-white' }}">
                                            {{ $p->status }}
                                        </span>
                                    </td>
                                    <td class="border border-gray-400 p-3 text-center">
                                        <a href="{{ route('projects.edit', $p->id) }}"
                                            class="text-blue-600 hover:underline mr-3">
                                            Edit
                                        </a>

                                        <form action="{{ route('projects.destroy', $p->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Yakin ingin menghapus proyek ini?')"
                                                class="text-red-600 hover:underline">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center p-6 text-gray-600">
                                        Belum ada data proyek.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-6">
                    {{ $projects->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>