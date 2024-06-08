<x-app-layout>
   <div>


<div>

       <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
      
       <h1>code Entretien : {{$code_entretien}}</h1>
       <div class="px-3 py-5 bg-grey sm:p-4">
                         
                         </div>
       <h1>Code vihicule : {{$code_vh}}</h1>
       <div class="px-3 py-5 bg-grey sm:p-4">
                         
                         </div>
        
                         <h1>date entretien : {{$date_entretien}}</h1>
        <div class="px-3 py-5 bg-grey sm:p-4">
                         
                         </div>
                         <form method="post" action="/update_entretien/{{$code_entretien}}">
                    @csrf
                    @method('put')
                         <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="km_vehicule" class="block font-medium text-sm text-gray-700">km Vihicule </label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="number"
                          name="km_vehicule"
                          id="km_vehicule"
                          value="{{ old('km_vehicule', $km_vehicule) }}"
                          />
                            @error('km_vehicule')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
       
        <div class="px-3 py-5 bg-grey sm:p-4">
                         
                         </div>
                         <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="avis" class="block font-medium text-sm text-gray-700">Avis </label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="avis"
                          id="avis"
                          value="{{ old('avis', $avis) }}"
                          />
                            @error('avis')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                             Edit Entretien
                            </button>
                        </div>
</form >
        <div class="px-3 py-5 bg-grey sm:p-4">
                         
                         </div>
                        
       Pieces des Rechange
           <div class="flex flex-col">
               <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                   <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                       <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                           <table class="min-w-full divide-y divide-gray-200 w-full">
                               <thead>
                               <tr>
                               <th scope="col"  class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   code Piece
                                   </th>
                                   <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   Model piece
                                   </th>
                                   <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   Qte piece
                                   </th>
                                 

                                 
                                  
                             
                                
                                  
                              
                               </tr>
                               </thead>
                               <!-- [{"id":1,"nom":"test","prenom":"test","data_naissance":"2022-05-30","adresse":"adresse test","tel":"123456789","type":"type test","etat_precense":"present","type_premis":"permis","created_at":null,"updated_at":null}] -->
                            
                               <tbody class="bg-white divide-y divide-gray-200">
                               @foreach ($specificFacture as $user)
                                   <tr>
                                   <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                           {{ $user->code_pie }}
                                       </td>
                                       <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                           {{ $user->model_pie }}
                                       </td>

                                       <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                           {{ $user->qte_pie }}
                                       </td>

                                 
                                    

                                     
                                   </tr>
                               @endforeach
                           </table>
                       </div>
                   </div>
               </div>
               
           </div>
  </div>



</x-app-layout>