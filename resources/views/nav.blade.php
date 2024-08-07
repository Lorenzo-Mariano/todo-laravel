<style>
    nav {
        display: flex;
        gap: 0.5rem;
        padding: 0.5rem;
        border-radius: 3rem;

        background-color: #fff;
        box-shadow: #00000059 0px 5px 15px;
    }
</style>

<nav class="main-nav">
    <a href="{{ url('new-todo') }}">New Todo</a>
    <a href="{{ url('finished-todo') }}">Show Finished Todo's</a>
</nav>
