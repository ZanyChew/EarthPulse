<?php
include_once "mysqli.connect.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>EarthPulse</title>
		<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
		<!-- External CSS -->
		<link rel="stylesheet" type="text/css" href="css/tabs.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="http://libs.cartocdn.com/cartodb.js/v3/3.15/themes/css/cartodb.css" />
		<link rel="stylesheet" href="css/jquery.jscrollpane.css" />
		<link rel="stylesheet" href="css/card.css" />

		<!-- External JavaScript -->
		<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
		<script type="text/javascript" src="js/tabs.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$('.scroll-pane').jScrollPane();
			});
		</script>
		<script type="text/javascript" src="js/modernizr.js"></script>
		
		<!-- Custom JavaScript -->
		<script type="text/javascript">
			$(document).ready(function(){
				var allAlertList = document.getElementsByClassName("alertList");
				
				for(i = 0; i < allAlertList.length; i++){
					changeAlert(allAlertList[i].id, allAlertList[i].value);
				}
			});
		
			function changeAlert(id, value){
				var parentId = id + "box";
			
				if(value == "High"){
					document.getElementById(id).style.backgroundColor = 'red';
					document.getElementById(parentId).style.backgroundColor = 'red';
				}
				else if(value == "Medium"){
					document.getElementById(id).style.backgroundColor = 'orange';
					document.getElementById(parentId).style.backgroundColor = 'orange';
				}
				else{
					document.getElementById(id).style.backgroundColor = 'green';
					document.getElementById(parentId).style.backgroundColor = 'green';
				}
			}
            
            window.selectResources = function(e){
				if(e.value=="allResources"){
					document.getElementById("couns1").style.display = "block";
					document.getElementById("couns2").style.display = "block";
					document.getElementById("couns3").style.display = "block";
					document.getElementById("liai1").style.display = "block";
					document.getElementById("liai2").style.display = "block";
					document.getElementById("liai3").style.display = "block";
					document.getElementById("comm1").style.display = "block";
					document.getElementById("comm2").style.display = "block";
				}
				else if(e.value=="counsellors"){
					document.getElementById("couns1").style.display = "block";
					document.getElementById("couns2").style.display = "block";
					document.getElementById("couns3").style.display = "block";
					document.getElementById("liai1").style.display = "none";
					document.getElementById("liai2").style.display = "none";
					document.getElementById("liai3").style.display = "none";
					document.getElementById("comm1").style.display = "none";
					document.getElementById("comm2").style.display = "none";
				}
				else if(e.value == "liaison"){
					document.getElementById("couns1").style.display = "none";
					document.getElementById("couns2").style.display = "none";
					document.getElementById("couns3").style.display = "none";
					document.getElementById("liai1").style.display = "block";
					document.getElementById("liai2").style.display = "block";
					document.getElementById("liai3").style.display = "block";
					document.getElementById("comm1").style.display = "none";
					document.getElementById("comm2").style.display = "none";
				}
				else if(e.value == "comm"){
					document.getElementById("couns1").style.display = "none";
					document.getElementById("couns2").style.display = "none";
					document.getElementById("couns3").style.display = "none";
					document.getElementById("liai1").style.display = "none";
					document.getElementById("liai2").style.display = "none";
					document.getElementById("liai3").style.display = "none";
					document.getElementById("comm1").style.display = "block";
					document.getElementById("comm2").style.display = "block";
				}
			}

			function changeResStt(reso,stt,boss){
				document.getElementById(reso).innerHTML = "(" + stt + ")";

				 var bossid = boss + "up";
				 var elem = document.getElementById(bossid);
				 //elem.parentNode.removeChild(elem);
				 if(elem==null){
					document.getElementById("updatePanel").innerHTML = document.getElementById("updatePanel").innerHTML + "<li id=\"" + boss + "up\" class=\"list-group-item\">"+ document.getElementById(boss).innerHTML + " is " + stt + "</li>";
				 }else{
					elem.innerHTML = document.getElementById(boss).innerHTML + " is " + stt;
				 }
			}
            
			function changeAdvisory(value){
				if(value == "Thailand"){
					document.getElementById("advisory").innerHTML = '<table><tr><td><b>Airports and all other transport services are operating as normal.</b> <br /> Last updated: 18-10-2015 4:25pm</td></tr></table>';
				}
				else if(value == "Malaysia"){
					document.getElementById("advisory").innerHTML = '<table><tr><td>Heightened earthquake activity in Malaysia may prompt the closure of local airports. Reconfirm transport bookings with the relevant service providers. <br /><br />We do not hold specific information on flights or other transport services. <br /><br />Liasise with local contacts to confirm that routes are accessible before setting out.</td></tr></table>';
				}
				else{
					document.getElementById("advisory").innerHTML = '<table><tr><td>Heightened tsunami activity in Indonesia may prompt the closure of local airports. Reconfirm transport bookings with the relevant service providers. <br /><br />We do not hold specific information on flights or other transport services. <br /><br />Liasise with local contacts to confirm that routes are accessible before setting out.</td></tr></table>';
				}
			}
			
			$(document).ready(function(){
				$('#email').click(function(){
					$.ajax({
						url: "email/gmail.php",
						type: "POST"
					});
				});
			});
			
			$(document).ready(function(){
				$('#email2').click(function(){
					$.ajax({
						url: "email/gmail 2.php",
						type: "POST"
					});
				});
			});
		</script>
		
		<!-- Custom CSS -->
		<style>
			.selectBorderless{
				background:transparent;
				border:0px;
				outline:0px;
				font-weight:bold;
			}
			
			.modalDialog {
				position: fixed;
				font-family: Arial, Helvetica, sans-serif;
				top: 0;
				right: 0;
				bottom: 0;
				left: 0;
				background: rgba(0, 0, 0, 0.8);
				z-index: 99999;
				opacity:0;
				-webkit-transition: opacity 400ms ease-in;
				-moz-transition: opacity 400ms ease-in;
				transition: opacity 400ms ease-in;
				pointer-events: none;
			}
			.modalDialog:target {
				opacity:1;
				pointer-events: auto;
			}
			.modalDialog > div {
				width: 400px;
				position: relative;
				margin: 10% auto;
				padding: 5px 20px 13px 20px;
				border-radius: 10px;
				background: #fff;
			}
			.close {
				background: #606061;
				color: #FFFFFF;
				line-height: 25px;
				position: absolute;
				right: -12px;
				text-align: center;
				top: -10px;
				width: 24px;
				text-decoration: none;
				font-weight: bold;
				-webkit-border-radius: 12px;
				-moz-border-radius: 12px;
				border-radius: 12px;
				-moz-box-shadow: 1px 1px 3px #000;
				-webkit-box-shadow: 1px 1px 3px #000;
				box-shadow: 1px 1px 3px #000;
			}
			.close:hover {
				background: #00d9ff;
			}
		</style>
	</head>
	<body>
		<div class="wrap">
			<div class="main">
				<!-- First Group of Tabs -->
				<div class="tabs animated-fade">
					<ul class="tab-links">
						<li class="active"><a href="#tab1">Map</a></li>
						<li><a href="#tab2">Resources</a></li>
						<li><a href="#tab3">Travel Advisory</a></li>
					</ul>
					
					<div class="tab-content" style="width:780px;height:350px;margin:-12px 0px 0px 40px">
						<!-- Map -->
						<div id="tab1" class="tab active" style="display:block;">
                            <table>
                                <tr>
                                    <td></td>
                                    <td >
                                        <iframe height="360" width="770" frameborder="0" src="https://huaymunwan2013.cartodb.com/viz/986f42c2-755f-11e5-8ada-0ecfd53eb7d3/embed_map"></iframe>
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
						
						<!-- Resources -->
						<div id="tab2" class="tab" style="display:none;">
							<ul id="updatePanel" style="position:absolute;left:690px;top:65px;display:block;width:160px;text-align:center;font-size:14px" class="list-group">
								<li class="list-group-item"><b>Summary</b></li>
							</ul>

							<table>
                                <tr>
                                    <td>
										<select name="resSel" onchange="selectResources(this);">
											<option selected="selected">--Select Resources--</option>
											<option value="allResources">Select All Resources</option>
											<option value="counsellors">Counsellors</option>
											<option value="liaison">Liaison Officers</option>
											<option value="comm">Comms Officers</option>
										</select>
                                    </td>
                                </tr>
                            </table>

							<div id = "couns1" style="display:none" class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Counsellor
										<br />
										<a id="couns1name">Mary Tan</a>
										<br />
										<b id="couns1stt">(Available)</b>
										<br />
									</span>
								</div>

								<div class="card__back">
									<span class="card__text">
										<input name="counsellor1" type="radio" value="Activate" onclick="changeResStt('couns1stt','Activated','couns1name')">Activate
										<br>
										<input name="counsellor1" type="radio" value="Standby" onclick="changeResStt('couns1stt','Stand By','couns1name')">Standby
										<br>
										<input name="counsellor1" type="radio" value="Available" onclick="changeResStt('couns1stt','Available','couns1name')" checked="checked">Available
									</span>
								</div>
							</div>

							<div id = "couns2" style="display:none" class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Counsellor
										<br />
										<a id="couns2name">Tom Tan</a>
										<br />
										<b id="couns2stt">(Available)</b>
										<br />
									</span>
								</div>

								<div class="card__back">
									<span class="card__text">
										<input name="counsellor2" type="radio" value="Activate" onclick="changeResStt('couns2stt','Activated','couns2name')">Activate
										<br>
										<input name="counsellor2" type="radio" value="Standby" onclick="changeResStt('couns2stt','Stand By','couns2name')">Standby
										<br>
										<input name="counsellor2" type="radio" value="Available" onclick="changeResStt('couns2stt','Available','couns2name')" checked="checked">Available
									</span>
								</div>
							</div>

							<div id = "couns3" style="display:none" class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Counsellor
										<br />
										<a id="couns3name">Gary Tan</a>
										<br />
										<b id="couns3stt">(Available)</b>
										<br />
									</span>
								</div>

								<div class="card__back">
									<span class="card__text">
										<input name="counsellor3" type="radio" value="Activate" onclick="changeResStt('couns3stt','Activated','couns3name')">Activate
										<br>
										<input name="counsellor3" type="radio" value="Standby" onclick="changeResStt('couns3stt','Stand By','couns3name')">Standby
										<br>
										<input name="counsellor3" type="radio" value="Available" onclick="changeResStt('couns3stt','Available','couns3name')" checked="checked">Available
									</span>
								</div>
							</div>

							<div id = "liai1" style="display:none" class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Liaison Officer
										<br />
										<a id="liai1name">Mary Lee</a>
										<br />
										<b id="liai1stt">(Available)</b>
										<br />
									</span>
								</div>

								<div class="card__back">
									<span class="card__text">
										<input name="liaison1" type="radio" value="Activate" onclick="changeResStt('liai1stt','Activated','liai1name')">Activate
										<br>
										<input name="liaison1" type="radio" value="Standby" onclick="changeResStt('liai1stt','Stand By','liai1name')">Standby
										<br>
										<input name="liaison1" type="radio" value="Available" onclick="changeResStt('liai1stt','Available','liai1name')" checked="checked">Available
									</span>
								</div>
							</div>

							<div id = "liai2" style="display:none" class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Liaison Officer
										<br />
										<a id="liai2name">Tom Lee</a>
										<br />
										<b id="liai2stt">(Available)</b>
										<br />
									</span>
								</div>

								<div class="card__back">
									<span class="card__text">
										<input name="liaison2" type="radio" value="Activate" onclick="changeResStt('liai2stt','Activated','liai2name')">Activate
										<br>
										<input name="liaison2" type="radio" value="Standby" onclick="changeResStt('liai2stt','Stand By','liai2name')">Standby
										<br>
										<input name="liaison2" type="radio" value="Available" onclick="changeResStt('liai2stt','Available','liai2name')" checked="checked">Available
									</span>
								</div>
							</div>

							<div id = "liai3" style="display:none" class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Liaison Officer
										<br />
										<a id="liai3name">Gary Lee</a>
										<br />
										<b id="liai3stt">(Available)</b>
										<br />
									</span>
								</div>

								<div class="card__back">
									<span class="card__text">
										<input name="liaison3" type="radio" value="Activate" onclick="changeResStt('liai3stt','Activated','liai3name')">Activate
										<br>
										<input name="liaison3" type="radio" value="Standby" onclick="changeResStt('liai3stt','Stand By','liai3name')">Standby
										<br>
										<input name="liaison3" type="radio" value="Available" onclick="changeResStt('liai3stt','Available','liai3name')" checked="checked">Available
									</span>
								</div>
							</div>

							<div id = "comm1" style="display:none" class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Comms Officer
										<br />
										<a id="comm1name">Mary Eng</a>
										<br />
										<b id="comm1stt">(Available)</b>
										<br />
									</span>
								</div>

								<div class="card__back">
									<span class="card__text">
										<input name="comms1" type="radio" value="Activate" onclick="changeResStt('comm1stt','Activated','comm1name')">Activate
										<br>
										<input name="comms1" type="radio" value="Standby" onclick="changeResStt('comm1stt','Stand By','comm1name')">Standby
										<br>
										<input name="comms1" type="radio" value="Available" onclick="changeResStt('comm1stt','Available','comm1name')" checked="checked">Available
									</span>
								</div>
							</div>

							<div id = "comm2" style="display:none" class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Comms Officer
										<br />
										<a id="comm2name">Tom Eng</a>
										<br />
										<b id="comm2stt">(Available)</b>
										<br />
									</span>
								</div>

								<div class="card__back">
									<span class="card__text">
										<input name="comms2" type="radio" value="Activate" onclick="changeResStt('comm2stt','Activated','comm2name')">Activate
										<br>
										<input name="comms2" type="radio" value="Standby" onclick="changeResStt('comm2stt','Stand By','comm2name')">Standby
										<br>
										<input name="comms2" type="radio" value="Available" onclick="changeResStt('comm2stt','Available','comm2name')" checked="checked">Available
									</span>
								</div>
							</div>
						</div>

                        <!-- Travel Advisory -->
						<div id="tab3" class="tab" style="display:none;">
							<table>
								<tr>
									<td>
										<select onChange="changeAdvisory(this.value)">
											<option value="#">Select a Country</option>
											<option value="Thailand">Thailand</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Indonesia">Indonesia</option>
										</select>
									</td>
								</tr>
							</table>
							
							<div id="advisory">
								
							</div>
						</div>
					</div>
				</div>
				
				<!-- Second Group of Tabs -->
				<div class="tabs animated-fade">
					<ul class="tab-links" style="margin-left:155px">
						<li class="active"><a href="#tab4">Notifications</a></li>
						<li><a href="#tab5">News</a></li>
					</ul>

					<div class="tab-content" style="width:370px;height:350px;margin:-12px 0px 0px -3px">
						<!-- Notifications -->
						<div id="tab4" class="tab active" style="display:block">
							<table>
								<tr>
									<td>
										<b style="color:blue">18-10-2015 Just now</b>
										<br />
										<b>Project Shine </b> - Tropical cyclone moving towards Chiang Mai, heavy rains, strong winds expected.
										<br /><br />
										
										<b style="color:blue">17-10-2015 10:14am</b>
										<br />
										<b>Project Shine</b> - Tropical cyclone upgraded to category 4, light rains.
									</td>
								</tr>
							</table>
						</div>
						
						<!-- News -->
						<div id="tab5" class="tab" style="display:none">
							<table>
								<tr>
									<td>
										<b style="color:blue">18-10-2015 Just now</b>
										<br />
										There is flood in Krong Poi Pet, Cambodia, but it does not affect any place in Thailand. Thailand is keeping a close watch on the flood.
										<br /><br />
									
										<b style="color:blue">18-10-2015 4:00pm</b>
										<br />
										Japan flooding: 2.8 million advised to evacuate
										<br /><br />
										
										<b style="color:blue">18-10-2015 3:30pm</b>
										<br />
										7.1 magnitude earthquake hits Pakistan
										<br /><br />
										
										<b style="color:blue">18-10-2015 1:30pm</b>
										<br />
										Final death toll set at 173 in China warehouse explosion
										<br /><br />
										
										<b style="color:blue">18-10-2015 12:30pm</b>
										<br />
										Flash floods hit Kelantan, Malaysia
									</td>
								</tr>
								<tr>
									<td>
										<input type="button" id="email" value="Demo Email"/>
									</td>
								</tr>
								<tr>
									<td>
										<input type="button" id="email2" value="Demo Email 2"/>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				
				<table>
					<tr>
						<td>
							<div class="tab-content" style="width:780px;height:290px;margin:-8px 0px 0px 37px;overflow:auto">
								<?php
									$query = 'SELECT * FROM trips WHERE Cluster = "NORTH9" ORDER BY ID DESC;';

									$result = mysqli_query($mysqli, $query);

									while($row = mysqli_fetch_array($result)){ 
										$array[] = $row;
									}
								
									if(mysqli_num_rows($result) != 0){                                
										echo '<table border="1" id="excursionList">
										<tr style="text-align:center">
											<th style="padding:10px">
												Excursion Name
											</th>
											<th style="padding:10px">
												City
											</th>
											<th style="padding:10px">
												School
											</th>
											<th style="padding:10px">
												Notifications
											</th>
											<th style="padding:10px">
												Alert Level
											</th>
										</tr>';

										for($i = 0; $i < count($array); $i++){
											$excursionIndex = $i + 1;
										
											echo '<tr>';
											echo '<td style="padding:5px"><a href="#openModal' . $array[$i]['ID'] . '">' . $array[$i]['Excursion'] . '</a></td>';
											echo '<td style="padding:5px">' . $array[$i]['City'] . '</td>';
											echo '<td style="padding:5px">' . $array[$i]['School'] . '</td>';
											echo '<td style="padding:5px">	<img src="warning.svg" width="30px"/> &nbsp; ' . $array[$i]['Notification'] . '</td>';
											
											echo '<td id="alert' . $excursionIndex . 'box" style="padding:5px">
													<select id="alert' . $excursionIndex . '" class="selectBorderless alertList" onChange="changeAlert(this.id, this.value)">';
														if($array[$i]['Alert'] == '3'){
															echo '<option value="High" style="background-color:red" selected="selected">High</option>
																	<option value="Medium" style="background-color:orange">Medium</option>
																	<option value="Low" style="background-color:green">Low</option>';
														}
														else if($array[$i]['Alert'] == '2'){
															echo '<option value="High" style="background-color:red">High</option>
																	<option value="Medium" style="background-color:orange" selected="selected">Medium</option>
																	<option value="Low" style="background-color:green">Low</option>';
														}
														else{
															echo '<option value="High" style="background-color:red">High</option>
																	<option value="Medium" style="background-color:orange">Medium</option>
																	<option value="Low" style="background-color:green" selected="selected">Low</option>';
														}
											echo '</select></td>';
											
											echo '<div id="openModal' . $array[$i]['ID'] . '" class="modalDialog"><div><a href="#close" title="Close" class="close">X</a><h2>' . $array[$i]['Excursion'] . '</h2><p>' . $array[$i]['Details'] . '</p></div></div>';
											
											echo '</td></tr>';
										}
										echo '</table>';
									}
									else{
										echo 'No excursions.';
									}
								?>							</div>
						</td>
						<td>
							<div class="tab-content" style="width:370px;height:290px;margin:-8px 0px 0px -4px">
								<iframe width="360" height="290" src="http://cdn.livestream.com/embed/earthpulse?layout=6&showTimestamp=true&height=290&width=360" style="border:0;outline:0" frameborder="0" scrolling="no" bgcolor="#ffffff"></iframe>							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>