<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Campaign</title>
</head>
<body>
    <x-navbar/>
    @if ($campaign->user_id !== auth()->id())
        <div class="container vh-100 d-flex justify-content-center align-items-center">
            <h1 class="text-danger">You do not have permission to edit this campaign.</h1>
        </div>
        @php return; @endphp
    @endif
    <div class="container col-10 d-flex justify-content-center align-items-center flex-column vh-100">
        <div class="header text-center">
            <h1>Campaign Form</h1>
            <p>Please fill this form to start make a campaign</p>
        </div>
        <div class="form col-6">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="{{ route('update-campaign', $campaign->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="campaignPicture" class="form-label">Campaign Image Banner</label>
                    <input class="form-control border-dark" value="{{ $campaign->banner_image }}" type="file" id="campaignPicture" name="banner_image">
                </div>
                <div class="mb-3">
                    <label for="campaignName" class="form-label">Campaign Name</label>
                    <input type="text" class="form-control border-dark" value="{{ $campaign->name }}" id="campaignName" name="name" placeholder="Donation for hungry children">
                </div>
                <div class="mb-3">
                    <label for="campaignDateStart" class="form-label">Campaign Start</label>
                    <input type="date" class="form-control border-dark" value="{{ $campaign->start_date }}" name="start_date" id="campaignDateStart">
                </div>
                <div class="mb-3">
                    <label for="campaignDateEnd" class="form-label">Campaign End</label>
                    <input type="date" class="form-control border-dark" value="{{ $campaign->end_date }}" name="end_date" id="campaignDateEnd">
                </div>
                <div class="mb-3">
                    <label for="campaignDescription" class="form-label">Campaign Description</label>
                    <input type="text" class="form-control border-dark" value="{{ $campaign->description }}" name="description" id="campaignDescription" placeholder="Tell them more about this campaign">
                </div>
                <button class="btn btn-outline-dark" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <x-footer/>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>