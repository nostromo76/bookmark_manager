<x-layout>

    <h1>Links page</h1>
    
         <tbody>
                @foreach($posts as $post)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$post->name}}
                    </th>
                    <td class="px-6 py-4">
                        {{$post->url}}
                    </td>
                    <td class="px-6 py-4">
                        @if($post->login == 1)
                            Yes
                        @else
                            No
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if($post->password == 1)
                            Yes
                        @else
                            No
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </x-layout>
    