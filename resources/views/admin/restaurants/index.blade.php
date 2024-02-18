@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>List of Restaurants</h2>


        @if (count($restaurants) > 0)
        <table class="table table-striped mt-5">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                    <tr>
                    <th scope="row">{{$restaurant->id}}</th>
                    <td>{{$restaurant->restaurant_name}}</td>
                    <td>
                        <a class="btn btn-success" href="{{route('admin.restaurants.show', ['restaurant' => $restaurant->slug]) }}">Details</a>
                    </td>
                  </tr>
                @endforeach 
            </tbody>
        </table>
        @else
            <div class="alert alert-warning mt-2">
                <p>No resturants available</p>
            </div>
        @endif
    </div>
@endsection