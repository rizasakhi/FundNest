<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@lang('form.title')</title>
</head>
<body>
    <x-navbar/>

    @auth
        <div class="container col-10 d-flex justify-content-center align-items-center flex-column vh-100">
            <div class="header text-center">
                <h1>@lang('form.header.title')</h1>
                <p>@lang('form.header.description')</p>
            </div>
            <div class="form col-6">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form action="{{ route('store-campaign') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="campaignPicture" class="form-label">@lang('form.form.campaign_picture')</label>
                        <input class="form-control border-dark" type="file" id="campaignPicture" name="banner_image">
                    </div>
                    <div class="mb-3">
                        <label for="campaignName" class="form-label">@lang('form.form.campaign_name')</label>
                        <input type="text" class="form-control border-dark" id="campaignName" name="name" placeholder="@lang('form.form.campaign_name_placeholder')">
                    </div>
                    <div class="mb-3">
                        <label for="campaignDateStart" class="form-label">@lang('form.form.campaign_start')</label>
                        <input type="date" class="form-control border-dark" name="start_date" id="campaignDateStart">
                    </div>
                    <div class="mb-3">
                        <label for="campaignDateEnd" class="form-label">@lang('form.form.campaign_end')</label>
                        <input type="date" class="form-control border-dark" name="end_date" id="campaignDateEnd">
                    </div>
                    <div class="mb-3">
                        <label for="campaignDescription" class="form-label">@lang('form.form.campaign_description')</label>
                        <input type="text" class="form-control border-dark" name="description" id="campaignDescription" placeholder="@lang('form.form.campaign_description_placeholder')">
                    </div>
                    <button class="btn btn-outline-dark" type="submit">Submit</button>
                </form>
            </div>
        </div>
    @else
        <h1 class="text-center">Please Login first</h1>
    @endauth

    

    <x-footer/>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>