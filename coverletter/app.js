const $ = str => document.querySelector(str);
const $$ = str => document.querySelectorAll(str);

(function() {
	const app = {
		init: function() {
			fetch("stopwords.json").then(response => response.json()).then(data => {
				app.state.stopwords = data;
			});
			app.state.loaded = true;
		},
		parseWords: function() {
			let words = $("#desc").value;
			let parts = words.split(/\s/);
			console.dir(parts);
			let allwords = {};

			parts.forEach(item => {
				if (item != '') {
					item = item.toLowerCase();
					item = item.replace(/\W/, '');

					if (!allwords[item]) {
						allwords[item] = 1;
					} else {
						allwords[item]++;
					}
				}
			});

			let sortable = [];
			for (let word in allwords) {
				if ((!app.state.stopwords.includes(word)) && (word != '')) {
					sortable.push([word, allwords[word]]);
				}
			}
			sortable.sort((a, b) => {
				return b[1] - a[1];
			});
			let out = "<ol>";
			sortable.forEach(item => {
				out += `<li>${item[0]} [${item[1]}]</li>`;
			});
			out += "</ol>";
			$("#results").innerHTML = out;

		},
		state: {
			loaded: false
		}
	}
	window.app = app;
	app.init();
})();

