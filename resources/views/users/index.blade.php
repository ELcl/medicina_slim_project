<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Usuarios') }}
        </h2>
      </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                

                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="py-8">
                    <button data-modal-target="creaUsuario" data-modal-toggle="creaUsuario" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        Nuevo
                    </button>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                      <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal" id='users'>
                          <thead>
                            <tr>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Nombre
                              </th>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Email
                              </th>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Rol
                              </th>
                             
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                            <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                  
                                  <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                      {{$user['name']}}
                                    </p>
                                  </div>
                                </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                      {{$user['email']}}
                                </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                  {{$user->roles->pluck('name')[0]}}
                                </p>
                              </td>
                            </tr>
                            <!-- More rows... -->

                          {{--   @include('user.modaledit')
                            @include('user.modaldelete') --}}

                            @endforeach
                          </tbody>
                        </table>
                        @include('users.modalcreate')
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    @section('js')
      <script>
        $('#users').DataTable({
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
