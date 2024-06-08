<x-app-layout>
 


    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="get" action="/create">
                    @csrf
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="type" class="block font-medium text-sm text-gray-700">Type</label>
                            <select name="type" id="type" class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                          
                                    <option value="chauffeur">chaffeur</option>
                                    <option value="mécanicien">mécanicien</option>
                                    <option value="cadre">cadre</option>
                                    <option value="ouvrier">ouvrier</option>
                                    <option value="responsable">responsable</option>
                            
                            </select>
                            @error('type')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                next
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</x-app-layout>

