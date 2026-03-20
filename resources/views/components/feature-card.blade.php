@props(['image', 'alt', 'label', 'title'])

<div class="flex flex-col">
	<div class="group relative mb-6 cursor-pointer overflow-hidden rounded-2xl shadow-lg">
		<img src="{{ asset($image) }}" alt="{{ $alt }}"
			class="h-64 w-full transform object-cover transition duration-500 group-hover:scale-105">
		<div class="absolute left-4 top-4 rounded-full bg-black/70 px-4 py-1 text-sm font-semibold text-white backdrop-blur-sm">
			{{ $label }}
		</div>
	</div>
	<h3 class="mb-3 text-2xl font-bold text-gray-900">{{ $title }}</h3>
	<p class="leading-relaxed text-gray-600">
		{{ $slot }}
	</p>
</div>
