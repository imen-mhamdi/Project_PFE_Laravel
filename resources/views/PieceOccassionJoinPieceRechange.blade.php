<x-app-layout>
   <div>

 <div>

        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        
      
            
            <div class="block mb-8">
            <form method="get" action="/rechercher_fournisseur">
            @csrf
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="flex">
                    
                            <input 
                            name="code_pie"
                            id="code_pie"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            placeholder="code Piece"
                            />
                           
                            <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div> 
                          <input 
                            name="nom_frs"
                            id="nom_frs"
                            type="text"
                            placeholder="modele piece"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"

                            />
                           
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
                                <th scope="col"  class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                code piece occassion
                                    </th>
                                    <th scope="col"  class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                               model piece
                                    </th>
                                
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    type piece
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    marque piece
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Qte piece occassion bon de retour
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Qte piece dans piece de rechange
                                    </th>
                                   
                              
                                 
                                   
                               
                                </tr>
                                </thead>
                              
                                <!-- [{"id":1,"nom":"test","prenom":"test","data_naissance":"2022-05-30","adresse":"adresse test","tel":"123456789","type":"type test","etat_precense":"present","type_premis":"permis","created_at":null,"updated_at":null}] -->
                              
                                            
                                 
                                   
                                        <!-- bonret -->

                                    
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @for ($i = 0; $i < $count; $i++)
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $pieces[$i]->code_piece }}
                                        </td>
                                      

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{$pieces[$i]->modele_pie }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{$pieces[$i]->type_pie }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $pieces[$i]->marq_pie }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{$pieces[$i]->QTE_PIE_OCC_BR }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{$pieces_rechange[$i]->qty_pie }}
                                        </td>
                                        </tr>
                                        @endfor
</tbody>

                                       

                                       
                                       

                                  
                                      
                             
                                </tbody>   
                
                             
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
   </div>



</x-app-layout>