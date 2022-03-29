<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Halaman Rekam Medis
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                @foreach ($rekam_medis as $rm)
                    <div class="mb-4 p-4 shadow-lg rounded-md">
                        <p>Rekam Medis No. {{ $rm->id }}</p>
                        <a href="/rekam-medis/pasien/{{ $rm->pasien->id }}" class="font-bold underline hover:text-blue-500">
                            {{ $rm->pasien->nama }}
                        </a>
                        <p>Ditangani oleh: <a href="/rekam-medis/dokter/{{ $rm->dokter->id }}" class="underline hover:text-yellow-500">Dr.{{ $rm->dokter->nama }}</a></p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
