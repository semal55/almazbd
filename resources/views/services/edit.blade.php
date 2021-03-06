@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h3>Редактировать услугу</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{route('services.update', [$service])}}">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group col-md-4">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{$service->name}}" class="form-control">
                                <label for="price">Price</label>
                                <input type="number" name="price" value="{{$service->price}}" class="form-control">
                                <input type="submit" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection