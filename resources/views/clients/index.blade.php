<x-app-layout>
    <div class="mt-10 sm:mt-0 mx-auto p-4 sm:p-6 lg:p-8">
        @include('components.clients.right')
        <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
            <table class="min-w-full leading-normal">
                <thead>
                <tr>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                        Name
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                        Email
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                            <p class="text-gray-900 whitespace-no-wrap dark:text-gray-300">{{ $client->first_name }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                            <p class="text-gray-900 whitespace-no-wrap dark:text-gray-300">{{ $client->email }}</p>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    
            <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between dark:bg-gray-800  dark:border-gray-700">
                {{ $clients->links() }}
            </div>
        </div>
    </div>
</x-app-layout>