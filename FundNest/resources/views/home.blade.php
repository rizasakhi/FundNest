<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FundNest</title>
</head>
<body>
    {{-- Navbar --}}
    <x-navbar/>

    {{-- Heroes --}}
    <div class="container col-10 px-4 py-5" bis_skin_checked="1">
        <div class="row flex-lg-row-reverse align-items-center g-5 pb-5" bis_skin_checked="1">
            <div class="col-10 col-sm-8 col-lg-6" bis_skin_checked="1">
                <img src="https://img.freepik.com/free-vector/crowdfunding-flat-cartoon-concept-with-human-hands-throwing-coins-productive-idea-growth-symbols-vector-illustration_1284-84401.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6" bis_skin_checked="1">
                <h1 class="display-5 fw-bold lh-1 mb-3">@lang('heroes.header')</h1>
                <p class="lead">@lang('heroes.description')</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start" bis_skin_checked="1">
                <a href="{{ route('create-campaign') }}">
                    <button type="button" class="btn btn-dark btn-lg px-4 me-md-2">@lang('navbar.create-campaign')</button>
                </a>
                <a href="{{ route('campaign') }}">
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">@lang('heroes.see-campaign')</button>
                </a>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <x-footer/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>