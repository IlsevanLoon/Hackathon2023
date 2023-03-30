<div class="container">
	<div class="input-group mb-3" style="margin-top: 20px;">
		<input class="form-control" type="text" name="search" placeholder="Zoek een titel">
		<button class="btn btn-primary" title="Zoek"><i class="fa-solid fa-magnifying-glass"></i></button>
	</div>
	<div class="input-group justify-content-center" style="margin-top: 20px;">
		<a href="Posts/add" class="btn btn_sh btn-lg btn-block">Mijn verhaal delen</a>
	</div>
	<div class="d-flex p-6" >
		<?php foreach($posts as $post):?>
			<div class="card w-50 h-100" >
			  <div class="card-body">
			    <h4 class="card-title"><?=$post['title']?></h4>
			    <h6 class="card-subtitle mb-2 text-muted"><?php foreach($post['categories'] as $category) echo $category . ", "?></h6>
			    <p class="card-text"><?=$post['content']?></p>
			  </div>
			</div>
		<?php endforeach;?>
	</div>
	<div class="filters">
		<label><b>Filters</b></label>
		<?php foreach($categories as $category):?>
			<div class="form-check form-switch">
			  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
			  <label class="form-check-label" for="flexSwitchCheckChecked"></label><?=$category->name?></label>
			</div>
		<?php endforeach;?>
		</div>
	</div>
</div>