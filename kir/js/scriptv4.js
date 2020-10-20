function openPopup(e, href, after=null){
	if (e) {
		e.preventDefault();
	}
	var popup = document.getElementById(href);
	if (!popup) {
		return;
	}
	document.body.classList.add('poped');
	popup.style.display = 'block';
	var close = popup.getElementsByClassName('close');
	function closePopup(e){
		e.preventDefault();
		popup.style.display = 'none';
		document.body.classList.remove('poped');
		if (after) {
			after();
		}
		this.removeEventListener('click', closePopup);
	}
	for (var i = 0; i < close.length; i++) {
		close[i].addEventListener('click', closePopup);
	}
	function closePopup2(e){
		if (e.target === this) {
			popup.style.display = 'none';
			document.body.classList.remove('poped');
			if (after) {
				after();
			}
			this.removeEventListener('click', closePopup2);
		}
	}
	popup.addEventListener('click', closePopup2);
}
var links = document.getElementsByTagName('a');
for (var i = 0; i < links.length; i++) {
	var href = links[i].attributes.href.value;
	if (href.length > 1 && href.indexOf('#') === 0) {
  	links[i].addEventListener('click', function(e){
			openPopup(e, this.attributes.href.value.replace('#', ''));
		});
	}
}
