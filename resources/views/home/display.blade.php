@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
<style>

.hidden{
    display:none;
}
</style>
@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header card-header-rose card-header-icon ">
                    <div class="card-icon">
                        <i class="material-icons">home</i>
                    </div>
                    <h4 class="card-title">{{__('HOME')}}</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                        <a href="{{route('home.create')}}" class="btn btn-sm btn-primary">{{__('Add Home')}}</a>
                        </div>
                    </div>
                        @if (session()->has('success'))
                            <div class="alert alert-success"><h4>{{session('success')}}</h4></div>
                        @endif
                        @if (session()->has('danger'))
                        <div class="alert alert-danger"><h4>{{session('danger')}}</h4></div>
                        @endif
                    <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th >
                                    {{__('S.N')}}
                                </th>
                                <th>
                                    {{__('Caption')}}
                                </th>
                                <th>
                                    {{__('Image')}}
                                </th>
                                <th>
                                    {{_('Creation Date')}}
                                </th>
                                <th class="td-actions">
                                    {{__('Action')}}
                                </th>
                            </tr>
                            </thead>
                            @php
                                $home= App\Models\Home::latest()->paginate(5);
                            @endphp
                            <tbody>
                                @foreach($home as $model)
                            <tr>

                            <th>{{$model->id}}</th>
                            <td>{{$model->caption}}</td>
                            <td>
                                <img src="{{asset("storage/$model->image")}}" width="150" style="height: 100px !important; object-fit: fill;" rel="nofollow" alt="Image not found">
                            </td>
                            <td>{{$model->created_at->format('Y-m-d')}}</td>

                                <td class="td-actions">
                                    <form method="POST" action="{{route('home.destroy',$model->id)}}">
                                        @csrf
                                        @method('delete')
                                        <a rel="tooltip" class="btn btn-success btn-link" href="{{route('home.edit',$model->id)}}">
                                            <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                        </a>

                                            <button type="submit" class="btn btn-danger btn-link">
                                            <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                            </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="row">
                            <div class="col-12 text-right">
                                {{$home->links()}}
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
@endsection

