<x-app-layout>
   <div>
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
       create  Vehicule
        </h2>
    </x-slot>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-1">
                <form method="post" action="/create_vehicule">
                    @csrf
                    <div class="flex ">
                        <div class="px-4 py-5 bg-white sm:p-4">
                            <label for="code_veh" class="block font-medium text-sm text-gray-700">Code Veh</label>
                            <input type="text" name="code_veh" id="code_veh" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('code_veh', '') }}"
                        
                            />
                            @error('code_veh')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-4">
                            <label for="chass" class="block font-medium text-sm text-gray-700">Chass</label>
                            <input type="text" name="chass" id="chass" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('chass', '') }}"
                        
                            />
                            @error('chass')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-4">
                            <label for="imaat_veh" class="block font-medium text-sm text-gray-700">Imaat veh</label>
                            <input type="text" name="imaat_veh" id="imaat_veh" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('chass', '') }}"
                        
                            />
                            @error('imaat_veh')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-4">
                            <label for="energie" class="block font-medium text-sm text-gray-700">Energie</label>
                           <div class="flex"
                           style="margin-top: 20px;"
                           >
                            <input type="radio"name="energie" id="energie"
                            class="form-input rounded-md shadow-sm mb-0 block "
                            value="essence"
                            > Essence
                    <input type="radio" name="energie" id="energie"
                            value="Dissel"
                            class="form-input rounded-md shadow-sm mb-0 block "> Dissel
                            </div>
                            @error('energie')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                       
</div>
<div class="flex ">
<div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
<div class="px-3 py-5 bg-white sm:p-2"

>
                            <label for="marq_veh" class="block font-medium text-sm text-gray-700">Marq veh</label>
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
                            @error('marq_veh')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                        <div class="px-3 py-5 bg-white sm:p-4">
                          
                        </div>
                        <div class="px-2 py-5 bg-white sm:p-4">
                            <label for="modele_veh" class="block font-medium text-sm text-gray-700">Model Veh</label>
                            <select name="modele_veh" id="modele_veh" class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                          
                          <option value="model1">model1</option>
                          <option value="model2">model2</option>
                    
                  
                  </select>
                            @error('modele_veh')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-3 py-5 bg-white sm:p-4">
                          
                        </div>
                        <div class="px-2 py-5 bg-white sm:p-4">
                            <label for="puiss_fisc" class="block font-medium text-sm text-gray-700">Puiss fisc</label>
                            <input type="number" id="puiss_fisc" name="puiss_fisc"
       class="form-input rounded-md shadow-sm mt-1 block w-full"
       value="1"/>
                            @error('puiss_fisc')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                       
                        <div class="px-3 py-5 bg-white sm:p-4">
                            <label for="etat_veh" class="block font-medium text-sm text-gray-700">Etat Veh</label>
                            <input type="text" name="etat_veh" id="etat_veh" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('etat_veh', '') }}"
                        
                            />
                            @error('etat_veh')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-3 py-5 bg-white sm:p-4">
                          
                        </div>
</div>
<div class="flex">
<div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
<div class="px-4 py-5 bg-white sm:p-6">
                            <label for="date_mise_serv" class="block font-medium text-sm text-gray-700">date mise serv</label>
                            <input type="date" id="date_mise_serv" name="date_mise_serv"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value={{ \Carbon\Carbon::now()->toDateString() }} 
                            disabled
       />
                      
                            @error('date_mise_serv')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="date_miss_serv" class="block font-medium text-sm text-gray-700">date miss serv</label>
                            <input type="date" id="date_miss_serv" name="date_miss_serv"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value={{ \Carbon\Carbon::now()->toDateString() }} 
                            disabled
       />
                      
                            @error('date_miss_serv')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                      
</div>

</div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



 <div>
</x-app-layout>