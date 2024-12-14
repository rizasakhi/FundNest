<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@lang('navbar.campaign')</title>
</head>
<body>
    <x-navbar/>
    <div class="container col-10">
      <h1 class="py-3">@lang('navbar.campaign')</h1>

      <div class="row row-cols-4 gap-4">
        @foreach ($campaign as $data)
          <div class="card border border-dark col-md-3" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/app/public/' . $data->banner_image) }}" alt="Campaign Banner" width="200">
              <div class="card-body d-flex flex-column justify-content-evenly">
                <h5 class="card-title">{{ $data->name }}</h5>
                <p class="card-text">{{ $data->description }}</p>
                <p class="card-text">{{ $data->start_date }} - {{ $data->end_date }}</p>
                <a href="#" class="btn btn-dark btn-outline-light">@lang('form.participate')</a>
                <a href="{{ route('edit-campaign', $data->id  ) }}" class="btn btn-outline-dark">@lang('form.edit')</a>
              </div>
            </div>
        @endforeach
      </div>

      

    </div>

    <x-footer/>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>