	current=1; // defines which menu is selected
	stopnow=false; // boolean value used in order to prevent unwanted left menu behavior


	// function used to show dropdown menu designed by a value ( param )
	// it also closes the previously opened menu 
	function menuMgt(param){
		obj = document.getElementById('menu'+current);
		obj.className="menu"; // hilights red menu object
		
		if ( current != 'H'){	
		menu = document.getElementById("dm_"+current);
		menu.style.visibility='hidden';	
		}
		if ( param != 'H'){
		objX = document.getElementById('menu'+param).offsetLeft ;
		menu = document.getElementById("dm_"+param);
		if(document.body.offsetWidth>=1000) {width=document.body.offsetWidth }else {width=1000;}
		menu.style.left = (width-1000)/2 +9 +objX+"px";		
		menu.style.visibility='visible';
		current = param;
		obj = document.getElementById('menu'+current);
		obj.className="menuOn";
		}
	}

  // prevents unwanted behavior
  function nocall(){
	 stopnow=true;
  }
 
 

 
function activateMenu(){
	for(var a=0;a<arguments.length;a++) {	
		obj = document.getElementById(arguments[a]);
		if (obj.className =='hiddensubmenu'){
			obj.className = 'visiblesubmenu';
		} else{
			obj.className = new String(obj.className).replace("close","open");			
		}	
	} 
 }
 
 
  //closes opened dropdown menu
  function closedrop(){
	  if( current!='H'){
  		menu = document.getElementById("dm_"+current);
		menu.style.visibility='hidden';
	  }
		obj = document.getElementById('menu'+current);
		obj.className="menu";
  }


function setActiveStyleSheet(title) { // define the active stylesheet.
   var i, a, main;
   for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
     if(a.getAttribute("rel").indexOf("style") != -1
        && a.getAttribute("title")) {
       a.disabled = true;
       if(a.getAttribute("title") == title) {
	   		a.disabled = false;
	   		setCookie('fblfs',title,3600000,'/');
	   }
     }
   }
}




function checkfontsize(){
	var fsize = retrieveCookie('fblfs');
	if (fsize == null){
		setCookie('fblfs','normal',3600000,'/');
		}else{
		setActiveStyleSheet(fsize);
		}
}

function retrieveCookie( cookieName ) {

	/* retrieved in the format
	cookieName4=value; cookieName3=value; cookieName2=value; cookieName1=value
	only cookies for this domain and path will be retrieved */
	var cookieJar = document.cookie.split( "; " );
	for( var x = 0; x < cookieJar.length; x++ ) {
		var oneCookie = cookieJar[x].split( "=" );
		if( oneCookie[0] == escape( cookieName ) ) { return unescape( oneCookie[1] ); }
	}
	return null;
}

function setCookie( cookieName, cookieValue, lifeTime, path, domain, isSecure ) {

	if( !cookieName ) { return false; }
	if( lifeTime == "delete" ) { lifeTime = -10; } //this is in the past. Expires immediately.
	/* This next line sets the cookie but does not overwrite other cookies.
	syntax: cookieName=cookieValue[;expires=dataAsString[;path=pathAsString[;domain=domainAsString[;secure]]]]
	Because of the way that document.cookie behaves, writing this here is equivalent to writing
	document.cookie = whatIAmWritingNow + "; " + document.cookie; */
	document.cookie = escape( cookieName ) + "=" + escape( cookieValue ) +
		( lifeTime ? ";expires=" + ( new Date( ( new Date() ).getTime() + ( 1000 * lifeTime ) ) ).toGMTString() : "" ) +
		( path ? ";path=" + path : "") + ( domain ? ";domain=" + domain : "") + 
		( isSecure ? ";secure" : "");
	//check if the cookie has been set/deleted as required
	if( lifeTime < 0 ) { if( typeof( retrieveCookie( cookieName ) ) == "string" ) { return false; } return true; }
	if( typeof( retrieveCookie( cookieName ) ) == "string" ) { return true; } return false;
}

function setSessionCookie (cookieName, cookieValue) {
    document.cookie = escape(cookieName) + "=" + escape(cookieValue) + "; path=/";
}

function switchlanguage(lc){
	setlanguage(lc);
	window.location.href = tUrls[lc];
}

function setlanguage(lang){
	var expirationDate = 1000*60*60*24*365;
	setCookie('fbllc',lang,expirationDate,'/');
}


function checkLanguage(){ 
	cl = getLanguage();
	if (cl != docLanguage){switchlanguage(cl)}
}

function getLanguage(){
	var cookieLang = retrieveCookie('fbllc');
	if(cookieLang==null){return "fr";}else return cookieLang;
	//	if(cookieLang.toLowerCase()=='fr')return 'fr';
	//	if(cookieLang.toLowerCase()=='en')return "en";
	//	if(cookieLang.toLowerCase()=='de')return "de";
	//	if(cookieLang.toLowerCase()=='nl')return "nl";
	//}
	// default language will be english
	
}

//documentWidth  =document.body.offsetWidth/2+document.body.scrollLeft-20;
//documentHeight =document.body.offsetHeight/2+document.body.scrollTop-20;}

