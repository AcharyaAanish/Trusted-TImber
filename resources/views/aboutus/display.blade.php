@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
<style>
    .hidden{
    display:none;
}
</style>
@php
$abouts = App\Models\Aboutus::latest()->paginate(5);
 @endphp
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-rose card-header-icon ">
                    <div class="card-icon">
                        <i class="material-icons">book</i>
                    </div>
                    <h4 class="card-title">{{__('About Us')}}</h4>
                </div>

                <div class="card-body">
                    @if (count($abouts)<1)
                    <div class="row">
                        <div class="col-12 text-right">
                        <a href="{{route('aboutus.create')}}" class="btn btn-sm btn-primary">{{__('Add About Us')}}</a>
                        </div>
                    </div>
                    @endif
                    @if (session()->has('success'))
                    <div class="alert alert-success"><h4>{{session('success')}}</h4></div>
                @endif
                @if (session()->has('danger'))
                <div class="alert alert-danger"><h4>{{session('danger')}}</h4></div>
                @endif
                    <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>
                                    {{__('S.N')}}
                                </th>
                                <th>
                                    {{__('Introduction')}}
                                </th>
                                <th>
                                    {{__('Image')}}
                                </th>
                                <th>
                                    {{__('Creation Date')}}
                                </th>
                                <th class="td-actions">
                                    {{__('Action')}}
                                </th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($abouts as $about)
                                <tr>
                                    <th>{{$about->id}}</th>
                                    <td>{!! $about->introduction !!}</td>
                                    <td>
                                        <img src="{{asset("storage/$about->image")}}" width="150" style="height: 100px !important; object-fit: fill;" rel="nofollow" alt="Image not found">
                                    </td>
                                    <td>{{$about->created_at->format('Y-m-d')}}</td>
                                    <td class="td-actions">
                                        <form method="post" action="{{route('aboutus.destroy',$about->id)}}">
                                            @csrf
                                            @method('delete')
                                        <a rel="tooltip" class="btn btn-success btn-link" href="{{route('aboutus.edit',$about->id)}}">
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
                                {{$abouts->links()}}
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection
