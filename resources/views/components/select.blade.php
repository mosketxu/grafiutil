@props(['disabled' => false,'selectname'])

<select {{$attributes->merge(['class'=>"text-sm py-1 border-gray-300 rounded-md shadow-sm text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none"]) }}>
    {{ $slot }}
</select>
