<x-app-layout>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="/form_test/{{$pieceRechange->code_pie}}">
                    @csrf
                    @method('put')
                    <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="code_pie" class="block font-medium text-sm text-gray-700">Code Pie</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="code_pie"
                          id="code_pie"
                      value="{{ old('code_pie', $pieceRechange->code_pie) }}"
                        disabled
                          />
                            @error('code_pie')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                      
                    
                    <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="lib_pie" class="block font-medium text-sm text-gray-700">Libelle Pie</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="lib_pie"
                          id="lib_pie"
                      value="{{ old('lib_pie', $pieceRechange->code_pie) }}"
                      disabled
                          />
                            @error('lib_pie')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                      
                    
                    <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="marq_pie" class="block font-medium text-sm text-gray-700">Marque Pie</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="marq_pie"
                          id="marq_pie"
                      value="{{ old('marq_pie', $pieceRechange->marq_pie) }}"
                      disabled
                          />
                            @error('marq_pie')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                       
                   
                    <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="qty_pie" class="block font-medium text-sm text-gray-700">Qty Pie</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="number"
                          name="qty_pie"
                          id="qty_pie"
                      value="{{ old('qty_pie', $qty_pie) }}"
                    
                          />
                            @error('qty_pie')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                       
                            </div>
                   
                    <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="modele_pie" class="block font-medium text-sm text-gray-700">Modele Pie</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="modele_pie"
                          id="modele_pie"
                      value="{{ old('modele_pie', $pieceRechange->modele_pie) }}"
                      disabled
                          />
                            @error('modele_pie')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                      
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="type_pie" class="block font-medium text-sm text-gray-700">Type Pie</label>
                          <input 
                          class="form-input rounded-md shadow-sm mt-1 block w-full"
                          type="text"
                          name="type_pie"
                          id="type_pie"
                      value="{{ old('type_pie', $pieceRechange->type_pie) }}"
                      disabled
                          />
                            @error('type_pie')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                       
                 
                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                             Edit Piece de Rechange
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
   
</x-app-layout>
