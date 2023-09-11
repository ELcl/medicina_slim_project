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
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                      <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal" id='casos'>
                          <thead>
                            <tr>
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

                            </tr>
                          </thead>
                          <tbody>
                            @foreach($casos as $caso)
                            <tr>
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
                                      <span class="material-symbols-outlined">
                                        check
                                      </span> 
                                    @else
                                    <span class="material-symbols-outlined">
                                      close
                                      </span>
                                    @endif
                                  
                                </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    @if($caso['reincidencia']=='on')
                                      <span class="material-symbols-outlined">
                                        check
                                      </span> 
                                    @else
                                    <span class="material-symbols-outlined">
                                      close
                                      </span>
                                    @endif
                                  
                                </p>
                              </td>
                              
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                  
                                  @if($caso['transferencia'] == 'traumatologia')
                                    {{'Traumatología'}}
                                  
                                  @elseif($caso['transferencia'] == 'psicologia')
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
