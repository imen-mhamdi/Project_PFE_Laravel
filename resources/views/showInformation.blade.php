<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{$req}}
        </h2>
    </x-slot>

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
                                    @if($req =='cadre') 
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    grs
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    miss_c
                                    </th>
                                    @endif
                                    @if($req =='chauffeur') 
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Type permis
                                    </th>
                                    @endif
                                    @if($req =='responsable') 
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Miss R
                                    </th>
                                    @endif
                              
                                 
                                   
                               
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ((array)$jsio as $user)
                               
                                    @foreach(json_decode($jsio, true) as $d)
                                    <tr>

      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
      {{ $d["matricule"] }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
      {{ $d["nom"] }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
      {{ $d["prenom"] }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
      {{ $d["data_naissance"] }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
      {{ $d["adresse"] }}
        </td>

        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
      {{ $d["tel"] }}
        </td>
        @if($req =='cadre') 
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
      {{ $d["grs"] }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
      {{ $d["miss_c"] }}
        </td>
        @endif
        @if($req =='chauffeur')
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
      {{ $d["type_permis"] }}
        </td>
        
        @endif
        @if($req =='responsable') 
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
      {{ $d["miss_r"] }}
        </td>
        @endif
        </tr>
   @endforeach
                                       
                                    

                                      
                                     

                                       
                                       

                                  
                                       

                                      
                               
                                @endforeach
                                </tbody>
                              
            </table>
</div>
</div>
</div>
</div>

</x-app-layout>