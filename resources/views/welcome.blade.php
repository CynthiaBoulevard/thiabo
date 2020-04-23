<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css" />

    </head>



<!-- Section connexion -->
    <body>



        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" id="co">Espace perso</a>
                    @else
                        <a href="{{ route('login') }}" id="co">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" id="co" >Inscription</a>
                        @endif
                    @endauth
                </div>
            @endif


<!-- section slider et menu -->
            <div class="content">
  
                <img src="{{ asset('frontend/images/IMG2.jpg') }}" alt="pain" class="imgprin" height="600px" width="1209px" > 


                <div id="menu">
                <div class="links">
                
                    <a href="#quisuis-je">Qui suis-je ? </a>
                    <a href="#mesréal">Réalisations</a>
                    <a href="#quisuis-je">les évènements</a>
                    <a href="#quisuis-je">Ateliers</a>
                    <a href="#quisuis-je">Contact</a>

                </div>
                </div>

            </div>
        </div>




        <div class="col-sm-12">
        <blockquote class="content" id="quisuis-je">

        
        <br>

        <h1 class="">Qui suis-je ?</h1>
        <h5 class=""> PEINTRE OUI MAIS PAS QUE...</h5>
        <p class=""> Artiste peintre autodidacte, d'origine brésiellienne, je me suis fais connaitre très <br>
                    réccement en 2016, grâce à de nombreuses expositions en salons internationaux. <br>
                    Mais néanmoins je n'ai jamais céssé de peindre, et cela ne date pas d'hier car ma passion <br>
                    est née depuis que je suis en âge de tenir un pinceau. J'aime jouer avec la matière, <br>
                    la controller, changer son aspect initial. <br>
                    Bien que j'adore expérimenter les matières plus épaisses tel que l'acrylique <br>
                    et la peinture à l'huile. Mais j'ai tout de même une préférence particulière pour <br>
                    l'aquarelle. Cette matière permet une liberté sans fin, c'est donc pour cela que <br>
                    je me suis spécialisé dans cette technique depuis quelques années. <br>
                    Je tire mon inspiration de mes nombreux voyages à travers le monde.  
        </p>
        </blockquote>
        </div>




<!-- texte sur image1 -->


                        
                
    
    <!-- <img src="images/forme7.png" class="img1-fluid" id="form7" alt="Sample photo" width="700" height="400"> -->


<!-- <div class="row text-center" >

    <div class="col-sm-12"><a href="qui-suis-je.html" class="button">En savoir plus</a>

</div>  -->
</blockquote>
</section>



<!-- GALERIE D'IMAGE -->

   <!-- titre & sous-titre -->
    <blockquote class="content">
    <br>
    <br>
    <h2 class="titreprin2" id="mesréal" >Mes réalisations</h2> 
    <h6 class="soustitre2">PEINTURES & WEB</h6>

    </blockquote>

  

<!-- PHOTOS -->
    <div class="content">
    <div class="row text-center">


        <div class="col-sm-4">
            <div class="port1"> 
                <!-- <img src="images/feuille1.JPG" class="img-fluid" alt="Sample photo"  > -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="252" height="252"> 

                <div class="overlay">
                    <h4 class="text">Illustration main <br>
                        crayons couleurs / Gouache</h4>
                </div>
            </div> 
        </div>

        <div class="col-sm-4">
            <div class="port2"> 

                <!-- <img src="images/age/agecol5.jpg" class="img-fluid" alt="Sample photo" width="250" height="250"> -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="252" height="252"> 

                <div class="overlay">
                    <div class="text">Sites Amazodrones <br>
                                        Wordpress</div>
                                    </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="port3"> 
                <!-- <img src="images/profil.JPG" class="img-fluid" alt="Sample photo" width="250" height="250" > -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="252" height="252"> 

                <div class="overlay">
                    <div class="text">Illustration numérique </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center">

        <div class="col-sm-4">
            <div class="port4"> 
                <!-- <img src="images/age/age6col.jpg" class="img-fluid" alt="Sample photo" width="250" height="250"> -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="252" height="252"> 

                <div class="overlay">
                    <div class="text">Site Bees Work Café <br>
                                    Laravel</div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="port5"> 
                <!-- <img src="images/paradis2c.jpg" class="img-fluid" alt="Sample photo" width="250" height="250"> -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="252" height="252"> 

                <div class="overlay">
                    <div class="text">Illustration aquarelle </div>
                </div>
                
            </div>
        </div>

        <div class="col-sm-4">
            <div class="port6"> 
                <!-- <img src="images/age/agecol1.jpg" class="img-fluid" alt="Sample photo" width="250" height="250"> -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="252" height="252"> 

                <div class="overlay">
                    <div class="text">Site A.G.E <br> 
                                        Wordpress</div>
                </div>
            </div>
        </div>

    </div> 
    </div>

