<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Casos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="py-8">
                    {{-- Filtrado de las consultas --}}
                    {{-- <div class="flex"> --}}
                      {{-- <form class="flex items-center space-x-2" method="POST" action="{{route('reporteF')}}">
                        @csrf
                        @method('POST')
                        <div class="px-4 py-2 rounded-l">
                          <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rol</label>
                          <select name="rol" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              <option value="interno" selected="" >Interno</option>
                              <option value="admin"               >Admin</option>                           
                          </select>
                      </div> --}}
                        {{-- <input type="text" name="descripcion" class="px-4 py-2 border border-gray-300 rounded-l" placeholder="Descripción" required> --}}
                        {{-- <input type="number" name="monto" class="px-4 py-2 border border-gray-300 rounded-r" placeholder="Monto" required> --}}
                        {{-- <input type="date" name="fecha" class="px-4 py-2 border border-gray-300 rounded-r" placeholder="fecha" required> --}}
                        {{-- <input type="file" name="imagen" class="border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"> --}}
                        
                        {{-- <button class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded">REPORTE</button>
                        <a href="#" class="bg-gray-400 hover:bg-blue-700 text-white font-bold py-3 px-4 my-1" data-modal-toggle="modal_expensa">Expensa</a>
                      </form>
                    </div> --}}
                    {{-- Fin del Filtrado --}}
                    
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                      <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal" id='casos'>
                          <thead>
                            <tr>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Nro
                              </th>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Tipo
                              </th>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Sospecha
                              </th>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Reincidencia
                              </th>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Transferencia
                              </th>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Fecha de Registro
                              </th>

                            </tr>
                          </thead>
                          <tbody>
                            @foreach($casos as $caso)
                            <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                  <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                      {{$loop->iteration}}
                                    </p>
                                  </div>
                                </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                  <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                      {{$caso['tipo']}}
                                    </p>
                                  </div>
                                </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    @if($caso['sospecha']=='on')
                                      {{-- <span class="material-symbols-outlined">
                                        check
                                      </span>  --}}
                                      SI
                                    @else
                                    {{-- <span class="material-symbols-outlined">
                                      close
                                      </span> --}}
                                      NO
                                    @endif
                                  
                                </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    @if($caso['reincidencia']=='on')
                                      {{-- <span class="material-symbols-outlined">
                                        check
                                      </span>  --}}
                                      SI
                                    @else
                                    {{-- <span class="material-symbols-outlined">
                                      close
                                      </span> --}}
                                      NO
                                    @endif
                                  
                                </p>
                              </td>
                              
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                  
                                  @if($caso['transferencia'] == 'traumatologia')
                                    {{'Traumatología'}}
                                  
                                  @elseif($caso['transferencia'] == 'psicologica')
                                    {{'Psicología'}}
                                  
                                  @elseif($caso['transferencia'] == 'ginecologia')
                                    {{'Ginecología'}}
                                  
                                  @elseif($caso['transferencia'] == 'cirugia')
                                    {{'Cirugía'}}
                                  
                                  @elseif($caso['transferencia'] == 'psiquiatria')
                                    {{'Psiquiatría'}}
                                  
                                  @elseif($caso['transferencia'] == 'neurologia')
                                    {{'Neurología'}}
                                  
                                  @elseif($caso['transferencia']== 'infectologia')
                                    {{'Infectología'}}
                                  
                                  @elseif($caso['transferencia'] == 'oncologia')
                                    {{'Oncología'}}
                                  
                                  @elseif($caso['transferencia'] == 'otros')
                                    {{'Otros'}}
                                  
                                  @endif
                                </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                  {{$caso['created_at']}}
                                </p>
                              </td>
                            </tr>
                            <!-- More rows... -->

                          {{--   @include('user.modaledit')
                            @include('user.modaldelete') --}}

                            @endforeach
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
    <script>
      $('#casos').DataTable({
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
