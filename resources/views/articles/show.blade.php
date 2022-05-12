@section('title', $article->title)
@extends('layouts.main')

@section('content')
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css"
    />
</head>
    <body class="antialiased">
<nav class="navbar" role="navigation" aria-label="main navigation" style="background-color:rgb(255,255,255,0);>
      <div class="navbar-brand">
     
        <a
          role="button"
          class="navbar-burger"
          aria-label="menu"
          aria-expanded="false"
          data-target="navMenu"
        >
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div id="navMenu" class="navbar-menu">
        <div class="navbar-start">
          <a href="{{ route('articles.index') }}" class="navbar-item">
            All Posts
          </a>
        </div>
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a href="{{ route('articles.create') }}" class="button is-info">
                <strong>New Post</strong>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

<div class="container">
<br>
<br>
<div class="content">
  <a href="{{ route('articles.show', [$article->slug]) }}">
    <h1 class="title">{{ $article->title }}</h1>
  </a>
  <p><b>Posted:</b> {{ $article->created_at->diffForHumans() }}</p>
  <p><b>Category:</b> {{ $article->category }}</p>
  <p>{!! nl2br(e($article->content)) !!}</p>

  <form method="post" action="{{ route('articles.destroy', [$article->slug]) }}">
    @csrf @method('delete')
    <div class="field is-grouped">
      <div class="control">
        <a
          href="{{ route('articles.edit', [$article->slug])}}"
          class="button is-info is-outlined"
        >
          Edit
        </a>
      </div>
      <div class="control">
        <button type="submit" class="button is-danger is-outlined">
          Delete
        </button>
      </div>
    </div>
  </form>
</div>
</div>
</body>
@endsection