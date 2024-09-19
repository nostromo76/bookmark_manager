@props(['active' => false])

<li>
    <a {{ $attributes->merge(['class' => 'block py-2 px-3 rounded ' . ($active ? 'text-white bg-blue-700 md:bg-transparent md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:hover:bg-gray-700 dark:hover:text-white')]) }}>
        {{ $slot }}
    </a>
</li>
