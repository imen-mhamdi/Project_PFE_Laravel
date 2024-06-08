<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Employee
        </h2>
    </x-slot>
<!-- {{'cadre','chaffeur',
    'responsables','ouvrier','mecanicien'}} -->

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('employee.update', $employee->id) }}">
                    @csrf
                    @method('put')
                    <div class="shadow overflow-hidden sm:rounded-md">
                       
                    <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="matricule" class="block font-medium text-sm text-gray-700">Matricule</label>
                            <input type="text" name="matricule" id="matricule" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('matricule', $employee->matricule) }}"
                            disabled
                            />
                            @error('matricule')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nom" class="block font-medium text-sm text-gray-700">Nom</label>
                            <input type="text" name="nom" id="nom" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('name', $employee->nom) }}" 
                            disabled/>
                            @error('nom')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="prenom" class="block font-medium text-sm text-gray-700">Prenom</label>
                            <input type="text" name="prenom" id="prenom" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('prenom', $employee->prenom) }}" 
                                   disabled
                                   />
                            @error('prenom')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div> 

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="adresse" class="block font-medium text-sm text-gray-700">Adresse</label>
                            <input type="text" name="adresse" id="adresse" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('adresse', $employee->adresse) }}" />
                            @error('adresse')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tel" class="block font-medium text-sm text-gray-700">phone</label>
                            <input type="tel" name="tel" id="tel" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('tel', $employee->tel) }}" />
                            @error('tel')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="data_naissance" class="block font-medium text-sm text-gray-700">Date de Naissance</label>
                            <input type="date" id="data_naissance" name="data_naissance"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('data_naissance', $employee->data_naissance) }}"
                            disabled
                            />
                      
                            @error('data_naissance')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        @if(count($chaffeur)>0)
   
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tel" class="block font-medium text-sm text-gray-700">type de Permis</label>
                            <input type="tel" name="tel" id="tel" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            disabled     
                            value="{{ old('type_permis', $chaffeur[0]->type_permis) }}" />
                            @error('tel')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        @endif
                        @if(count($cadre)>0)
                        <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nom" class="block font-medium text-sm text-gray-700">GRS</label>
                            <input type="text" name="grs"
                            disabled
                            id="grs" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('grs', $cadre[0]->grs) }}" />
                         
                        </div>

                        <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nom" class="block font-medium text-sm text-gray-700">Miss c</label>
                            <input type="text" name="miss_c" id="miss_c" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            disabled       
                            value="{{ old('miss_c', $cadre[0]->miss_c) }}" />
                            @error('miss_c')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        @endif
               
                        @if(count($responsables)>0) 
                        <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nom" class="block font-medium text-sm text-gray-700">Miss R</label>
                            <input type="text" name="miss_r" id="miss_r" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            disabled      
                            value="{{ old('miss_r', $responsables[0]->miss_r) }}" />
                            @error('miss_r')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        @endif

                        
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>