var Vue = require('vue');
Vue.use(require('vue-resource'));

new Vue({
	el: 'body',

	data: {
		poke_name: "",
		poke_perm: "",
		poke_img: "",
		poke_form: "",
		poke_info: "",
		poke_types: "",
		poke_id: "",
		message: "",
		list: "",
		show_info: false,
	},

	ready() {
		console.log('Vue and Vueify all set to go!');
	},

	methods: {
		submitId: function() {
			var name = this.poke_name;
			this.poke_info = "";
			this.poke_form = "";
			if (this.show_info === true) {
				this.show_info = false;
			}
			
			this.$http.get('http://pokeapi.co/api/v2/pokemon/' + name).then(function(res) {
				var num = res.data.id;
				this.poke_perm = num;
	
				return this.poke_img = 'http://pokeapi.co/media/img/' + num + '.png';
			}, function(res) {
				return this.message = "The pokemon was not found!";
			});

		},

		getInfo: function() {
			var num = this.poke_perm;
			this.$http.get('http://pokeapi.co/api/v2/pokemon/' + num).then(function(res) {
				console.log(res);
				this.poke_form = res.data.sprites.front_shiny;
				return this.poke_info = res.data;
			});
		},

		revealInfo: function() {
			if (this.show_info === true) {
				return this.show_info = false;
			}
			return this.show_info = true;
		},

		changeForm: function() {
			if (this.poke_form === this.poke_info.sprites.front_shiny) {
				return this.poke_form = this.poke_info.sprites.back_shiny;
			}
			else {
				return this.poke_form = this.poke_info.sprites.front_shiny;
			}
		},
	},

});
