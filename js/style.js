
function shortcodeRadio() {
    if (document.getElementById('shortcodeCheck').checked) {
        document.getElementById('shortcode').style.display = 'table-row';
        document.getElementById('notice').style.display = 'none';
    }
    else {
    	document.getElementById('notice').style.display = 'table-row';
    	document.getElementById('shortcode').style.display = 'none';
	}

}