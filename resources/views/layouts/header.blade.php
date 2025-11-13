<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">EduFun</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Category
                </a>
                <ul class="dropdown-menu">
                    @foreach(App\Models\Category::all() as $category)
                        <li>
                            <a class="dropdown-item" href="{{ route('category.show', $category->id) }}">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('writer') }}">Writers</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
      </ul>
    </div>
  </div>
</nav>
