<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen py-10">
    <div class="mx-auto max-w-3xl rounded-2xl bg-white p-8 shadow-lg">
        <div class="mb-6 flex items-center justify-between">
            <div>
                <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Yapindo</p>
                <h1 class="text-3xl font-semibold text-slate-800">Todo List</h1>
            </div>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-sm text-slate-600">{{ count($todos) }} item(s)</span>
        </div>

        @if (session('status'))
            <div class="mb-6 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('todos.store') }}" method="POST" class="mb-8 flex gap-3">
            @csrf
            <input type="text" name="title" placeholder="Create a new todo" class="flex-1 rounded-xl border border-slate-300 px-4 py-3 focus:border-sky-500 focus:outline-none" required>
            <button type="submit" class="rounded-xl bg-sky-600 px-5 py-3 font-medium text-white hover:bg-sky-700">Add Todo</button>
        </form>

        @if ($todos->isEmpty())
            <div class="rounded-xl border border-dashed border-slate-300 p-8 text-center text-slate-500">
                No todos yet. Add one to get started.
            </div>
        @else
            <ul class="space-y-3">
                @foreach ($todos as $todo)
                    <li class="flex items-center justify-between rounded-xl border border-slate-200 bg-slate-50 px-4 py-4">
                        <div class="flex items-center gap-3">
                            <form action="{{ route('todos.update', $todo) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="completed" value="0">
                                <input type="checkbox" name="completed" value="1" onchange="this.form.submit()" {{ $todo->completed ? 'checked' : '' }} class="h-5 w-5 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                            </form>
                            <span class="text-lg {{ $todo->completed ? 'text-slate-400 line-through' : 'text-slate-800' }}">
                                {{ $todo->title }}
                            </span>
                        </div>
                        <form action="{{ route('todos.destroy', $todo) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded-lg border border-rose-200 px-3 py-2 text-sm font-medium text-rose-600 hover:bg-rose-50">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
