<!doctype html>
<html >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IT CAREER COMPUTER TRAINING INSTITUTE</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  IT CAREER COMPUTER TRAINING INSTITUTE
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>

                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                  
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->f_name }} <span class="caret"></span>
                        </a>
                
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">                
                            <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Best Of Luck </div>
            
                            <div class="card-body">
                               
            
                                <form method="POST" action="{{route('Examstore')}}">
                                    @csrf
                                  
                                    <div class="card mb-3">
                                        <div class="card-header">Exam Start Here </div>
            
                                        <div class="card-body">
                                            @foreach($questions as $question)
                                            <div class="card @if(!$loop->last)mb-3 @endif">
                                                <div class="card-header">{{ $question->question }}</div>
            
                                                <div class="card-body">
                                                    <input type="hidden" name="questions[{{ $question->id }}]" value="">
                                                    @foreach($question->questionOptions as $option)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="questions[{{ $question->id }}]" id="option-{{ $option->id }}"
                                                            value="{{ $option->id }}" @if(old("questions.$question->id") ==
                                                        $option->id) checked @endif>
                                                        <label class="form-check-label" for="option-{{ $option->id }}">
                                                            {{ $option->option_text }}
                                                        </label>
                                                    </div>
                                                    @endforeach
            
                                                    @if($errors->has("questions.$question->id"))
                                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                                        <strong>{{ $errors->first("questions.$question->id") }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>