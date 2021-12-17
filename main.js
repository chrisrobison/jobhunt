(function() {
        const $ = str => document.querySelector(str);
        const $$ = str => document.querySelectorAll(str);

        const app = {
            init: function() {
				fetch("nav.json").then(response=>response.json()).then(data=>{
					app.data.nav = data;
					console.dir(data);
					app.buildNav(data["sidemenu"]);
                	app.state.loaded = true;
				});
            },
            state: {
                loaded: false
            },
			data: {
				store: function(key, obj) {
					if (key && obj) {
						localStorage.setItem(key, JSON.stringify(obj));
					}
				},
				get: function(key) {
					if (key) {
						return JSON.parse(localStorage.getItem(key));
					}
				},
				nav: {}
			},
			buildNav: function(tree) {
				let out = `<ul class="nav nav-treeview nav-pills nav-sidebar flex-column nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">`;
				out += app.makeList(tree, true);
				out += `</ul>`;
				
				$("#sidemenu").innerHTML = out;
				jQuery("ul").Treeview();
			},
			makeList: function(arr, noul=false) {
				let out = (noul) ? "" : `<ul class="nav nav-treeview">`;
				let haschild, toggle = '', arrow = `<i class="right fas fa-angle-left"></i>`;
				let mopen = 0;

				arr.forEach(item => {
					haschild = item.hasOwnProperty("_children");
					toggle = (haschild) ? arrow : "";
					menuopen = (!mopen && noul && haschild) ? " menu-open" : '';

					out += `<li class="nav-item${menuopen}"><a href="${item.link}" class="nav-link"><i class="nav-icon ${item.icon}"></i><p>${item.title}${toggle}</p></a>`;
					if (haschild) {
						out += app.makeList(item["_children"]);
					}
					out += "</li>";
					mopen = 0;
				});
				out += (noul) ? "" : "</ul>";
				return out;
			}
        };
        window.app = app;
        app.init();
})();
