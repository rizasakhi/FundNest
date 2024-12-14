<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@lang('about.title')</title>
</head>

<body>
    <x-navbar />

    <div class="container col-10 py-5 text-center">
        <div id="heroes">
            <h1 class="display-1">@lang('about.heroes.heading')</h1>
            <p class="fw-normal fs-5">@lang('about.heroes.description')</p>
        </div>
        <div id="vision" class="d-flex flex-row justify-content-center py-5 gap-5">
            <div class="col-5 text-center">
                <h1 class="display-1">@lang('about.vision')</h1>
                <p class="fs-5">@lang('about.vision-desc')</p>
            </div>
            <div class="col-5 text-center">
                <h1 class="display-1">@lang('about.mission')</h1>
                <ol>
                    <li>
                        <p class="fs-5"><span class="fw-bold"> @lang('about.mission-desc.1-span')</span>@lang('about.mission-desc.1')</p>
                    </li>
                    <li>
                        <p class="fs-5"><span class="fw-bold"> @lang('about.mission-desc.2-span')</span>@lang('about.mission-desc.2')</p>
                    </li>
                    <li>
                        <p class="fs-5"><span class="fw-bold"> @lang('about.mission-desc.3-span')</span>@lang('about.mission-desc.3')</p>
                    </li>
                </ol>
            </div>
        </div>
        <div id="core" class="row">
            <h1 class="display-1">@lang('about.values.heading')</h1>
            <div class="col-4 py-5 px-5">
                <h1>@lang('about.values.integrity-heading')</h1>
                <p>@lang('about.values.integrity')</p>
            </div>
            <div class="col-4 py-5 px-5">
                <h1>@lang('about.values.collaboration-heading')</h1>
                <p>@lang('about.values.collaboration')</p>
            </div>
            <div class="col-4 py-5 px-5">
                <h1>@lang('about.values.innovation-heading')</h1>
                <p>@lang('about.values.innovation')</p>
            </div>
            <div class="col-4 py-5 px-5">
                <h1>@lang('about.values.empowerment-heading')</h1>
                <p>@lang('about.values.empowerment')</p>
            </div>
            <div class="col-4 py-5 px-5">
                <h1>@lang('about.values.social-heading')</h1>
                <p>@lang('about.values.social_responsibility')</p>
            </div>
            <div class="col-4 py-5 px-5">
                <h1>@lang('about.values.customer-heading')</h1>
                <p>@lang('about.values.customer_centricity')</p>
            </div>
        </div>
    </div>


    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
