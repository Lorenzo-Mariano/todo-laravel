<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finished Todos</title>

    <style>
        main {
            display: flex;
            flex-direction: column;
            align-items: center;

            gap: 1rem;
            padding: 1rem;
        }

        h1 {
            margin-bottom: 1rem;
        }

        .todos {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .todo {
            display: flex;
            flex-direction: column;
            gap: 1rem;

            border-radius: 1rem;
            padding: 1rem;
            max-width: 400px;

            box-shadow: #00000059 0px 5px 15px;
            background-color: #fff;
        }

        .todo-content {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .title {
            font-weight: 600;
        }

        .todo>form {
            display: flex;
            justify-content: flex-end;
            gap: 0.5rem;
        }
    </style>
</head>

<body>
    <main>
        @include('nav')
        <section class="todos">
            @foreach ($todos as $todo)
                <article id="{{ $todo->id }}" class="todo">
                    <div class="todo-content">
                        <label class="title">
                            {{ $todo->title }} ({{ $todo->is_done }})
                        </label>
                        <p class="description">
                            {{ $todo->description }}
                        </p>
                    </div>
                </article>
            @endforeach
            {{ $todos->links() }}
        </section>
    </main>
</body>

</html>
