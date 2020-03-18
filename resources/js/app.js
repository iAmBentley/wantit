require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('navigation', require('./components/Navigation.vue').default);
Vue.component('items-list', require('./components/ItemsList.vue').default);
Vue.component('items-sort-menu', require('./components/ItemsSortMenu.vue').default);
Vue.component('delete-item-modal', require('./components/DeleteItemModal.vue').default);

const app = new Vue({
	el: '#app',
	methods: {
		toggleModal(modal) {
			this.$refs[modal].toggleDeleteModal();
		}
	}
});
