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
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
                <img alt="Tailwind CSS Navbar component" src="img/muslim.png" />
            </div>
        </div>
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
        <div class="flex-none mr-3">
            <a href="/form" class="btn glass">Add</a>
        </div>
    </div>
    {{-- nav end --}}

    {{-- table start --}}
    <div class="overflow-x-auto mt-3">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th>Selesai</th>
                <th>Name</th>
                <th>Poin</th>
                <th>Pelangaran</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($dai as $d)
            <!-- row 1 -->
            <tr>
                <th>
                    <form method="POST" action="/update/{{ $d -> id }}">
                        @method('delete')
                        @csrf
                        <button class="btn btn-ghost btn-xs">Delete</button>
                    </form>
                </th>
                    <td>{{ $d -> nama }}</td>
                    <td>{{ $d -> poin }}</td>
                    <td>{{ $d -> pelangaran }}</td>
                    <th class="flex gap-3">
                        <a href="/{{ $d -> id }}/edit">
                            <button class="btn btn-ghost btn-xs">Edit</button>
                        </a>
                    </th>
            </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>
    {{-- table end --}}
</body>
</html>