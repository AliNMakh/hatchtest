@section('title', 'Edit article')

@extends('layouts.main')

@section('content')
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css"
    />
</head>
    <body class="antialiased">
<br>
<div class="container">

<h1 class="title">Edit: {{ $article->title }}</h1>

<form method="put" action="{{ route('articles.update', [$article->slug]) }}">

    @csrf
    

    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input type="text" name="title" value="{{ $article->title }}" class="input" placeholder="Title" minlength="5" maxlength="100" required />
        </div>
    </div>

    <div class="field">
        <label class="label">Content</label>
        <div class="control">
            <textarea name="content" class="textarea" placeholder="Content" minlength="5" maxlength="2000" required rows="10">{{ $article->content }}</textarea>
        </div>
    </div>

    <div class="field">
        <label class="label">Category</label>
        <div class="control">
            <div class="select">
                <select name="category" required>
                    <option value="" disabled selected>Select category</option>
                    <option value="html" {{ $article->category === 'html' ? 'selected' : null }}>HTML</option>
                    <option value="css" {{ $article->category === 'css' ? 'selected' : null }}>CSS</option>
                    <option value="javascript" {{ $article->category === 'javascript' ? 'selected' : null }}>JavaScript</option>
                    <option value="php" {{ $article->category === 'php' ? 'selected' : null }}>PHP</option>
                </select>
            </div>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link is-outlined">Update</button>
        </div>
    </div>

</form>
</div>
</body>
@endsection