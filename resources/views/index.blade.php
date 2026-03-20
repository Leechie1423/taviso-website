<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Taviso | Fleet Maintenance Simplified</title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Oswald:wght@500;700&display=swap" rel="stylesheet">

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white font-sans text-gray-900 antialiased">

	<x-navbar />

	<section class="relative flex h-[600px] items-center bg-cover bg-center"
		style="background-image: url('{{ asset('images/mobile-friendly.png') }}');">
		<div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>

		<div class="container relative z-10 mx-auto w-full px-6">
			<div class="max-w-2xl">
				<h1 class="font-heading mb-4 text-5xl font-extrabold leading-tight tracking-tight text-white md:text-6xl">
					KEEP YOUR FLEET MOVING.<br>LEAVE THE PAPERWORK BEHIND.
				</h1>
				<p class="mb-8 max-w-xl font-sans text-xl text-gray-200">
					The simple, paperless way to manage PMI inspections, compliance, and maintenance.
				</p>
				<div class="flex flex-wrap gap-4">
					<button class="bg-taviso-purple rounded-full px-8 py-3 font-bold text-white transition duration-300 hover:bg-purple-800">
						START 60-DAY FREE TRIAL
					</button>
					<button
						class="rounded-full border-2 border-white bg-transparent px-8 py-3 font-bold text-white transition duration-300 hover:bg-white hover:text-gray-900">
						SEE THE SOFTWARE IN ACTION
					</button>
				</div>
			</div>
		</div>

		<div
			class="absolute -bottom-6 left-1/2 -translate-x-1/2 transform cursor-pointer rounded-full border border-gray-100 bg-white p-4 shadow-lg transition-all hover:-translate-y-1 hover:shadow-xl">
			<svg class="h-6 w-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
			</svg>
		</div>
	</section>

	<section class="relative overflow-hidden bg-white py-24">
		<div class="container mx-auto max-w-6xl px-6">
			<div class="flex flex-col items-center gap-16 lg:flex-row">

				<div class="lg:w-1/3">
					<h2 class="font-heading mb-8 text-2xl uppercase tracking-wide text-gray-800">
						Under the Hood: Interactive Showcase
					</h2>
					<ul class="space-y-4 text-xl font-bold text-gray-400">
						<li class="cursor-pointer border-b border-gray-200 pb-3 text-gray-900">DIGITAL PMI REPORTS</li>
						<li class="hover:text-taviso-purple cursor-pointer border-b border-gray-200 pb-3 transition">SMART SCHEDULING</li>
						<li class="hover:text-taviso-purple cursor-pointer border-b border-gray-200 pb-3 transition">DIGITAL JOB CARDS</li>
						<li class="hover:text-taviso-purple cursor-pointer border-b border-gray-200 pb-3 transition">TAIL LIFT MODULE</li>
					</ul>
				</div>

				<div class="relative flex justify-end lg:w-2/3">
					<img src="{{ asset('images/devices-showcase.png') }}" alt="Taviso Software on Devices" class="w-full max-w-3xl">
				</div>

			</div>
		</div>
	</section>

	<section class="bg-taviso-grey py-24">
		<div class="container mx-auto w-full px-6">

			<h2 class="font-heading mb-16 text-center text-3xl uppercase tracking-wide text-gray-900 md:text-4xl">
				The Anywhere Advantage
			</h2>

			<div class="grid grid-cols-1 gap-10 md:grid-cols-3">

				<x-feature-card
					image="images/mobile-friendly.png"
					alt="Mobile App in Workshop"
					label="The Workshop"
					title="Mobile-Friendly.">
					Capture defects, add notes, and log parts directly from the workshop floor.
				</x-feature-card>

				<x-feature-card
					image="images/yard-tablet.jpg"
					alt="Tablet App in Yard"
					label="The Yard"
					title="Instant Compliance.">
					Generate fully compliant PDF reports on the spot and email them instantly.
				</x-feature-card>

				<x-feature-card
					image="images/office-desktop.jpg"
					alt="Desktop Dashboard in Office"
					label="The Office"
					title="Centralised Control.">
					Securely store vehicle data, track tyre removals, and monitor upcoming MOTs in one place.
				</x-feature-card>

				<x-feature-card
					image="images/office-desktop.jpg"
					alt="Desktop Dashboard in Office"
					label="The Office"
					title="Centralised Control.">New Feature
				</x-feature-card>

			</div>
		</div>
	</section>

	<section id="pricing" class="border-t border-gray-100 bg-white py-24">
		<div class="container mx-auto max-w-6xl px-6">

			<div class="mb-16 text-center">
				<h2 class="font-heading mb-4 text-4xl font-bold uppercase tracking-tight text-gray-900 md:text-5xl">
					Simple pricing. <span class="text-taviso-purple">Zero lock-ins.</span>
				</h2>
				<p class="mx-auto max-w-2xl text-xl text-gray-600">
					No long-term contracts. No hidden setup fees. Just a rolling monthly subscription that scales exactly to your fleet's needs.
				</p>
			</div>

			<div class="flex flex-col items-stretch gap-8 lg:flex-row">

				<div class="relative flex flex-col justify-between overflow-hidden rounded-3xl bg-gray-900 p-10 text-white shadow-2xl lg:w-3/5">
					<div class="bg-taviso-purple absolute right-0 top-0 -mr-16 -mt-16 h-64 w-64 rounded-full opacity-20 blur-3xl"></div>

					<div class="relative z-10">
						<h3 class="mb-2 text-2xl font-bold">The Workshop Module</h3>
						<p class="mb-8 text-gray-400">Everything you need to digitise your compliance.</p>

						<div class="mb-8 flex items-baseline gap-2">
							<span class="font-heading text-6xl font-bold">£50</span>
							<span class="text-xl text-gray-400">/ month</span>
						</div>

						<ul class="mb-10 space-y-4 text-lg">
							<li class="flex items-center gap-3">
								<svg class="text-taviso-purple h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
								</svg>
								Digital PMI & Reports
							</li>
							<li class="flex items-center gap-3">
								<svg class="text-taviso-purple h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
								</svg>
								Digital Jobcards & Scheduling
							</li>
							<li class="flex items-center gap-3">
								<svg class="text-taviso-purple h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
								</svg>
								Full Operator Database
							</li>
							<li class="flex items-center gap-3">
								<svg class="text-taviso-purple h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
								</svg>
								<span class="font-bold text-white">Includes 1 User</span>
							</li>
						</ul>
					</div>

					<button
						class="bg-taviso-purple relative z-10 w-full rounded-xl py-4 text-lg font-bold text-white transition duration-300 hover:bg-purple-800">
						Start 60-Day Free Trial
					</button>
				</div>

				<div class="bg-taviso-grey flex flex-col justify-between rounded-3xl p-10 lg:w-2/5">
					<div>
						<h3 class="mb-2 text-2xl font-bold text-gray-900">Scale as you grow</h3>
						<p class="mb-8 text-gray-600">Add the tools and team members you need, whenever you need them.</p>

						<div class="space-y-6">
							<div class="flex items-center justify-between border-b border-gray-300 pb-4">
								<div>
									<h4 class="font-bold text-gray-900">Additional Users</h4>
									<p class="text-sm text-gray-600">Per extra team member</p>
								</div>
								<div class="font-heading text-taviso-purple text-2xl font-bold">+£10 <span
										class="font-sans text-sm font-normal text-gray-600">/mo</span></div>
							</div>

							<div class="flex items-center justify-between border-b border-gray-300 pb-4">
								<div>
									<h4 class="font-bold text-gray-900">LOLER Module</h4>
									<p class="text-sm text-gray-600">Lifting operations compliance</p>
								</div>
								<div class="font-heading text-taviso-purple text-2xl font-bold">+£20 <span
										class="font-sans text-sm font-normal text-gray-600">/mo</span></div>
							</div>

							<div class="flex items-center justify-between">
								<div>
									<h4 class="font-bold text-gray-900">Driver Walkarounds</h4>
									<p class="text-sm text-gray-600">Daily digital vehicle checks</p>
								</div>
								<div class="font-heading text-taviso-purple text-2xl font-bold">+£20 <span
										class="font-sans text-sm font-normal text-gray-600">/mo</span></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<footer class="border-t border-gray-200 bg-white py-6">
		<div class="container mx-auto flex flex-col items-center justify-between px-6 text-sm font-semibold text-gray-800 md:flex-row">
			<div class="mb-4 flex items-center gap-2 md:mb-0">
				<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
					</path>
				</svg>
				0800 654 6019
			</div>
			<div class="mb-4 flex items-center gap-2 md:mb-0">
				<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
				</svg>

			</div>
			<div class="flex items-center gap-2 text-gray-500">
				<svg class="h-5 w-5 text-gray-800" fill="currentColor" viewBox="0 0 24 24">
					<path
						d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
				</svg>
				© 2026 TAVISO
			</div>
		</div>
	</footer>

</body>

</html>
