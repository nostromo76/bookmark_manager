<x-layout>
    <h1>Edit Link</h1>
    <section class="p-6 bg-slate-200 dark:bg-slate-900">
        <form action="{{ route('links.update', $link->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>Name</label>
                <input type="text" name="name" value="{{ $link->name }}">
            </div>
            <button type="submit">Update</button>
        </form>
        
    </section>
</x-layout>
