function polyfillsAreLoaded(){(function(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",e=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],o=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"";return new Promise(function(t,d){var c=document.createElement("script");c.onload=function(){t(n)},c.onerror=function(){d(n)},c.async=e,c.src=n,c.id=o,document.body.appendChild(c)})})("/wdn/templates_5.0/js/compressed/all.js?dep=$DEP_VERSION$",!0,"wdn_dependents").catch(function(n){console.error("Failed at "+n)})}
//# sourceMappingURL=polyfillsAreLoaded.js.map