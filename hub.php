<?php 

session_start();
$page = "Layer 4";
include 'header.php';
    $runningrip = $odb->query("SELECT COUNT(*) FROM `logs` WHERE `time` + `date` > UNIX_TIMESTAMP() AND `stopped` = 0")->fetchColumn(0);
	$slotsx = $odb->query("SELECT COUNT(*) FROM `api` WHERE `slots`")->fetchColumn(0);
	$load    = round($runningrip / $slotsx * 100, 2);	
		
?>
<div class="clearfix"></div>
	
    <div class="container-fluid">
               <?php 
							if (!$user->hasMembership($odb))
								{
							?>
							
									<div class="alert alert-outline-info alert-dismissible">
			 <button type="button" class="close" data-dismiss="alert">&times;</button>
			
			<div class="alert-icon">
			 <i class="fa fa-info"></i>
			</div>
			
			<div class="alert-message">
			  <span><strong>WRNING!</strong> You don't have an active membership!</span>
			</div></div>
											
        
            <?php } ?>
		<div id="attackalert" style="display:none"></div>
		
        <div class="row">
		
		
		
		
		<div class="col-lg-12">
           <div class="card">
            <div class="card-body"><i class="fa fa-spinner fa-spin text-danger" id="attackloader" style="display:none"></i>
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="zmdi zmdi-device-hub"></i> <span class="hidden-xs">Layer 4</span></a>
                </li>
                
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-http"></i> <span class="hidden-xs">Layer 7</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    
				
				<form class="form-horizontal" method="post" onsubmit="return false;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-material floating">
										<label for="host"><i class="fa fa-terminal"></i> Host</label>
                                            <input type="text" class="form-control" id="host" name="host" placeholder="0.0.0.0">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-material floating">
										<label for="port"><i class="zmdi zmdi-portable-wifi"></i> Port</label>
                                            <input type="text" class="form-control" id="port" name="port" placeholder="80">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-material floating">
										<label for="time"><i class="fa fa-clock-o"></i> Time</label>
                                            <input type="text" class="form-control" id="time" name="time" placeholder="60">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
								<div class="col-lg-6">
								 <div class="form-group">
                                <label class="control-label"><i class="fa fa-server"></i> Servers per attack </label>
                                
                                <input type="text" class="form-control" id="totalservers" name="totalservers" placeholder="1">
								<?php 
								
							$SQL = $odb->prepare("SELECT `aserv` FROM `users` WHERE `users`.`ID` = :id");
			$SQL ->execute(array(':id' => $_SESSION['ID']));
			$aserv = $SQL -> fetchColumn(0);
			
								$SQLGetTime = $odb->prepare("SELECT `plans`.`totalservers` FROM `plans` LEFT JOIN `users` ON `users`.`membership` = `plans`.`ID` WHERE `users`.`ID` = :id");
				    $SQLGetTime->execute(array(
				        ':id' => $_SESSION['ID']
				    ));
				    $totalservers = $SQLGetTime->fetchColumn(0);
					?>
			 Your Limit:	<?php 	echo $totalservers+$aserv; ?>
                            </div>
                            </div>
							
							<div class="col-lg-6">
                            <div class="form-group">
                                
                                    <div>
                                        <label for="method"><i class="zmdi zmdi-view-dashboard"></i> Method</label>
                                        <select class="form-control" id="method" name="method">
                                           	<optgroup label="Regular" style="color:#00bbff;">
														<?php
															$SQLGetLogs = $odb->query("SELECT * FROM `methods` WHERE `type` = 'layer4' ORDER BY `id` ASC");
															while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
																$name     = $getInfo['name'];
																$fullname = $getInfo['fullname'];
																echo '<option value="' . $name . '">' . $fullname . '</option>';
															}
														?>
														</optgroup>
															
														 
														      <optgroup label="VIP (ONLY VIP USERS) " style="color:#e54e55;">
														<?php
															$SQLGetLogs = $odb->query("SELECT * FROM `methods` WHERE `type` = 'vips' ORDER BY `id` ASC");
															while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
																$name     = $getInfo['name'];
																$fullname = $getInfo['fullname'];
																echo '<option value="' . $name . '">'. $fullname . '</option>';
															}
														?>
														</optgroup>
														
														</optgroup>
														      <optgroup label="Premium (ONLY VIP USERS) " style="color:red;">
														<?php
															$SQLGetLogs = $odb->query("SELECT * FROM `methods` WHERE `type` = 'by4' ORDER BY `id` ASC");
															while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
																$name     = $getInfo['name'];
																$fullname = $getInfo['fullname'];
																echo '<option value="' . $name . '">'. $fullname . '</option>';
															}
														?>
														</optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                           <div class="col-lg-6">
							    <div class="form-group">
      
          <div>
            <label for="method"><i class="fa fa-rss"></i> Network</label>
                              <select class="form-control" id="vip" name="vip">
          <option value="0">Regular</option>
          <option value="1">Premium</option>
          </select>
          </div>
      </div>
  </div>
  </div>
  
  <center>
  <div class="col-lg-6">
                            <div class="form-group m-b-0">
									<button class="btn btn-primary btn-sm btn-block waves-effect waves-light m-1" onclick="attack()" id="hit" type="button"> <i class="fa fa-bolt"></i> Send </button>
									
                                </div>
                            </div> </center>
							
                        </form>
                </div>
               
                <div class="tab-pane" id="edit">
                    
					<form class="form-horizontal" method="post" onsubmit="return false;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-material floating">
										<label for="host"><i class="fa fa-terminal"></i> Host</label>
                                            <input type="text" class="form-control" id="host2" name="host2" placeholder="http://example.com">
                                            
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-material floating">
										<label for="time"><i class="fa fa-clock-o"></i> Time</label>
                                            <input type="text" class="form-control" id="time2" name="time2" placeholder="60">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
								<div class="col-lg-6">
								 <div class="form-group">
                                <label class="control-label"><i class="fa fa-server"></i> Servers per attack </label>
                                
                                <input type="text" class="form-control" id="totalservers2" name="totalservers2" placeholder="1">
								<?php 
								
							$SQL = $odb->prepare("SELECT `aserv` FROM `users` WHERE `users`.`ID` = :id");
			$SQL ->execute(array(':id' => $_SESSION['ID']));
			$aserv = $SQL -> fetchColumn(0);
			
								$SQLGetTime = $odb->prepare("SELECT `plans`.`totalservers` FROM `plans` LEFT JOIN `users` ON `users`.`membership` = `plans`.`ID` WHERE `users`.`ID` = :id");
				    $SQLGetTime->execute(array(
				        ':id' => $_SESSION['ID']
				    ));
				    $totalservers = $SQLGetTime->fetchColumn(0);
					?>
			 Your Limit:	<?php 	echo $totalservers+$aserv; ?>
                            </div>
								</div>
                            
                            

							
                            <div class="col-lg-6">
							    <div class="form-group">
      
          <div>
            <label for="method"><i class="fa fa-rss"></i> Network</label>
                              <select class="form-control" id="vip2" name="vip2">
          <option value="0">Regular</option>
          <option value="1">Premium</option>
          </select>
          </div>
      </div>
  </div>

  
  
  <div class="col-lg-6">
                            <div class="form-group">
                                
                                    <div>
                                        <label for="method"><i class="zmdi zmdi-view-dashboard"></i> Method</label>
                                        <select class="form-control" id="method2" name="method2">
                                           	<optgroup label="Regular L7" style="color:#00bbff;">
														<?php
															$SQLGetLogs = $odb->query("SELECT * FROM `methods` WHERE `type` = 'layer7' ORDER BY `id` ASC");
															while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
																$name     = $getInfo['name'];
																$fullname = $getInfo['fullname'];
																echo '<option value="' . $name . '">' . $fullname . '</option>';
															}
														?>
														</optgroup>
															
														 
														    
														
														
														      <optgroup label="BYPASS L7" style="color:red;">
														<?php
															$SQLGetLogs = $odb->query("SELECT * FROM `methods` WHERE `type` = 'by7' ORDER BY `id` ASC");
															while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
																$name     = $getInfo['name'];
																$fullname = $getInfo['fullname'];
																echo '<option value="' . $name . '">'. $fullname . '</option>';
															}
														?>
														</optgroup>
                                        </select>
                                    </div>
                                </div>
  </div> 
     <div class="col-lg-6">
      						    <div class="form-group">
       
          <div>
            <label for="method"><i class="zmdi zmdi-globe"></i> ORIGIN</label>
                              <select class="form-control" style="border: 1px solid #4c535c;" id="location" name="location">
          <option value="0">RANDOM</option>
          <option value="US">US</option>
		  <option value="1UK">UK</option>
		  <option value="RU">RU</option>
		 <option value="NK">NK</option>
								  <option value="NL">NL</option>
								  <option value="1TK">TK</option>
								  <option value="1KR">KR</option>
								  <option value="HK">HK</option>
								  <option value="FR">FR</option>
								  
								  <option value="CA">CA</option>
								  <option value="EU">EU</option>
								  
          </select>
          </div>
      </div>
  </div>
  </div>
  <center>
  <div class="col-lg-6">
                            <div class="form-group m-b-0">
                                
									<button class="btn btn-success btn-sm btn-block waves-effect waves-light m-1" onclick="attack2()" id="hit" type="button"> <i class="fa fa-bolt"></i> Send </button>
									
                                </div>
                            </div> </center>
							
                        </form>
					
                
            </div>
        </div>
      </div>
      </div>  </div>
		
		
		
		
		
		
		
		
		
		
		<?php 

