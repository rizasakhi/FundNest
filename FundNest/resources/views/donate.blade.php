<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate to {{ $campaign->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <x-navbar />
    <div class="container col-10 d-flex justify-content-center align-items-center flex-column">
        <h1>Donate to {{ $campaign->name }}</h1>
        <form action="{{ route('process-donation', $campaign->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="amount" class="form-label">Donation Amount</label>
                <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter donation amount">
            </div>
            <button type="submit" class="btn btn-dark">Donate</button>
        </form>
    </div>
</body>
</html>