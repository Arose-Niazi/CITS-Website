<?php
	session_start();
 ?>
<!DOCTYPE HTML>
<head>
	<?php
    	include('includes/header.php');
	?>
	<script src="Ajax/jquery.min.js"></script>
	<script src="Ajax/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<!--Navbar-->
<?php
   include('includes/nav.php');
?>
<!--Body-->
<body>
    <div class="fluid-container">
        <div class="partition">
            <span class="container text-center">FAQs..</span>
        </div>
    </div>
		<div class="container main-body">
			<div id="accordion">
				<div class="card">
					<!--Q 1-->
					<div class="card-header">
						<a class="card-link" data-toggle="collapse" href="#collapsezero" style="color: rgb(56,122,216); font-weight: bold;">
							Where you can find us?
						</a>
					</div>
					<!--A 1-->
					<div id="collapsezero" class="collapse" data-parent="#accordion">
						<div class="card-body">
							<b>You can visit following branches</b>
							<ul>
								<li>
									<b>Mianwali Branch</b>
									</br>
									Head Office: Zilla Council Market, Mianwali
									</br>
									Contact: 0900-7860111
								</li>
								</br>
								<li>
									<b>Washington Branch</b>
									</br>
									Shop no.9-11 World Trade Center, Bin Ladin Road,Pattoki
									</br>
									Contact: 0900-7860111
								</li>
								</br>
								<li>
									<b>Bermuda Branch</b>
									</br>
									Shop no.00 Bermuda Triangle,Atlantic Road,Muridke
									</br>
									Contact: 0900-7860111
								</li>
								</br>
								<li>
									<b>Titanic Branch</b>
									</br>
									Shop no.1912 Deep down Atlantic Ocean,Hafizabad
									</br>
									Contact: 0900-7860111
								</li>
							</ul>
						</div>
					</div>
					<!--Q 2-->
					<div class="card-header">
						<a class="card-link" data-toggle="collapse" href="#collapsepointfive" style="color: rgb(56,122,216); font-weight: bold;">
							How can you buy our members?
						</a>
					</div>
					<!--A 2-->
					<div id="collapsepointfive" class="collapse" data-parent="#accordion">
						<div class="card-body">
							<b>You can order by following methods</b>
							<ul>
								<li><b>Shop:</b> Visit any branch to buy our members immediately.</li>
								<li><b>Online:</b> Visit our website and place your order online.</li>
								<li><b>Phone:</b> You can contact us on phone for orders.</li>
							</ul>
						</div>
					</div>
					<!--Q 3-->
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseOne" style="color: rgb(56,122,216); font-weight: bold;">
							What are pesticides and how are they used?
						</a>
					</div>
					<!--A 3-->
					<div id="collapseOne" class="collapse" data-parent="#accordion">
						<div class="card-body">
							Pesticides are chemicals that are tactically applied to organic and conventional crops in order to protect them from insects, rodents, weeds and types of fungal growths. The use of pesticides must be documented by farmers and is regulated by several government agencies worldwide
							</br>
							A member label may not say what you are not allowed to do with it. Labels usually only list how you are allowed to use the member.        
						</div>
					</div>
					<!--Q 4-->
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="color: rgb(56,122,216); font-weight: bold;">
							Are there other benefits to using pesticides to consider?
						</a>
					</div>
					<!--A 4-->
					<div id="collapseTwo" class="collapse" data-parent="#accordion">
						<div class="card-body">
							By keeping pests and weeds at bay, the use of pesticides helps farmers to produce high-quality fruits and vegetables quicker and with greater yields. Pesticides also increase the shelf life of several crops because they help to prevent the growth of mold and mildew that can increase spoilage. This reduces the cost of your favorite fruits and vegetables and can make them safer to eat.        
						</div>
					</div>
					<!--Q 5-->
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree" style="color: rgb(56,122,216); font-weight: bold;">
						How long will A pesticide stay in my yard?
						</a>
					</div>
					<!--A 5-->
					<div id="collapseThree" class="collapse" data-parent="#accordion">
						<div class="card-body">
							The breakdown of A chemical is measured by its half-life. Each ingredient will move differently in the environment. Pesticide ingredients vary in their potential to dissolve, vaporize, bind to soils, or enter groundwater.
							</br>
							If you have an herbicide, use the Herbicide Properties Tool to find how it might move in the environment        
						</div>
					</div>
					<!--Q 6-->
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapsefour" style="color: rgb(56,122,216); font-weight: bold;">
							How should I mix or apply this member?
						</a>
					</div>
					<!--A 6-->
					<div id="collapsefour" class="collapse" data-parent="#accordion">
						<div class="card-body">
							Consider looking for the signal word "CAUTION" on A label to know it's A low-toxicity member. You may also consider looking for pesticides with certain qualified ingredients that are called minimum risk pesticides.
							</br>
							Consider reducing the need for pesticides by using A combination of methods for control. You may be able to receive free pest control advice from A Master Gardener or another local expert by calling your Cooperative Extension Service. 
							</br>
							If you have an herbicide, use the Herbicide Properties Tool to find how it might move in the environment        
						</div>
					</div>
					<!--<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href=	"#collapsefive" style="color: rgb(56,122,216); font-weight: bold;">
							How do I find the lowest toxicity members?
						</a>
					</div>
					<div id="collapsefive" class="collapse" data-parent="#accordion">
						<div class="card-body">
							Consider looking for the signal word "CAUTION" on A label to know it's A low-toxicity member. You may also consider looking for pesticides with certain qualified ingredients that are called minimum risk pesticides.
							</br>
							Consider reducing the need for pesticides by using A combination of methods for control. You may be able to receive free pest control advice from A Master Gardener or another local expert by calling your Cooperative Extension Service. 
							</br>
							If you have an herbicide, use the Herbicide Properties Tool to find how it might move in the environment        
						</div>
					</div>
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseseven" style="color: rgb(56,122,216); font-weight: bold;">
							Do pesticides build up on the fruits and vegetables we eat, and how long do the residues last?
						</a>
					</div>
					<div id="collapseseven" class="collapse" data-parent="#accordion">
						<div class="card-body">
							Some fruits and vegetables do have minute amounts of pesticide residues present on them. Pesticides can remain on food for A short time. Over time, exposure to oxygen and sunlight will cause the residues to break down and dissipate. By the time the food gets to you, there is little-to-no residue left. Crops are constantly tested to make sure the residues are low and that the food that reaches us is safe.
						</div>
					</div>
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseeight" style="color: rgb(56,122,216); font-weight: bold;">
							Is there anything being done to reduce the amount of pesticides used by farmers?
						</a>
					</div>
					<div id="collapseeight" class="collapse" data-parent="#accordion">
						<div class="card-body">
							While farmers do not douse their crops with pesticides, over the years, farmers have developed A technique known as IPM which combines the use of physical, biological, and chemical pest controls. This allows farmers to use fewer pesticides and maintain reliable crop yields—this is profitable for the farmer but is also better for the environment.
						</div>
					</div>
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapsenine" style="color: rgb(56,122,216); font-weight: bold;">
							Do pesticides hurt kids and pets?      
						</a>
					</div>
					<div id="collapsenine" class="collapse" data-parent="#accordion">
						<div class="card-body">
							Yes. All rodenticides can be toxic to people and animals when eaten. Be aware that pets could be poisoned from eating poisoned prey. Think about how A pet might be exposed to the member based on where it is stored or applied. Bait stations may not be 100% pet-proof
						</div>
					</div>
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseten" style="color: rgb(56,122,216); font-weight: bold;">
							How can I protect my pets when using pesticides around them?
						</a>
					</div>
					<div id="collapseten" class="collapse" data-parent="#accordion">
						<div class="card-body">
							Pets tend to be curious. Remove pets and their toys from an area before treatment. Keep pets away from treated areas until A member has dried and the area has been well ventilated. The label may contain more instructions.	
						</div>
					</div>
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseeleven" style="color: rgb(56,122,216); font-weight: bold;">
							How can I wash out pesticides from dirty work clothes?
						</a>
					</div>
					<div id="collapseeleven" class="collapse" data-parent="#accordion">
						<div class="card-body">        
							Handle dirty clothes with gloves and keep them in A bag away from pets and children until they can be washed. Wash the clothing separately from family laundry to prevent cross-contamination
						</div>
					</div>
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapsetwelve" style="color: rgb(56,122,216); font-weight: bold;">
							What are benefits to using pesticides to consider?
						</a>
					</div>
					<div id="collapsetwelve" class="collapse" data-parent="#accordion">
						<div class="card-body">
							By keeping pests and weeds at bay, the use of pesticides helps farmers to produce high-quality fruits and vegetables quicker and with greater yields. Pesticides also increase the shelf life of several crops because they help to prevent the growth of mold and mildew that can increase spoilage. This reduces the cost of your favorite fruits and vegetables and can make them safer to eat.        
						</div>
					</div>
					</div>-->
				</div>
			</div>
		</div>
</body>

<!--footer-->
<?php
   include('includes/footer.php');
?>