<div class="container-fluid text-white" style="background-color: #203261FF; display:flex; justify-content:center;">
	<div class="conatiner w-70 text-center" style="width:1000px">
		<form action="/posts/add_save" method="POST">
		  <div class="form-group">
		    <label for="title">Titel</label>
		    <input type="text" class="form-control" id="title" name="title" placeholder="Titel">
		  </div>
		    <div class="form-group">
		      <label for="categories" class="form-label">Categorie</label>
		      <select class="form-select" id="categories" name="categories[]" multiple="multiple" style="color:black;">
		      	<?php foreach($categories as $category):?>
		      	<option style="color:black;" value="<?=$category->id?>" ><?=$category->name?></option>
		      	<?php endforeach;?>
		      </select>
		    </div>
		    <div class="form-group">
		      <label for="content" class="form-label mt-4">Jouw verhaal</label>
		      <textarea class="form-control" id="content" rows="15" name="content"></textarea>
		    </div>
			<button style="margin-bottom:10px;margin-top:10px;" type="submit" class="btn btn_sh">Verstuur</button>
		</form>
	</div>
</div>