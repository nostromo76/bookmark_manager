<x-layout>

    

    <section class="p-6 bg-slate-200 dark:bg-slate-900">
        <div class="flex justify-end mb-6">
            <a href="{{ Route('links.index')  }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Create Links
            </a>
        </div>
    
        
<figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
    <a href="#">
        <img class="w-full h-auto max-w-[600px] rounded-lg" src="{{ asset('images/bookmarks1.jpg') }}" alt="image description">

    </a>
    <figcaption class="absolute px-4 text-lg text-white bottom-6">
        <p>Keep records of your bookmarks and its logins and passwords</p>
    </figcaption>
  </figure>
  
    
</x-layout>