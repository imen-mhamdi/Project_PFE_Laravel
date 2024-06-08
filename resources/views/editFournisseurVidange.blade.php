<x-app-layout>
 
    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="/edit_fournissuer_form_vidange/{{$fournisseur->id}}">
                    @csrf
                    @method('put')
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="code_frs" class="block font-medium text-sm text-gray-700">Code Frs</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="code_frs"
                          id="code_frs"
                      value="{{ old('code_frs', $fournisseur->code_frs) }}"
                        disabled
                          />
                            @error('code_frs')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nom_frs" class="block font-medium text-sm text-gray-700">Nom Frs</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="nom_frs"
                          id="nom_frs"
                          value="{{ old('nom_frs', $fournisseur->nom_frs) }}"
                          disabled
                          />
                            @error('nom_frs')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="prenom_frs" class="block font-medium text-sm text-gray-700">Prenom Frs</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="prenom_frs"
                          id="prenom_frs"
                          value="{{ old('prenom_frs', $fournisseur->prenom_frs) }}"
                          disabled
                          />
                            @error('prenom_frs')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="adresse_frs" class="block font-medium text-sm text-gray-700">Adresse Frs</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="adresse_frs"
                          id="adresse_frs"
                          value="{{ old('adresse_frs', $fournisseur->adresse_frs) }}"
                          disabled
                          />
                            @error('adresse_frs')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tel_frs" class="block font-medium text-sm text-gray-700">Tel Frs</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="tel_frs"
                          id="tel_frs"
                          value="{{ old('tel_frs', $fournisseur->tel_frs) }}"
                          />
                            @error('tel_frs')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                             Edit Fournisseur
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</x-app-layout>
