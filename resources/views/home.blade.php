@extends("layouts.index")
@section("content")
    <h1 class="text-danger">Hello home</h1>

    @foreach ($eleves as $eleve)
        <h1 class="text-primary">{{$eleve->name}}</h1>

        @foreach ($eleve->projects as $projet)
            <h1>{{$projet->name}}</h1>
        @endforeach
    @endforeach

    <hr><hr><hr><hr>

    @foreach ($projects as $project)
        <h1 class="text-success">{{$project->name}}</h1>

        @foreach ($project->eleves as $eleve)
            <h1>{{$eleve->name}}</h1>
        @endforeach
    @endforeach

    <hr><hr><hr><hr>

    @foreach ($project_eleves as $project_eleve)
        <h1>{{$project_eleve->eleve->name}} travaille sur : {{$project_eleve->project->name}}</h1>
    @endforeach


@endsection
