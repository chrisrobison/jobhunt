const $ = str => document.querySelector(str);
const $$ = str => document.querySelectorAll(str);

(function() {
	const app = {
		init: function() {
			app.state.loaded = true;
		},
		state: {
			loaded: false
		}, 
		data: {

		}
	}
	window.app = app;
	app.init();
})();
