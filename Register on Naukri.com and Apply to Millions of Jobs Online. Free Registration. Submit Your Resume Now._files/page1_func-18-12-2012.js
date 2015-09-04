/***********************Functions For New LightBox*************************/
function set_username() {
	gbi("lb_username").value = gbi("email").value;
}
function check_email() {
	if(gbi("email").value != gbi("forgotEmail").value)
		gbi("forgotEmail").value = "";
}
function set_email() {
	var lb_layer1 = gbi("forGotPassword");
	var lb_layer2 = gbi("forGotPasswordEmail");
	var headDiv=lb_layer1.getElementsByTagName('div');
	for(var i=0; i<headDiv.length; i++){
		if(headDiv[i].className=='lHead')
		var head1=headDiv[i]
	}
	var headDiv1=lb_layer2.getElementsByTagName('div');
        for(var i=0; i<headDiv1.length; i++){
                if(headDiv1[i].className=='lHead')
                var head2=headDiv1[i]
        }
	head1.getElementsByTagName("strong")[0].title = gbi("email").value;
	head2.getElementsByTagName("strong")[0].title = gbi("email").value;
	if(gbi("email").value.length > 30) {
		head1.getElementsByTagName("strong")[0].innerHTML = gbi("email").value.substring(0,29)+'...';
		head2.getElementsByTagName("strong")[0].innerHTML = gbi("email").value.substring(0,29)+'...';
	} else {
		head1.getElementsByTagName("strong")[0].innerHTML = gbi("email").value;
		head2.getElementsByTagName("strong")[0].innerHTML = gbi("email").value;
	}
}
/**************************************************************************/
function showFooter() {
   strFooter = strFooter.replace(/###_CONTACT_US_URL_###/g,CONTACT_US_URL);
   strFooter = strFooter.replace(/###_ABOUT_US_URL_###/g,ABOUT_US_URL);
   strFooter = strFooter.replace(/###_FAQ_URL_###/g,FAQ_URL);
   strFooter = strFooter.replace(/###_TNC_URL_###/g,TNC_URL);
   strFooter = strFooter.replace(/###_JOBSEEKER_REPORT_PROBLEM_URL_###/g,JOBSEEKER_REPORT_PROBLEM_URL);
   strFooter = strFooter.replace(/###_PRIVACY_POLICY_URL_###/g,PRIVACY_POLICY_URL);
   strFooter = strFooter.replace(/###_ID_###/g,ID);
   var Y = new Date();
   strFooter = strFooter.replace(/###_DATE_###/g,Y.getFullYear());
   document.getElementById('footer').innerHTML = strFooter;
}

function showFormBefore() {
  strFormBefore = strFormBefore.replace(/###_Images_Path_Resman_###/g,Images_Path_Resman);
  strFormBefore = strFormBefore.replace(/###_Images_Path_Jobseeker_###/g,Images_Path_Jobseeker);
  document.getElementById('formBefore').innerHTML = strFormBefore;
}

function removeOptionIndia() {
  var elSel = document.getElementById('country');
  var i;
  for (i = elSel.length - 1; i>=0; i--) {
    if (elSel.options[i].value=="11") {
      elSel.remove(i);
    }
  }
}

function appendOptionIndia() {
  var elOptNew = document.createElement('option');
  elOptNew.text = "INDIA";
  elOptNew.label = "INDIA";
  elOptNew.innerHTML = "INDIA";
  elOptNew.value = "11";
  var elSel = document.getElementById('country');
  try {
    elSel.add(elOptNew, null);
  }
  catch(ex) {
    elSel.appendChild(elOptNew); 
  }
}

function toggleVisibilities(){
   if(document.getElementById('city_chkbox').checked == true){
      removeOptionIndia();
      document.getElementById('city_chkbox').checked = false;
      document.getElementById('country_chkbox').checked = true;
      document.getElementById('div_city').style.display = 'none';
      document.getElementById('div_country').style.display = 'block';
      document.getElementById('div_otherLoc').style.display = 'block';
      document.getElementById('ocity').style.display = 'block';
      document.getElementById("country").value=-1;
      document.getElementById("city").value=9999;
      document.getElementById('ocity').value="";
      document.getElementById("error_location").innerHTML="Please Type Your City Name in the Text Box.";
      document.getElementById("error_location").style.display='block';
      document.getElementById('country_chkbox').focus();
   }
  else if(document.getElementById('country_chkbox').checked == false) { 
      appendOptionIndia();
      document.getElementById('city_chkbox').checked = false;     
      document.getElementById('country_chkbox').checked = true;     
      document.getElementById('div_city').style.display = 'block';
      document.getElementById('div_country').style.display = 'none';
      document.getElementById('div_otherLoc').style.display = 'none';
      document.getElementById('ocity').value="";
      document.getElementById("error_location").innerHTML="";
      document.getElementById("city").value=-1;
      var selUserArray = new Array('-01');
      cityDD.setter(selUserArray); 		
      document.getElementById("country").value=11;    
      document.getElementById('city_chkbox').focus();
   }
}

function showForm() {
  strFormBefore = strFormBefore.replace(/###_Images_Path_Resman_###/g,Images_Path_Resman);
  strFormBefore = strFormBefore.replace(/###_Images_Path_Jobseeker_###/g,Images_Path_Jobseeker);
  strForm = strForm.replace(/###_USERNAME_###/g,USERNAME);
  strForm = strForm.replace(/###_PASSWORD_###/g,PASSWORD);
  strForm = strForm.replace(/###_CPASSWORD_###/g,CPASSWORD);
  strForm = strForm.replace(/###_CNAME_###/g,CNAME);
  strForm = strForm.replace(/###_EMAIL_###/g,EMAIL);
  strForm = strForm.replace(/###_MPHONE_###/g,MPHONE);
  strForm = strForm.replace(/###_COUNTRYCODE_###/g,COUNTRYCODE);
  strForm = strForm.replace(/###_AREACODE_###/g,AREACODE);
  strForm = strForm.replace(/###_LANDLINE_###/g,LANDLINE);
  strForm = strForm.replace(/###_KEYWORDS_###/g,KEYWORDS);
  strForm = strForm.replace(/###_RESUMEHEADLINE_###/g,RESUMEHEADLINE);
  strForm = strForm.replace(/###_Images_Path_Resman_###/g,Images_Path_Resman);
  strForm = strForm.replace(/###_Images_Path_Jobseeker_###/g,Images_Path_Jobseeker);
  strForm = strForm.replace(/###_OUGCOURSE_###/g,OUGCOURSE);
  strForm = strForm.replace(/###_OPGCOURSE_###/g,OPGCOURSE);
  strForm = strForm.replace(/###_OPPGCOURSE_###/g,OPPGCOURSE);
  strForm = strForm.replace(/###_UPLOADCVPATH_###/g,UPLOADCVPATH);
  strForm = strForm.replace(/###_MAX_DIP_CNT_###/g,MAX_DIP_CNT);
  strForm = strForm.replace(/###_CURR_DIP_CNT_###/g,CURR_DIP_CNT);
  strForm = strForm.replace(/###__RESB_VAR_###/g,RESB_VAR);
  strForm = strForm.replace(/###__RESB_VAL_###/g,RESB_VAL);
  strForm = strForm.replace(/###_OTHERSRCP_###/g,OTHERSRCP);
  strForm = strForm.replace(/###_UNREGID_###/g,UNREGID);
  strForm = strForm.replace(/###_PARSERSUG_###/g,PARSERSUG);
  strForm = strForm.replace(/###_IMPORTSRC_###/g,IMPORTSRC);
  strForm = strForm.replace(/###_IMPORTID_###/g,IMPORTID);
  strForm = strForm.replace(/###_IMPORTS_###/g,IMPORTS);
  strForm = strForm.replace(/###_NAUKRIPREMIUM_###/g,NAUKRIPREMIUM);
  strForm = strForm.replace(/###_sel_INDUSTRY_###/g, sel_INDUSTRY);
  strForm = strForm.replace(/###_sel_FAREA_###/g, sel_FAREA);
  strForm = strForm.replace(/###_sel_CITY_###/g, sel_CITY);
  document.getElementById('form').innerHTML = strForm;
  strRightContainer =  strRightContainer.replace(/###_LOGINURL_###/g,LOGINURL); 
  strRightContainer =  strRightContainer.replace(/###_MNJURL_###/g,MNJURL); 
  document.getElementById('rightContainer').innerHTML = strRightContainer;
  eval(strDDFunction);
}

function showLightBox() {
  strFormBefore = strFormBefore.replace(/###_Images_Path_Resman_###/g,Images_Path_Resman);
  strFormBefore = strFormBefore.replace(/###_Images_Path_Jobseeker_###/g,Images_Path_Jobseeker);
  strEmailLightBox = strEmailLightBox.replace(/###_Images_Path_Resman_###/g,Images_Path_Resman);
  strEmailLightBox = strEmailLightBox.replace(/###_Images_Path_Jobseeker_###/g,Images_Path_Jobseeker);
  document.getElementById('EmailLightbox').innerHTML = strEmailLightBox;
}

function formOnload() {
  eval(strFormload);
}

function pasteRes(){
	gbi('cvLink').innerHTML = "You may also write or copy-paste your resume here.<a href='#' style='width:0px;height:0px;font-size:0px;outline:none;' id='dot_it'>.</a><br /><br /><textarea style='width:320px;' id='txtcv' rows='5' cols='44' name='TEXTCV' onfocus=\"clearTextCV();\" onblur=\"setTextCV();\" onkeydown=\"gbi('txtcv').className=''\"></textarea><br/><br/>Please remember to upload your resume as soon as possible after creating your account. It will make your profile more effective.";
gbi("dot_it").focus();	
	
}

function createdd(Arr, sel_, sel) {
var tmpk1;
var k2 ;
      for(var k1 in Arr) {
      tmpk1 = k1.split("i");
      k2 = tmpk1[1] ;
	if(tmpk1[0] == "a") {
        	tmp = document.createElement("option");
        	tmp.value = k2;
        	tmp.innerHTML = Arr[k1];
        	if(k2==sel_){ tmp.selected = true;document.getElementById("industry").value=Arr[k1]; };	
	} else {
		tmp = document.createElement("optgroup");
		tmp.value = k2;
		tmp.style = "BACKGROUND:#D0E0F1;COLOR:#000";
		tmp.label = Arr[k1];
	}
	sel.appendChild(tmp);
      }
}

function dd(type,sel_val) {
  //*! All are dropdown
  if(type=='expyear') {
    var sel = document.getElementById("expyear");
    var sel_exp=-1;
    if(sel_val != '') sel_exp = sel_val;
    var tmp;
    for(var k1 in EXPYearArr) {
        tmp = document.createElement("option");
        tmp.value = k1;
        tmp.innerHTML = EXPYearArr[k1];
        tmp.label = EXPYearArr[k1];
        tmp.text = EXPYearArr[k1];
        if(k1==sel_exp){ tmp.selected = true;document.getElementById("expyear").value=EXPYearArr[k1]; };
        sel.appendChild(tmp);
    }
  }

  else if(type=='expmonth') {
    var sel = document.getElementById("expmonth");
    var sel_exp=-1;
    if(sel_val != '') sel_exp = sel_val;
    for(var k1 in EXPMonthArr) {
        tmp = document.createElement("option");
        tmp.value = k1;
        tmp.innerHTML = EXPMonthArr[k1];
        tmp.label = EXPMonthArr[k1];
        tmp.text = EXPMonthArr[k1];
        if(k1==sel_exp){ tmp.selected = true;document.getElementById("expmonth").value=EXPMonthArr[k1]; };
        sel.appendChild(tmp);
    }
  }

  else if(type == 'industry') {
	  if (sel_val == '' || sel_val == '-1') {
		  var selUserArray = new Array('-01');
	  } else {
		  var selUserArray = new Array("0"+sel_val);
	  }
	  indDD.setter(selUserArray);
  }

 else if(type == 'farea') {
    if (sel_val == '' || sel_val == '-1') {
       var selUserArray = new Array('-01');
   } else {
       var selUserArray = new Array("0"+sel_val);
   }
   fAreaDD.setter(selUserArray);
  }

  else if(type == 'ppgcourse') {
    var sel = document.getElementById("ppgcourse");
    var sel_ppgcourse=-1;
    if(sel_val != '') sel_ppgcourse = sel_val;
    var tmp;
    tmp = document.createElement("option");
    tmp.value = -1;
    tmp.innerHTML = "Select";
    tmp.label = "Select";
    tmp.text = "Select";
    sel.appendChild(tmp);
      for(var k1 in PPGCourseArr)
      {
        tmp = document.createElement("option");
        tmp.value = k1;
        tmp.innerHTML = PPGCourseArr[k1];
        tmp.label = PPGCourseArr[k1];
        tmp.text = PPGCourseArr[k1];
        if(k1==sel_ppgcourse){ tmp.selected = true;document.getElementById("ppgcourse").value=PPGCourseArr[k1]; };
        sel.appendChild(tmp);
      }
  }
  else if(type == 'pgcourse') {
    var sel = document.getElementById("pgcourse");
    var sel_pgcourse=-1;
    if(sel_val != '') sel_pgcourse = sel_val;
    var tmp;
    tmp = document.createElement("option");
    tmp.value = -1;
    tmp.innerHTML = "Select";
    tmp.label = "Select";
    tmp.text = "Select";
    sel.appendChild(tmp);
    for(var k1 in PGCourseArr) {
      tmp = document.createElement("option");
      tmp.value = k1;
      tmp.innerHTML = PGCourseArr[k1];
      tmp.label = PGCourseArr[k1];
      tmp.text = PGCourseArr[k1];
      if(k1==sel_pgcourse){ tmp.selected = true;document.getElementById("pgcourse").value=PGCourseArr[k1]; };
      sel.appendChild(tmp);
    }

  }
  else if(type == 'ugcourse') {
    var sel = document.getElementById("ugcourse");
    var sel_ugcourse=-1;
    if(sel_val != '') sel_ugcourse = sel_val;
    var tmp;
    tmp = document.createElement("option");
    tmp.value = -1;
    tmp.innerHTML = "Select";
    tmp.label = "Select";
    tmp.text = "Select";
    sel.appendChild(tmp);
    for(var k1 in UGCourseArr)
    {
      tmp = document.createElement("option");
      tmp.value = k1;
      tmp.innerHTML = UGCourseArr[k1];
      tmp.label = UGCourseArr[k1];
      tmp.text = UGCourseArr[k1];
      if(k1==sel_ugcourse){ tmp.selected = true;document.getElementById("ugcourse").value=UGCourseArr[k1]; };
      sel.appendChild(tmp);
    }
  }
  else if(type == 'country')
  {
    var sel = document.getElementById("country");
    var sel_country=11;
    if(sel_val != '') sel_country = sel_val;
    var tmp;
    tmp = document.createElement("option");
    tmp.value = -1;
    tmp.innerHTML = "Select Country";
    tmp.label = "Select Country";
    tmp.text = "Select Country";
    sel.appendChild(tmp);
    for(var k1 in countryArr) {
      	tmp = document.createElement("option");
      	tmp.value = k1;
      	tmp.innerHTML = countryArr[k1];
      	tmp.label = countryArr[k1];
      	tmp.text = countryArr[k1];
     	if(k1=="11")
	{
	//	tmp.setAttribute( "disabled", "true" );
                tmp.style.display="none";
	}	
      if(k1==sel_country){
      tmp.selected = true;document.getElementById("country").value=countryArr[k1];}
      sel.appendChild(tmp);
    }

  }
  else if(type == 'city') {
	  if (sel_val == '' || sel_val == '-1') {
		  var selUserArray = new Array('-01');
	  } else {
		  var selUserArray = new Array("0"+sel_val);
	  }
	  cityDD.setter(selUserArray);
  }
}

function setCityFromInpContainerDD() {
    if (cityDD.selValue != '' && cityDD.selValue != '-01') {
        gbi('city').value = cityDD.selValue[0].substr(1);
    } else {
        gbi('city').value = -1;
    }
    CityChangedEvent();
    setTimeout(function(){if (checkLayerDisplay('cityContainerDD')) {
            v_CITY(1);
            }
            }, 150);
}

function setFareaFromInpContainerDD() {
   if (fAreaDD.selValue != '' && fAreaDD.selValue != '-01') {
        gbi('farea').value = fAreaDD.selValue[0].substr(1); 
    } else {
        gbi('farea').value = -1; 
    }
   setTimeout(function(){if (checkLayerDisplay('fAreaContainerDD')) {
           v_FAREA(1);
           }
           }, 150)
    tipForOther('farea');
}

function setIndFromInpContainerDD() {
    if (indDD.selValue != '' && indDD.selValue != '-01') {
        gbi('industry').value = indDD.selValue[0].substr(1); 
    } else {
        gbi('industry').value = -1; 
    }
    setTimeout(function(){if (checkLayerDisplay('indContainerDD')) {
            v_INDUSTRY(1);
            }
            }, 150)
    tipForOther('industry');
}

function checkLayerDisplay(id) {
   if (gbi(id).style.display == 'none') {
        return true;
   } else {
       return false;
   }
}
