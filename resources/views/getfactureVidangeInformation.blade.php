<x-app-layout>
   <div>


 <div>

        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        
        <div class="block mb-8">
                <a  href="/print_facture_vidange/{{$code_facture}}/{{$code_frs}}/{{$date_facture}}"  class="   hover:text-indigo-900 mb-2 mr-2 ">
                   
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    Imprimer
                            </button>
                </a>
              
                 
               </a>
            </div>
        <h1>code Facture : {{$code_facture}}</h1>
        <div class="px-3 py-5 bg-grey sm:p-4">
                          
                          </div>
        <h1>Date de  Facture : {{$date_facture}}</h1>
        <div class="px-3 py-5 bg-grey sm:p-4">
                          
                          </div>
                          <h1>Code frs : {{$code_frs}}</h1>
        <div class="px-3 py-5 bg-grey sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-grey sm:p-4">
                          
                          </div>

        Produit de vidan
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                <tr>
                                <th scope="col"  class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    code Produit Vidange
                                    </th>
                                 
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Qte piece
                                    </th>
                                   
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Prix
                                    </th>

                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Qte total Produits vidange
                                    </th>
                                  
                                   
                              
                                 
                                   
                               
                                </tr>
                                </thead>
                                <!-- [{"id":1,"nom":"test","prenom":"test","data_naissance":"2022-05-30","adresse":"adresse test","tel":"123456789","type":"type test","etat_precense":"present","type_premis":"permis","created_at":null,"updated_at":null}] -->
                             
                                <tbody class="bg-white divide-y divide-gray-200">
                                @for ($i = 0; $i < $count; $i++)
     

                              
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $specificFacture[$i]->	Code_prd_vid }}
                                        </td>
                                      

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $specificFacture[$i]->Qte_prd_vid_fac }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $specificFacture[$i]->Prix_prd_vid_fac }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $pieces[$i]->QTE_STK_Prd }}
                                        </td>
                                                                     
                                       
                                      
                                    </tr>
                                    @endfor
</tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
   </div>



</x-app-layout>