session_start();
$page = "Profile";

$username = $_SESSION['username'];

if(isset($_POST['delete'])){
   
  $SQLKILLER = $odb -> query("DELETE FROM `logins_failed` WHERE `username` = '$username'");
  $SQLKILLER2 = $odb -> query("DELETE FROM `login_history` WHERE `username` = '$username'");
  $SQLKILLER3 = $odb -> query("DELETE FROM `logs` WHERE `user` = '$username'");
   $SQLKILLER4 = $odb -> query("DELETE FROM `loginlogss` WHERE `username` = '$username'");
$SQLCHECKER = $odb -> query("SELECT COUNT(*) FROM `loginlogss` WHERE `username` = '$username'");
$logsafter = $SQLCHECKER->fetchColumn(0);
if ($logsafter < 1) {
    	echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  type: "success",
  title: "Success",
  text: "Done, all logs cleared!",
  showConfirmButton: false,
  timer: 4500
  
});';
  echo ' }, 1000);</script>';
	
}
		

	
	}

if(!empty($_POST['update'])){
		
		if(empty($_POST['old']) || empty($_POST['new'])){
				$error = error('You need to enter both passwords.');
				
							echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  position: "top-end",
  toast: "true",
  type: "error",
  title: "You need to enter both passwords",
  showConfirmButton: false,
  timer: 4500
  
});';
  echo ' }, 1000);</script>';
		}

		$SQLCheckCurrent = $odb -> prepare("SELECT COUNT(*) FROM `users` WHERE `ID` = :ID AND `password` = :password");
		$SQLCheckCurrent -> execute(array(':ID' => $_SESSION['ID'], ':password' => SHA1(md5($_POST['old']))));
		$countCurrent = $SQLCheckCurrent -> fetchColumn(0);
	
		if ($countCurrent == 0){
			$error = error('Current password is incorrect.');
			echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  position: "top-end",
  toast: "true",
  type: "error",
  title: "Current password is incorrect.",
  showConfirmButton: false,
  timer: 4500
  
});';
  echo ' }, 1000);</script>';
		}
		
		$notify = error($error);
	
		if(empty($error)){
			$SQLUpdate = $odb -> prepare("UPDATE `users` SET `password` = :password WHERE `username` = :username AND `ID` = :id");
			$SQLUpdate -> execute(array(':password' => SHA1(md5($_POST['new'])),':username' => $_SESSION['username'], ':id' => $_SESSION['ID']));
			$error = success('Password has been successfully changed');
			echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  position: "top-end",
  toast: "true",
  type: "success",
  title: "Password Updated",
  showConfirmButton: false,
  timer: 4500
  
});';
  echo ' }, 1000);</script>';
		}
	
	}
	?>

		
		
		
           
			
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="si si-list"></i> Manage Attacks <i style="display: none;" id="manage" class="zmdi zmdi-settings zmdi-hc-spin"></i></h3>
                        <div class="card-options">
