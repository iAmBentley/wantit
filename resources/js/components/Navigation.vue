<template>
	<nav role="navigation" class="shadow">
		<div class="bg-white max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex items-center justify-between h-16">
				<!-- Logo -->
				<div class="flex items-center">
					<div class="flex-shrink-0">
						<img class="w-24" src="/images/wantd.svg" alt="Wantd Black and White Logo" />
					</div>
				</div>
				<!-- Desktop Navigation -->
				<div class="hidden md:block">
					<div class="ml-4 flex items-center md:ml-6">
						<a href="/dashboard"
							class="px-3 py-2 rounded-md text-sm font-medium text-gray-800 hover:bg-gray-200 focus:outline-none focus:text-gray-800 focus:bg-gray-700">Dashboard</a>
						<a href="/items"
							class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-800 hover:text-gray-700 hover:bg-gray-200 focus:outline-none focus:text-gray-800 focus:bg-gray-700">Items</a>
						<a href="#"
							class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-800 hover:text-gray-700 hover:bg-gray-200 focus:outline-none focus:text-gray-800 focus:bg-gray-700">Groups</a>
						<a href="#"
							class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-800 hover:text-gray-700 hover:bg-gray-200 focus:outline-none focus:text-gray-800 focus:bg-gray-700">Events</a>
						<div class="ml-3 relative">
							<div>
								<button @click="showUserMenu = !showUserMenu"
									class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid">
									<img class="h-8 w-8 rounded-full"
										src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
										alt="" />
								</button>
							</div>
							<transition name="pop-out-quick">
								<div v-show="showUserMenu" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
									<div class="py-1 rounded-md bg-white shadow-xs">
										<a href="#"
											class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
										<a href="#"
											class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
										<a href="#"
											class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
									</div>
								</div>
							</transition>
						</div>
					</div>
				</div>
				<!-- Mobile Navigation Button -->
				<div class="-mr-2 flex md:hidden">
					<button @click="showMobileNav = !showMobileNav"
						class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
						<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
							<path :class="{ 'hidden': showMobileNav }" class="inline-flex"
								stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M4 6h16M4 12h16M4 18h16" />
							<path :class="{ 'hidden': !showMobileNav }" class="inline-flex"
								stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M6 18L18 6M6 6l12 12" />
						</svg>
					</button>
				</div>
			</div>
		</div>
		<div :class="{ 'hidden': !showMobileNav }" class="block bg-gray-800">
			<div class="px-2 pt-2 pb-3 sm:px-3">
				<a href="/dashboard"
					class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Dashboard</a>
				<a href="/items"
					class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Items</a>
				<a href="#"
					class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Groups</a>
				<a href="#"
					class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Events</a>
			</div>
			<div class="pt-4 pb-3 border-t border-gray-700">
				<div class="flex items-center px-5">
					<div class="flex-shrink-0">
						<img class="h-10 w-10 rounded-full"
							src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
							alt="" />
					</div>
					<div class="ml-3">
						<div class="text-base font-medium leading-none text-white">Tom Cook</div>
						<div class="mt-1 text-sm font-medium leading-none text-gray-400">tom@example.com</div>
					</div>
				</div>
				<div class="mt-3 px-2">
					<a href="#"
						class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Your Profile</a>
					<a href="#"
						class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Settings</a>
					<a href="#"
						class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Sign out</a>
				</div>
			</div>
		</div>
	</nav>
</template>

<script>
export default {
	data: function() {
		return {
			showUserMenu: false,
			showMobileNav: false,
		};
	},
};
</script>