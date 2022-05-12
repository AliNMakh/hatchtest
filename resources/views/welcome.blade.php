
   @section('title', 'hatchtest')
@extends('layouts.main')

@section('content')
</head>
    <body class="antialiased">
      <!-- start header -->


      <header>
      <nav>
        <ul>
        <li><a href="#">Home</a> </li>
                <li><a href="#services">services</a> </li>
                <li><a href="#about">About</a> </li>
                <li><a href="#clients">clinets</a> </li>
                <li><a href="#blog">Blog</a> </li>
                <li><a href="#contact">contact</a> </li>
        </ul>
      </nav>
      <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <ul class="mobile-menu">
        <li><a href="#">Home</a> </li>
                <li><a href="#services">services</a> </li>
                <li><a href="#about">About</a> </li>
                <li><a href="#clients">clinets</a> </li>
                <li><a href="#blog">Blog</a> </li>
                <li><a href="#contact">contact</a> </li>
        </ul>
      </div>
      <div class="phone">
          Hotline : +516 260 0598
       </div>
    </header>
      <!--  end header  -->



      <landing>
        
      <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
        <source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4">
        </video>
            <h1>fusion travel.</h1>
            <h2>lets discovre the world toghather</h2>
            <button class="button">plan your trip</button>
    </landing>


        <section id="welcomesection">
             <div class="container">
                 <h1 style="color:black;">Welcome to fusion</h2>
                  <p class="textwelcome">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, saepe sint accusamus dolore blanditiis cum fugit, unde enim tenetur voluptatem ipsam minus. Iure aut quaerat nihil eum. Necessitatibus, officia doloremque.</h1>
             </div>
        </section>



        <section class="services">
            <div class="container thegrid">
                  <div class="service">
                         <i class="fa fa-plane"></i>
                        <h3>best price</h3>
                        <p>text here text here text here text here text here text here text here text here text here</p>
                 </div>

             <div class="service">
                      <i class="fa fa-heart"></i>
                     <h3>best travel</h3>
                      <p>text here text here text here text here text here text here text here text here text here</p>
                  </div>

               <div class="service">
                      <i class="fa fa-home"></i>
                      <h3>trust & safety</h3>
                     <p>text here text here text here text here text here text here text here text here text here</p>
                 </div>

          </div>
        </section><hr>


            <section >
             <div class="container thegrid ">  
            @foreach($articles as $article)
            <div class="blog ">
             <h1 class="title">{{ $article->title }}</h1><p><b>Category:</b> {{ $article->category }}</p>
            </div>
            @endforeach
            </div>         
            </section>


            <div class="yellow">
            <h2>get special discounts on your first journey</h2>
             <button class="book">book</button>
            </div>


        <section class="services">
          <div class="container thefootergridtemp" >

            <div class="footer1">
            <h3>about us</h3>
            <p><a href="#" class="footlink">about us</a></p>
            <p><a href="#" class="footlink">blog</a></p>
            <p><a href="#" class="footlink">contact us</a></p>
             </div>

             <div class="footer2">
             <h3>address</h3>
            <p>443 heaver court</p>
            <p>plain view</p>   
             </div>

          <div class="footer3">
            <h3>contact us</h3>
            <p>email : help@agency.com</p>
            <p>call : +516-2245369</p>
            </div>


        <div class="footer4">
        <h3 style="margin-bottom:5px;">social media</h3>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-instagram"></a>
         </div>
         
    </div>
</section>
</body>

@endsection