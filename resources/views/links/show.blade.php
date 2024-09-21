<x-layout>
    <h1>Edit Link</h1>
    <section class="p-6 bg-slate-200 dark:bg-slate-900">
        <form action="{{ route('links.update', $link->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" id="name" name="name" value="{{ $link->name }}" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="mb-6">
                <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL</label>
                <input type="text" id="url" name="url" value="{{ $link->url }}" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="mb-6">
                <label for="login" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Login</label>
                <input type="text" id="login" name="login" value="{{ $link->login }}" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="text" id="password" name="password" value="{{ $link->password }}" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Update
            </button>
        </form>
    </section>
</x-layout>
