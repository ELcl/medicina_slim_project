<!-- Main modal -->
<div id="creaUsuario" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full" >
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Nuevo Usuario
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="creaUsuario">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="post" action="{{route('users.store')}}"  >
                @csrf
                @method('POST')
                <div class="grid gap-4 mb-4 sm:grid-cols-4">
                    <div class="sm:col-span-4">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Nombre Completo</label>
                        <input type="text" name="name" id="name" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo Electrónico</label>
                        <input type="email" name="email" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rol</label>
                        <select name="rol" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="interno" selected="" >Interno</option>
                            <option value="admin"               >Admin</option>                           
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                        <input type="text" name="password" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                    </div>
                    {{-- <div class="sm:col-span-2">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Residencia del Paciente</label>
                        <input type="text" name="residencia" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                    </div> --}}
                    {{-- <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Ocupación del Paciente</label>
                        <input type="text" name="ocupacion" id="name" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                    </div> --}}
                    {{-- <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Fuente de Información</label>
                        <input type="text" name="fuente" id="name" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                    </div> --}}
                    {{-- <div class="sm:col-span-2">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grado de Confiabilidad del Paciente</label>
                        <select name="confiabilidad" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="" value="confiable">Confiable</option>
                            <option value="no_confiable">No confiable</option>
                        </select>
                    </div> --}}
                    {{-- <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Forma de Llegada del Paciente</label>
                        
                        <select name="llegada" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="" value="misma">Por si misma</option>
                            <option value="familiar">Con un familiar</option>
                            <option value="pareja">Con una pareja</option>
                            <option value="emergencia">Servicios de Emergencia</option>
                            <option value="policia">Policía</option>
                            <option value="otros">Otros</option>
                        </select>
                    </div> --}}
                    
                    {{-- <div class="sm:col-span-4">
                        <div id="accordion-collapse" data-accordion="collapse">
                            <h2 id="accordion-collapse-heading-1">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                <span>Caso de Violencia</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <div class="sm:col-span-1">
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Violencia</label>
                                    <select name="violencia" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="fisica" selected="">Física</option>
                                        <option value="psicologica">Psicológica</option>
                                        <option value="sexual">Sexual</option>
                                        <option value="laboral">Laboral</option>
                                        <option value="identidad">Identidad Sexual</option>
                                        <option value="otros">Otros</option>
                                    </select>
                                </div>
                                <div class="p-5 flex items-center">
                                    <div class="px-4">
                                        <input id="default-checkbox" name="reincidencia" type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reincidencia</label>
                                    </div>
                                    <div class="px-4">
                                        <input id="default-checkbox" name="sospecha" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sospecha</label>
                                    </div>
                                </div>
                                <div >
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Transferencia a:</label>
                                    
                                    <select name="transferencia" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    
                                        <option value="traumatologia" selected="">Traumatología</option>
                                        <option value="psicologica">Psicología</option>
                                        <option value="ginecologia">Ginecología</option>
                                        <option value="cirugia">Cirugía</option>
                                        <option value="psiquiatria">Psiquiatría</option>
                                        <option value="neurologia">Neurología</option>
                                        <option value="infectologia">Infectología</option>
                                        <option value="oncologia">Oncología</option>
                                        <option value="otros">Otros</option>
                                    </select>
                                </div>
                                
                                </div>
                                </div>
                        </div>    
                    </div> --}}
                      
                 </div>
                <button type="submit" class="bg-blue-700 text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    
                    Agregar
                </button>
                <button type="button" class="bg-gray-500 text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" data-modal-toggle="creaPaciente">
                    
                    Cancelar
                    <span class="sr-only">Close modal</span>
                </button>
                
            </form>
        </div>
    </div>
</div>