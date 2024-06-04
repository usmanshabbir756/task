<div>Hello Welcome</div>

<div>
    @forelse ($tasks as $task)
        <div><a href="{{ route('tasks.show',[ 'id' => $task->id ]) }}">{{$task->title}}</a></div>
    @empty
        <div>No task awailable</div>
    @endforelse
</div>