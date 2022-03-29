<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (Auth::check())
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                            You're logged in!
                        </div>
                        <div>Now you can access Rekam Medis!</div>
                    </div>
                    @else    
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                            You're not logged in!
                        </div>
                        <div>You cannot access Rekam Medis!</div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
