<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rekam Medis {{ $nama_pasien->nama }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                @foreach ($rekam_medis_pasien as $rm)
                    <div class="mb-4 p-4 shadow-lg rounded-md">
                        <p>Rekam Medis No. {{ $rm->id }}</p>
                        <a href="/rekam-medis/pasien/{{ $rm->pasien->id }}" class="font-bold underline hover:text-blue-500">
                            {{ $rm->pasien->nama }}
                        </a>
                        <p>Ditangani oleh: <a href="/rekam-medis/dokter/{{ $rm->dokter->id }}" class="underline hover:text-yellow-500">Dr.{{ $rm->dokter->nama }}</a></p>
                        <hr class="mt-4 mb-4">
                        <div class="ml-4">
                            <p class="font-bold">Kondisi Kesehatan:</p>
                            <p>{{ $rm->kondisi }}</p>
                            <p class="font-bold">Suhu Tubuh:</p>
                            <p>{{ $rm->suhu }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
