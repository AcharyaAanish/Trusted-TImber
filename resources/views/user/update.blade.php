@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <form action="{{route('user.update',$user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                        <div class="card">
                            <div class="card-header  card-header-rose card-header-icon">
                              <div class="card-icon">
                                  <i class="material-icons">add</i>
                              </div>
                            <h4 class="card-title">{{__('Add User')}}</h4>
                            </div>

                            <div class="card-body">

                               <div class="row">
                                   <div class="col-md-12">

                                        <div class="row ">
                                            <div class="col-12 text-right">
                                                <a href="{{route('user.index')}}" class="btn btn-sm btn-primary">{{__('Back to Index')}}</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">{{__('Name')}}</label>
                                            <div class="col-sm-7">
                                            <div class="form-group">
                                                {{-- <label for="exampleFormControlInput1">Email address</label> --}}
                                                 <input type="name" class="form-control" id="name" name="name" placeholder="{{__('Name')}}" value={{old('name',$user->name)}} required/>
                                              </div>
                                             </div>

                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">{{__('Email')}}</label>
                                            <div class="col-sm-7">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="email"  name="email" placeholder="{{__('Email')}}" value={{old('email',$user->email)}} required/>
                                                </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">{{__('Password')}}</label>
                                            <div class="col-sm-7">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="password"  name="password" placeholder="{{__('Password')}}" vlaue={{old('password',$user->password)}}>
                                                </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                            <label  class="col-sm-2 col-form-label">{{__('Image')}}</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <input  name="image" type="file" class="custom-file-label">
                                                </div>
                                            </div>
                                        </div>

                                   </div>
                               </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{__('Add User')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
             </div>
        </div>
    </div>
@endsection
