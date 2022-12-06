<x-app-layout>
    <div class="mt-10 sm:mt-0 mx-auto p-4 sm:p-6 lg:p-8 data-ctrl" data-ctrl="PostsCtrl">
        <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
            <table class="table-auto min-w-full" id="posts_table">
            </table>
            <!-- <table class="table-auto min-w-full" id="posts_table">
            </table>
            {{-- <table class="min-w-full leading-normal">
                <thead>
                <tr>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                    Task Title
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                    Description
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                    Category
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                    Duration
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                    CreatedAt
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                            <p class="text-gray-900 whitespace-no-wrap dark:text-gray-300">{{ $post->title} }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                            <p class="text-gray-900 whitespace-no-wrap dark:text-gray-300">{{ $post->description }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                            <p class="text-gray-900 whitespace-no-wrap dark:text-gray-300">{{ $post->category} }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                            <p class="text-gray-900 whitespace-no-wrap dark:text-gray-300">{{ $post->duration} }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-gray-800  dark:border-gray-700">
                            <p class="text-gray-900 whitespace-no-wrap dark:text-gray-300">{{ $post->createdat }}</p>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    
            <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between dark:bg-gray-800  dark:border-gray-700">
                {{ $posts->links() }}
            </div> --}}
        </div>
    </div>
</x-app-layout>
        -->