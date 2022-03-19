<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css" integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello, world!</title>
  </head>
  <body>
	  <div class="container">
	  	<h3>Phone Book System</h3>

		  <div class="py-2">
			<button type="button" id="btn-addNew" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNew">
				Add New
			</button>
		  </div>

	  	<table class="table table-success table-striped">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody><?php $i=1; ?>
				<?php foreach ($user_infos as $user_info) { ?>
					<th scope="row">
					<?php 
						echo $i;
						$i++;
					?>
					</th>
						<td><?php echo $user_info->name; ?></td>
						<td>
							<button type="button" id="btn-edit" class="btn btn-primary" onClick="edit(<?php echo $user_info->id; ?>)"  data-bs-toggle="modal" data-bs-target="#edit">
								Edit
							</button>
							<button type="button" id="btn-delete" class="btn btn-danger" onClick="remove(<?php echo $user_info->id; ?>)" data-bs-toggle="modal" data-bs-target="#delete">
								Delete
							</button>
						</td>
					</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		<div class="float-right">
			<?php echo $this->pagination->create_links(); ?>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<?php echo form_open('welcome/edit/1'); ?>
						<div class="modal-body">
							<div class="mb-3">
								<label for="name" class="form-label">Name</label>
								<input type="text" class="form-control" name="name" id="name">
							</div>

							<div class="mb-3">
								<label for="phone_number" class="form-label mr-4">Phone number</label>
								<button type="button" class="btn btn-primary btn-sm" id="add">+</button>
								<button type="button" class="btn btn-danger btn-sm" id="remove">-</button>
								<input type="text" class="form-control" name="phone_number" id="phone_number">
							</div>

							<div id="addPhoneNum"></div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Save Changes</button>
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Delete</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Are you sure want to delete this user?
				</div>
				<div class="modal-footer">
					<form>
						<input type="hidden" value="deleteId" id="deleteId">
						<button type="submit" class="btn btn-danger">Yes, delete</button>
					</form>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
				</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="addNew" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addNew">Add New</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
					</div>
					<?php echo form_open('welcome/create'); ?>
						<div class="modal-body">
							<div class="mb-3">
								<label for="user_name" class="form-label">Name</label>
								<input type="text" class="form-control" name="name" id="user_name">
							</div>

							<div class="mb-3">
								<label for="phone_number" class="form-label mr-4">Phone number</label>
								<button type="button" class="btn btn-primary btn-sm" id="addPhoneBtn">+</button>
								<button type="button" class="btn btn-danger btn-sm" id="removePhoneBtn">-</button>
								<input type="text" class="form-control" name="phone_number" id="phone_number">
							</div>

							<div id="addPhone"></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/fontawesome.min.js" integrity="sha512-PoFg70xtc+rAkD9xsjaZwIMkhkgbl1TkoaRrgucfsct7SVy9KvTj5LtECit+ZjQ3ts+7xWzgfHOGzdolfWEgrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>
		var count = 1;
		$('#add').click(function(e) {
			e.preventDefault();
			var phoneNum = "<div class='mb-3'><input type='text' class='form-control' id='phone_number' name='phone_number_" + count + "'></div>";
			$( "#addPhoneNum" ).append(phoneNum);
			count++;
		});

		$('#remove').click(function(e) {
			e.preventDefault();
			$('#addPhoneNum').empty();
		});

		function edit(id) {
			$.ajax({
				url: 'welcome/edit/' + id,
				data: {id: id},

				success: function(xhr) {
					$("input#name").val(xhr);
				}
			});
		}

		function remove(id) {
			$('#deleteId').empty();
			$('#deleteId').val(id);

			$.ajax({
				url: 'welcome/delete/' + id,
				data: {
					id: $('#deleteId').val()
				},

				success: function(xhr) {
					console.log('id:' + xhr);
				}
			});
		}


		var countPhone = 1;
		$('#addPhoneBtn').click(function(e) {
			e.preventDefault();
			var phoneNum = "<div class='mb-3'><input type='text' class='form-control' id='phone_number' name='add_phone_number_" + countPhone + "'></div>";
			$( "#addPhone" ).append(phoneNum);
			countPhone++;
		});

		$('#removePhoneBtn').click(function(e) {
			e.preventDefault();
			$('#addPhone').empty();
		});

	</script>
</body>
</html>