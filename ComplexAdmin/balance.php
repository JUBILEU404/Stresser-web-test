<?php

	/// Require the header that already contains the sidebar and top of the website and head body tags
	session_start();
	$page = "balance";
	require_once 'header.php'; 
	
	if(isset($_POST['createnewCard']))
	{
		$amount = $_POST['amount'];

		if(empty($amount))
		{
			$notify = error('amount input was empty!');
		}

		if(empty($notify))
		{
			 /// Generate Gift Code
			$code = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10);
			
			 /// Input to database
			$SQLinsert = $odb -> prepare("INSERT INTO `gifts` VALUES(NULL, :code, :amount, 0, 0, UNIX_TIMESTAMP())");
			$SQLinsert -> execute(array(':code' => $code, ':amount' => $amount));	

			$notify = ' <div class="alert alert-outline-success alert-dismissible">
			 <button type="button" class="close" data-dismiss="alert">&times;</button>
			
			<div class="alert-icon">
			 <i class="fa fa-check"></i>
			</div>
			
			<div class="alert-message">
			  <span><strong>SUCCESS!</strong> New Giftcard has been generated. New code is: '.$code.'</span>
			</div></div>';
		}	
	}
?>
<div class="clearfix"></div>
    <div class="container-fluid">
                
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
				   <div class="row">   
 <?php
		if(isset($notify)){
			echo ($notify);
		}
		?>				   
					   <div class="col-lg-6">
                        <div class="card"> 
                             <div class="card-body">
                               <h3 style="color: white;" class="card-title"></i>Codes</h3>
                                <div>
		          	                        		<form class="form-horizontal push-10-t" method="post">
							<div class="form-group">
								<div class="col-sm-12">
									<div class="form-material">
									<label for="amount">amount</label>
									<input type="text" class="form-control" id="amount" name="amount" placeholder="1$">
										
										
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-9">
									<button name="createnewCard" value="do" class="btn btn-sm btn-primary" type="submit">Submit</button>
								</div>
							</div>
						</form>
                                </div>
                            </div>
                        </div>
                    </div>
										   <div class="col-lg-6">
                         <div class="card"> 
                           <div class="card-body">
                                <h3 style="color: white;" class="card-title"></i>Codes</h3>
                                <div>
								<div class="table-responsive">
			          	<table class="table">
						<tr>
							<th style="font-size: 12px;">Code</th>
							<th class="text-center" style="font-size: 12px;">Amount</th>
							<th class="text-center" style="font-size: 12px;">Claimed By</th>
							<th class="text-center" style="font-size: 12px;">Date Claimed</th>
							<th class="text-center" style="font-size: 12px;">Date Created</th>
						</tr>
						<tr>
						<?php
							$SQLSelect = $odb -> query("SELECT * FROM `gifts` ORDER BY `ID` ASC LIMIT 200");
							while ($show = $SQLSelect -> fetch(PDO::FETCH_ASSOC))
							{
								$ID = $show['unit'];
								$code = $show['code'];
								$amount = $show['bal'];
								$claimedby = $show['claimedby'];
								$status = $show['status'];
								$dateClaimed = $show['dateClaimed'];
								$date = $show['date'];
								if(!($dateClaimed == "0"))
								{
									$dateClaimed = date("m-d-Y, h:i:s a" , $dateClaimed);
								}
								if($claimedby == "0") { $claimedby = "Unclaimed"; }
								if($dateClaimed == "0") { $dateClaimed = "Unclaimed"; }
								$date = date("m-d-Y, h:i:s a" , $date);
								$usernName = $odb->query("SELECT `username` FROM `users` WHERE `ID` = '$claimedby'")->fetchColumn(0);
								echo '<tr">
										<td class="text-center" style="font-size: 12px;">'.$code.'</td>
										<td class="text-center" style="font-size: 12px;">'.htmlentities($amount).'</td>
										<td class="text-center" style="font-size: 12px;">'.htmlentities($usernName).'</td>
										<td class="text-center" style="font-size: 12px;">'.htmlentities($dateClaimed).'</td>
										<td class="text-center" style="font-size: 12px;">'.htmlentities($date).'</td>
									</tr>';
							
							} 
							?>
									</tr>                                       
					</table>
					</div>
                                </div>
                            </div>
                        </div>
                    </div>
					    </div>
                    </div>
					</main>
<?php include('footer.php'); ?>