var frameWidth = 0, frameHeight = 0, offsetX = 0, offsetY = 0;
var largeur = 0, hauteur = 0;
// set the correct sizes of the user screen;
function getAreaSize(){
		if( typeof( window.innerWidth ) == 'number' ) {
		  largeur = window.innerWidth; //ffox
		  hauteur = window.innerHeight;
		  offsetX = window.pageXOffset;
		  offsetY = window.pageYOffset; 
		  } 
		else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
		  largeur = document.documentElement.clientWidth;
		  hauteur = document.documentElement.clientHeight;
		  offsetX = document.body.scrollLeft;
		  offsetY = document.body.scrollTop; 
		  } 
		else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
		  largeur = document.body.clientWidth;
		  hauteur = document.body.clientHeight;
		  }
		else {
		  largeur = -1;
		  hauteur = -1;
		  offsetX = -1;
		  offsetY = -1;
		  } 
}

//window.pageXOffset
//window.pageYOffset
// function called by the included application 
function resizeFrame(x,y){
	obj = document.getElementById('app');
	obj.style.width=x+'px';
	obj.height=y;

	obj = document.getElementById('headerbar');	
	obj.style.width=x+'px';


	obj = document.getElementById('AppContainer');
	obj.width=x;
	obj.height=y;
	frameWidth = parseInt(x); 	
	frameHeight = parseInt(y);
	moveframe();
	
}

// function called when window is resized : application is centered back
function moveframe(){
	getAreaSize();
	document.getElementById('AppContainer').style.left =  offsetX + parseInt((largeur-frameWidth)/2)+'px';	
	document.getElementById('AppContainer').style.top =  offsetY + parseInt((hauteur-frameHeight)/2)+'px';
	obj=document.getElementById('appmasker');
	obj.style.width=largeur+'px';
	obj.style.height=document.getElementById('bottomgreybar').offsetTop+'px';	
}

// show application with 'url' as parameter.
function displayAPP(url,winL,winH) {

	if(url.indexOf("/appsecure/") != -1) {
		/* Rewrite host absolute url  to absolute url */
		var tmpUrl = window.location.href;
		var regex = new RegExp("http[s]?://([a-zA-Z.]*)/(.*)", "g");
		var tokens = regex.exec(tmpUrl);
		if(tokens) {
				url = "https://" + tokens[1] + url;
		}
	}

//winL = 500; // window width definition, temporary
//winH = 300; // window height definition, temporary
posx = (screen.width - winL)/2;
posy = (screen.height - winH)/2;
//x  = window.open(url,"win1","width="+winL+",height="+winH+",left="+posx+",top="+posy+",toolbar=no,status=no,scrollbars=no,menubar=no");

	
	getAreaSize();
	obj=document.getElementById('appmasker');
	obj.style.visibility='visible';
	obj.style.display='block';
	obj.style.width=largeur+'px';
	obj.style.height=hauteur+'px';		
	obj=document.getElementById('AppContainer');
	obj.style.visibility='visible';
	obj.style.display='block';
	obj = document.getElementById('app');
	obj.src = url;	
	

}

//close displayed application ( called by the application itself
function closeAPP(){
	obj=document.getElementById('AppContainer');
	obj.style.visibility='hidden';
	obj.style.display='none';
	obj = document.getElementById('app');
	obj.src = '';
	obj=document.getElementById('appmasker');
	obj.style.visibility='hidden';
	obj.style.display='none';
}




function menuonoff(obj1,id2)
{	
	obj = document.getElementById(id2);
	if (obj1.className == 'level1'){
		obj.className = 'menuopen';
		obj1.className ='level1open';
	}else{
		obj.className = 'menuclosed';
		obj1.className ='level1';
	}
}

function storemenucontext(menu,line){
	setSessionCookie('spcm',menu);
	setSessionCookie('spcml',line);
}

function getmenucontext(){
	var menu = retrieveCookie('spcm');
	var line = retrieveCookie('spcml');
	if (menu == null ) menu = "0";
	if (line == null ) line = "0";
	if ( menu != "0" ) {
		obj = document.getElementById('levelid'+menu);
		obj.className = 'level1open';
		obj = document.getElementById('sub'+menu);
		obj.className ='menuopen';
		obj = document.getElementById(line);
		
		obj.className =obj.className + 'selected';
	}
}	

window.onload=function init(){checkfontsize();};

window.onresize = function dep(){moveframe();}


function getGAID(){
	var cookieLang = retrieveCookie('fbllc');
	if(cookieLang){
		if(cookieLang.toLowerCase()=='fr') return "&GAID=9631";
		if(cookieLang.toLowerCase()=='en') return "&GAID=9632";
		if(cookieLang.toLowerCase()=='de') return "&GAID=12246";			
	}
	return "&GAID=9631";
	
}

/* ajax code */

