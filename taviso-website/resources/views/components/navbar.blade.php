<nav class="top-0 z-50 w-full border-b border-gray-200 bg-white py-4 shadow-sm">
	<div class="container mx-auto flex items-center justify-between px-6">

		<a href="/" class="flex items-center">
			<img src="{{ asset('images/Logo.png') }}" alt="Taviso Logo" class="h-10">
		</a>

		<div class="hidden items-center space-x-8 md:flex">
			<a href="#features" class="hover:text-taviso-purple font-semibold text-gray-600 transition duration-300">Features</a>
			<a href="#pricing" class="hover:text-taviso-purple font-semibold text-gray-600 transition duration-300">Pricing</a>
			<a href="#support" class="hover:text-taviso-purple font-semibold text-gray-600 transition duration-300">Support</a>
		</div>

		<div class="hidden items-center space-x-6 md:flex">
			<a href="https://apps.taviso.co.uk/login" target="_blank"
				class="hover:text-taviso-purple font-bold text-gray-600 transition duration-300">Login</a>
			<a href="https://demo.taviso.co.uk" target="_blank"
				class="bg-taviso-purple rounded-full px-6 py-2 font-bold text-white shadow-md transition duration-300 hover:bg-purple-800">
				Try the Demo
			</a>
		</div>

		<div class="flex items-center md:hidden">
			<button class="hover:text-taviso-purple text-gray-600 focus:outline-none">
				<svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
				</svg>
			</button>
		</div>

	</div>
</nav>
