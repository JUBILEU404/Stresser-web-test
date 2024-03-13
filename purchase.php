<?php 


	
session_start();
$page = "Purchase";
include 'header.php';
    $runningrip = $odb->query("SELECT COUNT(*) FROM `logs` WHERE `time` + `date` > UNIX_TIMESTAMP() AND `stopped` = 0")->fetchColumn(0);
	$slotsx = $odb->query("SELECT COUNT(*) FROM `api` WHERE `slots`")->fetchColumn(0);

	


		
?>

    <div class="container-fluid">
	
   
   <div class="row">
  


            <div class="col-md-6 col-xl-3">
            <a href="https://shoppy.gg/product/3BOzKhE" class="card block-rounded text-center">
                <div class="card-header">
                    <h3 class="card-title">START / $10</h3>
                </div>                
                <div class="card-body">
                    <p><strong>Concurrents: </strong> <span>1</span></p>
                    <p><strong>Seconds: </strong> <span >600</span></p>
                    <p><strong>Duration: </strong> 1 Months </p>
                    <p><strong>ApiAccess: </strong> <span class="text-success font-w700"></i> No <i class="fa fa-bolt text-secondary"></i></span></p>
					<p><strong> </strong> <strong>Layer 4 </strong><span class="text-success font-w700"></i>  &#10004; </span> </p>
					<p><strong> </strong> <strong>Layer 7 </strong><span class="text-success font-w700"></i> &#10004; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 4 </strong><span class="text-danger font-w700"></i>  &#10006; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 7 </strong><span class="text-danger font-w700"></i>  &#10006;</span> </p>
					<p><strong>TotalServers: </strong> <span >1</span></p>
                </div>
				
               <div class="card-body card-content-full">
                    <img src="https://camperagent.com.au/wp-content/uploads/2017/11/Bitcoin_accepted_here_camperagent-rv-768x293.png" width="200" height="55">
                </div>
            </a>
        </div>						         <div class="modal fade" id="modal-fadein2" tabindex="-1" role="dialog" aria-labelledby="mewtoclet" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
        <div class="card">
        <div class="card-header">
        <h3 class="card-title"><i class="fa fa-server"></i>  Plan Name: (START)</h3>
        <div class="card-options">
        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
        <i class="si si-close"></i>
        </button>
        </div>
        </div>
       <div class="card-body">
                  <div class="card-body">
     <div class="card-body">
	  <form method="post">
																						
											<ul class="list-icons">
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN NAME : <a class="text-center font-w700 h5 text-info"><i class="fa fa-bolt"></i> START</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN PRICE : <a class="text-center text-success h5 font-w700">10</a></td></li>
											   <li><i class="fa fa-chevron-right text-danger"></i> PRICE (Bitcoin) : 0.00029738</li>
											  <li><i class="fa fa-chevron-right text-danger"></i> CONCURRENTS : <a class="text-center font-w700 text-info">1</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> NETWORK : </li>
										
												
												<div class="col-lg-12 m-t-30">
											  </div>
											</ul>
											
										
									  </div>							
									  <div class="modal-footer">

									  </div>
									  </form>

					</div>
            </div>
  			</div>

  						</div>
              <div class="modal-footer" style="background-color: #1E2125;" >
			  	  	<a href="buy_balance.php?id=2"><button name="balance" value="2" class="btn btn-outline btn-info"><i class="fa fa-dollar"></i> Balance</a>
	<a href="order.php?id=2"><button name="balance" value="2" class="btn btn-outline btn-warning"><i class="fa fa-bitcoin"></i> Bitcoin
	<a href="paypl.php?id=2"><button name="balance" value="2" class="btn btn-outline btn-info"><i class="fa fa-paypal"></i>PayPal


            </div>

  					</div>

  				</div>
								<div class="col-md-6 col-xl-3">
            <a href="https://shoppy.gg/product/hOVSgg5" class="card block-rounded text-center">
                <div class="card-header">
                    <h3 class="card-title">SILVER / $20</h3>
                </div>                
                <div class="card-body">
                    <p><strong>Concurrents: </strong> <span>2</span></p>
                    <p><strong>Seconds: </strong> <span >900</span></p>
                    <p><strong>Duration: </strong> 1 Months </p>
                    <p><strong>ApiAccess: </strong> <span class="text-success font-w700"></i> No <i class="fa fa-bolt text-secondary"></i></span></p>
					<p><strong> </strong> <strong>Layer 4 </strong><span class="text-success font-w700"></i>  &#10004; </span> </p>
					<p><strong> </strong> <strong>Layer 7 </strong><span class="text-success font-w700"></i> &#10004; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 4 </strong><span class="text-danger font-w700"></i>  &#10006; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 7 </strong><span class="text-danger font-w700"></i>  &#10006;</span> </p>
					<p><strong>TotalServers: </strong> <span >1</span></p>
                </div>
				
               <div class="card-body card-content-full">
                                       <img src="https://camperagent.com.au/wp-content/uploads/2017/11/Bitcoin_accepted_here_camperagent-rv-768x293.png" width="200" height="55">
                </div>
            </a>
        </div>						         <div class="modal fade" id="modal-fadein3" tabindex="-1" role="dialog" aria-labelledby="mewtoclet" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
        <div class="card">
        <div class="card-header">
        <h3 class="card-title"><i class="fa fa-server"></i>  Plan Name: (SILVER)</h3>
        <div class="card-options">
        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
        <i class="si si-close"></i>
        </button>
        </div>
        </div>
       <div class="card-body">
                  <div class="card-body">
     <div class="card-body">
	  <form method="post">
																						
											<ul class="list-icons">
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN NAME : <a class="text-center font-w700 h5 text-info"><i class="fa fa-bolt"></i> SILVER</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN PRICE : <a class="text-center text-success h5 font-w700">20</a></td></li>
											   <li><i class="fa fa-chevron-right text-danger"></i> PRICE (Bitcoin) : 0.00059476</li>
											  <li><i class="fa fa-chevron-right text-danger"></i> CONCURRENTS : <a class="text-center font-w700 text-info">2</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> NETWORK : </li>
										
												
												<div class="col-lg-12 m-t-30">
											  </div>
											</ul>
											
										
									  </div>							
									  <div class="modal-footer">

									  </div>
									  </form>

					</div>
            </div>
  			</div>

  						</div>
              <div class="modal-footer" style="background-color: #1E2125;" >
			  	  	<a href="buy_balance.php?id=3"><button name="balance" value="3" class="btn btn-outline btn-info"><i class="fa fa-dollar"></i> Balance</a>
	<a href="order.php?id=3"><button name="balance" value="3" class="btn btn-outline btn-warning"><i class="fa fa-bitcoin"></i> Bitcoin
	<a href="paypl.php?id=3"><button name="balance" value="3" class="btn btn-outline btn-info"><i class="fa fa-paypal"></i>PayPal


            </div>

  					</div>

  				</div>
								<div class="col-md-6 col-xl-3">
            <a href="https://shoppy.gg/product/k4aGIEL" class="card block-rounded text-center">
                <div class="card-header">
                    <h3 class="card-title">GOLD / $30</h3>
                </div>                
                <div class="card-body">
                    <p><strong>Concurrents: </strong> <span>3</span></p>
                    <p><strong>Seconds: </strong> <span >1200</span></p>
                    <p><strong>Duration: </strong> 1 Months </p>
                    <p><strong>ApiAccess: </strong> <span class="text-success font-w700"></i> No <i class="fa fa-bolt text-secondary"></i></span></p>
					<p><strong> </strong> <strong>Layer 4 </strong><span class="text-success font-w700"></i>  &#10004; </span> </p>
					<p><strong> </strong> <strong>Layer 7 </strong><span class="text-success font-w700"></i> &#10004; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 4 </strong><span class="text-danger font-w700"></i>  &#10006; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 7 </strong><span class="text-danger font-w700"></i>  &#10006;</span> </p>
					<p><strong>TotalServers: </strong> <span >1</span></p>
                </div>
				
               <div class="card-body card-content-full">
                                       <img src="https://camperagent.com.au/wp-content/uploads/2017/11/Bitcoin_accepted_here_camperagent-rv-768x293.png" width="200" height="55">
                </div>
            </a>
        </div>						         <div class="modal fade" id="modal-fadein4" tabindex="-1" role="dialog" aria-labelledby="mewtoclet" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
        <div class="card">
        <div class="card-header">
        <h3 class="card-title"><i class="fa fa-server"></i>  Plan Name: (GOLD)</h3>
        <div class="card-options">
        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
        <i class="si si-close"></i>
        </button>
        </div>
        </div>
       <div class="card-body">
                  <div class="card-body">
     <div class="card-body">
	  <form method="post">
																						
											<ul class="list-icons">
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN NAME : <a class="text-center font-w700 h5 text-info"><i class="fa fa-bolt"></i> GOLD</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN PRICE : <a class="text-center text-success h5 font-w700">30</a></td></li>
											   <li><i class="fa fa-chevron-right text-danger"></i> PRICE (Bitcoin) : 0.00089214</li>
											  <li><i class="fa fa-chevron-right text-danger"></i> CONCURRENTS : <a class="text-center font-w700 text-info">3</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> NETWORK : </li>
										
												
												<div class="col-lg-12 m-t-30">
											  </div>
											</ul>
											
										
									  </div>							
									  <div class="modal-footer">

									  </div>
									  </form>

					</div>
            </div>
  			</div>

  						</div>
              <div class="modal-footer" style="background-color: #1E2125;" >
			  	  	<a href="buy_balance.php?id=4"><button name="balance" value="4" class="btn btn-outline btn-info"><i class="fa fa-dollar"></i> Balance</a>
	<a href="order.php?id=4"><button name="balance" value="4" class="btn btn-outline btn-warning"><i class="fa fa-bitcoin"></i> Bitcoin
	<a href="paypl.php?id=4"><button name="balance" value="4" class="btn btn-outline btn-info"><i class="fa fa-paypal"></i>PayPal


            </div>

  					</div>

  				</div>
								<div class="col-md-6 col-xl-3">
            <a href="https://shoppy.gg/product/tS9Ktu1" class="card block-rounded text-center">
                <div class="card-header">
                    <h3 class="card-title">ELITE / $40</h3>
                </div>                
                <div class="card-body">
                    <p><strong>Concurrents: </strong> <span>4</span></p>
                    <p><strong>Seconds: </strong> <span >1200</span></p>
                    <p><strong>Duration: </strong> 1 Months </p>
                    <p><strong>ApiAccess: </strong> <span class="text-success font-w700"></i> No <i class="fa fa-bolt text-secondary"></i></span></p>
					<p><strong> </strong> <strong>Layer 4 </strong><span class="text-success font-w700"></i>  &#10004; </span> </p>
					<p><strong> </strong> <strong>Layer 7 </strong><span class="text-success font-w700"></i> &#10004; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 4 </strong><span class="text-danger font-w700"></i>  &#10006; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 7 </strong><span class="text-danger font-w700"></i>  &#10006;</span> </p>
					<p><strong>TotalServers: </strong> <span >1</span></p>
                </div>
				
               <div class="card-body card-content-full">
                                      <img src="https://camperagent.com.au/wp-content/uploads/2017/11/Bitcoin_accepted_here_camperagent-rv-768x293.png" width="200" height="55">
                </div>
            </a>
        </div>						         <div class="modal fade" id="modal-fadein5" tabindex="-1" role="dialog" aria-labelledby="mewtoclet" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
        <div class="card">
        <div class="card-header">
        <h3 class="card-title"><i class="fa fa-server"></i>  Plan Name: (ELITE)</h3>
        <div class="card-options">
        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
        <i class="si si-close"></i>
        </button>
        </div>
        </div>
       <div class="card-body">
                  <div class="card-body">
     <div class="card-body">
	  <form method="post">
																						
											<ul class="list-icons">
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN NAME : <a class="text-center font-w700 h5 text-info"><i class="fa fa-bolt"></i> ELITE</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN PRICE : <a class="text-center text-success h5 font-w700">40</a></td></li>
											   <li><i class="fa fa-chevron-right text-danger"></i> PRICE (Bitcoin) : 0.00118953</li>
											  <li><i class="fa fa-chevron-right text-danger"></i> CONCURRENTS : <a class="text-center font-w700 text-info">4</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> NETWORK : </li>
										
												
												<div class="col-lg-12 m-t-30">
											  </div>
											</ul>
											
										
									  </div>							
									  <div class="modal-footer">

									  </div>
									  </form>

					</div>
            </div>
  			</div>

  						</div>
              <div class="modal-footer" style="background-color: #1E2125;" >
			  	  	<a href="buy_balance.php?id=5"><button name="balance" value="5" class="btn btn-outline btn-info"><i class="fa fa-dollar"></i> Balance</a>
	<a href="order.php?id=5"><button name="balance" value="5" class="btn btn-outline btn-warning"><i class="fa fa-bitcoin"></i> Bitcoin
	<a href="paypl.php?id=5"><button name="balance" value="5" class="btn btn-outline btn-info"><i class="fa fa-paypal"></i>PayPal


            </div>

  					</div>

  				</div>
								<div class="col-md-6 col-xl-3">
            <a href="https://shoppy.gg/product/bJ8k3G6" class="card block-rounded text-center">
                <div class="card-header">
                    <h3 class="card-title">START [VIP] / $40</h3>
                </div>                
                <div class="card-body">
                    <p><strong>Concurrents: </strong> <span>2</span></p>
                    <p><strong>Seconds: </strong> <span >600</span></p>
                    <p><strong>Duration: </strong> 1 Months </p>
                    <p><strong>ApiAccess: </strong> <span class="text-primary font-w700"></i> Yes <i class="si si-fire text-success"></i></span></p>
					<p><strong> </strong> <strong>Layer 4 </strong><span class="text-success font-w700"></i>  &#10004; </span> </p>
					<p><strong> </strong> <strong>Layer 7 </strong><span class="text-success font-w700"></i> &#10004; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 4 </strong><span class="text-success font-w700"></i>  &#10004; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 7 </strong><span class="text-success font-w700"></i>  &#10004;</span> </p>
					<p><strong>TotalServers: </strong> <span >2</span></p>
                </div>
				
               <div class="card-body card-content-full">
                                      <img src="https://camperagent.com.au/wp-content/uploads/2017/11/Bitcoin_accepted_here_camperagent-rv-768x293.png" width="200" height="55">
                </div>
            </a>
        </div>						         <div class="modal fade" id="modal-fadein6" tabindex="-1" role="dialog" aria-labelledby="mewtoclet" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
        <div class="card">
        <div class="card-header">
        <h3 class="card-title"><i class="fa fa-server"></i>  Plan Name: (START [VIP])</h3>
        <div class="card-options">
        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
        <i class="si si-close"></i>
        </button>
        </div>
        </div>
       <div class="card-body">
                  <div class="card-body">
     <div class="card-body">
	  <form method="post">
																						
											<ul class="list-icons">
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN NAME : <a class="text-center font-w700 h5 text-info"><i class="fa fa-bolt"></i> START [VIP]</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN PRICE : <a class="text-center text-success h5 font-w700">40</a></td></li>
											   <li><i class="fa fa-chevron-right text-danger"></i> PRICE (Bitcoin) : 0.00118953</li>
											  <li><i class="fa fa-chevron-right text-danger"></i> CONCURRENTS : <a class="text-center font-w700 text-info">2</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> NETWORK : </li>
										
												
												<div class="col-lg-12 m-t-30">
											  </div>
											</ul>
											
										
									  </div>							
									  <div class="modal-footer">

									  </div>
									  </form>

					</div>
            </div>
  			</div>

  						</div>
              <div class="modal-footer" style="background-color: #1E2125;" >
			  	  	<a href="buy_balance.php?id=6"><button name="balance" value="6" class="btn btn-outline btn-info"><i class="fa fa-dollar"></i> Balance</a>
	<a href="order.php?id=6"><button name="balance" value="6" class="btn btn-outline btn-warning"><i class="fa fa-bitcoin"></i> Bitcoin
	<a href="paypl.php?id=6"><button name="balance" value="6" class="btn btn-outline btn-info"><i class="fa fa-paypal"></i>PayPal


            </div>

  					</div>

  				</div>
								<div class="col-md-6 col-xl-3">
            <a href="https://shoppy.gg/product/xveiYF7" class="card block-rounded text-center">
                <div class="card-header">
                    <h3 class="card-title">SILVER [VIP] / $90</h3>
                </div>                
                <div class="card-body">
                    <p><strong>Concurrents: </strong> <span>4</span></p>
                    <p><strong>Seconds: </strong> <span >1000</span></p>
                    <p><strong>Duration: </strong> 1 Months </p>
                    <p><strong>ApiAccess: </strong> <span class="text-primary font-w700"></i> Yes <i class="si si-fire text-success"></i></span></p>
					<p><strong> </strong> <strong>Layer 4 </strong><span class="text-success font-w700"></i>  &#10004; </span> </p>
					<p><strong> </strong> <strong>Layer 7 </strong><span class="text-success font-w700"></i> &#10004; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 4 </strong><span class="text-success font-w700"></i>  &#10004; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 7 </strong><span class="text-success font-w700"></i>  &#10004;</span> </p>
					<p><strong>TotalServers: </strong> <span >2</span></p>
                </div>
				
               <div class="card-body card-content-full">
                                      <img src="https://camperagent.com.au/wp-content/uploads/2017/11/Bitcoin_accepted_here_camperagent-rv-768x293.png" width="200" height="55">
                </div>
            </a>
        </div>						         <div class="modal fade" id="modal-fadein7" tabindex="-1" role="dialog" aria-labelledby="mewtoclet" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
        <div class="card">
        <div class="card-header">
        <h3 class="card-title"><i class="fa fa-server"></i>  Plan Name: (SILVER [VIP])</h3>
        <div class="card-options">
        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
        <i class="si si-close"></i>
        </button>
        </div>
        </div>
       <div class="card-body">
                  <div class="card-body">
     <div class="card-body">
	  <form method="post">
																						
											<ul class="list-icons">
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN NAME : <a class="text-center font-w700 h5 text-info"><i class="fa fa-bolt"></i> SILVER [VIP]</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN PRICE : <a class="text-center text-success h5 font-w700">90</a></td></li>
											   <li><i class="fa fa-chevron-right text-danger"></i> PRICE (Bitcoin) : 0.00267643</li>
											  <li><i class="fa fa-chevron-right text-danger"></i> CONCURRENTS : <a class="text-center font-w700 text-info">4</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> NETWORK : </li>
										
												
												<div class="col-lg-12 m-t-30">
											  </div>
											</ul>
											
										
									  </div>							
									  <div class="modal-footer">

									  </div>
									  </form>

					</div>
            </div>
  			</div>

  						</div>
              <div class="modal-footer" style="background-color: #1E2125;" >
			  	  	<a href="buy_balance.php?id=7"><button name="balance" value="7" class="btn btn-outline btn-info"><i class="fa fa-dollar"></i> Balance</a>
	<a href="order.php?id=7"><button name="balance" value="7" class="btn btn-outline btn-warning"><i class="fa fa-bitcoin"></i> Bitcoin
	<a href="paypl.php?id=7"><button name="balance" value="7" class="btn btn-outline btn-info"><i class="fa fa-paypal"></i>PayPal


            </div>

  					</div>

  				</div>
								<div class="col-md-6 col-xl-3">
            <a href="https://shoppy.gg/product/S71MoFX" class="card block-rounded text-center">
                <div class="card-header">
                    <h3 class="card-title">GOLD [VIP] / $140</h3>
                </div>                
                <div class="card-body">
                    <p><strong>Concurrents: </strong> <span>8</span></p>
                    <p><strong>Seconds: </strong> <span >1200</span></p>
                    <p><strong>Duration: </strong> 1 Months </p>
                    <p><strong>ApiAccess: </strong> <span class="text-primary font-w700"></i> Yes <i class="si si-fire text-success"></i></span></p>
					<p><strong> </strong> <strong>Layer 4 </strong><span class="text-success font-w700"></i>  &#10004; </span> </p>
					<p><strong> </strong> <strong>Layer 7 </strong><span class="text-success font-w700"></i> &#10004; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 4 </strong><span class="text-success font-w700"></i>  &#10004; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 7 </strong><span class="text-success font-w700"></i>  &#10004;</span> </p>
					<p><strong>TotalServers: </strong> <span >2</span></p>
                </div>
				
               <div class="card-body card-content-full">
                                        <img src="https://camperagent.com.au/wp-content/uploads/2017/11/Bitcoin_accepted_here_camperagent-rv-768x293.png" width="200" height="55">
                </div>
            </a>
        </div>						         <div class="modal fade" id="modal-fadein8" tabindex="-1" role="dialog" aria-labelledby="mewtoclet" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
        <div class="card">
        <div class="card-header">
        <h3 class="card-title"><i class="fa fa-server"></i>  Plan Name: (GOLD [VIP])</h3>
        <div class="card-options">
        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
        <i class="si si-close"></i>
        </button>
        </div>
        </div>
       <div class="card-body">
                  <div class="card-body">
     <div class="card-body">
	  <form method="post">
																						
											<ul class="list-icons">
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN NAME : <a class="text-center font-w700 h5 text-info"><i class="fa fa-bolt"></i> GOLD [VIP]</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN PRICE : <a class="text-center text-success h5 font-w700">140</a></td></li>
											   <li><i class="fa fa-chevron-right text-danger"></i> PRICE (Bitcoin) : 0.00416334</li>
											  <li><i class="fa fa-chevron-right text-danger"></i> CONCURRENTS : <a class="text-center font-w700 text-info">8</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> NETWORK : </li>
										
												
												<div class="col-lg-12 m-t-30">
											  </div>
											</ul>
											
										
									  </div>							
									  <div class="modal-footer">

									  </div>
									  </form>

					</div>
            </div>
  			</div>

  						</div>
              <div class="modal-footer" style="background-color: #1E2125;" >
			  	  	<a href="buy_balance.php?id=8"><button name="balance" value="8" class="btn btn-outline btn-info"><i class="fa fa-dollar"></i> Balance</a>
	<a href="order.php?id=8"><button name="balance" value="8" class="btn btn-outline btn-warning"><i class="fa fa-bitcoin"></i> Bitcoin
	<a href="paypl.php?id=8"><button name="balance" value="8" class="btn btn-outline btn-info"><i class="fa fa-paypal"></i>PayPal


            </div>

  					</div>

  				</div>
								<div class="col-md-6 col-xl-3">
            <a href="https://shoppy.gg/product/13SIMV2" class="card block-rounded text-center">
                <div class="card-header">
                    <h3 class="card-title">ELITE [VIP] / $210</h3>
                </div>                
                <div class="card-body">
                    <p><strong>Concurrents: </strong> <span>10</span></p>
                    <p><strong>Seconds: </strong> <span >3600</span></p>
                    <p><strong>Duration: </strong> 1 Months </p>
                    <p><strong>ApiAccess: </strong> <span class="text-primary font-w700"></i> Yes <i class="si si-fire text-success"></i></span></p>
					<p><strong> </strong> <strong>Layer 4 </strong><span class="text-success font-w700"></i>  &#10004; </span> </p>
					<p><strong> </strong> <strong>Layer 7 </strong><span class="text-success font-w700"></i> &#10004; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 4 </strong><span class="text-success font-w700"></i>  &#10004; </span> </p>
					<p><strong> </strong> <strong>Bypass Layer 7 </strong><span class="text-success font-w700"></i>  &#10004;</span> </p>
					<p><strong>TotalServers: </strong> <span >3</span></p>
                </div>
				
               <div class="card-body card-content-full">
                                        <img src="https://camperagent.com.au/wp-content/uploads/2017/11/Bitcoin_accepted_here_camperagent-rv-768x293.png" width="200" height="55">
                </div>
            </a>
        </div>						         <div class="modal fade" id="modal-fadein9" tabindex="-1" role="dialog" aria-labelledby="mewtoclet" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
        <div class="card">
        <div class="card-header">
        <h3 class="card-title"><i class="fa fa-server"></i>  Plan Name: (ELITE [VIP])</h3>
        <div class="card-options">
        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
        <i class="si si-close"></i>
        </button>
        </div>
        </div>
       <div class="card-body">
                  <div class="card-body">
     <div class="card-body">
	  <form method="post">
																						
											<ul class="list-icons">
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN NAME : <a class="text-center font-w700 h5 text-info"><i class="fa fa-bolt"></i> ELITE [VIP]</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> PLAN PRICE : <a class="text-center text-success h5 font-w700">210</a></td></li>
											   <li><i class="fa fa-chevron-right text-danger"></i> PRICE (Bitcoin) : 0.00624501</li>
											  <li><i class="fa fa-chevron-right text-danger"></i> CONCURRENTS : <a class="text-center font-w700 text-info">10</a></li>
											  <li><i class="fa fa-chevron-right text-danger"></i> NETWORK : </li>
										
												
												<div class="col-lg-12 m-t-30">
											  </div>
											</ul>
											
										
									  </div>							
									  <div class="modal-footer">

									  </div>
									  </form>

					</div>
            </div>
  			</div>

  						</div>
              <div class="modal-footer" style="background-color: #1E2125;" >
			  	  	<a href="buy_balance.php?id=9"><button name="balance" value="9" class="btn btn-outline btn-info"><i class="fa fa-dollar"></i> Balance</a>
	<a href="order.php?id=9"><button name="balance" value="9" class="btn btn-outline btn-warning"><i class="fa fa-bitcoin"></i> Bitcoin
	<a href="paypl.php?id=9"><button name="balance" value="9" class="btn btn-outline btn-info"><i class="fa fa-paypal"></i>PayPal


            </div>

  					</div>

  				</div>
								                      
                        <!-- end row -->


                   
        </div>
    </main>
</div>
 <!-- END Page Container -->
<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 Stressing.eu Make with <i class="fas fa-heart text-danger"></i>
        </div>
      </div>
    </footer>
        
 <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>
       <!--Chartist Chart-->
        <script src="plugins/chartist/js/chartist.min.js"></script>
        <script src="plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>

        <!-- peity JS -->
        <script src="plugins/peity-chart/jquery.peity.min.js"></script>
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
  <!-- Vector map JavaScript -->
  <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Easy Pie Chart JS -->
  <script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <!-- Sparkline JS -->
  <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
  <script src="assets/plugins/jquery-knob/excanvas.js"></script>
  <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/js-cookie@2.2.0/src/js.cookie.min.js"></script>
 
		  <!--Switchery Js-->
    <script src="assets/plugins/switchery/js/switchery.min.js"></script>
    <script>
      var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
      $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
       });
    </script>

    <!--Bootstrap Switch Buttons-->
    <script src="assets/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
    <script>
    $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
    var radioswitch = function() {
        var bt = function() {
            $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioState")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
            })
        };
        return {
            init: function() {
                bt()
            }
        }
    }();
    $(document).ready(function() {
        radioswitch.init()
    });
    </script>
		 <script type="text/javascript">
            $(function () {
                var i = -1;
                var toastCount = 0;
                var $toastlast;

                var getMessage = function () {
                    var msgs = ['My name is Inigo Montoya. You killed my father. Prepare to die!',
                        'Are you the six fingered man?',
                        'Inconceivable!',
                        'I do not think that means what you think it means.',
                        'Have fun storming the castle!'
                    ];
                    i++;
                    if (i === msgs.length) {
                        i = 0;
                    }

                    return msgs[i];
                };

                var getMessageWithClearButton = function (msg) {
                    msg = msg ? msg : 'Clear itself?';
                    msg += '<br /><br /><button type="button" class="btn btn-default clear">Yes</button>';
                    return msg;
                };

                $('#showtoast').click(function () {
                    var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
                    var msg = $('#message1').val();
                    var title = $('#title').val() || '';
                    var $showDuration = $('#showDuration');
                    var $hideDuration = $('#hideDuration');
                    var $timeOut = $('#timeOut');
                    var $extendedTimeOut = $('#extendedTimeOut');
                    var $showEasing = $('#showEasing');
                    var $hideEasing = $('#hideEasing');
                    var $showMethod = $('#showMethod');
                    var $hideMethod = $('#hideMethod');
                    var toastIndex = toastCount++;
                    var addClear = $('#addClear').prop('checked');

                    toastr.options = {
                        closeButton: $('#closeButton').prop('checked'),
                        debug: $('#debugInfo').prop('checked'),
                        newestOnTop: $('#newestOnTop').prop('checked'),
                        progressBar: $('#progressBar').prop('checked'),
                        positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
                        preventDuplicates: $('#preventDuplicates').prop('checked'),
                        onclick: null
                    };

                    if ($('#addBehaviorOnToastClick').prop('checked')) {
                        toastr.options.onclick = function () {
                            alert('You can perform some custom action after a toast goes away');
                        };
                    }

                    if ($showDuration.val().length) {
                        toastr.options.showDuration = $showDuration.val();
                    }

                    if ($hideDuration.val().length) {
                        toastr.options.hideDuration = $hideDuration.val();
                    }

                    if ($timeOut.val().length) {
                        toastr.options.timeOut = addClear ? 0 : $timeOut.val();
                    }

                    if ($extendedTimeOut.val().length) {
                        toastr.options.extendedTimeOut = addClear ? 0 : $extendedTimeOut.val();
                    }

                    if ($showEasing.val().length) {
                        toastr.options.showEasing = $showEasing.val();
                    }

                    if ($hideEasing.val().length) {
                        toastr.options.hideEasing = $hideEasing.val();
                    }

                    if ($showMethod.val().length) {
                        toastr.options.showMethod = $showMethod.val();
                    }

                    if ($hideMethod.val().length) {
                        toastr.options.hideMethod = $hideMethod.val();
                    }

                    if (addClear) {
                        msg = getMessageWithClearButton(msg);
                        toastr.options.tapToDismiss = false;
                    }
                    if (!msg) {
                        msg = getMessage();
                    }

                    $('#toastrOptions').text('Command: toastr["'
                            + shortCutFunction
                            + '"]("'
                            + msg
                            + (title ? '", "' + title : '')
                            + '")\n\ntoastr.options = '
                            + JSON.stringify(toastr.options, null, 2)
                    );

                    var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
                    $toastlast = $toast;

                    if (typeof $toast === 'undefined') {
                        return;
                    }

                    if ($toast.find('#okBtn').length) {
                        $toast.delegate('#okBtn', 'click', function () {
                            alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                            $toast.remove();
                        });
                    }
                    if ($toast.find('#surpriseBtn').length) {
                        $toast.delegate('#surpriseBtn', 'click', function () {
                            alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                        });
                    }
                    if ($toast.find('.clear').length) {
                        $toast.delegate('.clear', 'click', function () {
                            toastr.clear($toast, {force: true});
                        });
                    }
                });

                function getLastToast() {
                    return $toastlast;
                }

                $('#clearlasttoast').click(function () {
                    toastr.clear(getLastToast());
                });
                $('#cleartoasts').click(function () {
                    toastr.clear();
                });
            })
        </script>
		
	       <script>
            jQuery(document).ready(function() {

                //advance multiselect start
                $('#my_multi_select3').multiSelect({
                    selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    afterInit: function (ms) {
                        var that = this,
                                $selectableSearch = that.$selectableUl.prev(),
                                $selectionSearch = that.$selectionUl.prev(),
                                selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                                selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                                .on('keydown', function (e) {
                                    if (e.which === 40) {
                                        that.$selectableUl.focus();
                                        return false;
                                    }
                                });

                        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                                .on('keydown', function (e) {
                                    if (e.which == 40) {
                                        that.$selectionUl.focus();
                                        return false;
                                    }
                                });
                    },
                    afterSelect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });

                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });

            });

            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary",
                verticalupclass: 'ti-plus',
                verticaldownclass: 'ti-minus'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }

            $("input[name='demo1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary",
                postfix: '%'
            });
            $("input[name='demo2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary",
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='demo3']").TouchSpin({
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });
            $("input[name='demo3_21']").TouchSpin({
                initval: 40,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });
            $("input[name='demo3_22']").TouchSpin({
                initval: 40,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });

            $("input[name='demo5']").TouchSpin({
                prefix: "pre",
                postfix: "post",
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });
            $("input[name='totalservers']").TouchSpin({
            });
			 $("input[name='money']").TouchSpin({
            });

            // Time Picker
            jQuery('#timepicker').timepicker({
                defaultTIme : false,
                icons: {
                    up: 'mdi mdi-chevron-up',
                    down: 'mdi mdi-chevron-down'
                }
            });
            jQuery('#timepicker2').timepicker({
                showMeridian : false,
                icons: {
                    up: 'mdi mdi-chevron-up',
                    down: 'mdi mdi-chevron-down'
                }
            });
            jQuery('#timepicker3').timepicker({
                minuteStep : 15,
                icons: {
                    up: 'mdi mdi-chevron-up',
                    down: 'mdi mdi-chevron-down'
                }
            });

            //colorpicker start

            $('.colorpicker-default').colorpicker({
                format: 'hex'
            });
            $('.colorpicker-rgba').colorpicker();

            // Date Picker
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            jQuery('#datepicker-inline').datepicker();
            jQuery('#datepicker-multiple-date').datepicker({
                format: "mm/dd/yyyy",
                clearBtn: true,
                multidate: true,
                multidateSeparator: ","
            });
            jQuery('#date-range').datepicker({
                toggleActive: true
            });

            //Date range picker
            $('.input-daterange-datepicker').daterangepicker({
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-secondary',
                cancelClass: 'btn-primary'
            });
            $('.input-daterange-timepicker').daterangepicker({
                timePicker: true,
                format: 'MM/DD/YYYY h:mm A',
                timePickerIncrement: 30,
                timePicker12Hour: true,
                timePickerSeconds: false,
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-secondary',
                cancelClass: 'btn-primary'
            });
            $('.input-limit-datepicker').daterangepicker({
                format: 'MM/DD/YYYY',
                minDate: '06/01/2016',
                maxDate: '06/30/2016',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-secondary',
                cancelClass: 'btn-primary',
                dateLimit: {
                    days: 6
                }
            });

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2016',
                maxDate: '12/31/2016',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-success',
                cancelClass: 'btn-secondary',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            //Bootstrap-MaxLength
            $('input#defaultconfig').maxlength({
                warningClass: "badge badge-success",
                limitReachedClass: "badge badge-danger"
            });

            $('input#thresholdconfig').maxlength({
                threshold: 20,
                warningClass: "badge badge-success",
                limitReachedClass: "badge badge-danger"
            });

            $('input#moreoptions').maxlength({
                alwaysShow: true,
                warningClass: "badge badge-success",
                limitReachedClass: "badge badge-danger"
            });

            $('input#alloptions').maxlength({
                alwaysShow: true,
                warningClass: "badge badge-success",
                limitReachedClass: "badge badge-danger",
                separator: ' out of ',
                preText: 'You typed ',
                postText: ' chars available.',
                validate: true
            });

            $('textarea#textarea').maxlength({
                alwaysShow: true,
                warningClass: "badge badge-success",
                limitReachedClass: "badge badge-danger"
            });

            $('input#placement').maxlength({
                alwaysShow: true,
                placement: 'top-left',
                warningClass: "badge badge-success",
                limitReachedClass: "badge badge-danger"
            });
        </script>
		<script>
var BePagesDashboard=function() {
    var a=function() {
        Chart.defaults.global.defaultFontColor="#555555",
        Chart.defaults.scale.gridLines.color="transparent",
        Chart.defaults.scale.gridLines.zeroLineColor="transparent",
        Chart.defaults.scale.display=!1,
        Chart.defaults.scale.ticks.beginAtZero=!0,
        Chart.defaults.global.elements.line.borderWidth=2,
        Chart.defaults.global.elements.point.radius=5,
        Chart.defaults.global.elements.point.hoverRadius=7,
        Chart.defaults.global.tooltips.cornerRadius=3,
        Chart.defaults.global.legend.display=!1;
        var a,
        e,
        r=jQuery("#graph"),
        l= {
            labels:["15/01/2021",
            "16/01/2021",
            "17/01/2021",
            "18/01/2021",
            "19/01/2021",
            "20/01/2021",
            "21/01/2021"],
            datasets:[ {
                label: "This Week", fill: !0, backgroundColor: "rgba(1,229,148,.25)", borderColor: "rgba(1,229,148,1)", pointBackgroundColor: "rgba(1,229,148,1)", pointBorderColor: "#fff", pointHoverBackgroundColor: "#fff", pointHoverBorderColor: "rgba(1,229,148,1)", data: [0, 0, 0, 0, 0, 0, 31]
            }
            ]
        }
        ,
        t= {
            scales: {
                yAxes:[ {
                    ticks: {
                        suggestedMax: 50
                    }
                }
                ]
            }
            ,
            tooltips: {
                callbacks: {
                    label:function(a, e) {
                        return" "+a.yLabel+" Attacks"
                    }
                }
            }
        }
        ,
        n= {
            scales: {
                yAxes:[ {
                    ticks: {
                        suggestedMax: 480
                    }
                }
                ]
            }
            ,
            tooltips: {
                callbacks: {
                    label:function(a, e) {
                        return" $ "+a.yLabel
                    }
                }
            }
        }
        ;
        r.length&&(a=new Chart(r, {
            type: "line", data: l, options: t
        }
        ))
    }
    ;
    return {
        init:function() {
            a()
        }
    }
}

