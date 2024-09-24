<!-- resources/views/auth/showLoginForm.blade.php -->
<x-layout>
    <div class="max-w-2xl mx-auto p-4 bg-slate-200 dark:bg-slate-900 rounded-lg">
        @if ($errors->any())
            <div class="text-red-500 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 rounded-lg text-sm px-5 py-2.5">Login</button>
            </div>
        </form>
    </div>
</x-layout>
