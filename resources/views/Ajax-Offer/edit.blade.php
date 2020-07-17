<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }} <span class="sr-only">(current)</span></a>
                    </li>
                @endforeach

            </ul>
        </div>
    </nav>
    <form method="post" action="{{route('update',$offer->id)}}" >
        @csrf

        <div class="form-group ">
            <label for="name" style="text-align: center" class="align-items-center">{{trans('message.name_ar')}}</label>
            <input type="text" class="form-control" value="{{$offer->name_ar}}" name="name_ar" id="exampleInputEmail1" aria-describedby="text" placeholder="Enter Name">
            @error('name_ar')
            <small class="from-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="name" style="text-align: center">{{trans('message.name_en')}}</label>
            <input type="text" class="form-control" value="{{$offer->name_en}}" name="name_en" id="exampleInputEmail1" aria-describedby="text" placeholder="Enter Name">
            @error('name_en')
            <small class="from-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">{{trans('message.Price')}}</label>
            <input type="text" class="form-control" value="{{$offer->price}}"  name="price" id="exampleInputPrice" placeholder="Price">
            @error('price')
            <small class="from-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="details" >{{trans('message.details_ar')}}</label>
            <input type="text" class="form-control" value="{{$offer->details_ar}}" name="details_ar" id="exampleInputDetails" placeholder="Details">
            @error('details_ar')
            <small class="from-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="details">{{trans('message.details_en')}}</label>
            <input type="text" class="form-control" value="{{$offer->details_en}}" name="details_en" id="exampleInputDetails" placeholder="Details">
            @error('details_en')
            <small class="from-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{trans('message.button_offer_edit')}}</button>

    </form>
</div>

</body>
</html>
