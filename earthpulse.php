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
			
			function changeAdvisory(value){
				if(value == "Thailand"){
					document.getElementById("advisory").innerHTML = '<table><tr><td>Heightened cyclone activity in Thailand may prompt the closure of local airports. Reconfirm transport bookings with the relevant service providers. <br /><br />We do not hold specific information on flights or other transport services. <br /><br />Liasise with local contacts to confirm that routes are accessible before setting out.</td></tr></table>';
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
		</script>
		
		<!-- Custom CSS -->
		<style>
			.selectBorderless{
				background:transparent;
				border:0px;
				outline:0px;
				font-weight:bold;
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
					
					<div class="tab-content" style="width:780px;height:340px;margin:-16px 0px 0px 40px">
						<!-- Map -->
						<div id="tab1" class="tab active" style="display:block;">
                            <table>
                                <tr>
                                    <td></td>
                                    <td >
                                        <iframe height="360" width="770" frameborder="0" src="https://huaymunwan2013.cartodb.com/viz/56b63914-715c-11e5-b53e-0ea31932ec1d/embed_map" ></iframe>
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
						
						<!-- Resources -->
						<div id="tab2" class="tab" style="display:none;">
							<table>
                                <tr>
                                    <td >
                                        <select>
											<option value="#">View All Resources</option>
											<option>Counsellor</option>
											<option>Liaison Officer</option>
											<option>Comms Officer</option>
										</select>
                                    </td>
                                </tr>
                            </table>
							
							<div class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Counsellor
										<br />
										Mary Tan
										<br />
										Available
										<br />
									</span>
								</div>
								
								<div class="card__back">
									<span class="card__text">
										<input type="radio" name="counsellor1" value="Activate">Activate
										<br>
										<input type="radio" name="counsellor1" value="Standby">Standby
										<br>
										<input type="radio" name="counsellor1" value="Available" checked="checked">Available
									</span>
								</div>
							</div>
							
							<div class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Counsellor
										<br />
										Tommy Tan
										<br />
										Available
										<br />
									</span>
								</div>
								
								<div class="card__back">
									<span class="card__text">
										<input type="radio" name="counsellor2" value="Activate">Activate
										<br>
										<input type="radio" name="counsellor2" value="Standby">Standby
										<br>
										<input type="radio" name="counsellor2" value="Available" checked="checked">Available
									</span>
								</div>
							</div>
							
							<div class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Counsellor
										<br />
										Gary Tan
										<br />
										Available
										<br />
									</span>
								</div>
								
								<div class="card__back">
									<span class="card__text">
										<input type="radio" name="counsellor3" value="Activate">Activate
										<br>
										<input type="radio" name="counsellor3" value="Standby">Standby
										<br>
										<input type="radio" name="counsellor3" value="Available" checked="checked">Available
									</span>
								</div>
							</div>
							
							<div class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Liaison Officer
										<br />
										Mary Lee
										<br />
										Available
										<br />
									</span>
								</div>
								
								<div class="card__back">
									<span class="card__text">
										<input type="radio" name="liaison1" value="Activate">Activate
										<br>
										<input type="radio" name="liaison1" value="Standby">Standby
										<br>
										<input type="radio" name="liaison1" value="Available" checked="checked">Available
									</span>
								</div>
							</div>
							
							<div class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Liaison Officer
										<br />
										Tommy Lee
										<br />
										Available
										<br />
									</span>
								</div>
								
								<div class="card__back">
									<span class="card__text">
										<input type="radio" name="liaison2" value="Activate">Activate
										<br>
										<input type="radio" name="liaison2" value="Standby">Standby
										<br>
										<input type="radio" name="liaison2" value="Available" checked="checked">Available
									</span>
								</div>
							</div>
							
							<div class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Liaison Officer
										<br />
										Gary Lee
										<br />
										Available
										<br />
									</span>
								</div>
								
								<div class="card__back">
									<span class="card__text">
										<input type="radio" name="liaison3" value="Activate">Activate
										<br>
										<input type="radio" name="liaison3" value="Standby">Standby
										<br>
										<input type="radio" name="liaison3" value="Available" checked="checked">Available
									</span>
								</div>
							</div>
							
							<div class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Comms Officer
										<br />
										Mary Yeow
										<br />
										Available
										<br />
									</span>
								</div>
								
								<div class="card__back">
									<span class="card__text">
										<input type="radio" name="comms1" value="Activate">Activate
										<br>
										<input type="radio" name="comms1" value="Standby">Standby
										<br>
										<input type="radio" name="comms1" value="Available" checked="checked">Available
									</span>
								</div>
							</div>
							
							<div class="card effect__hover">
								<div class="card__front">
									<span class="card__text">
										Comms Officer
										<br />
										Tommy Yeow
										<br />
										Available
										<br />
									</span>
								</div>
								
								<div class="card__back">
									<span class="card__text">
										<input type="radio" name="comms2" value="Activate">Activate
										<br>
										<input type="radio" name="comms2" value="Standby">Standby
										<br>
										<input type="radio" name="comms2" value="Available" checked="checked">Available
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
					<ul class="tab-links" style="margin-left:170px">
						<li class="active"><a href="#tab4">News</a></li>
						<li><a href="#tab5">Notifications</a></li>
					</ul>

					<div class="tab-content" style="width:370px;height:340px;margin:-16px 0px 0px -4px">
						<!-- News -->
						<div id="tab4" class="tab active" style="display:block;">
							<table>
								<tr>
									<td>
										Japan flooding: 2.8 million advised to evacuate
							
										<br /><br />
										
										7.1 magnitude earthquake hits Pakistan
										
										<br /><br />
										
										Final death toll set at 173 in China warehouse explosion
										
										<br /><br />
										
										Flash floods hit Kelantan, Malaysia
									</td>
								</tr>
								<tr>
									<td>
										<input type="button" id="email" value="Email"/>
									</td>
								</tr>
							</table>
						</div>

						<!-- Notifications -->
						<div id="tab5" class="tab" style="display:none;">
							<table>
								<tr>
									<td>
										<b>Project Shine </b> - Tropical cyclone moving towards Chiang Mai, heavy rains, strong winds expected.
										<br /><br />
										<b>Project Shine</b> - Tropical cyclone upgraded to category 4, light rains.
										<br /><br />
										<b>Cultural immersion trip to Batam, Indonesia</b> - Expect moderate flooding at Batam town Center.
										<br /><br />
										<b>Nanjing Overseas Immersion Trip</b> - Smog expected to affect parts of Eastern China.
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
									$query = 'SELECT * FROM trips ORDER BY Alert DESC;';

									$result = mysqli_query($mysqli, $query);

									while($row = mysqli_fetch_array($result)){ 
										$array[] = $row;
									}
								
									if(mysqli_num_rows($result) != 0){                                
										echo '<table border="1">
										<tr style="text-align:center">
											<th style="padding:5px">
												Excursion Name
											</th>
											<th style="padding:5px">
												City
											</th>
											<th style="padding:5px">
												School
											</th>
											<th style="padding:5px">
												Notifications
											</th>
											<th style="padding:5px">
												Alert Level
											</th>
										</tr>';

										for($i = 0; $i < count($array); $i++){
											$excursionIndex = $i + 1;
										
											echo '<tr>';
											echo '<td style="padding:5px">' . $array[$i]['Excursion'] . '</td>';
											echo '<td style="padding:5px">' . $array[$i]['City'] . '</td>';
											echo '<td style="padding:5px">' . $array[$i]['School'] . '</td>';
											echo '<td style="padding:5px">	<img src="warning.jpg" width="30px"/>	</td>';
											
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
											echo '</select></td></tr>';
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