<section class="content-header">
	<h1>User</h1>
	<br>
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-add">Add User +</button>
	<ol class="breadcrumb">
		<li>
			<a href="http://[::1]/lte/petugas/dashboard">
				<i class="fa fa-dashboard"></i> User</a>
		</li>
		<li class="active">View</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<!-- /.box -->

			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Fullname</th>
								<th>Username</th>
								<th>Password</th>
								<th>Level</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0 ?>
							<?php foreach ($user as $value) : ?>
							<?php $i++ ?>					<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value['fullname'] ?></td>
								<td>
									<?php echo $value['username'] ?>
								</td>
								<td>
									<?php //echo $value['password'] ?>
									<p>Hashed..</p>
								</td>
								<td>
									<?php
									if ($value['level'] == 1) {
										echo 'User';
									}
									elseif ($value['level'] == 2) {
										echo 'Petugas';
									}
									elseif ($value['level'] == 3) {
										echo 'Admin';
									}

									?>
</td>
								<td>
									<button type="button" onclick="viewedit(<?php echo $value['id'] ?>)" class="btn btn-success" data-toggle="modal" data-target="#modal-viewedit">View/Edit</button>
									<a
									<?php if ($value['id'] == 1) {
										echo 'disabled';
									} ?> onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger" href="<?php echo base_url() ?>petugas/user/delete/<?php echo $value['id']?>">Delete</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
						<!-- <tfoot>
              <tr>
              </tr>
              </tfoot> -->
					</table>

					<!-- modal-edit -->
					<div class="modal fade" id="modal-viewedit">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">View/Edit User</h4>
								</div>
								<div class="modal-body">

									<!-- ################# -->
									<div id="viewedit"></div>
									<!-- ################# -->

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>

					<div class="modal fade" id="modal-add">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Add User</h4>
								</div>
								<div class="modal-body">

									<!-- ################# -->
									<form role="form" action="<?php echo base_url() ?>petugas/user/add" method="POST">
										<!-- <input type="hidden" name="id" value="<?php echo $reservation['id'] ?>"> -->
										<div class="box-body">
											<div class="form-group">
												<label for="exampleInputEmail1">Fullname</label>
												<input name="fullname" value="" class="form-control" id="exampleInputEmail1" placeholder="Fullname">
                                            </div>
                                            <div class="form-group">
												<label for="exampleInputEmail1">Username</label>
												<input name="username" value="" class="form-control" id="exampleInputEmail1" placeholder="Username">
                                            </div>
											<div class="form-group">
												<label for="exampleInputEmail1">Password</label>
												<input name="password" value="" class="form-control" id="exampleInputEmail1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
												<label for="exampleInputEmail1">Level</label>
												<select name="level" class="form-control" name="" id="">
                                                     <option value="1">User</option>
                                                    <option value="2">Petugas</option>
                                                    <option value="3">Admin</option>
                                                </select>
											</div>

										</div>
										<!-- /.box-body -->

										<div class="box-footer">
											<button type="submit" class="btn btn-primary">Add User</button>
										</div>
									</form>
									<!-- ################# -->

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
