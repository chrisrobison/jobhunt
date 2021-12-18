const $ = str => document.querySelector(str);
const $$ = str => document.querySelectorAll(str);

(function() {
	const app = {
		init: function() {
			fetch("sig.html").then(response => response.text()).then(data => {
				app.data.sig = data;
			});
			fetch("coverletter.txt").then(response => response.text()).then(data => {
				app.data.letter = data;
			});

			document.onselectionchange = function() { app.getSelectedText(); }

			app.state.loaded = true;

		},
		state: {
			loaded: false
		},
		data: {
			fields: ['COMPANY', 'POSITION', 'LOCATION', 'CONTACT'],
			letter: ""
		},
		getDate: function() {
			let d = new Date();
			const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
			const days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
			return months[d.getMonth()] + ' ' + d.getDate() + ', ' + d.getFullYear();
		},
		getSelectedText: function() {
			let txt = window.getSelection().toString();
			app.data.selected = txt;

			$("#debug").innerHTML = txt;
		},
		genLetter: function() {
			let obj = {};
			let letter = app.data.letter.slice();

			app.data.fields.forEach(item => {
				obj[item] = $(`#${item}`).value;
				if (!obj[item]) {
					// console.log(`No value provided for ${item}, using default...`);
					obj[item] = $(`#${item}`).getAttribute('default');
				}
			});
			obj['FORMAT'] = $('input[name="FORMAT"]:checked').value;
			obj['DATE'] = app.getDate();

			// console.dir(obj);

			if (obj['FORMAT'] === 'text') {
				obj['SIGNATURE'] = '';
				letter = app.transform(letter, obj);
				letter = letter.replace(/(.{80,}?)\s/g, "$1\n");
				$("#letter").innerText = letter;
				$("#letter").classList.add('text');
			} else if (obj['FORMAT'] === 'html') {
				obj['SIGNATURE'] = app.data.sig;
		
				letter = app.transform(letter, obj);

				let parts = letter.split(/\n\n/);
				let newletter = "<div class='letter'><p>" + parts.join("</p><p>") + "</p></div>";
				newletter = newletter.replace(/\n/g, '<br/>');
				$("#letter").innerHTML  = newletter;
				$("#letter").classList.remove('text');
			}
			return false;
		},
		transform: function(letter, obj) {
			letter = letter.replace(/\<\%(\w+)\%\>/g, function(full, match) {
				// console.log(`Replacing key '${match}' with ${obj[match]}`);
				return obj[match];
			});

			return letter;
		},
		makePDF: function() {
			app.genLetter();
			let el = $("#letter");
			html2pdf(el);
			
			return false;

		},
		copyLetter: function() {
			window.getSelection().selectAllChildren($("#letter"));
			let txt = window.getSelection().toString();
			$("#debug").innerHTML = txt;
			document.execCommand("copy");
			//window.getSelection().removeAllRanges();

			return false;
		}
	}
	window.app = app;
	app.init();
})();

