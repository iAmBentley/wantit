@extends('layouts.app')

@section('content')
<header class="bg-gray-300">
		<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 lg:py-8">
			<div class="flex justify-between items-center">
				<h1 class="ml-1">Edit Item</h1>
				<div class="hidden">
					<a href="{{ route('items.create') }}" class="border border-gray-400 duration-150 ease-in-out font-medium hover:border-gray-800 hover:text-gray-800 inline-flex items-center leading-5 md:px-4 px-2 py-2 rounded-md text-gray-400 text-sm transition">
						<svg class="md:-ml-1 md:mr-2 h-5 w-5" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M7 16L3 12M3 12L7 8M3 12L21 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<span class="hidden md:inline-block">Go Back</span>
					</a>
					<a href="{{ route('items.create') }}" class="inline-flex items-center px-2 py-2 md:px-4 ml-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition ease-in-out duration-150">
					<svg class="md:-ml-1 md:mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
						<path d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z"/>
					</svg>
					<span class="hidden md:inline-block">Save Item</span>
				</a>
				</div>
			</div>
		</div>
	</header>
	<main>
		<div class="lg:px-8 max-w-7xl mx-auto px-4 py-6">
			<form method="POST" action="{{ route('items.update', $item) }}">
				@csrf @method('PATCH')
				<div class="flex flex-wrap justify-between">
					{{-- IMAGE SIDE --}}
					<div class="w-full md:w-1/4 md:pr-6 mb-8 md:mb-0">
						<div>
							<img class="w-full object-cover rounded-md" src="https://images.unsplash.com/photo-1495121553079-4c61bcce1894?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=629&q=80" alt="Sunset in the mountains">
							<button type="button" class="py-2 px-3 w-full mt-4 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
								Change
							</button>
						</div>
					</div>
					<div class="w-full md:w-3/4">
						<div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
							{{-- WANTD LEVEL FIELD --}}
							<div class="sm:col-span-1">
								<label for="wantd_lvl" class="block text-sm leading-5 font-medium text-gray-700">
									Want'd Level
								</label>
								<div class="mt-4 flex justify-evenly">
									<span class="text-gray-300 hover:text-gray-600">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
									</span>
									<span class="text-gray-300 hover:text-gray-600">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
									</span>
									<span class="text-gray-300 hover:text-gray-600">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
									</span>
									<span class="text-gray-300 hover:text-gray-600">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
									</span>
									<span class="text-gray-300 hover:text-gray-600">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
										</svg>
									</span>
								</div>
							</div>
							{{-- URL FIELD --}}
							<div class="sm:col-span-5">
								<div>
									<label for="url" class="block text-sm font-medium leading-5 text-gray-700">Item URL</label>
									<div class="mt-2 flex rounded-md shadow-sm">
										<div class="relative flex-grow focus-within:z-10">
											<input id="url" name="url" class="form-input block w-full rounded-none rounded-l-md transition ease-in-out duration-150 sm:text-sm sm:leading-5" value="{{ $item->url }}" />
										</div>
										<button class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-r-md text-gray-700 bg-gray-50 hover:text-gray-500 hover:bg-white focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
											<svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24">
												<path d="M4 4V9H4.58152M19.9381 11C19.446 7.05369 16.0796 4 12 4C8.64262 4 5.76829							 6.06817 4.58152 9M4.58152 9H9M20 20V15H19.4185M19.4185 15C18.2317 17.9318 15.3574 20 12 20C7.92038 20 4.55399 16.9463 4.06189 13M19.4185 15H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
											<span class="ml-2">Fetch</span>
										</button>
									</div>
								</div>
							</div>
							{{-- NAME FIELD --}}
							<div class="sm:col-span-6">
								<label for="name" class="block text-sm font-medium leading-5 text-gray-700">
									Name
								</label>
								<div class="mt-1 rounded-md shadow-sm">
									<input id="name" name="name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $item->name }}"/>
								</div>
							</div>
							{{-- BRAND FIELD --}}
							<div class="sm:col-span-2">
								<label for="brand" class="block text-sm font-medium leading-5 text-gray-700">
									Brand
								</label>
								<div class="mt-1 rounded-md shadow-sm">
									<input id="brand" name="brand" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $item->brand }}"/>
								</div>
							</div>
							{{-- SIZE FIELD --}}
							<div class="sm:col-span-2">
								<label for="size" class="block text-sm font-medium leading-5 text-gray-700">
									Size
								</label>
								<div class="mt-1 rounded-md shadow-sm">
									<input id="size" name="size" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $item->size }}" />
								</div>
							</div>
							{{-- COLOR FIELD --}}
							<div class="sm:col-span-2">
								<label for="color" class="block text-sm font-medium leading-5 text-gray-700">
									Color
								</label>
								<div class="mt-1 rounded-md shadow-sm">
									<input id="color" name="color" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $item->color }}"/>
								</div>
							</div>
							{{-- CATEGORY SELECT FIELD --}}
							<div class="sm:col-span-2">
								<label for="country" class="block text-sm font-medium leading-5 text-gray-700">
									Category
								</label>
								<div class="mt-1 rounded-md shadow-sm">
									<select id="country" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
										<option>Bike Stuff</option>
										<option>Audio</option>
										<option>Bike Stuff</option>
										<option>Computer</option>
									</select>
								</div>
							</div>
							{{-- QUANTITY FIELD --}}
							<div class="sm:col-span-2">
								<label for="quantity" class="block text-sm font-medium leading-5 text-gray-700">
									Quantity
								</label>
								<div class="mt-1 rounded-md shadow-sm">
									<input id="quantity" name="quantity" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $item->qty }}" />
								</div>
							</div>
							{{-- PRICE FIELD --}}
							<div class="sm:col-span-2">
								<label for="price" class="block text-sm font-medium leading-5 text-gray-700">
									Price
								</label>
								<div class="mt-1 rounded-md shadow-sm">
									<input id="price" name="price" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $item->price }}" />
								</div>
							</div>
							{{-- DESCRIPTION FIELD --}}
							<div class="sm:col-span-3">
								<label for="description" class="block text-sm font-medium leading-5 text-gray-700">
									Description
								</label>
								<div class="mt-1 rounded-md shadow-sm">
									<textarea id="description" name="description" rows="3" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">{{ $item->description }}</textarea>
								</div>
							</div>
							{{-- NOTES FIELD --}}
							<div class="sm:col-span-3">
								<label for="notes" class="block text-sm font-medium leading-5 text-gray-700">
									Notes
								</label>
								<div class="mt-1 rounded-md shadow-sm">
									<textarea id="notes" name="notes" rows="3" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">{{ $item->notes }}</textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-8 border-t border-gray-200 pt-5">
					<div class="flex justify-end">
						<span class="inline-flex rounded-md shadow-sm">
							<a href="{{ URL::previous() }}" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
								Cancel
							</a>
						</span>
						<span class="ml-3 inline-flex rounded-md shadow-sm">
							<button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition duration-150 ease-in-out">
								Save Changes
							</button>
						</span>
					</div>
				</div>
			</form>
		</div>
	</main>
@endsection