<x-layout>
    <h1 class="font-bold">Links</h1>
    
    {{-- <!-- Search -->
    <div class="flex md:order-300">
        <form action="{{ route('links.search') }}" method="GET" class="flex">
            <input type="text" name="query" placeholder="Search..." required class="block w-full p-2 text-sm border border-gray-300 rounded-lg">
            <button type="submit" class="px-3 py-2 text-white bg-blue-700 rounded-lg hover:bg-blue-800">Search</button>
        </form>
    </div> --}}
    
    <section class="p-6 bg-slate-200 dark:bg-slate-900">
        <div class="flex justify-end mb-6">
            <a href="{{ route('links.create') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                Create Links
            </a>
        </div>
    </section>

    <table class="min-w-full">
        <tbody>
            @if($links->isNotEmpty())
                @foreach($links as $link)
                    <tr class="border-b">
                        <th scope="row">{{ $link->name }}</th>
                        <td>{{ $link->url }}</td>
                        <td>{{ $link->login ? 'Yes' : 'No' }}</td>
                        <td>{{ $link->password ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('links.show', $link->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                                Edit
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('links.destroy', $link->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure?')) { this.closest('form').submit(); }" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
                                    Delete
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">No results found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</x-layout>
