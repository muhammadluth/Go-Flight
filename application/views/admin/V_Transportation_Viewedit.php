<form role="form" action="<?php echo base_url() ?>admin/transportation/update" method="POST">
	<input type="hidden" name="id" value="<?php echo $transportation['id'] ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="exampleInputEmail1">Code</label>
			<input name="code" value="<?php echo $transportation['code'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Code">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Description</label>
			<input name="description" value="<?php echo $transportation['description'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Description">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Total Seat</label>
			<input name="totalseat" value="<?php echo $transportation['seat_qty'] ?>" class="form-control" id="exampleInputEmail1" placeholder="totalseat">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Type</label>
			<select class="form-control" name="type">
			<?php foreach ($transportation_type as $value): ?>
				<option value="<?php echo $value['id'] ?>"><?php echo $value['description'] ?></option>
																											
			<?php endforeach ?>
			</select>
        </div>

	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Update Transportation</button>
	</div>
</form>
