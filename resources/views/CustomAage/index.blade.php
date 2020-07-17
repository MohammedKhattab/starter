@extends('layouts.app')
@section('content')
    <div class="container">
        <alert class="alert alert-success" id="adding" style="display: none;">
            تمت الاضافة بنجاح
        </alert>
        <form method="post"   id="createForm">
            @csrf
            <div class="form-group ">
                <label for="photo" style="text-align: center" class="align-items-center">{{trans('message.photo')}}</label>
                <input type="file" class="form-control" name="photo" id="exampleInputEmail1" aria-describedby="text" >
                @error('photo')
                <small class="from-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group ">
                <label for="name" style="text-align: center" class="align-items-center">{{trans('message.name_ar')}}</label>
                <input type="text" class="form-control" name="name_ar" id="exampleInputEmail1" aria-describedby="text" placeholder="Enter Name">
                @error('name_ar')
                <small class="from-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" style="text-align: center">{{trans('message.name_en')}}</label>
                <input type="text" class="form-control" name="name_en" id="exampleInputEmail1" aria-describedby="text" placeholder="Enter Name">
                @error('name_en')
                <small class="from-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">{{trans('message.Price')}}</label>
                <input type="text" class="form-control"   name="price" id="exampleInputPrice" placeholder="Price">
                @error('price')
                <small class="from-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="details" >{{trans('message.details_ar')}}</label>
                <input type="text" class="form-control" name="details_ar" id="exampleInputDetails" placeholder="Details">
                @error('details_ar')
                <small class="from-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="details">{{trans('message.details_en')}}</label>
                <input type="text" class="form-control" name="details_en" id="exampleInputDetails" placeholder="Details">
                @error('details_en')
                <small class="from-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <button id="saveOffer" class="btn btn-primary">{{trans('message.update')}}</button>

        </form>
    </div>
    @stop
@section('scripts')
    <script>
        $(document).on('click','#saveOffer',function (e) {
            var dataForm = new FormData($('#createForm')[0]);
            e.preventDefault();
            $.ajax({
                type:'post',
                enctype:"multipart/form-data",
                url:"{{route('ajax-offer-store')}}",
                data:dataForm,
                processData:false,
                contentType:false,
                cache:false,
                success: function (data) {
                    if(data.status == true){
                        $('#adding').show();
                    }
                },
                error:function (reject) {

                }

            });
        });

    </script>
    @stop