<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Affecter
        </h2>
    </x-slot>
  
   @if($isAffected =='1')  
   <div class="block mb-8">
            <form method="post" action="/update_affect/{{$id}}">
            @csrf
            @method('put')

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Annuler  l'Affecter
                            </button>
                        </div>
            </form>
            
</div>       
     
@else
<div class="block mb-8">
            <form method="post" action="/create_affect/{{$id}}">
            @csrf
                
            <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="matricule" class="block font-medium text-sm text-gray-700">Matricule</label>
                            <select name="matricule" id="matricule" class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                            @foreach ($cadres as $user)
                                    <option value="{{$user->matricule}}">{{$user->matricule}}</option>
                                    @endforeach
                                </select>
                         
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Affecter
                            </button>
                        </div>
            </form>
            
</div>          
@endif
   



<div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                <tr>
                                <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Matricule Cadre
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Vehicule Code
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date debut
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Date fin
                                    </th>
                                  

                               
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($affectp_table as $user)
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->matricule}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->code_veh }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->date_debut }}
                                        </td>

                                        @if($user->status==1)  
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            -
                                        </td>
                                    @else
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->	date_fin }}
                                        </td>
                                       
                                        @endif

                                      
                                    </tr>
                                @endforeach
                                </tbody>        
                              
            </table>
</div>
</div>
</div>
</div>

</x-app-layout>