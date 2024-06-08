<x-app-layout>


                    <!--icon employee creation  -->
                    <!--3 by 3 --> 



                    
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{$type}}
        </h2>
    </x-slot>
<div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
            @if($type =='chauffeur') 
            <form method="post" action="/ajouter/{{$type}}">
            @elseif($type =='cadre')
            <form method="post" action="/ajouter_cadre/{{$type}}">
            @elseif( $type=="responsable")
            <form method="post" action="/ajouter_responsable/{{$type}}">
            @elseif( $type=="ouvrier")
            <form method="post" action="/ajouter_ouvrier/{{$type}}">
            @elseif( $type=="mécanicien")
            <form method="post" action="/ajouter_mecanicien/{{$type}}">
            @endif
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nom" class="block font-medium text-sm text-gray-700">Matricule</label>
                            <input type="text" name="matricule" id="matricule" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('matricule', '') }}" />
                            @error('matricule')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nom" class="block font-medium text-sm text-gray-700">Nom</label>
                            <input type="text" name="nom" id="nom" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nom', '') }}" />
                            @error('nom')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="prenom" class="block font-medium text-sm text-gray-700">Prenom</label>
                            <input type="text" name="prenom" id="prenom" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('prenom', '') }}" />
                            @error('prenom')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="adresse" class="block font-medium text-sm text-gray-700">Adresse</label>
                            <input type="text" name="adresse" id="adresse" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('adresse', '') }}" />
                            @error('adresse')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tel" class="block font-medium text-sm text-gray-700">phone</label>
                            <input type="tel" name="tel" id="tel" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('tel', '') }}" />
                            @error('tel')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="data_naissance" class="block font-medium text-sm text-gray-700">Date de Naissance</label>
                            <input type="date" id="data_naissance" name="data_naissance"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
       />
                      
                            @error('data_naissance')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        @if($type =='chauffeur')    
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="type_permis" 
                            class="block font-medium text-sm text-gray-700">Type de permis</label>
                            <select name="type_permis" 
                            id="type_permis"
                         
                             class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                          
                                    <option value="permi1">parmi1</option>
                                    <option value="permi2">parmi2</option>
                                    <option value="permi3">parmi3</option>
                            
                            </select>
                            @error('type_permis')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        @endif
                        @if($type =='cadre')  
                        <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nom" class="block font-medium text-sm text-gray-700">GRS</label>
                            <input type="text" name="grs" id="grs" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('grs', '') }}" />
                            @error('grs')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nom" class="block font-medium text-sm text-gray-700">Miss c</label>
                            <input type="text" name="miss_c" id="miss_c" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('miss_c', '') }}" />
                            @error('miss_c')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        @endif

                        @if($type =='responsable')  
                        
                         <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nom" class="block font-medium text-sm text-gray-700">Miss R</label>
                            <input type="text" name="miss_r" id="miss_r" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('miss_r', '') }}" />
                            @error('miss_r')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        @endif
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                ajouter
                            </button>
                        </div>
</form>
                </div>
                </div>

</div>

</x-app-layout>