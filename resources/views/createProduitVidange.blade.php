<x-app-layout>
 


    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="/create_produit_vidange_form">
                    @csrf
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="Code_prd_vid" class="block font-medium text-sm text-gray-700">Code_prd_vid</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="Code_prd_vid"
                          id="Code_prd_vid"
                          />
                            @error('Code_prd_vid')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="Lib_prd_vid" class="block font-medium text-sm text-gray-700">Lib_prd_vid</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="Lib_prd_vid"
                          id="Lib_prd_vid"
                          />
                            @error('Lib_prd_vid')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="Mod_prd_vid" class="block font-medium text-sm text-gray-700">Mod_prd_vid</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="Mod_prd_vid"
                          id="Mod_prd_vid"
                          />
                            @error('Mod_prd_vid')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="QTE_STK_Prd" class="block font-medium text-sm text-gray-700">QTE_STK_Prd</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="number"
                          name="QTE_STK_Prd"
                          id="QTE_STK_Prd"
                          />
                            @error('QTE_STK_Prd')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="Typ_prd_vif" class="block font-medium text-sm text-gray-700">Typ_prd_vif</label>
                            <select name="Typ_prd_vif" id="Typ_prd_vif" class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                          
                                    <option value="Bougies allumage &Préchauffage">Bougies allumage &
Préchauffage</option>
                                    <option value="Filtre climatiseur">Filtre climatiseur</option>
                                    <option value="Filtre à Air">Filtre à Air</option>
                                    <option value="Filtre à carburant">Filtre à carburant</option>
                                    <option value="Filtre à Huile">Filtre à Huile</option>
                                    <option value="Huile moteur">Huile moteur</option>
                            </select>
                            @error('Typ_prd_vif')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                             Ajouter Produit Vidange
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</x-app-layout>
