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
                        <i class="material-icons">contact_page</i>
                    </div>
                    <h4 class="card-title">{{__('Contact Us')}}</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-12 text-right">
                        <a href="{{route('product.create')}}" class="btn btn-sm btn-primary">{{__('Add Product')}}</a>
                        </div> --}}
                    </div>
                    <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>
                                    {{__('Name')}}
                                </th>
                                <th>
                                    {{__('Email')}}
                                </th>
                                <th>
                                    {{__('Subject')}}
                                </th>
                                <th>
                                    {{__('Message')}}
                                </th>
                                <th>
                                    {{__('Send Date')}}
                                    </th>
                            </tr>
                            </thead>
                            @php
                                $contacts = App\Models\Contact::latest()->paginate(8);
                            @endphp
                            <tbody>
                                @foreach($contacts as $contact)
                            <tr>
                                <th>{{$contact->name}}</th>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->subject}}</td>
                                <td>{{$contact->message}}</td>
                                <td>{{$contact->created_at->format('Y-m-d')}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="row">
                            <div class="col-12 text-right">
                                {{$contacts->links()}}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
