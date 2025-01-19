<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@lang('navbar.campaign')</title>
</head>
<style>
  .container-campaign{
    min-height: 80vh;
  }
</style>
<body>
    <x-navbar/>
    <div class="container container-campaign col-10">
      @auth
        <h1 class="py-3">@lang('navbar.campaign')</h1>

        <div class="row row-cols-4 gap-4">
          @foreach ($campaign as $data)
            <div class="card border border-dark col-md-3" style="width: 18rem;">
              {{-- <img class="card-img-top" src="data:{{ $imageType }};base64,{{ $imageData }}" alt="Campaign Banner" width="200"> --}}
                <div class="card-body d-flex flex-column justify-content-evenly">
                  <h5 class="card-title">{{ $data->name }}</h5>
                  <p class="card-text">{{ $data->description }}</p>
                  <p class="card-text">{{ $data->start_date }} - {{ $data->end_date }}</p>
                  {{-- <p>{{ $data->banner_image }}</p> --}}
                  <a href="{{ route('donate-campaign', $data->id) }}" class="btn btn-dark btn-outline-light">@lang('form.participate')</a>
                  @if ($data->user_id === auth()->id())
                  <a href="{{ route('edit-campaign', $data->id) }}" class="btn btn-outline-dark">@lang('form.edit')</a>
                  <form action="{{ route('delete-campaign', $data->id) }}" method="POST" class="d-inline-block">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this campaign?');">
                    @lang('Delete')
                  </button>
                  </form>
                  @endif
                </div>
              </div>
          @endforeach
        </div>
      @else
        <h1 class="text-center">Please Login first</h1>
      @endauth
    </div>

    <div class="d-flex justify-content-center mt-4">
      {{ $campaign->links() }}
    </div>

    <x-footer/>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>