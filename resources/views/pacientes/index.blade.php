<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in 9999!") }}
                </div> --}} 
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="py-8">
                    {{-- <x-primary-button class="">
                      <a class="text-sm text-white-600 hover:text-gray-900 
                      rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
                      data-modal-toggle="creaPaciente" data-modal-target="creaPaciente" type="button">
                        {{ __('Nuevo') }}
                      </a>
                    </x-primary-button>--}}
                    @role('interno')
                      <button data-modal-target="creaPaciente" data-modal-toggle="creaPaciente" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                          Nuevo
                      </button>
                    @endrole
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                      <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                          <thead>
                            <tr>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Nombre
                              </th>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Edad
                              </th>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Género
                              </th>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Procedencia
                              </th>

                              {{-- <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Residencia
                              </th> --}}
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Ocupación
                              </th>
                              {{-- <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Fuentes de Información
                              </th> --}}
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Confiabilidad
                              </th>

                             <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Forma de llegada
                              </th>

                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pacientes as $paciente)
                            <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                  {{-- <div class="flex-shrink-0 w-10 h-10">
                                    <img class="w-full h-full rounded-full"
                                      src="https://randomuser.me/api/portraits/men/1.jpg" alt="" />
                                  </div> --}}
                                  <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                      {{$paciente['nombre']}}
                                    </p>
                                  </div>
                                </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                  {{$paciente['edad']}}
                                </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                  @if($paciente['sexo']=='h')
                                  {{'Hombre'}}
                                  @else
                                  {{'Mujer'}}
                                  @endif
                                </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                  {{$paciente['procedencia']}}
                                </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                  {{$paciente['ocupacion']}}
                                </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                  {{$paciente['grado_confiabilidad']}}
                                </p>
                              </td>
                              
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                  {{$paciente['forma_llegada']}}
                                </p>
                              </td>
                            </tr>
                            <!-- More rows... -->        
                          {{--   @include('user.modaledit')
                            @include('user.modaldelete') --}}
                    
                            @endforeach
                             @include('pacientes.modalcreate')
                          </tbody>
                        </table>
                       
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
