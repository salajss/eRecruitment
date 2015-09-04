function show(showLayerID)
{
	if(gbi(showLayerID).style.display=='none')
	{gbi(showLayerID).style.display='block';}
	else
	{gbi(showLayerID).style.display='none';}
}
function chgContent(content1, content2, layerid)
{
	if(gbi(layerid).innerHTML==content1)
	{gbi(layerid).innerHTML=content2;}
	else
	{gbi(layerid).innerHTML=content1;}
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

var myWin='';
var content=0;
var idfield=0;
var iframeH=10;

function delayedTooltip(text, ele) {
    setTimeout(function() {tooltip(text,ele)}, 200);
}

function tooltip(content, idObj, leftStart, showForOther) {
  try{
    var elementId = idObj;
    if (typeof showForOther == 'undefined' )
      showForOther = false;
    var showTooltip = true;
    if(typeof(idObj)!='object')
    idObj=gbi(idObj);
    var objType = idObj.type.toLowerCase();
    switch(objType)
    {
      case 'text':
      case 'password':
      case 'textarea':
        if ( idObj.value.trim().length > 0 && (elementId != 'inpcityContainerDD' && elementId != 'inpindContainerDD' && elementId != 'inpfAreaContainerDD'))
          showTooltip = false;
        break;
      case 'select-one': if((idObj.value != -1 || idObj.selectedIndex > 0) && !showForOther)
                           showTooltip = false;
                         break;
    }
    if ( !showTooltip)
      return;
    if(document.getElementById('hintbox'))
    {}
    else
    {
      var div1=document.createElement('div');
      div1.id='hintbox';
      div1.setAttribute('visibility', 'hidden');
      var div2=document.createElement('div');
      div2.id='new_';
      div1.appendChild(div2);
      var div3=document.createElement('div');
      div3.id='toolFrame';
      div3.setAttribute('visibility', 'hidden');
      var iframe1=document.createElement('iframe');
      iframe1.id='iframeTool';
      iframe1.className='framecss';
      div3.appendChild(iframe1);
      var bodyOBJ=document.getElementsByTagName('body');
      bodyOBJ[0].appendChild(div1);
      bodyOBJ[0].appendChild(div3);
    }
    var curleft = 0, curtop = 0;
    obj=idObj;
    if (obj.offsetParent) {
      curleft = obj.offsetLeft
        curtop = obj.offsetTop
        while (obj = obj.offsetParent) {
          curleft += obj.offsetLeft
            curtop += obj.offsetTop
        }
    }
    var obj2=document.getElementById('hintbox');
    var objFrame=document.getElementById('toolFrame');
    obj2.style.top=objFrame.style.top=curtop-4+"px";
    var leftStart1=0;
    if(leftStart)
      leftStart1=leftStart;
    else
      leftStart1=idObj.offsetWidth;
    obj2.style.left=objFrame.style.left=parseInt(leftStart1)+curleft+"px";
    obj1=document.getElementById('new_');
    obj1.innerHTML="<div id='forarrow'><img src='"+Images_Path_Jobseeker+"/spacer.gif' alt=''></div>"+content;
    obj2.style.visibility=objFrame.style.visibility='visible';
    content=content;
    obj=idObj
      document.getElementById('iframeTool').height=obj2.offsetHeight+"px";
  } catch(e) { alert("idObj : " + idObj +"\nError : " + e + "\nDescription : " + e.description); }
}
function hidetip(){
if(document.getElementById("hintbox"))
{
    dropmenuobj=document.getElementById("hintbox")
    dropmenuFrame=document.getElementById("toolFrame")
    dropmenuobj.style.visibility=dropmenuFrame.style.visibility="hidden"
    dropmenuobj.style.left=dropmenuFrame.style.left="-500px"
}
}

// JavaScript Domain AutoSuggestion
function autoSuggestControl(oTextbox,oProvider) {
    this.cur= -1;//int for initial
    this.layer = null;//The dropdown list layer
    this.provider= oProvider;//SuggestionProvider
    this.textbox = oTextbox;//HTMLInputElement
    this.init();//initialize the control
}
autoSuggestControl.prototype.autosuggest = function (aSuggestions,bTypeAhead,firstValue) {
       if (aSuggestions.length > 0) {
		   if (bTypeAhead) {this.typeAhead(aSuggestions[0], firstValue);}       
       this.showSuggestions(aSuggestions);
    } else {this.hideSuggestions();}
};
// Creates the dropdown layer to display multiple suggestions.
autoSuggestControl.prototype.createDropDown = function () {
    var oThis = this;
    this.layer = document.createElement("div");
    this.layer.className = "suggestions";
	this.layer.style.visibility = "hidden";
    this.layer.style.width = this.textbox.offsetWidth+"px";
	//when the user clicks on the a suggestion, get the text (innerHTML) and place it into a textbox
    this.layer.onmousedown = this.layer.onmouseup = this.layer.onmouseover = function (oEvent) {
        oEvent = oEvent || window.event;
        oTarget = oEvent.target || oEvent.srcElement;
        if (oEvent.type == "mousedown") {
			var get2Value=(oThis.textbox.value).split('@');
			 oThis.textbox.value =get2Value[0]+'@'+oTarget.firstChild.nodeValue;			 
            oThis.hideSuggestions();
        } else if (oEvent.type == "mouseover") { oThis.highlightSuggestion(oTarget);} 
		else {
			oThis.textbox.focus();			
			}
    };    
    document.body.appendChild(this.layer);
};
//return The left coordinate of the textbox in pixels.
autoSuggestControl.prototype.getLeft = function (){
    var oNode = this.textbox;
    var iLeft = 0;    
   iLeft=oNode.offsetLeft;
  while(oNode= oNode.offsetParent){iLeft += oNode.offsetLeft;}
  return iLeft;
};
//return The top coordinate of the textbox in pixels.
autoSuggestControl.prototype.getTop = function (){
    var oNode = this.textbox;
    var iTop = 0;    
    iTop = oNode.offsetTop;
    while(oNode = oNode.offsetParent){iTop += oNode.offsetTop;}
    return iTop;
};
//Handles three keydown events.
autoSuggestControl.prototype.handleKeyDown = function (oEvent) {
        this.textbox.className="";
	var get2Value=(this.textbox.value).split('@');
switch(oEvent.keyCode) {
        case 38: //up arrow
            this.previousSuggestion(get2Value[0]+'@');
            break;
		case 39: //right arrow 
			var getCurVal=getpositionCursor();
		   if(get2Value[0].length<getCurVal){
		    this.cur=-1
			this.currentSuggestion(get2Value[0]+'@');
		   }
		   break;
        case 40: //down arrow
            this.nextSuggestion(get2Value[0]+'@');
            break;
        case 13: //enter		
           this.hideSuggestions();
		   return false;
		   	break;			
			}
};

// Handles keyup events.
autoSuggestControl.prototype.handleKeyUp = function (oEvent) {
    var iKeyCode = oEvent.keyCode;
    //for backspace (8) and delete (46), shows suggestions without typeahead
    if (iKeyCode == 8 || iKeyCode == 46) {
        this.provider.requestSuggestions(this, false);        
    //make sure not to interfere with non-character keys
    } else if (iKeyCode < 32 || (iKeyCode >= 33 && iKeyCode < 46) || (iKeyCode >= 112 && iKeyCode <= 123)) {//ignore
	} else {
        //request suggestions from the suggestion provider with typeahead
        this.provider.requestSuggestions(this, true);
    }
};
//Hides the suggestion dropdown.
autoSuggestControl.prototype.hideSuggestions = function () {
    this.layer.style.visibility = "hidden";
	this.layer.innerHTML="";
	document.getElementById("txt2").value="";
};
// Highlights the given node in the suggestions dropdown.
autoSuggestControl.prototype.highlightSuggestion = function (oSuggestionNode) {    
    for (var i=0; i < this.layer.childNodes.length; i++) {
		 var oNode = this.layer.childNodes[i];
		if (oNode == oSuggestionNode) {			
            oNode.className = "current"
        } else if (oNode.className == "current") {
            oNode.className = "";
        }
		}
};
//Initializes the textbox with event handlers for auto suggest functionality.

function getpositionCursor()
    {
        var oField=document.getElementById("email");
       // Initialize
     var iCaretPos = 0;
     // IE Support
     if (document.selection) { 
       // Set focus on the element
       oField.focus ();
       // To get cursor position, get empty selection range
       var oSel = document.selection.createRange ();
       // Move selection start to 0 position
       oSel.moveStart ('character', -oField.value.length);
       // The caret position is selection length
       iCaretPos = oSel.text.length;
     }
     // Firefox support
     else if (oField.selectionStart || oField.selectionStart == '0')
       iCaretPos = oField.selectionStart;
     // Return results
     return (iCaretPos);
}

function setpositionCursor(pos)
{
var ctrl=document.getElementById("email");
    if(ctrl.setSelectionRange)
    {
        ctrl.focus();
        ctrl.setSelectionRange(pos,pos);
    }
    else if (ctrl.createTextRange) {
        var range = ctrl.createTextRange();
        range.collapse(true);
        range.moveEnd('character', pos);
        range.moveStart('character', pos);
        range.select();
    }
}

autoSuggestControl.prototype.init = function () {
	//save a reference to this object
    var oThis = this;
    //assign the onkeyup event handler
    this.textbox.onkeyup = function (oEvent) {
		var regat=/\@[A-Z,0-9,a-z]{1}/;
	var getValue=this.value;
	var getCurVal=getpositionCursor();
	//alert(getCurVal)
	var getValueat=getValue.indexOf('@');
	if(getValueat>=getCurVal){
		if(!regat.test(getValue)){
			oThis.hideSuggestions();
			return false;
		}
	}
	
  //check for the proper location of the event object
        if (!oEvent) {
            oEvent = window.event;
        }         
        //call the handleKeyUp() method with the event object
        oThis.handleKeyUp(oEvent);
    };    
    //assign onblur event handler (hides suggestions)    
    function blurHide() { 
       oThis.hideSuggestions();
    };   
	var objTxtN=this.textbox;
	if(objTxtN.addEventListener){
	objTxtN.addEventListener("blur", blurHide, false);}
	else
	{objTxtN.attachEvent("onblur", blurHide);}	
    //create the suggestions dropdown
    this.createDropDown();
    //assign onkeydown event handler
    this.textbox.onkeydown = function (oEvent) {
        //check for the proper location of the event object
        if (!oEvent) {
            oEvent = window.event;
        }
        //call the handleKeyDown() method with the event object
		if(oThis.layer.style.visibility=='visible')
        return oThis.handleKeyDown(oEvent);
		else
		oThis.handleKeyDown(oEvent);
    };
};
//Highlights the next suggestion in the dropdown and places the suggestion into the textbox.
autoSuggestControl.prototype.nextSuggestion = function (get2Value) {
   var cSuggestionNodes = this.layer.childNodes;  
	  if (cSuggestionNodes.length > 0 && this.cur < cSuggestionNodes.length-1) {
        var oNode = cSuggestionNodes[++this.cur];
        this.highlightSuggestion(oNode);
		//document.getElementById('txt2').value=get2Value+oNode.firstChild.nodeValue;
		document.getElementById('txt2').value="";
        this.textbox.value = get2Value+oNode.firstChild.nodeValue;		
   }
	else if(cSuggestionNodes.length > 0){
	 this.cur=-1;
	 var oNode = cSuggestionNodes[++this.cur];
        this.highlightSuggestion(oNode);
		document.getElementById('txt2').value=""
		//document.getElementById('txt2').value=get2Value+oNode.firstChild.nodeValue;
        this.textbox.value = get2Value+oNode.firstChild.nodeValue;
	}  
};
//for current suggestion
autoSuggestControl.prototype.currentSuggestion = function (get2Value) {
  var cSuggestionNodes = this.layer.childNodes;
try{
  if(this.cur==-1){
	  ++this.cur;
	 this.textbox.value = get2Value+this.layer.childNodes[0].childNodes[0].nodeValue;
	 this.hideSuggestions()
	  }
  else if (cSuggestionNodes.length > 0){	  
	  this.hideSuggestions()
	  }
}
catch(e){}  
};
// Highlights the previous suggestion in the dropdown and  places the suggestion into the textbox.
autoSuggestControl.prototype.previousSuggestion = function (get2Value) {
   var cSuggestionNodes = this.layer.childNodes;
 this.cur--;
    if (cSuggestionNodes.length > 0 && this.cur > -1) {		
        var oNode = cSuggestionNodes[this.cur];
        this.highlightSuggestion(oNode);
		document.getElementById('txt2').value=""
		//document.getElementById('txt2').value=get2Value+oNode.firstChild.nodeValue;
        this.textbox.value = get2Value+oNode.firstChild.nodeValue; 		
   }
   else if(cSuggestionNodes.length > 0){
   this.cur=cSuggestionNodes.length-1;
           var oNode = cSuggestionNodes[this.cur];
        this.highlightSuggestion(oNode);
		document.getElementById('txt2').value=""
		//document.getElementById('txt2').value=get2Value+oNode.firstChild.nodeValue;
        this.textbox.value = get2Value+oNode.firstChild.nodeValue; 
		}
};
// Selects a range of text in the textbox.
autoSuggestControl.prototype.selectRange = function (iStart, iLength) {
}; 
//Builds the suggestion layer contents, moves it into position,and displays the layer.
autoSuggestControl.prototype.showSuggestions = function (aSuggestions /*:Array*/) {    
    var oDiv = null;
    this.layer.innerHTML = "";  //clear contents of the layer
	var get3Value=(this.textbox.value).split('@');    
    for (var i=0; i < aSuggestions.length; i++) {
        oDiv = document.createElement("div");
        oDiv.appendChild(document.createTextNode(aSuggestions[i]));
		this.layer.appendChild(oDiv);		
    }    
    this.layer.style.left = this.getLeft() + "px";	
    this.layer.style.top = (this.getTop()+this.textbox.offsetHeight) + "px";
    this.layer.style.visibility = "visible";
	document.getElementById("txt2").value=get3Value[0]+'@'+this.layer.childNodes[0].childNodes[0].nodeValue;
};
//Inserts a suggestion into the textbox, highlighting the  suggested part of the text.
autoSuggestControl.prototype.typeAhead = function (sSuggestion,firstValue) {
var cont=document.getElementById('txt2');cont.value="";
    //check for support of typeahead functionality
    if (this.textbox.createTextRange || this.textbox.setSelectionRange){
		var getCurPos=getpositionCursor();
		var getFullValue=this.textbox.value;
		var getFullSplit=getFullValue.split('@');
		this.textbox.value=getFullSplit[0]+'@'+getFullSplit[1].toLowerCase();
		setpositionCursor(getCurPos);
        var iLen = this.textbox.value.length;
		cont.value=firstValue+"@"+sSuggestion;
		this.selectRange(iLen, cont.value.length)
    }
};

/*=========================================================================================================
Now writing a function for domain name which will be appered ater @+ one letter
===============================================================================================================*/
function domainSuggestions() {
    this.domain = [
"gmail.com","yahoo.com","rediffmail.com","yahoo.co.in","yahoo.in","hotmail.com","ymail.com","rediff.com","rocketmail.com","live.com","in.com","sify.com"];
}
//Request suggestions for the given autosuggest control. 
domainSuggestions.prototype.requestSuggestions = function (oAutoSuggestControl,bTypeAhead) {
    var aSuggestions = [];
		var get2Value=(oAutoSuggestControl.textbox.value).split('@');// split the matched value in tow part
    	var sTextboxValue = get2Value[1];
	try{
    if (sTextboxValue.length > 0){    
        //search for matching domain
        for (var i=0; i < this.domain.length; i++) { 
            if (this.domain[i].indexOf(sTextboxValue.toLowerCase()) == 0) {
				aSuggestions.push(this.domain[i]);
            } 
        }
    }
	}
	catch(e){}
    //provide suggestions to the control
	oAutoSuggestControl.autosuggest(aSuggestions, bTypeAhead, get2Value[0]);	
};

//*! Page 2 Split
function validateEducationDetail() {
    var ugcourse = document.getElementById("ugcourse");
    var pgcourse = document.getElementById("pgcourse");
    var pginst = document.getElementById("pginst");
    var pgyear = document.getElementById("pgyear");
    var ppgcourse = document.getElementById("ppgcourse");
    var ppginst = document.getElementById("ppginst");
    var ppgyear = document.getElementById("ppgyear");

    hideErrorCSS('ugcourse','error_ugcourse','status_ugcourse','lbl_ugcourse');
    hideErrorCSS('ougcourse','error_ugcourse','status_ougcourse','lbl_ugcourse');
    hideErrorCSS('ugspec','error_ugspec','status_ugspec','lbl_ugspec');
    hideErrorCSS('ougspec','error_ugspec','status_ugspec','lbl_ugspec');
    hideErrorCSS('uginst','error_uginst','status_uginst','lbl_uginst');
    hideErrorCSS('ouginst','error_uginst','status_ouginst','lbl_uginst');
    hideErrorCSS('ugyear','error_ugyear','status_ugyear','lbl_ugyear');
    if (1) {//isPG
        hideErrorCSS('pgcourse','error_pgcourse','status_pgcourse','lbl_pgcourse');
        hideErrorCSS('opgcourse','error_pgcourse','status_opgcourse','lbl_pgcourse');
        hideErrorCSS('pgspec','error_pgspec','status_pgspec','lbl_pgspec');
        hideErrorCSS('opgspec','error_pgspec','status_pgspec','lbl_pgspec');
        hideErrorCSS('pginst','error_pginst','status_pginst','lbl_pginst');
        hideErrorCSS('opginst','error_pginst','status_opginst','lbl_pginst');
        hideErrorCSS('pgyear','error_pgyear','status_pgyear','lbl_pgyear');
    }
    if (1) {//isPPG
        hideErrorCSS('ppgcourse','error_ppgcourse','status_ppgcourse','lbl_ppgcourse');
        hideErrorCSS('oppgcourse','error_ppgcourse','status_oppgcourse','lbl_ppgcourse');
        hideErrorCSS('ppgspec','error_ppgspec','status_ppgspec','lbl_ppgspec');
        hideErrorCSS('oppgspec','error_ppgspec','status_ppgspec','lbl_ppgspec');
        hideErrorCSS('ppginst','error_ppginst','status_ppginst','lbl_ppginst');
        hideErrorCSS('oppginst','error_ppginst','status_oppginst','lbl_ppginst');
        hideErrorCSS('ppgyear','error_ppgyear','status_ppgyear','lbl_ppgyear');
    }

    v_UGCOURSE(0);
    if (ugcourse.value != not_pursuing_grad) {
        v_UGSPEC(0);
        v_UGINST(0);
        v_UGYEAR(0);

        if (1) {//isPG
            //var validatePPG = (isPPG && (ppgcourse.value != -1 || ppginst.value != -1 || ppgyear.value != -1));
            var validatePPG = (ppgcourse.value != -1 || ppginst.value != -1 || ppgyear.value != -1);
            if (pgcourse.value != -1 || pginst.value != -1 || pgyear.value != -1 || validatePPG) {
                v_PGCOURSE(0);
                v_PGSPEC(0);
                v_PGINST(0);
                v_PGYEAR(0);
            }
            if (validatePPG) {
                v_PPGCOURSE(0);
                v_PPGSPEC(0);
                v_PPGINST(0);
                v_PPGYEAR(0);
            }
        }
    }
}

function AddPgElements() {
    gbi("add_pg").style.display = "none";
    gbi("div_pgeduc").style.display = "";
    gbi("add_ppg").style.display = "" ;
    gbi("pgcourse").focus();
}

function AddPPgElements() {
    gbi("add_ppg").style.display = "none";
    gbi("div_ppgeduc").style.display = "";
    gbi("ppgcourse").focus();
}

