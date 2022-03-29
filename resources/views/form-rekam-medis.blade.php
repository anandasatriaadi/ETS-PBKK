<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Formulir Rekam Medis
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <form action="{{ route('rekam-medis-post') }}" method="POST">
                    @csrf
                    <!-- Nama Pasien -->
                    <div class="w-full md:w-1/3 my-4 md:mb-0">
                        <label class="block tracking-wide text-gray-700 text-xs mb-2" for="grid-state">
                        Pasien
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="pasien" name="pasien">
                                @foreach ($pasien as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                @endforeach
                            </select>
                            {{-- <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div> --}}
                        </div>
                    </div>
                    
                    <!-- Dokter -->
                    <div class="w-full md:w-1/3 my-4 md:mb-0">
                        <label class="block tracking-wide text-gray-700 text-xs mb-2" for="grid-state">
                        Dokter
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="dokter" name="dokter">
                                @foreach ($dokter as $d)
                                    <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                @endforeach
                            </select>
                            {{-- <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div> --}}
                        </div>
                    </div>
                    <!-- Kondisi Kesehatan -->
                    <div class="my-4">
                        <x-label for="kondisi" :value="__('Kondisi Kesehatan')" />
                        <x-input id="kondisi" class="block mt-1 w-full" type="text" name="kondisi" :value="old('kondisi')" required />
                    </div>
                    <!-- Suhu -->
                    <div class="my-4">
                        <x-label for="suhu" :value="__('Suhu Badan')" />
                        <x-input id="suhu" class="block mt-1 w-full" type="number" name="suhu" :value="old('suhu')" step="0.1" min="35" max="45.5" required />
                    </div>
                    <!-- Image -->
                    <div class="my-4">
                        <label class="font-weight-bold" for="image">Resep</label>
                        <input type="file" id="image" name="image">
                    </div>
                    <button type="submit">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
