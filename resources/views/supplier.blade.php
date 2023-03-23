@extends('layout.nav')
@section('content')

<div class="container">
    <br>
    @if($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">{{$error}}</div>
    @endforeach
    @endif
    @if(session('result'))
    <div class="alert alert-warning">{{session('result')}}</div>
    @endif

    <form action="supplier/0/0" method="POST" class="text-center">
        @csrf
        <div class="row m-5 justify-content-center">

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Name Supplier</label>
                <input name="name" type="text" placeholder="Name Supplier" class="form-control radius-20 border-0"
                    required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Email Supplier</label>
                <input name="email" type="text" placeholder="Email Supplier" class="form-control radius-20 border-0"
                    required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Address Supplier</label>
                <input name="address" type="text" placeholder="Address Supplier" class="form-control radius-20 border-0"
                    required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Phonenumber Supplier</label>
                <input name="phonenumber" type="number" placeholder="Phonenumber Supplier"
                    class="form-control radius-20 border-0" required>
            </div>

        </div>
        <button class="btn btn-light radius-20 mt-3 w-25">Submit</button>
    </form>

    <hr>

    <div class="row justify-content-center">
        @foreach ($supplier as $sup)
        <div class="card text-center radius-20 m-2" style="width: 18rem;">
            <i class="ion-android-bus text-dark" style="font-size: 100px"></i>
            <div class="card-body">
                <small class="card-title">Name : {{$sup->company_name}}</small><br>
                <small class="card-title">Email : {{$sup->email}}</small><br>
                <small class="card-title">Address : {{$sup->address}}</small><br>
                <small class="card-title">Phonenumber : {{$sup->phonenumber}}</small><br>
                <br>
                <span class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$sup->id}}">Edit</span>
                <span class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$sup->id}}">Delete</span>
            </div>


            <!-- Modal Delete -->
            <div class="modal fade" id="delete{{$sup->id}}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <span>Do You Want TO Delete {{$sup->company_name}}</span>

                            <form action="supplier/1/{{$sup->id}}" method="POST">
                                @csrf
                                <button class="btn btn-danger w-25 mt-3 radius-10">Yes</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal Edit -->
            <div class="modal fade" id="edit{{$sup->id}}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">

                            <form action="supplier/2/{{$sup->id}}" method="POST">
                                @csrf
                                <div class="row m-5 justify-content-center">

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Name Supplier</label>
                                        <input name="name" type="text" placeholder="Name Supplier"
                                            class="form-control radius-10" value="{{$sup->company_name}}" required>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Email Supplier</label>
                                        <input name="email" type="text" placeholder="Email Supplier"
                                            class="form-control radius-10" value="{{$sup->email}}" required>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Address Supplier</label>
                                        <input name="address" type="text" placeholder="Address Supplier"
                                            class="form-control radius-10" value="{{$sup->address}}" required>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Phonenumber Supplier</label>
                                        <input name="phonenumber" type="number" placeholder="Phonenumber Supplier"
                                            value="{{$sup->phonenumber}}" class="form-control radius-10" required>
                                    </div>

                                </div>
                                <button class="btn btn-dark radius-20 mt-3 w-75">Edit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>



        </div>
        @endforeach

    </div>
    <div class="d-flex justify-content-center mt-4">
        {{$supplier->links()}}
    </div>
</div>


@endsection
