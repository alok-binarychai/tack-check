<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
    <link rel="stylesheet" href="{{ asset('style/weekPOP.css') }}" />
    <title>{{ $weekendSchool->name }}</title>
</head>
<body class="flex-layout-c">
    <div class="container">
        <h4>{{ $weekendSchool->name }}</h4>
        @if ($weekendSchool->where != null) <h6>Location : {{ $weekendSchool->where }}</h6> @endif
        @if ($weekendSchool->when != null) <h6>Timings : {{ $weekendSchool->when }}</h6> @endif
    
        <div class="regular">
            {!! $weekendSchool->description !!}
        </div>
        <!-- ------------- button ------------------  -->
        <div class="help-btn">
            @if ($weekendSchool->term_file != null) <a href="{{ asset('/files/'.$weekendSchool->term_file) }}" class="previous btn-1">Term Date</a> @endif
            @if ($weekendSchool->classrooms_file != null) <a href="{{ asset('/files/'.$weekendSchool->term_file) }}" class="next btn-1">View Classrooms</a> @endif
        </div>
    </div>
</body>
</html>