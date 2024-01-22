<h1>
    The list of Task
</h1>

<div>
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show',['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>No more task</div>
    @endforelse
</div>