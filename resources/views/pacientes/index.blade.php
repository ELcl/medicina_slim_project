<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Pacientes') }}
        </h2>
    </x-slot>

    {{-- @section('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.tailwindcss.min.css">
        
    @endsection --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="py-8">
                    @role('interno')
                      <button data-modal-target="creaPaciente" data-modal-toggle="creaPaciente" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                          Nuevo
                      </button>
                    @endrole
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                      <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal" id="pacientes">
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
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Ocupación
                              </th>
                              
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
                              
                                @if($paciente['grado_confiabilidad'] == 'confiable')
                                  <span
                                  class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden
                                      class="absolute inset-0 bg-green-400 opacity-50 rounded-full"></span>
                                    <span class="relative text-xs">{{'Confiable'}}</span>
                                  </span>
                                @elseif($paciente['grado_confiabilidad'] == 'no_confiable')
                                  <span
                                  class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden
                                      class="absolute inset-0 bg-yellow-400 opacity-50 rounded-full"></span>
                                    <span class="relative text-xs">{{'No confiable'}}</span>
                                    </span>
                                @endif
                              </td>
                              
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                  {{$paciente['forma_llegada']}}
                                </p>
                              </td>
                            </tr>
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

    @section('js')
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
          $('#pacientes').DataTable({
            // responsive: true,
            // autoWidth: false,
            select: true,

            "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Ningún registro encontrado - Lo sentimos",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "Ningún registro encontrado",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            "search" : "Buscar",
            "paginate":{
              'next' : 'Siguiente',
              'previous' : 'Anterior',
            }
            }

          });
        </script>
    @endsection


</x-app-layout>
