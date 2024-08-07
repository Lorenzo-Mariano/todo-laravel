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
                height: 100vh;

                justify-content: center;
                align-items: center;
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

                box-shadow: #00000059 0px 5px 15px;
            }

            section {
                display: flex;
                justify-content: flex-end;
                gap: 0.25rem;
            }

            textarea {
                resize: vertical;
            }
        </style>
    </head>

    <body>
        <form action="">
            <h2 class="red">New Todo</h2>
            <label for="title">Title</label>
            <input type="text">

            <label for="description"></label>
            <textarea name="description"></textarea>

            <section>
                <button type="reset">Clear</button>
                <button type="submit">Add</button>
            </section>
        </form>
    </body>
