<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="{{asset('storage/imagem/images.jpeg')}}">
    <title>CharacterWorld</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    @component('barranav')
    @endcomponent
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-10">
                    @hasSection('content')
                        @yield('content')
                    @endif
                </div>
            </div>
        </div>
    </main>
    
   
    @hasSection ('javascript')
        @yield('javascript')
    @endif
</body>
</html>