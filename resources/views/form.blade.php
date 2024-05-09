{{-- Setting Time --}}
@php
    date_default_timezone_set("Asia/jakarta");
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAI</title>
    {{-- daisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- icon --}}
    <link rel="shortcut icon" href="img/muslim.png" type="image/x-icon">
</head>
<body>
    {{-- nav start --}}
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">DAI</a>
            {{-- date start --}}
            <p>
                @php
                    echo date("l / jS / F / Y") . "<br>";
                @endphp
            </p>
            {{-- date end --}}
        </div>
    </div>
    {{-- nav end --}}

    {{-- form start --}}
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold text-red-500">New Mukholif!</h1>
            <p class="py-6">Untuk mendata Para pelanggar pekanan yang melanggar peraturan di pekan ini.</p>
            </div>
            <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <form class="card-body" method="post" action="/store">
                @csrf
                <div class="form-control">
                <label class="label">
                    <span class="label-text">Nama</span>
                </label>
                <input type="text" placeholder="Nama" name="nama" class="input input-bordered" required />
                </div>
                <div class="form-control">
                <label class="label">
                    <span class="label-text">Poin</span>
                </label>
                <input type="text" placeholder="Poin" name="poin" class="input input-bordered" required />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Pelanggaran</span>
                    </label>
                    <input type="text" placeholder="Pelanggaran" name="pelangaran" class="input input-bordered" required />
                    </div>
                <div class="form-control mt-6">
                <button type="submit" class="btn btn-primary text-primary">Add</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    {{-- form end --}}
</body>
</html>

