function timeTracker()
{
	this.eleArray = new Array();
	this.startTime = startTime;
	this.endTime = endTime;
	this.endTime1 = endTime1;
}

function startTime(ele)
{
	if(ele.id)
		this.eleArray[ele.id] = (new Date()).getTime();
	else if(ele.name)
		this.eleArray[ele.name] = (new Date()).getTime();
}

function endTime1(ele)
{
	if(this.eleArray[ele.id]) {
		sendGARequest(ele.id, (new Date).getTime() - this.eleArray[ele.id]);
		this.eleArray[ele.id] = 0;
	} else if(this.eleArray[ele.name]) {
		sendGARequest(ele.name, (new Date).getTime() - this.eleArray[ele.name]);
		this.eleArray[ele.name] = 0;
	}
}

function endTime(ele)
{
	if(this.eleArray[ele.id] && this.eleArray[ele.id] != 0 && ele.value != "" && ele.value != null) {
		sendGARequest(ele.id, (new Date).getTime() - this.eleArray[ele.id]);
		this.eleArray[ele.id] = 0;
	} else if(this.eleArray[ele.name] && this.eleArray[ele.name] != 0 && ele.value != "" && ele.value != null) {
		sendGARequest(ele.name, (new Date).getTime() - this.eleArray[ele.name]);
		this.eleArray[ele.name] = 0;
	}

}

function sendGARequest(id, time)
{
	var str = window.parent.location.pathname;
	if(!str) 
		str = window.location.pathname;	

	str = str.substring(str.lastIndexOf('/')+1,str.length);

	_gaq.push(['_trackEvent',str,id,'time spent',time,true]);
}

function sendGARequestCustom(id)
{
	var str = window.parent.location.pathname;
	if(!str) 
		str = window.location.pathname;	

	str = str.substring(str.lastIndexOf('/')+1,str.length);

	_gaq.push(['_trackEvent', str, id, 'Custom Action',1,true]);
}

function addEvent( obj, type, fn ) {
	if (obj.addEventListener) {
		obj.addEventListener( type, fn, false );
		EventCache.add(obj, type, fn);
	}
	else if (obj.attachEvent) {
		obj["e"+type+fn] = fn;
		obj[type+fn] = function() { obj["e"+type+fn]( window.event ); }
		obj.attachEvent( "on"+type, obj[type+fn] );
		EventCache.add(obj, type, fn);
	}
	else {
		obj["on"+type] = obj["e"+type+fn];
	}
}

var EventCache = function(){
	var listEvents = [];
	return {
		listEvents : listEvents,
		add : function(node, sEventName, fHandler){
			listEvents.push(arguments);
		},
		flush : function(){
			var i, item;
			for(i = listEvents.length - 1; i >= 0; i = i - 1){
				item = listEvents[i];
				if(item[0].removeEventListener){
					item[0].removeEventListener(item[1], item[2], item[3]);
				};
				if(item[1].substring(0, 2) != "on"){
					item[1] = "on" + item[1];
				};
				if(item[0].detachEvent){
					item[0].detachEvent(item[1], item[2]);
				};
				item[0][item[1]] = null;
			};
		}
	};
}();

var tracker = new timeTracker();

function ddTime(MutationEvent) 
{
	if (MutationEvent.attrName == 'style' && MutationEvent.target.style.display != "none")
		tracker.startTime(this);
	else if(MutationEvent.attrName == 'style' && MutationEvent.target.style.display == "none")
		tracker.endTime1(this);
}

function ddTime1() 
{
	if (window.event.propertyName == 'style.display' && window.event.srcElement.style.display != "none")
		tracker.startTime(this);
	else if(window.event.propertyName == 'style.display' && window.event.srcElement.style.display == "none")
		tracker.endTime1(this);
}

function gbi(id)
{
	return document.getElementById(id);
}

function unload()
{
	for(i=0;i<window.unloadArray.length;i++) {
		tracker.endTime1(gbi(window.unloadArray[i]));
	}
}

function startTimeTracking(form_id,noTimeTrack,specialTimeTrack,unloadArray)
{
	noTimeTrack = typeof noTimeTrack !== 'undefined' ? noTimeTrack : new Array();
	specialTimeTrack = typeof specialTimeTrack !== 'undefined' ? specialTimeTrack : new Array();
	unloadArray = typeof unloadArray !== 'undefined' ? unloadArray : new Array();
	if (!Array.prototype.indexOf) { 
		Array.prototype.indexOf = function(obj, start) {
			for (var i = (start || 0), j = this.length; i < j; i++) {
				if (this[i] === obj) { return i; }
			}
			return -1;
		}
	}

	var form = document.forms[form_id];
	for(i=0;i<form.length;i++) {
		var ele = form[i];
		if(!ele.type.match('hidden') && !ele.type.match('checkbox') && !ele.type.match('submit') && noTimeTrack.indexOf(ele.id)==-1) {
			addEvent(ele,'focus',function(){tracker.startTime(this)});
			addEvent(ele,'blur',function(){tracker.endTime(this)});
		}
	}

	for(i=0;i<specialTimeTrack.length;i++) {
		addEvent(gbi(specialTimeTrack[i]),"propertychange", ddTime1);
		addEvent(gbi(specialTimeTrack[i]),"DOMAttrModified", ddTime);
	}

	window.unloadArray = unloadArray;
	addEvent(window,'beforeunload',unload);
	addEvent(window,'unload',EventCache.flush);
}
