@extends('layout.main')
@section('title') @if( ! empty($title)) Edit Category | @endif @parent @endsection


@section('main')

    <div class="container">

        <div id="wrapper">

            @include('admin.sidebar_menu')

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> Edit Category  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-1 col-xs-12">

                        {{ Form::open(['class' => 'form-horizontal']) }}


                        <div class="form-group">
                            <label for="category_type" class="col-sm-4 control-label">Category Type</label>
                            <div class="col-sm-8">
                                <select class="form-control select2icon" name="category_type">
                                    <option value="top" @if($edit_category->category_type =='top' ) selected="selected" @endif >Top Category</option>
                                    <option value="contractors" @if($edit_category->category_type =='contractors' ) selected="selected" @endif >Contractors</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group {{ $errors->has('category_name')? 'has-error':'' }}">
                            <label for="category_name" class="col-sm-4 control-label">Category Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="category_name" value="{{ old('category_name') ? old('category_name') : $edit_category->category_name }}" name="category_name" placeholder="Category Name">
                                {!! $errors->has('category_name')? '<p class="help-block">'.$errors->first('category_name').'</p>':'' !!}

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary">Edit Category</button>
                            </div>
                        </div>
                        {{ Form::close() }}

                    </div>

                </div>





            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
@endsection

@section('page-js')

@endsection