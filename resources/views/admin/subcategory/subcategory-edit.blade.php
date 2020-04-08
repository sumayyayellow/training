@extends('admin.master')

@section('title')
Edit Sub Category
@endsection

@section('body')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="text-success text-center">Update Sub Category</h3>
			</div>
			<div class="panel-body">
				<h3>{{ Session::get('message') }}</h3>
		<form class="form-horizontal" name="subCategoryForm" action="{{ route('subcategory-update') }}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label class="control-label col-md-3">Category Name</label>
						<div class="col-md-9">
							<select name="category_id" class="form-control">
								@foreach($categories as $category)
								<option value="{{ $category->id }}">
									{{ $category->category_name }}
								</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Sub Category Name</label>
						<div class="col-md-9">
							<input type="text" value="{{ $subcategory->subcategory_name }}" name="subcategory_name" class="form-control"/>
							<input type="hidden" value="{{ $subcategory->id }}" name="subcategory_id" class="form-control"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-9 col-md-offset-3">
							<input type="submit" name="btn" class="btn btn-success btn-block" value="Update Sub Category">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div>
		</div>
		@endsection

