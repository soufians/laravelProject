<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="http://localhost/lsapp/public/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/lsapp/public/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/lsapp/public/services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/lsapp/public/posts">Blog</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/lsapp/public/posts/create">Create Post</a>
            </li>
        </ul>
    </div>
</nav>