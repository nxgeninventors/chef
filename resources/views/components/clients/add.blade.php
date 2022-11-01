<div class="md:grid md:grid-cols-2 md:gap-6 dark:bg-gray-800">
    <div class="mt-5 md:col-span-2 md:mt-0">
        <form method="POST" action="{{ route('clients.store') }}">
            @csrf
            <div class="overflow-hidden shadow sm:rounded-md">
                <div class="bg-white px-4 py-5 sm:p-6 dark:bg-gray-800">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <x-input-label for="first_name" :value="__('First name')" />
                            <x-text-input
                                type="text" 
                                name="first_name" 
                                id="first_name" 
                                class="block mt-1 w-full" 
                                autocomplete="given-name" 
                                :value="old('first_name')" 
                                required 
                                autofocus
                            />
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>
    
                        <div class="col-span-6 sm:col-span-3">
                            <x-input-label for="last_name" :value="__('Last name')"/>
                            <x-text-input
                                type="text" 
                                name="last_name" 
                                id="last_name" 
                                class="block mt-1 w-full" 
                                :value="old('last_name')" 
                                required 
                            />
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>
    
                        <div class="col-span-6 sm:col-span-4">
                            <x-input-label for="email" :value="__('Email address')"/>
                            <x-text-input
                                type="email" 
                                name="email" 
                                id="email" 
                                class="block mt-1 w-full" 
                                :value="old('email')" 
                                required 
                            />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
    
                        <div class="col-span-6 sm:col-span-4">

                            <x-input-label for="country_id" :value="__('Country')" />
                            <x-select id="country" name="country" class="mt-1 block w-full ">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                            </x-select>
                            <x-input-error :messages="$errors->get('country_id')" class="mt-2" />
                        </div>
    
                        <div class="col-span-6">
                            <x-input-label for="street_address" :value="__('Street address')" />
                            <x-text-input 
                                id="street_address" 
                                class="block mt-1 w-full" 
                                type="text" 
                                name="street_address" 
                                :value="old('street_address')" 
                                required  
                            />
                            <x-input-error :messages="$errors->get('street_address')" class="mt-2" />
                        </div>
    
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <x-input-label for="city" :value="__('City')" />
                            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required  />
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>
    
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                            <x-input-label for="state" :value="__('State / Province')" />
                            <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required  />
                            <x-input-error :messages="$errors->get('state')" class="mt-2" />
                        </div>
    
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                            <x-input-label for="zip" :value="__('ZIP / Postal code')" />
                            <x-text-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="old('zip')" required  />
                            <x-input-error :messages="$errors->get('zip')" class="mt-2" />
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 dark:bg-gray-800">
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>