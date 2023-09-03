<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    @role('admin')
                    {{ __("Bienvenido Admin!") }}
                    @endrole
                    
                    @role('interno')
                    {{ __("Bienvenid@!") }}
                    @endrole
                    <BR></BR>
                    <div class="grid gap-4 mx-8 sm:grid-cols-4">
                        <div class="sm:col-span-1">
                            <x-dashboard_card title="USUARIOS" cantidad="3">
                                {{-- <img src="{{ asset('icons/condominios.svg') }}" alt="Imagen"> --}}
                                <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                                    <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                                  </svg>
                            </x-dashboard_card>
                        </div>
                        <div class="sm:col-span-1">
                            <x-dashboard_card title="PACIENTES" cantidad="3">
                                <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                                  </svg>
                            </x-dashboard_card>
                        </div>
                        
                        <div class="sm:col-span-1">
                            <x-dashboard_card title="CASOS DE VIOLENCIA" cantidad="3">
                                <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M1 1v14h16m0-9-3-2-3 5-3-2-3 4"/>
                                  </svg>
                            </x-dashboard_card>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
