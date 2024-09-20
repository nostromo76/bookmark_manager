<x-layout>
    <h1>Links page</h1>
    <section class="p-6 bg-slate-200 dark:bg-slate-900">
        <div class="flex justify-end mb-6">
            <a href="{{ Route('links.create')  }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Create Links
            </a>
        </div>
    </section>
    <table>
        <tbody>
            @foreach($links as $link)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$link->name}}
                    </th>
                    <td class="px-6 py-4">{{$link->url}}</td>
                    <td class="px-6 py-4">{{ $link->login ? 'Yes' : 'No' }}</td>
                    <td class="px-6 py-4">{{ $link->password ? 'Yes' : 'No' }}</td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
