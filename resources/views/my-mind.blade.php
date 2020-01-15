@extends('layout.page')

@section('heading')
   My Mind
@endsection

@section('page-content')

<div class="my-mind col-10">
       <div class="row recent-articles">
          
          <div class="col-4">
               <article class="article">
                  <header>
                     <img src="/img/my-mind/DevFest Aba - Aremu Smog.png" alt="">
                  </header>
                  <section>Giving the first speech at Devfest Aba, 2019</section>
                  <footer>
                     Published on Dec 13, 2019 - 5min read
                  </footer>
               </article>
            </div>

            <div class="col-4">
                  <article class="article">
                     <header>
                        <img src="/img/my-mind/iya-alata.png" alt="">
                     </header>
                     <section>What I do instead of free jobs(websites, graphic design and...)</section>
                     <footer>
                        Published on Dec 13, 2019 - 5min read
                     </footer>
                  </article>
            </div>

            <div class="col-4">
                  <article class="article">
                     <header>
                        <img src="/img/my-mind/Reactjs.png" alt="">
                     </header>
                     <section>Working with local images in ReactJS</section>
                     <footer>
                        Published on Dec 13, 2019 - 5min read
                     </footer>
                  </article>
            </div>
       </div>
</div>
    
@endsection