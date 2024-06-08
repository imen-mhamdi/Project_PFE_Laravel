
   <div>


 <div>

        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        
      
        <h1>code Vidange : {{$code_facture}}</h1>
        <div class="px-3 py-5 bg-grey sm:p-4">
                          
                          </div>
        <h1>Code Vehicule : {{$code_vh}}</h1>
        <div class="px-3 py-5 bg-grey sm:p-4">
                          
                          </div>
                          <h1>Km : {{$km}}</h1>
        <div class="px-3 py-5 bg-grey sm:p-4">
                          
                          </div>
                          <h1>Km : {{$date_vidange}}</h1>
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
                                    Qte Produit Vidange
                                    </th>
                                   
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Qte stock Produit Vidange
                                    </th>
                                  
                                  
                                   
                              
                                 
                                   
                               
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($pieces as $user)
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $user->Code_prd_vid }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $user->QTE_PRD_VID }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $user->QTE_STK_Prd }}
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



