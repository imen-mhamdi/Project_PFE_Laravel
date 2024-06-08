<x-app-layout>
   <div>
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
       create  Rapport
        </h2>
    </x-slot>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-1">
                <form method="post" action="/create_repport">
                    @csrf
                    <div class="flex ">
                        <div class="px-4 py-5 bg-white sm:p-4">
                            <label for="code_rap" class="block font-medium text-sm text-gray-700">Code Rapport</label>
                            <input type="text" name="code_rap" id="code_rap" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('code_rap', '') }}"
                        
                            />
                            @error('code_rap')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-4 py-5 bg-white sm:p-2"

>
                            <label for="code_veh" class="block font-medium text-sm text-gray-700">Code veh</label>
                            <select name="code_veh" id="code_veh" class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                            @foreach ($vehicules as $user)
                                    <option value="{{$user->code_veh}}">{{$user->code_veh}}</option>
                                    @endforeach
                        
                    
                  
                  </select>
                            @error('code_veh')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                          <div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-2 py-5 bg-white sm:p-4">
                            <label for="matricule" class="block font-medium text-sm text-gray-700">Mecanicien matricule</label>
                            <select name="matricule" id="matricule" class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                            @foreach ($mecanicien as $user)
                                    <option value="{{$user->matricule}}">{{$user->matricule}}</option>
                                    @endforeach
                  
                  </select>
                            @error('matricule')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="date_rapport" class="block font-medium text-sm text-gray-700">Date rapport</label>
                            <input type="date" id="date_rapport" name="date_rapport"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value={{ \Carbon\Carbon::now()->toDateString() }} 
                            disabled
       />
                      
                            @error('date_rapport')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                       
</div>
<div class="flex ">
<div class="px-3 py-5 bg-white sm:p-4">
                          
                          </div>
                          <div class="px-4 py-5 bg-white sm:p-4">
                            <label for="etat_carros" class="block font-medium text-sm text-gray-700">Etat Carross</label>
                            <input type="text" name="etat_carros" id="etat_carros" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('etat_carros', '') }}"
                        
                            />
                            @error('etat_carros')
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
                        <div class="px-2 py-5 bg-white sm:p-4">
                            <label for="km_vehicule_rapport" class="block font-medium text-sm text-gray-700">km vehicule rapport</label>
                            <input type="number" id="km_vehicule_rapport" name="km_vehicule_rapport"
       class="form-input rounded-md shadow-sm mt-1 block w-full"
       value="1"/>
                            @error('km_vehicule_rapport')
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
                        <div class="px-2 py-5 bg-white sm:p-4">
                            <label for="pneaumatique" class="block font-medium text-sm text-gray-700">Pneaumatique</label>
                            <input type="text" id="pneaumatique" name="pneaumatique"
       class="form-input rounded-md shadow-sm mt-1 block w-full"
       />
                            @error('pneaumatique')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                       
                        <div class="px-3 py-5 bg-white sm:p-4">
                           
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

                          <div class="px-2 py-5 bg-white sm:p-4">
                          <textarea id="remarques"
                          placeholder="Remarques"
                          name="remarques" rows="4" cols="50"></textarea>
                          @error('remarques')
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