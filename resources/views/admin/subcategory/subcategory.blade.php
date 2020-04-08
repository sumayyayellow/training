@extends('admin.master')

@section('title')
Add Sub Category
@endsection

@section('body')
<div class="row">
   <div class="col-md-12">
     <div class="panel panel-default">
       <div class="panel-heading">
         <h3 class="text-success text-center">Add Sub Category</h3>
       </div>
       <div class="panel-body">
         <form class="form-horizontal" action="{{ route('subcategory-save') }}" method="post">
           {{ csrf_field() }}
           <div class="form-group">
           	<label class="control-label col-md-3">Category Name</label>
           	<div class="col-md-7">
           	  <select name="category_id" class="form-control">
           	  	<option style="text-align: center;">---Select Category Name---</option>
           	  	@foreach($categories as $category)
           	  	<option value="{{ $category->id }}">{{ $category->category_name }}</option>
           	  	@endforeach
           	  </select>
           	</div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3">Sub Category Name</label>
             <div class="col-md-7">
               <input type="text" name="subcategory_name" class="form-control"/>
             </div>
           </div>
 
           <div class="form-group">
             <div class="col-md-7 col-md-offset-3">
               <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Sub Category">
             </div>
           </div>
         </form>
       </div>
     </div>
   <div>
</div>
@endsection
