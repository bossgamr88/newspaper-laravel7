@extends('backend.master')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> Categories</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			<h3>Add New Category</h3>
			<form method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="category_name" id="category_name" class="form-control">
					<p>The name is how it appears on your site.</p>
				</div>

				<div class="form-group">
					<label>Slug</label>
					<input type="text" name="slug" id="slug" class="form-control" readonly="">
					<p>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
				</div>

				<div class="form-group">
					<label>Parent Category</label>
					<select name="parent" class="form-control">
						<option>None</option>
					</select>
					<p>Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.</p>
				</div>	
				<div class="form-group">
					<label>Description</label>
					<textarea class="form-control" name="dscription" rows="5"></textarea>
					<p>The description is not important and will not be displayed.</p>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Add New Category</button>
				</div>
			</form>	


		</div>

		<div class="col-sm-8 cat-view">
			<div class="row">
				<div class="col-sm-3">
					<select name="bulk-action" class="form-control">
						<option>Bulk Action</option>
						<option>Move to Trash</option>
					</select>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-default">Apply</button>
				</div>
				<div class="col-sm-3 col-sm-offset-4">
					<input type="text" id="search" name="search" class="form-control" placeholder="Search Category">
				</div>	
			</div>
			<div class="content">
				<table class="table table-striped">
					<thead>
						<tr>
							<th><input type="checkbox" id="select-all"> Name</th>
							<th>Description</th>
							<th>Slug</th>
							<th>Count</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="checkbox" name="select-cat"> 
								<a href="#">Category 1</a>
							</td>
							<td></td>
							<td>category-1</td>
							<td>0</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="select-cat"> 
								<a href="#">Category 2</a>
							</td>
							<td></td>
							<td>category-2</td>
							<td>0</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="select-cat"> 
								<a href="#">Category 3</a>
							</td>
							<td></td>
							<td>category-3</td>
							<td>0</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="select-cat"> 
								<a href="#">Category 4</a>
							</td>
							<td></td>
							<td>category-4</td>
							<td>0</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="select-cat"> 
								<a href="#">Category 5</a>
							</td>
							<td></td>
							<td>category-5</td>
							<td>0</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row">
				<div class="col-sm-12">
			        <ul class="pagination">
			          <li><a href="#">&laquo;</a></li>
			          <li><a href="#">1</a></li>
			          <li><a href="#">2</a></li>
			          <li class="active"><a href="#">3</a></li>
			          <li><a href="#">4</a></li>
			          <li><a href="#">5</a></li>
			          <li><a href="#">&raquo;</a></li>
			        </ul>
			    </div>	
			</div>  						
		</div>
	</div>
</div>

@endsection