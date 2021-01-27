@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                            <div class="card-header  card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">add</i>
                            </div>
                            <h4 class="card-title">{{__('Add Service')}}</h4>
                            </div>

                            <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">

                                        <div class="row ">
                                            <div class="col-12 text-right">
                                                <a href="{{route('service.index')}}" class="btn btn-sm btn-primary">{{__('Back to Index')}}</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">{{__('Title')}}</label>
                                            <div class="col-sm-7">
                                            <div class="form-group">
                                                {{-- <label for="exampleFormControlInput1">Email address</label> --}}
                                                 <input type="type" class="form-control" id="title" name="title" placeholder="{{__('Title')}}" required/>
                                              </div>
                                             </div>

                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">{{__('Description')}}</label>
                                             <div class="col-sm-7">
                                                <div class="form-group">
                                                    <textarea name="description" id="description" rows="5" placeholder="{{__('Description')}}" required></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                        <label  class="col-sm-2 col-form-label">{{__('Image')}}</label>
                                            <div class="col-sm-7">
                                                {{-- <div class="form-group"> --}}
                                                    {{-- <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-raised">
                                                            <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                                        <div>
                                                            <span class="btn btn-raised btn-round btn-default btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="..." />
                                                            </span>
                                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                        </div>
                                                    </div> --}}
                                                    <div class="input-group">
                                                        <input  name="image" type="file" class="custom-file-label" required/>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{__('Add Service')}}</button>
                                </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace( 'description' );
    </script>

@endsection

