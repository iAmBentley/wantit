@extends('layouts.app')

@section('content')
<header class="bg-gray-300">
		<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 lg:py-8">
			<div class="flex justify-between items-center">
				<h1 class="ml-1">Item</h1>
			</div>
		</div>
	</header>
	<main>
		<div class="lg:px-8 max-w-7xl mx-auto px-4 py-6 mb-16">
			<div class="flex flex-wrap justify-between">
				{{-- IMAGE SIDE --}}
				<div class="w-full lg:w-1/3 lg:pr-6 mb-8 lg:mb-0">
					<img class="w-full object-cover rounded-md" src="https://images.unsplash.com/photo-1495121553079-4c61bcce1894?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=629&q=80" alt="Sunset in the mountains">
				</div>
				{{-- DETAIL SIDE --}}
				<div class="w-full lg:w-2/3">
					{{-- Item Header --}}
					<div class="">
						{{-- wantd level --}}
						<div class="flex mb-4 md:mb-1 items-center justify-evenly md:justify-start">
							<span class="text-gray-300 hover:text-gray-600">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
								</svg>
							</span>
							<span class="text-gray-300 hover:text-gray-600">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
								</svg>
							</span>
							<span class="text-gray-300 hover:text-gray-600">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
								</svg>
							</span>
							<span class="text-gray-300 hover:text-gray-600">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
								</svg>
							</span>
							<span class="text-gray-300 hover:text-gray-600">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.13259 17.8092C3.98557 18.4376 2.64499 17.4226 2.86405 16.0916L3.60266 11.6037L0.473862 8.42541C-0.454092 7.48276 0.0579647 5.84042 1.34037 5.64622L5.66426 4.99145L7.59797 0.908259C8.17147 -0.302753 9.82852 -0.302753 10.402 0.908259L12.3357 4.99145L16.6596 5.64622C17.942 5.84042 18.4541 7.48276 17.5261 8.42541L14.3973 11.6037L15.1359 16.0916C15.355 17.4226 14.0144 18.4376 12.8674 17.8092L9 15.6903L5.13259 17.8092Z" />
								</svg>
							</span>
						</div>
						<h2 class="max-w-2xl leading-snug mb-2">Apple Watch w/ GPS, 40mm Space Gray Aluminum Case with Anchor Gray Sport Loop</h2>
						{{-- Header Meta --}}
						<div class="mb-4 mt-3 text-gray-400">
							<p class="inline-block mr-4">Apple • <a href="#" class="hover:text-gray-700">Bike Stuff</a></p>
							<div class="rounded-full inline-block bg-orange-200 text-orange-800 py-1 px-4">
								<svg class="-mt-1 h-4 inline-block w-4" fill="currentColor" viewBox="0 0 24 24">
									<path d="M7 10V7a5 5 0 1 1 10 0v3h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h2zm2 0h6V7a3 3 0 0 0-6 0v3zm-4 2v8h14v-8H5zm7 2a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0v-2a1 1 0 0 1 1-1z"/>
								</svg>
								Reserved
							</div>
						</div>
					</div>
					<hr>
					{{-- DETAILS SECTION --}}
					<div class="max-w-lg mb-8 mt-6">
						<div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-2">
							<div class="sm:col-span-1">
								<div class="font-bold text-lg mb-2">Space Gray</div>
								<div class="flex items-center text-gray-400">
									<svg class="mr-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M4 2C2.89543 2 2 2.89543 2 4V15C2 16.6569 3.34315 18 5 18C6.65685 18 8 16.6569 8 15V4C8 2.89543 7.10457 2 6 2H4ZM5 16C5.55228 16 6 15.5523 6 15C6 14.4477 5.55228 14 5 14C4.44772 14 4 14.4477 4 15C4 15.5523 4.44772 16 5 16ZM10 14.2426L14.8995 9.34308C15.6805 8.56203 15.6805 7.2957 14.8995 6.51465L13.4853 5.10044C12.7042 4.31939 11.4379 4.31939 10.6568 5.10044L10 5.75728V14.2426ZM16 18H9.07104L15.071 12H16C17.1046 12 18 12.8954 18 14V16C18 17.1046 17.1046 18 16 18Z" fill="currentColor"/>
									</svg>
									Color
								</div>
							</div>
							<div class="sm:col-span-1">
								<div class="font-bold text-lg mb-2">40mm</div>
								<div class="flex items-center text-gray-400">
									<svg class="mr-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M4 2C2.89543 2 2 2.89543 2 4V15C2 16.6569 3.34315 18 5 18C6.65685 18 8 16.6569 8 15V4C8 2.89543 7.10457 2 6 2H4ZM5 16C5.55228 16 6 15.5523 6 15C6 14.4477 5.55228 14 5 14C4.44772 14 4 14.4477 4 15C4 15.5523 4.44772 16 5 16ZM10 14.2426L14.8995 9.34308C15.6805 8.56203 15.6805 7.2957 14.8995 6.51465L13.4853 5.10044C12.7042 4.31939 11.4379 4.31939 10.6568 5.10044L10 5.75728V14.2426ZM16 18H9.07104L15.071 12H16C17.1046 12 18 12.8954 18 14V16C18 17.1046 17.1046 18 16 18Z" fill="currentColor"/>
									</svg>
									Size
								</div>
							</div>
							<div class="sm:col-span-1">
								<div class="font-bold text-lg mb-2">One</div>
								<div class="flex items-center text-gray-400">
									<svg class="mr-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7 9C7 7.89543 7.89543 7 9 7H15C16.1046 7 17 7.89543 17 9V15C17 16.1046 16.1046 17 15 17H9C7.89543 17 7 16.1046 7 15V9Z" fill="currentColor"/><path d="M5 3C3.89543 3 3 3.89543 3 5V11C3 12.1046 3.89543 13 5 13L5 5H13C13 3.89543 12.1046 3 11 3H5Z" fill="currentColor"/>
									</svg>
									Quantity
								</div>
							</div>
							<div class="sm:col-span-1">
								<div class="font-bold text-lg mb-2">$399.99</div>
								<div class="flex items-center text-gray-400">
									<svg class="mr-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L10.7071 17.7071C10.3166 18.0976 9.68342 18.0976 9.29289 17.7071L2.29289 10.7071C2.0976 10.5118 1.99997 10.2558 2 9.99988V5C2 3.34315 3.34315 2 5 2H10.0003C10.2561 2.00007 10.5119 2.0977 10.7071 2.29289L17.7071 9.29289ZM5 6C5.55228 6 6 5.55228 6 5C6 4.44772 5.55228 4 5 4C4.44772 4 4 4.44772 4 5C4 5.55228 4.44772 6 5 6Z" fill="currentColor"/>
									</svg>
									Price
								</div>
							</div>
						</div>
					</div>
					{{-- NOTES SECTION --}}
					<div class="mb-8 lg:mb-0">
						<h4>Notes</h4>
						<hr class="mt-2 mb-4">
						<p class="max-w-2xl leading-6 text-gray-600">This is where you would see any notes left by you or the person who the item belongs to. If there are not any notes, this will not appear and the ‘purchase’ button will be closer to the top copy.</p>
					</div>
					{{-- BUTTON GROUP --}}
					<div class="mt-8 mb-8 lg:mb-0">
						<span class="inline-flex rounded-md shadow-sm">
							<a href="#" class="justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition duration-150 ease-in-out">
								<svg class="inline-block mr-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg> Buy Now
							</a>
						</span>
						<span class="ml-3 inline-flex rounded-md shadow-sm">
							{{-- Mark as Purchased Button --}}
							<button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
								<svg class="inline-block" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20 7.93537C20 6.24776 18.6047 4.8474 16.9231 4.8474H14.8837C14.9195 4.63196 14.9553 4.41652 14.9553 4.16517C14.9553 2.54937 13.6315 1.22083 12.0215 1.22083C11.449 1.22083 10.8766 1.40036 10.4472 1.68761C9.87478 0.682226 8.76565 0 7.51342 0C5.65295 0 4.11449 1.50808 4.11449 3.41113C4.11449 3.91382 4.22182 4.41652 4.43649 4.8833H3.07692C1.39535 4.8833 0 6.28366 0 7.97127C0 9.29982 0.822898 10.4129 2.00358 10.8797V17.0916C2.00358 18.7074 3.32737 20.0359 4.93739 20.0359H14.9911C16.6011 20.0359 17.9249 18.7074 17.9249 17.0916V10.8797C19.1413 10.4488 20 9.29982 20 7.93537ZM12.0572 3.05206C12.7013 3.05206 13.2021 3.55476 13.2021 4.20108C13.2021 4.45242 13.1306 4.66786 12.9875 4.8833H10.9123V4.20108C10.9123 3.55476 11.4132 3.05206 12.0572 3.05206ZM5.9034 3.41113C5.9034 2.51346 6.61896 1.79533 7.51342 1.79533C8.40787 1.79533 9.12343 2.51346 9.12343 3.41113V4.8833H6.86941C6.29696 4.59605 5.9034 4.02154 5.9034 3.41113ZM3.07692 6.64273H9.12343V9.22801H3.07692C2.36136 9.22801 1.78891 8.6535 1.78891 7.93537C1.78891 7.21724 2.36136 6.64273 3.07692 6.64273ZM3.79249 17.0557V11.0233H9.08766V18.2047H4.93739C4.32916 18.2047 3.79249 17.702 3.79249 17.0557ZM16.136 17.0557C16.136 17.702 15.6351 18.2047 14.9911 18.2047H10.9123V11.0233H16.136V17.0557ZM16.9231 9.22801H10.9123V6.64273H16.9589C17.6744 6.64273 18.2469 7.21724 18.2469 7.93537C18.2469 8.6535 17.6386 9.22801 16.9231 9.22801Z" fill="currentColor"/>
								</svg>
							</button>
						</span>
						<span class="ml-3 inline-flex rounded-md shadow-sm">
							{{-- Edit Button - If items user matches logged in user --}}
							<a href="{{ route('items.edit', $item ?? '') }}" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
								<svg class="inline-block" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.2322 5.23223L18.7677 8.76777M16.7322 3.73223C17.7085 2.75592 19.2914 2.75592 20.2677 3.73223C21.244 4.70854 21.244 6.29146 20.2677 7.26777L6.5 21.0355H3V17.4644L16.7322 3.73223Z"/>
								</svg>
							</a>
							{{-- Reserve Button - If items user does NOT match logged in user --}}
							<button type="submit" class="hidden py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
								<svg class="inline-block" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15V17M6 21H18C19.1046 21 20 20.1046 20 19V13C20 11.8954 19.1046 11 18 11H6C4.89543 11 4 11.8954 4 13V19C4 20.1046 4.89543 21 6 21ZM16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11H16Z"/>
								</svg>
							</button>
						</span>
					</div>
				</div>
				{{-- DESCRIPTION SECTION --}}
				<div class="w-full mt-2 lg:mt-6">
					<h4>Description</h4>
					<hr class="mt-2 mb-4">
					<p class="leading-6 text-gray-600">Built-in GPS, GLONASS, Galileo, and QZSS, S5 with 64-bit dual-core processor, W3 Apple wireless chip, Barometric altimeter, Capacity 32GB, Optical heart sensor, Electrical heart sensor, Improved accelerometer up to 32 g‑forces, Improved gyroscope, Ambient light sensor, LTPO OLED Always-On Retina display with Force Touch (1000 nits), Digital Crown with haptic feedback, Louder speaker, Ion-X strengthened glass, Sapphire crystal and ceramic back, Wi-Fi 802.11b/g/n 2.4GHz, Bluetooth 5.0, Built-in rechargeable lithium-ion battery, Up to 18 hours of battery life, Water resistant 50 meters, watchOS 5</p>
				</div>
			</div>
		</div>
	</main>
@endsection