<blockquote class="content">
   
    <p class="textréal"> Artiste peintre autodidacte, d'origine brésiellienne, je me suis fais connaitre très <br>
                        réccement en 2016, grâce à de nombreuses expositions en salons internationaux. <br>
                        Mais néanmoins je n'ai jamais céssé de peindre, et cela ne date pas d'hier car ma passion <br>
                        est née depuis que je suis en âge de tenir un pinceau. J'aime jouer avec la matière, <br>
                        la controller, changer son aspect initial. <br>
                 
                        
                        
    <!-- <img src="images/forme7.png" class="img1-fluid" id="form7" alt="Sample photo" width="700" height="400"> -->


<div class="row text-center" >

    <div class="col-sm-12"><a href="qui-suis-je.html" class="button">En savoir plus</a>

</div> 

</blockquote>




    <blockquote class="content">
    
    <h2 class="titreprin2" id="mesréal" >Les évènements</h2> 

    <p class="textréal2"> Nous organisons des évènements tout au long de l'année. Des vernissages, <br>
        des expositions, des workshops. Nous faisons égalements des rassemblements d'artistes, <br>
        l'oaccasion pour vous de pouvoir échanger eux le temps d'une soirée.
    </p>

    </blockquote>

    <div class="évé">

    </div>


    <blockquote class="content">
    
    <h2 class="titreprin2" id="mesréal" >Ateliers</h2> 

    <p class="textréal2"> Nous organisons des évènements tout au long de l'année. Des vernissages, <br>
        des expositions, des workshops. Nous faisons égalements des rassemblements d'artistes, <br>
        l'oaccasion pour vous de pouvoir échanger eux le temps d'une soirée.
    </p>

    </blockquote>



<!--****************************************** LES ATELIERS ******************************************-->


<!-- PHOTOS -->
<div class="content">
    <div class="row text-center">


        <div class="col-sm-4">
            <div class="port7"> 
                <!-- <img src="images/feuille1.JPG" class="img-fluid" alt="Sample photo"  > -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="350" height="350"> 

                <div class="overlay">
                    <h4 class="text">Illustration main <br>
                        crayons couleurs / Gouache</h4>
                </div>
            </div> 
        </div>

        <div class="col-sm-4">
            <div class="port8"> 

                <!-- <img src="images/age/agecol5.jpg" class="img-fluid" alt="Sample photo" width="250" height="250"> -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="350" height="350"> 

                <div class="overlay">
                    <div class="text">Sites Amazodrones <br>
                                        Wordpress</div>
                                    </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="port9"> 
                <!-- <img src="images/profil.JPG" class="img-fluid" alt="Sample photo" width="250" height="250" > -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="350" height="350"> 

                <div class="overlay">
                    <div class="text">Illustration numérique </div>
                </div>
            </div>
        </div>
    </div>
</div>





<blockquote class="content">
    
    <h2 class="titreprin2" id="mesréal" >Les informations</h2> 

  

    </blockquote>

    <div class="évé1">

    </div>

<p class="content">
    directed by Cynthia BOULEVARD
</p>

    </body>
</html>
