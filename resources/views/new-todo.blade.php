    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>New Todo</title>
        <style>
            body {
                display: flex;
                flex-direction: column;
                height: 100vh;

                justify-content: center;
                align-items: center;
                gap: 1rem;
            }

            form {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;

                border-radius: 1rem;
                padding: 1rem;

                height: max-content;
                width: 100%;
                max-width: 450px;

                background-color: #fff;
                box-shadow: #00000059 0px 5px 15px;
            }

            section {
                display: flex;
                justify-content: flex-end;
                gap: 0.25rem;
            }

            textarea {
                resize: vertical;
                min-height: 200px;
            }
        </style>
    </head>

    <body>
        @include('nav')
        <form action="">
            <h2 class="red">New Todo</h2>
            <label for="title">Title</label>
            <input type="text" name="title">

            <label for="description">Description</label>
            <textarea name="description"></textarea>

            <section>
                <button type="reset">Clear</button>
                <button type="submit">Add</button>
            </section>
        </form>
    </body>
