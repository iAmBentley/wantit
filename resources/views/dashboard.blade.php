@extends('layouts.app')

@section('content')
    <header class="bg-gray-300">
		<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 lg:py-16">
			<div class="">
				<label for="item" class="sr-only">Add New Item</label>
				<div class="max-w-sm mx-auto flex rounded-md shadow-sm">
					<div class="relative flex-grow focus-within:z-10">
						<input id="item"
							class="form-input block w-full rounded-none rounded-l-md pl-4 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
							placeholder="Enter a URL or type 'Create' to add items" />
					</div>
					<button
						class="-ml-px active:bg-gray-100 active:text-gray-700 bg-gray-600 border border-gray-300 duration-150 ease-in-out focus:border-blue-300 focus:outline-none focus:shadow-outline-blue font-medium hover:bg-gray-50 hover:text-gray-600 inline-flex items-center leading-5 px-4 py-2 relative rounded-r-md text-sm text-white transition">
						<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
							<path
								d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z" />
						</svg>
					</button>
				</div>
			</div>
		</div>
	</header>
	<main>
		<div class="lg:px-8 max-w-7xl mx-auto px-4 py-6">
			<div class="flex flex-wrap">
				<div class="lg:w-3/4 w-full lg:pr-6 mb-8">
					<h3 class="font-header text-gray-800 text-xl font-bold ml-1 pb-4">Your Recent Items</h3>
					<div class="flex flex-col">
						<div class="">
							<div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
								<table class="min-w-full">
									<thead>
										<tr>
											<th class="px-4 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> Want'd </th>
											<th class="px-4 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> Item </th>
											<th class="px-4 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider whitespace-no-wrap"> Price (ea) </th>
											<th class="px-4 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider whitespace-no-wrap">Actions</th>
										</tr>
									</thead>
									<tbody class="bg-white">
										<tr>
											<td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200">
												<span class="md:inline-block text-gray-300 hover:text-gray-600">
													<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
													</svg>
												</span>
												<span class="md:inline-block text-gray-300 hover:text-gray-600">
													<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
													</svg>
												</span>
												<span class="md:inline-block text-gray-300 hover:text-gray-600">
													<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
													</svg>
												</span>
												<span class="md:inline-block text-gray-300 hover:text-gray-600">
													<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
													</svg>
												</span>
												<span class="md:inline-block text-gray-300 hover:text-gray-600">
													<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
													</svg>
												</span>
											</td>
											<td class="px-4 py-4 border-b border-gray-200">
												<div class="flex items-center">
													<div class="flex-shrink-0 h-10 w-10 hidden md:block">
														<img class="h-10 w-10 rounded-full"
															src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
															alt="" />
													</div>
													<div class="md:ml-4">
														<div class="text-sm leading-5 font-medium text-gray-900 hover:text-gray-500">
															<a class="block" href="">
																Acratech Arca-Type Quick-Release Plate for Nikon D5200
															</a>
														</div>
													</div>
												</div>
											</td>
											<td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
												$19.99
											</td>
											<td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
												<div class="flex justify-end">
													<a href="#" title="Public or Private" class="text-green-500 hover:text-gray-400 focus:outline-none focus:underline">
														<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
															<path d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2zm1-5a1 1 0 0 1 0-2 5 5 0 0 1 5 5v2a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3zm-2-4a1 1 0 0 1 0-2 3 3 0 0 0 0-6 1 1 0 0 1 0-2 5 5 0 0 1 0 10z"/>
															</svg> 
													</a>
													<a href="#" title="View" class="ml-2 text-gray-400 hover:text-gray-800 focus:outline-none focus:underline">
														<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
															<path d="M17.56 17.66a8 8 0 0 1-11.32 0L1.3 12.7a1 1 0 0 1 0-1.42l4.95-4.95a8 8 0 0 1 11.32 0l4.95 4.95a1 1 0 0 1 0 1.42l-4.95 4.95zm-9.9-1.42a6 6 0 0 0 8.48 0L20.38 12l-4.24-4.24a6 6 0 0 0-8.48 0L3.4 12l4.25 4.24zM11.9 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
														</svg>
													</a>
													<a href="#" title="Edit" class="ml-2 text-gray-400 hover:text-gray-800 focus:outline-none focus:underline">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M15.2322 5.23223L18.7677 8.76777M16.7322 3.73223C17.7085 2.75592 19.2914 2.75592 20.2677 3.73223C21.244 4.70854 21.244 6.29146 20.2677 7.26777L6.5 21.0355H3V17.4644L16.7322 3.73223Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
													</a>
													<a href="#" title="Buy" class="ml-2 text-gray-400 hover:text-gray-800 focus:outline-none focus:underline">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
														</svg>
													</a>
													<a href="#" title="Remove" class="ml-2 text-gray-400 hover:text-gray-800 focus:outline-none focus:underline">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/>
														</svg>
													</a>
													<a href="#" title="More Options" class="md:hidden ml-1 text-gray-400 hover:text-gray-800 focus:outline-none focus:underline">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 5V5.01V5ZM12 12V12.01V12ZM12 19V19.01V19ZM12 6C11.4477 6 11 5.55228 11 5C11 4.44772 11.4477 4 12 4C12.5523 4 13 4.44772 13 5C13 5.55228 12.5523 6 12 6ZM12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12C13 12.5523 12.5523 13 12 13ZM12 20C11.4477 20 11 19.5523 11 19C11 18.4477 11.4477 18 12 18C12.5523 18 13 18.4477 13 19C13 19.5523 12.5523 20 12 20Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="lg:w-1/4 w-full">
					<div class="mb-8">
						<h3 class="font-header text-gray-800 text-xl font-bold ml-1 pb-4">Upcoming Events</h3>
						<div class="align-middle inline-block min-w-full shadow bg-white overflow-hidden sm:rounded-lg border-b border-gray-200">
							<div class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 tracking-wide">
								<p class="font-bold text-sm leading-5 text-gray-900 hover:text-gray-500">
									<a href="#">Donnie's Birthday</a>
								</p>
								<p class="text-sm leading-5 text-gray-400">
									<span>In 4 Days</span> • <span>Stone Family</span>
								</p>
							</div>
							<div class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 tracking-wide">
								<p class="font-bold text-sm leading-5 text-gray-900 hover:text-gray-500">
									<a href="#">Stephanie's Shower</a>
								</p>
								<p class="text-sm leading-5 text-gray-400">
									<span>3/15/20</span> • <span>Book Club Girls</span>
								</p>
							</div>
							<div class="bg-gray-100 col-span-2 hover:bg-gray-300 hover:text-gray-800 text-center text-gray-500 text-sm">
								<a href="#" class="block py-4 px-4">View All</a>
							</div>
						</div>
					</div>
					<div class="mb-8">
						<h3 class="font-header text-gray-800 text-xl font-bold ml-1 pb-4">Recent Groups</h3>
						<div class="align-middle inline-block min-w-full shadow bg-white overflow-hidden sm:rounded-lg border-b border-gray-200">
							<div class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 tracking-wide">
								<p class="font-bold text-sm leading-5 text-gray-900 hover:text-gray-500">
									<a href="#">Book Club Girls</a>
								</p>
								<p class="text-sm leading-5 text-gray-400">
									<span>4</span> of <span>4</span> members joined
								</p>
							</div>
							<div class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 tracking-wide">
								<p class="font-bold text-sm leading-5 text-gray-900 hover:text-gray-500">
									<a href="#">Stone Family<a/></p>
								<p class="text-sm leading-5 text-gray-400">
									<span>5</span> of <span>6</span> members joined
								</p>
							</div>
							<div class="bg-gray-100 col-span-2 hover:bg-gray-300 hover:text-gray-800 text-center text-gray-500 text-sm">
								<a href="#" class="block py-4 px-4">View All</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection