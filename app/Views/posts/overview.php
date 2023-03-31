<div class="container-fluid	" style="background-color: #203261FF;">
	<div class="container">	
		<div class="row">
			<div class="col-lg-2">
				<div class="card filters" style="width: 18rem;">
				  <ul class="list-group list-group-flush">
				  	<li class="list-group-item bg-primary">Filters</li>
					<?php foreach($categories as $category):?>	    
						<li class="list-group-item">
							<div class="form-check form-switch">
							  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
							  <label class="form-check-label" for="flexSwitchCheckChecked"></label><?=$category->name?></label>
							</div>
				    	</li>
					<?php endforeach;?>
				  </ul>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="input-group mb-3" style="padding-top: 20px;">
					<input class="form-control" type="text" name="search" placeholder="Zoek een titel">
					<button class="btn btn-primary" title="Zoek"><i class="fa-solid fa-magnifying-glass"></i></button>
				</div>
				<div class="input-group justify-content-center" style="margin-top: 20px;">
					<a href="Posts/add" class="btn btn_sh btn-lg btn-block">Mijn verhaal delen</a>
				</div>
			</div>
		<!-- style="background-color: #e60066;" -->
		</div>
		<div class="btn btn-primary show_filter"><i class="fa-solid fa-sort"></i></div>
		<div class="container w-75" >
			<div class="text-white row row-cols-1 row-cols-md-2 g-3">
			    <?php foreach($posts as $post):?>
			        <div class="card w-100 p-1 h-100 col-md-6" style="background-color: #e60066;">
			            <div class="card-body">
			                <h4 class="card-title"><?=$post['title']?></h4>
			                <h6 class="card-subtitle mb-2"><i><?php foreach($post['categories'] as $category) echo $category . ", "?></i></h6>
			                <p class="card-text"><?=$post['content']?></p>
			            </div>
			        </div>
			    <?php endforeach; ?>
			</div>
		</div>
	</div>
</div>