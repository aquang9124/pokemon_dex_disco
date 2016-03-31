var Vue = require('vue');
Vue.use(require('vue-resource'));

new Vue({
	el: 'body',

	data: {
		poke_id: "",
		poke_perm: "",
		poke_img: "",
		poke_info: "",
	},

	ready() {
		console.log('Vue and Vueify all set to go!');
	},

	methods: {
		submitId: function() {
			var num = this.poke_id;
			this.poke_perm = this.poke_id;
			this.poke_info = "";
			return this.poke_img = 'http://pokeapi.co/media/img/' + num + '.png';
		},

		showInfo: function() {
			var num = this.poke_perm;
			this.$http.get('http://pokeapi.co/api/v2/pokemon/' + num).then(function(res) {
				return this.poke_info = res.data;
			});
		}
	}
});
