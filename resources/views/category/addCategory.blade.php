@extends('master')

@section('title','Add Category')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @if(session()->has('add-success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('add-success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <strong>Add Category form</strong>
                    </div>
                    <div class="card-body card-block">
                        {{ Form::open(['route' => 'categories.store','method'=>'post','class'=>'form-horizontal', 'id'=>'categoryForm']) }}
                        
                            <div class="row form-group">
                                <div class="col col-md-3">{{Form::label('category-name', 'Category Name',['class'=>'form-control-label'])}}</div>
                                <div class="col-12 col-md-9">
                                    {{Form::text('name','',['class' => 'form-control','id' => 'category-name','placeholder' => 'Category Name'])}}
                                    @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">{{Form::label('category-slug', 'Category Slug',['class'=>'form-control-label'])}}</div>
                                <div class="col-12 col-md-9">
                                    {{Form::text('slug','',['class' => 'form-control','id' => 'category-slug','placeholder' => 'Category Slug'])}}
                                    @error('slug')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">{{Form::label('category-description', 'Category Description',['class'=>'form-control-label'])}}</div>
                                <div class="col-12 col-md-9">
                                    {{Form::textarea('description','',['class' => 'form-control','id' => 'category-description','placeholder' => 'Category Description','rows'=>'3'])}}
                                    @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">{{Form::label('category-status', 'Status',['class'=>'form-control-label'])}}</div>
                                <div class="col-12 col-md-9">
                                    {{Form::select('status', ['1' => 'Active', '0' => 'In Active'], null, ['placeholder' => 'Please select','class'=>'form-control']);}}
                                    @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">{{Form::label('type', 'Type',['class'=>'form-control-label'])}}</div>
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        {{Form::checkbox('type', '1','', ['class'=>'form-check-input type','id'=>'saveAsMenu'])}}
                                        {{Form::label('saveAsMenu', 'Save As Menu',['class'=>'form-check-label'])}}
                                    </div>
                                    <div class="form-check">
                                        {{Form::checkbox('type', '2','', ['class'=>'form-check-input type','id'=>'saveAsCategory'])}}
                                        {{Form::label('saveAsCategory', 'Save As Category',['class'=>'form-check-label'])}}
                                    </div>
                                    <div class="form-check">
                                        {{Form::checkbox('type', '3','', ['class'=>'form-check-input type','id'=>'saveAsSubCategory'])}}
                                        {{Form::label('saveAsSubCategory', 'Save As Sub Category',['class'=>'form-check-label'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group" id="menuField">
                                <div class="col col-md-3">{{Form::label('category-menu', 'Menu',['class'=>'form-control-label'])}}</div>
                                <div class="col-12 col-md-9">
                                    <select name="menu" id="category-menu" class="form-control">
                                        <option value="" selected disable>Please select</option>
                                        @foreach($categoriesMenu as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('menu')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group" id="categoryField">
                                <div class="col col-md-3">{{Form::label('category-category', 'Category',['class'=>'form-control-label'])}}</div>
                                <div class="col-12 col-md-9">
                                    <select name="menu" id="category-menu" class="form-control">
                                        <option value="" selected disable>Please select</option>
                                        @foreach($categoriesMenu as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group" id="categorySubmit">
                                {{Form::submit('SUBMIT',['class'=>'btn btn-success mx-auto mt-3 text-white'])}}
                            </div>
                        {{ Form::close() }}
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    const types = document.getElementsByClassName('type');
    const categoryForm = document.getElementById('categoryForm');
    const menuField = document.getElementById('menuField');
    const categoryField = document.getElementById('categoryField');
    const categorySubmit = document.getElementById('categorySubmit');
    menuField.remove();
    categoryField.remove();
    for(let type of types){
        type.addEventListener("click",()=>{
            checkTypeField(type);
        });
    };
    function checkTypeField(type){
        if(type.checked){
            for(let type of types){
                type.setAttribute('disabled', true);
            }
            type.removeAttribute('disabled');
            if(types[1].checked){
                categoryForm.insertBefore(menuField, categorySubmit);
                
            }
            if(types[2].checked){
                categoryForm.insertBefore(menuField, categorySubmit);
                categoryForm.insertBefore(categoryField, categorySubmit);
            }
        }else{
            for(let type of types){
                type.removeAttribute('disabled');
            }
            categoryForm.removeChild(menuField);
            categoryForm.removeChild(categoryField);
        }
    }
</script>
@endsection
