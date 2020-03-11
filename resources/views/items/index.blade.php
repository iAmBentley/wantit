@extends('layouts.app')

@section('content')
    <header class="bg-gray-300">
		<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 lg:py-8">
			<div class="flex justify-between items-center">
				<h1 class="ml-1">Items</h1>
				<a href="{{ route('items.create') }}" class="inline-flex items-center px-2 py-2 md:px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition ease-in-out duration-150">
					<svg class="md:-ml-1 md:mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
						<path d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z"/>
					</svg>
					<span class="hidden md:inline-block">Add Item</span>
				</a>
			</div>
		</div>
	</header>
	<main>
		<div class="lg:px-8 max-w-7xl mx-auto px-4 py-6 lg:py-4">
			<div class="flex flex-wrap">
				{{-- Sidebar --}}
				<div class="md:mt-2 md:pr-6 md:w-1/4 w-full">
					<h3 class="font-header text-gray-800 text-xl font-bold ml-1 pb-4">Filters</h3>
					{{-- Categories --}}
					<div class="ml-1 text-gray-600 mb-6">
						<h4 class="font-bold mb-2">Categories</h4>
						<hr class="mb-2">
						<ul class="text-gray-500">
							<li class="rounded hover:bg-gray-200 bg-gray-200">
								<a href="#" class="block py-2 pl-2">All Items</a>
							</li>
							<li class="rounded hover:bg-gray-200">
								<a href="#" class="block py-2 pl-2">Audio</a>
							</li>
							<li class="rounded hover:bg-gray-200">
								<a href="#" class="block py-2 pl-2">Bike Stuff</a>
							</li>
							<li class="rounded hover:bg-gray-200">
								<a href="#" class="block py-2 pl-2">Clothing</a>
							</li>
							<li class="rounded hover:bg-gray-200">
								<a href="#" class="block py-2 pl-2">Computer</a>
							</li>
							<li class="rounded hover:bg-gray-200">
								<a href="#" class="block py-2 pl-2">Educational</a>
							</li>
							<li class="rounded hover:bg-gray-200">
								<a href="#" class="block py-2 pl-2">Home Theater</a>
							</li>
							<li class="rounded hover:bg-gray-200">
								<a href="#" class="block py-2 pl-2">Photography</a>
							</li>
							<li class="rounded hover:bg-gray-200">
								<a href="#" class="block py-2 pl-2">Software</a>
							</li>
							<li class="rounded hover:bg-gray-200">
								<a href="#" class="block py-2 pl-2">Vehicle</a>
							</li>
						</ul>
					</div>
					{{-- Price Range --}}
					<div class="ml-1 text-gray-600 mb-8">
						<h4 class="font-bold mb-2">Price Range</h4>
						<hr class="mb-2">
						<div class="pt-2 pr-6 ml-2 lg:pr-0 lg:w-2/3">
							<div class="bg-gray-300 h-2 rounded-full relative">
								<span class="bg-white h-4 w-4 absolute top-0 -ml-2 -mt-1 z-10 shadow rounded-full cursor-pointer" style="left:50%"></span>
								<span class="bg-gray-500 h-2 absolute left-0 top-0 rounded-full" style="width:50%"></span>
							</div>
							<div class="flex justify-between mt-2 text-xs text-gray-500">
								<span class="text-left">$0</span>
								<span class="text-right">$2,545</span>
							</div>
						</div>
					</div>
					{{-- Want'd Level --}}
					<div class="ml-1 text-gray-600 mb-8">
						<h4 class="font-bold mb-2">Want'd Level</h4>
						<hr class="mb-2">
						{{-- 5 Stars --}}
						<div class="hover:bg-gray-200 rounded">
							<a href="#" class="block pl-2 py-1">
								<div class="flex">
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
								</div>
							</a>
						</div>
						{{-- 4 Stars --}}
						<div class="hover:bg-gray-200 rounded">
							<a href="#" class="block pl-2 py-1">
								<div class="flex">
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<span class="text-gray-300">
										<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
									</span>
								</div>
							</a>
						</div>
						{{-- 3 Stars --}}
						<div class="hover:bg-gray-200 rounded">
							<a href="#" class="block pl-2 py-1">
								<div class="flex">
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<span class="flex text-gray-300">
										<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
										<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
									</span>
								</div>
							</a>
						</div>
						{{-- 2 Stars --}}
						<div class="hover:bg-gray-200 rounded">
							<a href="#" class="block pl-2 py-1">
								<div class="flex">
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<span class="flex text-gray-300">
										<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
										<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
										<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
									</span>
								</div>
							</a>
						</div>
						{{-- 1 Star --}}
						<div class="hover:bg-gray-200 rounded">
							<a href="#" class="block pl-2 py-1">
								<div class="flex">
									<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
									</svg>
									<span class="flex text-gray-300">
										<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
										<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
										<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
										<svg class="mt-1 mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
									</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				{{-- Items List --}}
				<div class="md:w-3/4 w-full">
					{{-- Items List Header --}}
					<div class="flex justify-between items-center mb-2">
						<h3 class="font-header text-gray-800 text-xl font-bold">
							All Items <span class="text-base font-normal">({{ $items_count }})</span>
						</h3>
						<div class="flex items-center">
							{{-- Sort Dropdown --}}
							<div x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false" class="relative inline-block text-left">
								<div>
									<span>
										<button @click="open = !open" type="button" class="active:bg-gray-50 active:text-gray-800 duration-150 ease-in-out focus:border-blue-300 focus:outline-none focus:shadow-outline-blue font-medium hover:text-gray-500 inline-flex justify-center leading-5 px-4 py-2 rounded text-gray-700 text-sm transition w-full">
										Most Recent
											<svg class="-mr-1 ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
												<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
											</svg>
										</button>
									</span>
								</div>
								<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg z-10">
									<div class="rounded-md bg-white shadow-xs">
										<div class="py-1">
											<form method="POST" action="#">
												<button type="submit" class="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
													Most Recent (Default)
												</button>
											</form>
											<form method="POST" action="#">
												<button type="submit" class="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
													Price (low to high)
												</button>
											</form>
											<form method="POST" action="#">
												<button type="submit" class="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
													Price (high to low)
												</button>
											</form>
											<form method="POST" action="#">
												<button type="submit" class="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
													Want'd Level (low to high)
												</button>
											</form>
											<form method="POST" action="#">
												<button type="submit" class="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
													Want'd Level (high to low)
												</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<button type="button" title="Table View" class="text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 transition duration-150 ease-in-out">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm14 8V5H5v6h14zm0 2H5v6h14v-6zM8 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
							</button>
							<button type="button" title="Grid View" class="ml-2 text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 transition duration-150 ease-in-out">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5 3h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v4h4V5H5zm10-2h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v4h4V5h-4zM5 13h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4c0-1.1.9-2 2-2zm0 2v4h4v-4H5zm10-2h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4c0-1.1.9-2 2-2zm0 2v4h4v-4h-4z"/></svg>
							</button>
						</div>
					</div>
					{{-- Items List Cards --}}
					<div>
						{{-- Item Card --}}
						<items-list></items-list>
					</div>
				</div>
			</div>
		</div>
	</main>
	@include('layouts.modals.delete-item')
@endsection