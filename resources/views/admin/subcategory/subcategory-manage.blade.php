@extends('admin.master')

@section('title')
Manage Sub Category
@endsection

@section('body')
<div class="row">
   <div class="col-md-12">
     <div class="panel panel-default">
       <div class="panel-heading">
         <h3 class="text-success text-center">Manage Subcategory</h3>
       </div>
       <div class="panel-body">
         <table class="table table-bordered">
         	<tr class="bg-primary">
         		<th>Subcategory ID</th>
         		<th>Category Name</th>
         		<th>Subcategory Name</th>
         		<th>Action</th>
         	</tr>
            @foreach($categories as $category)
            @foreach($subcategories as $subcategory)
         	<tr>
         		
         		<td>{{ $subcategory->id }}</td>
                
             
         		<td value="{{ $category->id }}">
                @if($subcategory->category_id == $category->id)
                {{ $category->category_name}}
                @endif
                </td>
         		<td>{{ $subcategory->subcategory_name }}</td>
         		<td>             
                    <a href="{{ route('subcategory-edit', ['id' => $subcategory->id ]) }}" class="btn btn-success btn-xs">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
         			<a href="{{ route('subcategory-delete', ['id' => $subcategory->id ]) }}" class="btn btn-danger btn-xs">
         				<span class="glyphicon glyphicon-trash"></span>
         			</a>
         		</td>
         	</tr>
            @endforeach
            @endforeach
         </table>
       </div>
     </div>
   <div>
</div>
@endsection
