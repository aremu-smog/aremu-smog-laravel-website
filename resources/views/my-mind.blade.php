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
                        <img src="/img/my-mind/what if i don't blow.jpeg" alt="">
                     </header>
                     <section><a href="https://medium.com/@oluwagbamilaabiodunaremu/what-if-i-dont-blow-d0acf410af23" target="_blank">What I don't blow</a></section>
                     <footer>
                        Published on Jan 19, 2020 - 4min read
                     </footer>
                  </article>
            </div>

            <div class="col-4">
                  <article class="article">
                     <header>
                        <img src="/img/my-mind/iya-alata.png" alt="">
                     </header>
                     <section><a href="https://medium.com/@oluwagbamilaabiodunaremu/what-i-do-instead-of-doing-free-jobs-designs-websites-motion-graphics-1615f08f2fde" target="_blank">What I do instead of free jobs(websites, graphic design and...)</a></section>
                     <footer>
                        Published on Dec Nov 29, 2019 - 3min read
                     </footer>
                  </article>
            </div>

          <div class="col-4">
               <article class="article">
                  <header>
                     <img src="/img/my-mind/DevFest Aba - Aremu Smog.png" alt="">
                  </header>
                  <section><a href="https://medium.com/@oluwagbamilaabiodunaremu/giving-the-first-speech-at-devfest-aba-2019-cac2bcc79949" target="_blank">Giving the first speech at Devfest Aba, 2019</a></section>
                  <footer>
                     Published on Nov 11, 2019 - 4min read
                  </footer>
               </article>
            </div>

            

            <div class="col-4">
                  <article class="article">
                     <header>
                        <img src="/img/my-mind/Reactjs.png" alt="">
                     </header>
                     <section><a href="https://medium.com/@oluwagbamilaabiodunaremu/working-with-local-images-in-react-8057f601afc1" target="_blank">Working with local images in ReactJS</a></section>
                     <footer>
                        Published on Oct 27, 2019 - 3min read
                     </footer>
                  </article>
            </div>
           
       </div>
</div>
    
@endsection