();
jQuery(function() {
    BePagesDashboard.init()
}

);
</script>

<script>
        new Chartist.Line('#chart-attacks', {
			labels:["15/01/2021",
            "16/01/2021",
            "17/01/2021",
            "18/01/2021",
            "19/01/2021",
            "20/01/2021",
            "21/01/2021"],
          series: [
            [
              24,
              64,
              69,
              114,
              103,
              109,
              82            ]
          ]
        }, {
          low: 0,
          showArea: true,
          plugins: [
            Chartist.plugins.tooltip()
          ]
        });
        </script>
<script>
var BePagesDashboard=function() {
    var a=function() {
        Chart.defaults.global.defaultFontColor="#555555",
        Chart.defaults.scale.gridLines.color="transparent",
        Chart.defaults.scale.gridLines.zeroLineColor="transparent",
        Chart.defaults.scale.display=!1,
        Chart.defaults.scale.ticks.beginAtZero=!0,
        Chart.defaults.global.elements.line.borderWidth=2,
        Chart.defaults.global.elements.point.radius=5,
        Chart.defaults.global.elements.point.hoverRadius=7,
        Chart.defaults.global.tooltips.cornerRadius=3,
        Chart.defaults.global.legend.display=!1;
        var a,
        e,
        r=jQuery("#chart-attacks"),
        l= {
            labels:["15/01/2021",
            "16/01/2021",
            "17/01/2021",
            "18/01/2021",
            "19/01/2021",
            "20/01/2021",
            "21/01/2021"],
            datasets:[ {
                label: "This Week", fill: !0, backgroundColor: "rgba(1,229,148,.25)", borderColor: "rgba(1,229,148,1)", pointBackgroundColor: "rgba(1,229,148,1)", pointBorderColor: "#fff", pointHoverBackgroundColor: "#fff", pointHoverBorderColor: "rgba(1,229,148,1)", data: [0, 0, 0, 0, 0, 0, 31]
            }
            ]
        }
        ,
        t= {
            scales: {
                yAxes:[ {
                    ticks: {
                        suggestedMax: 50
                    }
                }
                ]
            }
            ,
            tooltips: {
                callbacks: {
                    label:function(a, e) {
                        return" "+a.yLabel+" Attacks"
                    }
                }
            }
        }
        ,
        n= {
            scales: {
                yAxes:[ {
                    ticks: {
                        suggestedMax: 480
                    }
                }
                ]
            }
            ,
            tooltips: {
                callbacks: {
                    label:function(a, e) {
                        return" $ "+a.yLabel
                    }
                }
            }
        }
        ;
        r.length&&(a=new Chart(r, {
            type: "line", data: l, options: t
        }
        ))
    }
    ;
    return {
        init:function() {
            a()
        }
    }
}

();
jQuery(function() {
    BePagesDashboard.init()
}

);
</script>    
<script src="https://shoppy.gg/api/embed.js"></script>

</body></html>      