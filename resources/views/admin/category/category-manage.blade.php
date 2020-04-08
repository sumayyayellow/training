@extends('admin.master')

@section('title')
Manage Category
@endsection

@section('body')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="text-success text-center">Manage Category</h3>
			</div>
			<div class="form-group">
             <label class="control-label col-md-3">Add Category</label>
             
             </div>
			<div class="panel-body">
				<table class="table table-bordered">
					<tr class="bg-primary">
						<th>Category Id</th>
						<th>Category Name</th>
						<th>Action</th>
					</tr>
					@foreach($categories as $category)
					<tr>
						<td>{{ $category->id }}</td>
						<td>{{ $category->category_name }}</td>
						<td>
						<a href="{{ route('category-edit', ['id' => $category->id ]) }}" class="btn btn-success btn-xs">
								<span class="glyphicon glyphicon-edit"></span>	
							</a>
							<a href="{{ route('category-delete', ['id' => $category->id ]) }}" class="btn btn-danger btn-xs">
								<span class="glyphicon glyphicon-trash"></span>	
							</a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
