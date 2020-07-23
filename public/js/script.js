/***** | QUERRYSELECTOR | *****/
var menuNavigation = document.querySelector("#menuNavigation");
var sidebarHamburgerBody = document.querySelector("#sidebarHamburgerBody");
var boutonHamburger = document.querySelector("#boutonHamburger");
var hamburgerOverlay = document.querySelector("#hamburgerOverlay");
var activatedClass = 'hamburgerActivated';


/***************** | Fonctions | **********************/

/***** | Menu Hamburger | *****/
/** La manoeuvre suivante permet d'avoir le contenu du menu accessible, dans la sidebar. **/
sidebarHamburgerBody.innerHTML = menuNavigation.innerHTML;



boutonHamburger.addEventListener('click', function(e) {
	e.preventDefault();	
	this.parentNode.classList.add(activatedClass);
})


hamburgerOverlay.addEventListener('keydown', function(e) {
	if(this.parentNode.classList.contains(activatedClass))
	{
		if(e.repeat === false && e.wich ===27)
		this.parentNode.classList.remove(activatedClass);
	}
})
hamburgerOverlay.addEventListener('click', function(e) {
	e.preventDefault();	
	this.parentNode.classList.remove(activatedClass);
})