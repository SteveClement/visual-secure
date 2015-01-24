var mips_registeredEvents = new Array();

function MipsEvent(eventType, fnction) {
	this.fnction = fnction;
	this.eventType = eventType.toLowerCase();
}

window.mipsRegisterEvent = function (eventType, fnction) {
	var fnt;
	if (typeof(fnction)=="function") 
		fnt = fnction;
	else if (typeof(fnction)=="string")
		fnt = new Function(fnction);
	else {
		alert("could only register function !!!");
		return null;
	}
	mips_registeredEvents[mips_registeredEvents.length] = new MipsEvent(eventType, fnt);
};

function callMipsEvents(eventType) {
	for (i = 0; i < mips_registeredEvents.length; i++) {
		var mipsEvent = mips_registeredEvents[i];
		if (eventType == mipsEvent.eventType) {
			mipsEvent.fnction();
		}
	}
}

window.onload = new Function("window.callMipsEvents('onload')");
window.onunload = new Function("window.callMipsEvents('onunload')");