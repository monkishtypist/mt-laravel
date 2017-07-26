
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
import Vue from 'vue';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('app-nav', require('./components/Nav.vue'));

const app = new Vue({
	el: '#app',
	data: {
		currentView: 'home'
	},
	components: {
		// 'app-nav': require('./components/Nav.vue'),
		home: require('./components/Home.vue'),
		about: require('./components/About.vue'),
		work: require('./components/Work.vue')
	},
	methods: {
		changeView( view ) {
			this.currentView = view,
			console.log( 'New view: ' + view )
		}
	}
}).$mount('#app');