function sack(file) {
	this.xmlhttp = null;



	this.resetData = function() {
		this.method = "POST";
  		this.queryStringSeparator = "?";
		this.argumentSeparator = "&";
		this.URLString = "";
		this.encodeURIString = true;
  		this.execute = false;
  		this.element = null;
		this.elementObj = null;
		this.requestFile = file;
		this.vars = new Object();
		this.responseStatus = new Array(2);
  	};



	this.resetFunctions = function() {
  		this.onLoading = function() { };
  		this.onLoaded = function() { };
  		this.onInteractive = function() { };
  		this.onCompletion = function() { };
  		this.onError = function() { };
		this.onFail = function() { };
	};



	this.reset = function() {
		this.resetFunctions();
		this.resetData();
	};

	this.createAJAX = function() {
		try {
			this.xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e1) {
			try {
				this.xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e2) {
				this.xmlhttp = null;
			}
		}

		if (! this.xmlhttp) {
			if (typeof XMLHttpRequest != "undefined") {
				this.xmlhttp = new XMLHttpRequest();
			} else {
				this.failed = true;
			}
		}
	};


	this.setVar = function(name, value){
		this.vars[name] = Array(value, false);
	};



	this.encVar = function(name, value, returnvars) {
		if (true == returnvars) {
			return Array(encodeURIComponent(name), encodeURIComponent(value));
		} else {
			this.vars[encodeURIComponent(name)] = Array(encodeURIComponent(value), true);

		}

	}



	this.processURLString = function(string, encode) {

		encoded = encodeURIComponent(this.argumentSeparator);

		regexp = new RegExp(this.argumentSeparator + "|" + encoded);

		varArray = string.split(regexp);

		for (i = 0; i < varArray.length; i++){

			urlVars = varArray[i].split("=");

			if (true == encode){

				this.encVar(urlVars[0], urlVars[1]);

			} else {

				this.setVar(urlVars[0], urlVars[1]);

			}

		}

	}



	this.createURLString = function(urlstring) {

		if (this.encodeURIString && this.URLString.length) {

			this.processURLString(this.URLString, true);

		}



		if (urlstring) {

			if (this.URLString.length) {

				this.URLString += this.argumentSeparator + urlstring;

			} else {

				this.URLString = urlstring;

			}

		}



		// prevents caching of URLString

		this.setVar("rndval", new Date().getTime());



		urlstringtemp = new Array();

		for (key in this.vars) {

			if (false == this.vars[key][1] && true == this.encodeURIString) {

				encoded = this.encVar(key, this.vars[key][0], true);

				delete this.vars[key];

				this.vars[encoded[0]] = Array(encoded[1], true);

				key = encoded[0];

			}



			urlstringtemp[urlstringtemp.length] = key + "=" + this.vars[key][0];

		}

		if (urlstring){

			this.URLString += this.argumentSeparator + urlstringtemp.join(this.argumentSeparator);

		} else {

			this.URLString += urlstringtemp.join(this.argumentSeparator);

		}

	}



	this.runResponse = function() {

		eval(this.response);

	}



	this.runAJAX = function(urlstring) {

		if (this.failed) {

			this.onFail();

		} else {

			this.createURLString(urlstring);

			if (this.element) {

				this.elementObj = document.getElementById(this.element);

			}

			if (this.xmlhttp) {

				var self = this;

				if (this.method == "GET") {

					totalurlstring = this.requestFile + this.queryStringSeparator + this.URLString;

					this.xmlhttp.open(this.method, totalurlstring, true);

				} else {

					this.xmlhttp.open(this.method, this.requestFile, true);

					try {

						this.xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")

					} catch (e) { }

				}



				this.xmlhttp.onreadystatechange = function() {

					switch (self.xmlhttp.readyState) {

						case 1:

							self.onLoading();

							break;

						case 2:

							self.onLoaded();

							break;

						case 3:

							self.onInteractive();

							break;

						case 4:

							self.response = self.xmlhttp.responseText;

							self.responseXML = self.xmlhttp.responseXML;

							self.responseStatus[0] = self.xmlhttp.status;

							self.responseStatus[1] = self.xmlhttp.statusText;



							if (self.execute) {

								self.runResponse();

							}



							if (self.elementObj) {

								elemNodeName = self.elementObj.nodeName;

								elemNodeName.toLowerCase();

								if (elemNodeName == "input"

								|| elemNodeName == "select"

								|| elemNodeName == "option"

								|| elemNodeName == "textarea") {

									self.elementObj.value = self.response;

								} else {

									self.elementObj.innerHTML = self.response;

								}

							}

							if (self.responseStatus[0] == "200") {

								self.onCompletion();

							} else {

								self.onError();

							}



							self.URLString = "";

							break;

					}

				};



				this.xmlhttp.send(this.URLString);

			}

		}

	};



	this.reset();

	this.createAJAX();

}

function callParent(url){
parent.parent.location.href = url;
}

function showdisclaimer(cd){
	var t = {en:"bank",fr:"banque",de:"bank",nl:"bank"}
	disurl = "/"+cd+'/'+t[cd]+'/pages-techniques-2/disclaimer.htm';
	disclaimer = window.open(disurl,"Disclaimer","width=700px,height=600px");
}