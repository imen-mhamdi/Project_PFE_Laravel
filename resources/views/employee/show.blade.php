<x-app-layout>
   

<!-- form create_calender date and etat-->
<div class="block mb-8">
                <a href="{{ route('employee.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to Employee</a>
</div>

<div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="/calender/{{$id}}/{{ \Carbon\Carbon::now()->toDateString() }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="date" class="block font-medium text-sm text-gray-700">Date de Precense</label>
                            <input type="date" id="date" name="date"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value={{ \Carbon\Carbon::now()->toDateString() }} 
                            disabled
       />
                      
                            @error('date')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
         
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="type" class="block font-medium text-sm text-gray-700">Etat de presence</label>
                            <select name="type" id="type" class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                          
                                    <option value="present">present</option>
                                    <option value="absent">absent</option>
                                
                                    
                            
                            </select>
                            @error('type')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>             
                 
         

               
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!-- calender table -->
<div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Etat_presence
                                    </th>
                                 
                              
                                </tr>
                                </thead>
                        
                        
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($calender as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $user->date }}   
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $user->etat_presence }}
                                        </td>

                                 

                                      
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        </div>



</div>

    </div>




</x-app-layout>