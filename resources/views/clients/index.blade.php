<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('clients.store') }}">
            @csrf
            {{-- <textarea
                name="message"
                placeholder="{{ __('What\'s on your mind?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" /> --}}

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Mobile -->
            <div>
                <x-input-label for="mobile" :value="__('Mobile')" />

                <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required  />

                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
            </div>

            <!--- phone -->
            <div>
                <x-input-label for="phone" :value="__('Phone')" />

                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required  />

                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>


            <div>
                <x-input-label for="address_1" :value="__('Address 1')" />

                <x-text-input id="address_1" class="block mt-1 w-full" type="text" name="address_1" :value="old('address_1')" required  />

                <x-input-error :messages="$errors->get('address_1')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="address_2" :value="__('Address 2')" />

                <x-text-input id="address_2" class="block mt-1 w-full" type="text" name="address_2" :value="old('address_2')" required  />

                <x-input-error :messages="$errors->get('address_2')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="country_id" :value="__('Country')" />

                <x-text-input id="country_id" class="block mt-1 w-full" type="text" name="country_id" :value="old('country_id')" required  />

                <x-input-error :messages="$errors->get('country_id')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="city" :value="__('City')" />

                <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required  />

                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="state" :value="__('State')" />

                <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required  />

                <x-input-error :messages="$errors->get('state')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="zip" :value="__('Pin code')" />

                <x-text-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="old('zip')" required  />

                <x-input-error :messages="$errors->get('zip')" class="mt-2" />
            </div>



            <x-primary-button class="mt-4">{{ __('Create Client') }}</x-primary-button>
        </form>


        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($clients as $client)
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800">{{ $client->name }}</span>
                                <small class="ml-2 text-sm text-gray-600">{{ $client->created_at->format('j M Y, g:i a') }}</small>
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-900">{{ $client->email }}</p>
                        <p class="mt-4 text-lg text-gray-900">{{ $client->mobile }}</p>
                        <p class="mt-4 text-lg text-gray-900">{{ $client->phone }}</p>
                        <p class="mt-4 text-lg text-gray-900">{{ $client->country->nicename }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>