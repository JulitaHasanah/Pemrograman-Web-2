<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <div class="navbar-nav">
        
        <a class="nav-link active" aria-current="page" href="/datahome" method="POST">Home</a>
    </div>
</head>
<body>
<div {{ action('./datahome') }}>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
         
        </div>
    </nav>

    <h1 style="text-align: center">Daftar Menu</h1>

    <div class="container-fluid mb-5">
        <div class="container-fluid mb-5 pt-5">
                <div class="d-flex flex-nowrap uk-light">
                    {{-- <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                         --}}
                        @foreach ($data as $item)
                        {{-- <li> --}}
                            <div class="mx-auto uk-panel py-0 pt-2 pb-0 d-flex flex-column justify-content-center align-items-center" style="height:300px;max-width: 300px; border:3px solid white; border-radius:20px; background-color:rgb(233, 233, 233)">
                                <img src="{{asset('gambarmenu/'.$item->gambar)}}" alt="" style="max-height:150px">
                                <h5 style="color:#333" class="text-center">{{ $item->deskripsi }}</h5>
                               
                            </div>
                        {{-- </li> --}}
                        @endforeach
                    {{-- </ul> --}}
                </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
