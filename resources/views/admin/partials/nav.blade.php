<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item <?php if(request()->segment(2) == '') echo 'active';?>">
          <a class="nav-link" href="{{route('admin.index')}}">Home</a>
        </li>
        <li class="nav-item <?php if(request()->segment(2) == 'experience') echo 'active';?>">
          <a class="nav-link" href="{{route('admin.experience.index')}}">Experience</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>