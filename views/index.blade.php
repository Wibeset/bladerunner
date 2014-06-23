@extends('layout')

@section('content')
<section id="home">
	<header>
        <h1>Bladerunner</h1>
    </header>
    <p>To edit me, open file <em>views/index.blade.php</em>. Then run "<em>gulp gen</em>" or "<em>php bin/generate.php</em>" to regenerate me. But first, you should install packages:</p>
    <ol>
    	<li>Install requires <em>composer install</em></li>
    	<li>Install gulp.js globally if not done yet <em>sudo npm install -g gulp</em></li>
    	<li>Install gulp.js locally <em>npm install --save-dev gulp</em></li>
    	<li>Install gulp.js packages locally <em>npm install</em></li>
    </ol>
    <footer>
    	Handcrafted by <a href="http://wibeset.com">Wibeset</a>
    </footer>
</section>
@endsection