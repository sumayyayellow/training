@extends('admin.master')

@section('title')
Add Category
@endsection

@section('body')
<div class="row">

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="text-success text-center">Add Category</h3>
			</div>

			<div class="panel-body">
				<form class="form-horizontal" action="{{ route('new-category') }}" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label class="control-label col-md-3">Category Name</label>
						<div class="col-md-7">
							<input style="" type="text" name="category_name" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-7 col-md-offset-3">
							<input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div>
			<script>

			</script>
		</div>
@endsection

