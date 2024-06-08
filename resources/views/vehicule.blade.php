<x-app-layout>
   <div>
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Vehicule
        </h2>
    </x-slot>

 <div>

        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        
        <div class="block mb-8">
                <a  href="/vehicule_creation_form"  class=" hover:text-indigo-900 mb-2 mr-2 ">
                   
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    Ajout
                            </button>
                </a>
                <a  href="/rapport"  class=" hover:text-indigo-900 mb-2 mr-2 ">
                   
                   <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                   Rapport
                           </button>
               </a>
            </div>
            <div class="block mb-8">
            <form method="get" action="/rechercher_vehicule">
            @csrf
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="flex">
                            <select name="marq_veh" id="marq_veh" class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                            <option value="MAZDA">MAZDA</option>
                          <option value="isuzu">isuzu</option>
                          <option value="Wissan">Wissan</option>
                          <option value="R.express">R.express</option>
                          <option value="KONGO">KONGO</option>
                          <option value="FIAT Doble">FIAT Doble</option>
                          <option value="Berlingo">Berlingo</option>
                          <option value="Toyota">Toyota</option>

                          <option value="AMAROC">AMAROC</option>
                          <option value="Citroën">Citroën</option>
                          <option value="R19">R19</option>
                          <option value="SangYong">SangYong</option>

                          <option value="POLO">POLO</option>
                          <option value="Chevrole">Chevrole</option>
                            
                            </select>
                            @error('type')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div> 
                            <input 
                            placeholder="code vh"
                            value=""
                            name="code_veh" id="code_veh" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            </div>  
                        
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                rechercher
                            </button>
                        </div>
            </form>

</div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                <tr>
                                <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Code vehi
                                    </th>
                                    <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Chass
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Imaat_veh
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Marq_veh
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    puiss_fisc	
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    modele_veh
                                    </th>
                                  
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Energie
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Fonctionallity
                                    </th>
                               
                                </tr>
                                </thead>
                                <!-- [{"id":1,"nom":"test","prenom":"test","data_naissance":"2022-05-30","adresse":"adresse test","tel":"123456789","type":"type test","etat_precense":"present","type_premis":"permis","created_at":null,"updated_at":null}] -->
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($vehicules as $user)
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->	code_veh }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->chass }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->imaat_veh }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->marq_veh }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->puiss_fisc }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->modele_veh }}
                                        </td>
                                      
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->energie }}
                                        </td>

                                       
                                       

                                  
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="/edit_vehicule/{{$user->id}}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Modifier</a>
                                          
                                            <a href="/vehicule_aff/{{$user->id}}" class="text-indigo-600 hover:text-indigo-400 mb-2 mr-2">Affecter</a>
                                            <a href="/rapport" class="text-indigo-600 hover:text-indigo-400 mb-2 mr-2">Services</a>
                                        </td>

                                      
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
   </div>




</x-app-layout>