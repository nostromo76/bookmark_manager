<x-layout>
    <h1>Links page</h1>
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
