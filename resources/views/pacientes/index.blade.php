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

                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Residencia
                              </th>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Ocupación
                              </th>
                              <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                Fuentes de Información
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
                            {{-- @foreach($users as $user) --}}
                            <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                  {{-- <div class="flex-shrink-0 w-10 h-10">
                                    <img class="w-full h-full rounded-full"
                                      src="https://randomuser.me/api/portraits/men/1.jpg" alt="" />
                                  </div> --}}
                                  <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                      {{-- {{$user['name']}} --}}
                                    </p>
                                  </div>
                                </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                      {{-- {{$user['email']}} --}}
                                </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{-- <span
                                  class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                  <span aria-hidden
                                    class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                  <span class="relative text-xs">{{$user->roles->pluck('name')[0]}}</span>
                                </span> --}}
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{-- @if($user->status == 'verificado') --}}
                                  {{-- <span
                                  class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden
                                      class="absolute inset-0 bg-green-400 opacity-50 rounded-full"></span>
                                    <span class="relative text-xs">{{$user->status}}</span>
                                  </span> --}}
                                {{-- @elseif($user->status == 'espera') --}}
                                  {{-- <span
                                  class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden
                                      class="absolute inset-0 bg-gray-400 opacity-50 rounded-full"></span>
                                    <span class="relative text-xs">{{$user->status}}</span>
                                  </span> --}}
                                {{-- @elseif($user->status == 'suspendido')
                                  <span
                                  class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden
                                      class="absolute inset-0 bg-red-400 opacity-50 rounded-full"></span>
                                    <span class="relative text-xs">{{$user->status}}</span>
                                  </span>
                                @endif --}}





                              </td>
                              {{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                              </td> --}}
                              {{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-left">
                                <a href="#" id="open-modal"
                                  class="text-indigo-600 hover:text-indigo-900" data-modal-target="editUser{{ $user['id']}}" data-modal-toggle="editUser{{ $user['id'] }}">Editar</a>
                                  <br>
                                  <a href="#" id="open-modal"
                                  class="text-red-600 hover:text-indigo-900" data-modal-target="deleteUser{{ $user['id']}}" data-modal-toggle="deleteUser{{ $user['id'] }}">Borrar</a>
                              </td> --}}

                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" >
                                <div class="flex items-center">
                                   {{-- <a href="#" id="open-modal"
                                  class="text-white bg-blue-500 hover:bg-blue-700 rounded-lg px-2 py-2 mr-1" data-modal-target="editUser{{ $user['id']}}" data-modal-toggle="editUser{{ $user['id']}}">
                                    Editar
                                    </a>

                                    <a href="#" id="open-modal"
                                  class="text-white bg-red-500 hover:bg-red-700 rounded-lg px-2 py-2 ml-1" data-modal-target="deleteUser{{ $user}}" data-modal-toggle="deleteUser{{ $user}}">
                                    Borrar
                                    </a> --}}
                                  </div>
                              </td>


                            </tr>
                            <!-- More rows... -->

                          {{--   @include('user.modaledit')
                            @include('user.modaldelete') --}}

                            {{-- @endforeach --}}
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
