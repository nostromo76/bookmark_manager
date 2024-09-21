<x-layout>
    <h1>Links Page</h1>
    <section class="p-6 bg-slate-200 dark:bg-slate-900">
        <div class="flex justify-end mb-6">
            <a href="{{ route('links.create') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Create Links
            </a>
        </div>
    </section>
    <table class="min-w-full">
        <tbody>
            @foreach($links as $link)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $link->name }}
                    </th>
                    <td class="px-6 py-4">{{ $link->url }}</td>
                    <td class="px-6 py-4">{{ $link->login ? 'Yes' : 'No' }}</td>
                    <td class="px-6 py-4">{{ $link->password ? 'Yes' : 'No' }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('links.show', $link->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('links.destroy', $link->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <a href="#" 
                               onclick="event.preventDefault(); 
                                         if(confirm('Are you sure you want to delete this link?')) {
                                             this.closest('form').submit();
                                         }" 
                               class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Delete
                            </a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