<form method="post">
                            <button onclick="attacks()" class="btn btn-light"><i class="fa fa-refresh"></i> Refresh</button>

				      
				<button class="btn btn-danger waves-effect waves-light m-1" name="delete" id="delete" type="submit">
													<i class="fad fa-times push-5-r"></i> Delete All my logs
												</button>
																 </form>

                        </div>
                    </div>
                    <div class="card-content">
                        <div id="attacksdiv" style="display:block;"></div>
                    </div>
                </div>
				</div>
	  
	  <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
							<div class="c-header">
                               <center>  <h4 class="card-title">Real time Network Load</h4></center> 
							   </div>
                                <div>
                                    <center><iframe id="graficostats_1" scrolling="no" src="complexx/netload.php" style="width: 100%; border:none; height: 270px; overflow:hidden;"></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div> 
            
            <script>
                attacks();

                function attacks() {
                    document.getElementById("attacksdiv").style.display = "none";
                    document.getElementById("manage").style.display = "inline";
                    var xmlhttp;
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("attacksdiv").innerHTML = xmlhttp.responseText;
                            document.getElementById("manage").style.display = "none";
                            document.getElementById("attacksdiv").style.display = "inline-block";
                            document.getElementById("attacksdiv").style.width = "100%";
                            eval(document.getElementById("ajax").innerHTML);
                        }
                    }
                    xmlhttp.open("GET", "complexx/attacks.php", true);
                    xmlhttp.send();
                }

                function attack() {
                    var host = $('#host').val();
                    var time = $('#time').val();
                    var port = $('#port').val();
                    var method = $('#method').val();
                    var totalservers = $('#totalservers').val();
					var vip=$('#vip').val();
                    document.getElementById("attackalert").style.display = "none";
                    //ocument.getElementById("attackloader").style.display="inline";
                    var xmlhttp;
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("attackalert").innerHTML = xmlhttp.responseText;
                            //document.getElementById("attackloader").style.display="none";
                            document.getElementById("attackalert").style.display = "inline";
                            if (xmlhttp.responseText.search("SUCCESS") != -1) {

									 Swal.fire({
										 position: "top-end",
									 title:'Attack Sent Successfully', 
									 type: 'info',
									 toast: true,
									  showConfirmButton: false,
									  timer: 4500
									 
									 });
                                
                                attacks();
                                window.setInterval(attacks(), 2000);
                            } else {

								 Swal.fire({
									 position: "top-end",
									 title:'Something is wrong..', 
									 type: 'info',
									 toast: true,
									  showConfirmButton: false,
									  timer: 4500
									 
									 });
                            }
                        }
                    }
                    xmlhttp.open("GET", "complexx/hub.php?type=start" + "&host=" + host + "&port=" + port + "&time=" + time + "&method=" + method + "&totalservers=" + totalservers + "&vip=" + vip, true);
                    xmlhttp.send();
                    attacks();
                }

                function renew(id) {
                    document.getElementById("attackalert").style.display = "none";
                    document.getElementById("attackloader").style.display = "inline";
                    var xmlhttp;
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("attackalert").innerHTML = xmlhttp.responseText;
                            document.getElementById("attackloader").style.display = "none";
                            document.getElementById("attackalert").style.display = "inline";
                            if (xmlhttp.responseText.search("Attack sent successfully") != -1) {
                                attacks();
                            }
                        }
                    }
                    xmlhttp.open("GET", "complexx/hub.php?type=renew" + "&id=" + id, true);
                    xmlhttp.send();
                    attacks();
                }

                function stop(id) {
                    document.getElementById("attackalert").style.display = "none";
                    document.getElementById("attackloader").style.display = "inline";
                    var xmlhttp;
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("attackalert").innerHTML = xmlhttp.responseText;
                            document.getElementById("attackloader").style.display = "none";
                            document.getElementById("attackalert").style.display = "inline";
                            if (xmlhttp.responseText.search("SUCCESS") != -1) {
								
								 Swal.fire({
									 position: "top-end",
									 title:'Attack Stoped', 
									 type: 'info',
									 toast: true,
									  showConfirmButton: false,
									  timer: 4500
									 
									 });

                                attacks();
                            }
                        }
                    }
                    xmlhttp.open("GET", "complexx/hub.php?type=stop" + "&id=" + id, true);
                    xmlhttp.send();
                }

            </script>
			
			<script>
                attacks();

                function attacks() {
                    document.getElementById("attacksdiv").style.display = "none";
                    document.getElementById("manage").style.display = "inline";
                    var xmlhttp;
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("attacksdiv").innerHTML = xmlhttp.responseText;
                            document.getElementById("manage").style.display = "none";
                            document.getElementById("attacksdiv").style.display = "inline-block";
                            document.getElementById("attacksdiv").style.width = "100%";
                            eval(document.getElementById("ajax").innerHTML);
                        }
                    }
                    xmlhttp.open("GET", "complexx/attacks.php", true);
                    xmlhttp.send();
                }

                function attack2() {
                    var host = $('#host2').val();
                    var time = $('#time2').val();
                    var port = $('#port2').val();
                    var method = $('#method2').val();
                    var totalservers = $('#totalservers2').val();
					var vip=$('#vip2').val();
                    document.getElementById("attackalert").style.display = "none";
                    //ocument.getElementById("attackloader").style.display="inline";
                    var xmlhttp;
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("attackalert").innerHTML = xmlhttp.responseText;
                            //document.getElementById("attackloader").style.display="none";
                            document.getElementById("attackalert").style.display = "inline";
                            if (xmlhttp.responseText.search("SUCCESS") != -1) {

									 Swal.fire({
										 position: "top-end",
									 title:'Attack Sent Successfully', 
									 type: 'info',
									 toast: true,
									  showConfirmButton: false,
									  timer: 4500
									 
									 });
                                
                                attacks();
                                window.setInterval(attacks(), 2000);
                            } else {

								 Swal.fire({
									 position: "top-end",
									 title:'Something is wrong..', 
									 type: 'info',
									 toast: true,
									  showConfirmButton: false,
									  timer: 4500
									 
									 });
                            }
                        }
                    }
                    xmlhttp.open("GET", "complexx/layer7.php?type=start" + "&host=" + host + "&port=" + 80 + "&time=" + time + "&method=" + method + "&totalservers=" + totalservers + "&vip=" + vip, true);
                    xmlhttp.send();
                    attacks();
                }

                function renew(id) {
                    document.getElementById("attackalert").style.display = "none";
                    document.getElementById("attackloader").style.display = "inline";
                    var xmlhttp;
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("attackalert").innerHTML = xmlhttp.responseText;
                            document.getElementById("attackloader").style.display = "none";
                            document.getElementById("attackalert").style.display = "inline";
                            if (xmlhttp.responseText.search("Attack sent successfully") != -1) {
                                attacks();
                            }
                        }
                    }
                    xmlhttp.open("GET", "complexx/layer7.php?type=renew" + "&id=" + id, true);
                    xmlhttp.send();
                    attacks();
                }

                function stop(id) {
                    document.getElementById("attackalert").style.display = "none";
                    document.getElementById("attackloader").style.display = "inline";
                    var xmlhttp;
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("attackalert").innerHTML = xmlhttp.responseText;
                            document.getElementById("attackloader").style.display = "none";
                            document.getElementById("attackalert").style.display = "inline";
                            if (xmlhttp.responseText.search("SUCCESS") != -1) {
								
								 Swal.fire({
									 position: "top-end",
									 title:'Attack Stoped', 
									 type: 'info',
									 toast: true,
									  showConfirmButton: false,
									  timer: 4500
									 
									 });

                                attacks();
                            }
                        }
                    }
                    xmlhttp.open("GET", "complexx/layer7.php?type=stop" + "&id=" + id, true);
                    xmlhttp.send();
                }

            </script>
        </div>
    </div>
</main>
</div>
<!-- END Page Container -->
<?php include('footer.php'); ?>
