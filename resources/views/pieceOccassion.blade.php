<x-app-layout>
   <div>


    <!-- recherche code facture date -->

 <div>

        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        
        <div class="block mb-8">
              
              
               <a  href="/create_piece_occassion"  class="  hover:text-indigo-900 mb-2 mr-2 ">
                   
                   <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Ajouter Entretien
                 </button>
                       
               </a>
               <a 
               style="justify-content:center"
               href="/create_piece_occassion_real"  class="  hover:text-indigo-900 mb-2 mr-2 ">
                   
                   <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                       Piece d'occassion
                 </button>
                       
               </a>
               <a 
               style="justify-content:center"
               href="/demandeTraveauxTable"  class="  hover:text-indigo-900 mb-2 mr-2 ">
                   
                   <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                       Demande de traveau
                 </button>
                       
               </a>
            </div>
     
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                <tr>
                                <th scope="col"  class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    code Entretien
                                    </th>
                                    <th scope="col"  class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Code vihicule
                                    </th>
                                 
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    km vehicule
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Avis
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    date Entretien
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Foctionality
                                    </th>

                                  
                                   
                              
                                 
                                   
                               
                                </tr>
                                </thead>
                                <!-- [{"id":1,"nom":"test","prenom":"test","data_naissance":"2022-05-30","adresse":"adresse test","tel":"123456789","type":"type test","etat_precense":"present","type_premis":"permis","created_at":null,"updated_at":null}] -->
                              
                                </thead>
                                <!-- [{"id":1,"nom":"test","prenom":"test","data_naissance":"2022-05-30","adresse":"adresse test","tel":"123456789","type":"type test","etat_precense":"present","type_premis":"permis","created_at":null,"updated_at":null}] -->
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($entretiens as $user)
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->code_entretien }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->code_vh }}
                                        </td>


                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->km_vehicule }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->avis }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->date_facture }}
                                        </td>
                                        

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="/getEntretienInformation/{{$user->code_entretien}}/{{$user->code_vh}}/{{ $user->km_vehicule }}/{{ $user->avis }}/ {{ $user->date_facture }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                            <button 
                                            style="background-color:#22c55e"
                                            class="inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    Afficher
                            </button>
                                            </a>
                                            <a href="/print_entretien/{{$user->code_entretien}}/{{$user->code_vh}}/{{ $user->km_vehicule }}/{{ $user->avis }}/ {{ $user->date_facture }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                            <button 
                                            style="background-color:#dc2626"
                                            class="inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                            Imprimer
                            </button>   
                                            </a>
                                            <a href="/modifier_entretien/{{$user->code_entretien}}/{{$user->code_vh}}/{{ $user->km_vehicule }}/{{ $user->avis }}/ {{ $user->date_facture }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                            <button 
                                            style="background-color:#4f46e5"
                                            class="inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                           Modifier
                            </button>   
                                            </a>
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