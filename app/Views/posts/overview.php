<div class="container" style="background-color: #203261FF;">
	<div class="input-group mb-3" style="padding-top: 20px;">
		<input class="form-control" type="text" name="search" placeholder="Zoek een titel">
		<button class="btn btn-primary" title="Zoek"><i class="fa-solid fa-magnifying-glass"></i></button>
	</div>
	<div class="input-group justify-content-center" style="margin-top: 20px;">
		<a href="Posts/add" class="btn btn_sh btn-lg btn-block">Mijn verhaal delen</a>
	</div>
		<?php for ($i=0; $i < count($posts) / 2; $i++) { ?>
		<div class="d-flex p-6  text-white" >
			<div class="card w-50 h-100" style="background-color: #e53f66;" >
			  <div class="card-body">
			    <h4 class="card-title"><?=$posts[$i]['title']?></h4>
			    <h6 class="card-subtitle mb-2"><i><?php foreach($posts[$i]['categories'] as $category) echo $category . ", "?></i></h6>
			    <p class="card-text"><?=$posts[$i]['content']?></p>
			  </div>
			</div>
			<?php $i++?>
			<div class="card w-50 h-100" style="background-color: #e53f66;">
			  <div class="card-body">
			    <h4 class="card-title"><?=$posts[$i]['title']?></h4>
			    <h6 class="card-subtitle mb-2"><i><?php foreach($posts[$i]['categories'] as $category) echo $category . ", "?></i></h6>
			    <p class="card-text"><?=$posts[$i]['content']?></p>
			  </div>
			</div>
		</div>
		<?php } ?>
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