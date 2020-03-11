<template>
	<div class="flex flex-wrap flex-none -mx-2">
		<div v-for="item in items" :key="item.id" class="item flex flex-initial w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
			<div class="bg-white shadow rounded-md relative">
				<!-- Item Card Body - See app.css for additional styles -->
				<div>
					<div class="image relative">
						<img class="h-48 w-full object-cover rounded-md" src="https://images.unsplash.com/photo-1504274066651-8d31a536b11a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=675&q=80" alt="Sunset in the mountains">
						
						<div class="overlay"> 
							<div class="px-2">
								<!-- View Button -->
								<div class="pb-3">
									<a :href="`/items/` + item.id" class="p-4 hover:bg-gray-600 rounded">
										<svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.9998 12C14.9998 13.6569 13.6566 15 11.9998 15C10.3429 15 8.99976 13.6569 8.99976 12C8.99976 10.3431 10.3429 9 11.9998 9C13.6566 9 14.9998 10.3431 14.9998 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.45801 12C3.73228 7.94288 7.52257 5 12.0002 5C16.4778 5 20.2681 7.94291 21.5424 12C20.2681 16.0571 16.4778 19 12.0002 19C7.52256 19 3.73226 16.0571 2.45801 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</div>
								<!-- Edit Button -->
								<div class="pb-3">
									<a :href="`/items/` + item.id + `/edit`" class="p-4 hover:bg-gray-600 rounded">
										<svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.2322 5.23223L18.7677 8.76777M16.7322 3.73223C17.7085 2.75592 19.2914 2.75592 20.2677 3.73223C21.244 4.70854 21.244 6.29146 20.2677 7.26777L6.5 21.0355H3V17.4644L16.7322 3.73223Z"/>
										</svg>
									</a>
								</div>
								<!-- Shop Button -->
								<div class="pb-3">
									<a :href="item.url" class="p-4 hover:bg-gray-600 rounded">
										<svg width="36" height="36" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
										</svg>
									</a>
								</div>
								<!-- Delete Button -->
								<div class="pb-3">
									<button type="button" class="p-4 hover:bg-gray-600 rounded">
										<svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7L18.1327 19.1425C18.0579 20.1891 17.187 21 16.1378 21H7.86224C6.81296 21 5.94208 20.1891 5.86732 19.1425L5 7M10 11V17M14 11V17M15 7V4C15 3.44772 14.5523 3 14 3H10C9.44772 3 9 3.44772 9 4V7M4 7H20"/>
										</svg>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Item Card Footer -->
				<div class="h-40">
					<div class="font-bold leading-tight text-xl mb-4 pt-4 px-4 text-gray-800 hover:text-gray-500">
						<a href="#">{{ item.name }}</a>
					</div>
					<div class="absolute bottom-0 pb-4 px-4 w-full">
						<div class="flex justify-between text-gray-400 text-sm">
							<span><a href="" class="hover:text-gray-700 capitalize">{{ item.category.name }}</a></span>
							<span>${{ item.price }}</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import Item from '../models/ItemsList';

export default {
	data() {
		return {
			items: []
		}
	},
	created() {
		Item.all()
			.then(({data}) => this.items = data);
	}
}
</script>