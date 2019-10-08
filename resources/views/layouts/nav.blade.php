<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/home">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ setActive('subjects') }}" href="/home/subjects">Subject <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ setActive('sections') }}" href="/home/sections">Section</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ setActive('teachers') }}" href="/home/teachers">Teacher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ setActive('strands') }}" href="/home/strands">Strand</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ setActive('subjectstrands') }}" href="/home/subjectstrands">Subject Strand</a>
      </li>
    </ul>
  </div>
</nav>