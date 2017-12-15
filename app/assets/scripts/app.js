function isElementInView(el) {
	if (typeof jQuery === "function" && el instanceof jQuery) {
		el = el[0];
	}

	var react = el.getBoundingClientRect();
	return (
		react.top >= 0 &&
		react.left >= 0 &&
	    react.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
	    react.right <= (window.innerWidth || document.documentElement.clientWidth)
	)
}

var items = document.querySelectorAll('.timeline__list');

function callBackFun() {
	for(var i = 0; i < items.length; i++){
		if (isElementInView(items[i])){
			items[i].classList.add("in-view");
		}
	}
}

window.addEventListener("load", callBackFun);
window.addEventListener("scroll", callBackFun);


