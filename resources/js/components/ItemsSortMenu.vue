<template>
	<div class="relative inline-block text-left">
		<div>
			<button @click="showSortMenu = !showSortMenu" type="button" class="active:bg-gray-50 active:text-gray-800 duration-150 ease-in-out focus:border-blue-300 focus:outline-none focus:shadow-outline-blue font-medium hover:text-gray-500 inline-flex justify-center leading-5 px-4 py-2 rounded text-gray-700 text-sm transition w-full">
				Most Recent
				<svg class="-mr-1 ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
					<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
				</svg>
			</button>
		</div>
		<transition name="pop-out-quick">
			<div v-show="showSortMenu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg z-10">
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
		</transition>
	</div>
</template>

<script>
export default {
	data: function() {
		return {
			showSortMenu: false,
		};
	},
}
</script>