<x-app-layout>
   <div>


 <div>

        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        
        <div class="block mb-8">
                <a  href="{{ route('employee.create') }}"  class="  bg-green-500 hover:text-indigo-900 mb-2 mr-2 ">
                   
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    Ajout
                            </button>
                </a>
            </div>
        <div class="block mb-8">
            <form method="get" action="/rechercher">
            @csrf
            <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="type" class="block font-medium text-sm text-gray-700">Type</label>
                            <select name="type" id="type" class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                          
                                    <option value="chauffeur">chaffeur</option>
                                    <option value="mécanicien">mécanicien</option>
                                    <option value="cadre">cadre</option>
                                    <option value="ouvrier">ouvrier</option>
                                    <option value="responsable">responsable</option>
                            
                            </select>
                            @error('type')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
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
                                    Matricule
                                    </th>
                                    <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nom
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       Prenom
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date de naissance
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Adresse
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    tel
                                    </th>
                                   
                              
                                 
                                   
                               
                                </tr>
                                </thead>
                                <!-- [{"id":1,"nom":"test","prenom":"test","data_naissance":"2022-05-30","adresse":"adresse test","tel":"123456789","type":"type test","etat_precense":"present","type_premis":"permis","created_at":null,"updated_at":null}] -->
                        
  <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($employees as $user)
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->	matricule }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->nom }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->prenom }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->data_naissance }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->adresse }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->tel }}
                                        </td>

                                       
                                       

                                  
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('employee.edit', $user->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Modifier</a>
                                            <a href="{{ route('employee.show', $user->id) }}" class="text-indigo-600 hover:text-indigo-400 mb-2 mr-2">Calender</a>
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