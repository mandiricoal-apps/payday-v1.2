	var myVar;
	function loader() {
		myVar = setTimeout(display, 100);
	}
	function display() {
		document.getElementById("loaderhome").style.display = "none";
		document.getElementById("myhome").style.display = "block";
	}