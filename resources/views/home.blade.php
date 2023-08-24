@extends("layouts.index")
@section("content")
    <h1 class="text-danger">Hello home</h1>

    {{-- All project that each student work on --}}
    @foreach ($eleves as $eleve)
        <h1 class="text-primary">{{$eleve->name}}</h1>

        @foreach ($eleve->projects as $project)
            <h1>{{$project->name}}</h1>
            <form action={{ route('projectEleve.destroy', [$project->id , $eleve->id]) }} method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-warning" type="submit">Remove project from eleve</button>
            </form>
        @endforeach

        {{-- DELETE ELEVE --}}
        <form action="{{route("eleves.destroy" , $eleve->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger" type="submit">DELETE</button>
        </form>
    @endforeach

    <hr><hr><hr><hr>

    {{-- All student that work at each project --}}
    @foreach ($projects as $project)
        <h1 class="text-success">{{$project->name}}</h1>

        @foreach ($project->eleves as $eleve)
            <h1>{{$eleve->name}}</h1>
            <form action={{ route('projectEleve.destroy', [$project->id , $eleve->id]) }} method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-warning" type="submit">Remove eleve from project</button>
            </form>
        @endforeach

        <form action="{{route("projects.destroy" , $project->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger" type="submit">DELETE</button>
        </form>
    @endforeach

    <hr><hr><hr><hr>

    {{-- Liste of project eleve --}}
    @foreach ($project_eleves as $project_eleve)
        <h1>{{$project_eleve->eleve->name}} travaille sur : {{$project_eleve->project->name}}</h1>
    @endforeach


@endsection
