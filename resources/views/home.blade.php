<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <style>
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1rem;
        }

        h1 {
            margin-bottom: 1rem;
        }

        nav {
            display: flex;
            gap: 0.5rem;
            padding: 0.5rem;

            margin-bottom: 3rem;
            border-radius: 3rem;

            background-color: #fff;
            box-shadow: #00000059 0px 5px 15px;
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
        <nav>
            <a href="{{ url('new-todo') }}">New Todo</a>
            <a href="{{ url('new-todo') }}">Show Finished Todo's</a>
        </nav>

        <section class="todos">
            @foreach ($todos as $todo)
                <article id="{{ $todo->id }}" class="todo">
                    <div class="todo-content">
                        <label class="title">
                            {{ $todo->title }}
                        </label>
                        <p class="description">
                            {{ $todo->description }}
                        </p>
                    </div>
                    <form>
                        <button>Edit</button>
                        <button>Done!</button>
                    </form>
                </article>
            @endforeach
        </section>
    </main>
</body>

</html>
