<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ThiaBo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css" />

        @toastr_css
        <script src="jquery.min.js"></script>

    </head>



<!----------------------------------------- Section connexion ---------------------------------------->
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





<!---------------------------------- QUI SUIS-JE--------------------------------------------->
            <div class="content">
  
                <img src="{{ asset('frontend/images/IMG2.jpg') }}" alt="pain" class="imgprin" height="498px" width="1009px" > 


                <div id="menu">
                <div class="links">
                
                    <a href="#quisuis-je">Qui suis-je ? </a>
                    <a href="#mesréal">Réalisations</a>
                    <a href="#atelier">Ateliers</a>
                    <a href="#formcont">Contact</a>

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



<!-------------------------------------------- MES RÉALISATIONS ------------------------------------->

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
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="200" height="200"> 

                <div class="overlay">
                    <h4 class="text">Illustration main <br>
                        crayons couleurs / Gouache</h4>
                </div>
            </div> 
        </div>

        <div class="col-sm-4">
            <div class="port2"> 

                <!-- <img src="images/age/agecol5.jpg" class="img-fluid" alt="Sample photo" width="250" height="250"> -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="200" height="200"> 

                <div class="overlay">
                    <div class="text">Sites Amazodrones <br>
                                        Wordpress</div>
                                    </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="port3"> 
                <!-- <img src="images/profil.JPG" class="img-fluid" alt="Sample photo" width="250" height="250" > -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="200" height="200"> 

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
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="200" height="200"> 

                <div class="overlay">
                    <div class="text">Site Bees Work Café <br>
                                    Laravel</div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="port5"> 
                <!-- <img src="images/paradis2c.jpg" class="img-fluid" alt="Sample photo" width="250" height="250"> -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="200" height="200"> 

                <div class="overlay">
                    <div class="text">Illustration aquarelle </div>
                </div>
                
            </div>
        </div>

        <div class="col-sm-4">
            <div class="port6"> 
                <!-- <img src="images/age/agecol1.jpg" class="img-fluid" alt="Sample photo" width="250" height="250"> -->
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="200" height="200"> 

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
                 
                        
                        
  

</blockquote>






<!--****************************************** LES ATELIERS ******************************************-->


    <blockquote class="content">
    
    <h2 class="titreprin2" id="atelier" >Ateliers</h2> 

    <p class="textréal2"> Nous organisons tout au long de l'année des ateliers. Il y a 3 types <br>
        d'ateliers auxquelles vous pouvez vous inscrires chaques mois:  <br>
        atelier aquarelle, atelier acrylique, atelier portrait. <br>
        Des ateliers disponibles à partir de 16 ans et plus. <br>
        
    </p>

    </blockquote>



<!-- PHOTOS -->
<div class="content">
    <div class="row text-center">


        <div class="col-sm-4">
            <div class="port7"> 
                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="250" height="250"> 

                <div class="overlay">
                    <h4 class="text">Illustration main <br>
                        crayons couleurs / Gouache</h4>
                </div>


            </div> 
        </div>




        <div class="col-sm-4">
            <div class="port8"> 

                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="250" height="250"> 

                <div class="overlay">
                    <h4 class="text">Sites Amazodrones <br> 
                    Wordpress</h4>                     
                </div>

              

            </div>
        </div>




        <div class="col-sm-4">
            <div class="port9"> 

                <img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="250" height="250"> 

                <div class="overlay">
                    <h4 class="text">Illustration numérique </h4>
                </div>


            </div>
        </div>


    </div>
</div>








<!---------------------------------- FORMULAIRE D'INSCRIPTION ATELIER --------------------------------->



<h2 class="formcont" id="formcont1"> Inscrivez-vous ! </h2>



<section class="contact-form" >

    <div class="container">
        <div class="row">
            
                <form class="contact-form" method="post" action="{{ route('reservation.send') }}">
                        @csrf


                        <div class="col-md-6 col-sm-6">
                              

                            <label>Nom</label>
                            <div class="name">
                                <input  name="name" type="text" class="form-control" id="name" required="required" placeholder=" nom*">
                            </div>



                            <label>Ateliers</label>
                            <div class="atelier">

                            <select name="firstname" class="atelier" id="atelier" required="required" >
                            <option value="Aquarelle">Aquarelle</option>
                            <option value="Acrylique">Acrylique</option>
                            <option value="Portrait">Portrait</option>
                            </select>

                            </div>



                            <label>E-mail</label>
                            <div class="email">
                                <input name="email" type="email" class="form-control" id="email" required="required" placeholder=" mail*">
                            </div>



                            <label>Téléphone</label>
                            <div class="phone">
                                <input name="phone" type="phone" class="form-control" id="phone" required="required" placeholder=" tel*">
                            </div>




                            <br>
                            <br>
                            

                            <div class="text-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-send">Envoyer </button>
                            </div>


                        </div>
                            <div class="col-md-6 col-sm-6">
                            <label class="msg">Message</label>

                                <textarea name="message" type="text" class="form-control" id="message" rows="18" required="required" placeholder="  message*"></textarea>
                            </div>

                </form>
                </div>
     
    </div>

</section>










<!------------------------------------ FORMULAIRE DE CONTACT  ----------------------------------------->




<div class="évé1">

    <h2 class="formcont" id="formcont"> Besoin d'un renseignement ? </h2>





    <section class="contact-form" id="forme">
    <div class="container1">
    <div class="row">

        <form class="contact-form" method="post" action="{{ route('contact.send') }}">
        @csrf


        <div class="col-md-6 col-sm-6">
                

            <label class="label">Nom</label>
            <div class="name">
                <input  name="name" type="text" class="form-control1" id="name" required="required" 
                placeholder=" nom*">
            </div>




            <label class="label">Prénom</label>
            <div class="prenom">
                <input name="firstname" type="firstname" class="form-control1" id="prenom" required="required" 
                placeholder=" prenom*">
            </div>



            <label class="label">E-mail</label>
            <div class="email">
                <input name="email" type="email" class="form-control1" id="email" required="required" 
                placeholder=" mail*">
            </div>



            <label class="label">Message</label>

            <textarea name="message" type="text" class="form-control1" id="message1" rows="23" required="required" 
            placeholder="  message*"></textarea>




            <div class="text-center">
            <button type="submit" id="submit1" name="submit" class="btn btn-send">Envoyer </button>
            </div>


        </div>
        
            
        </form>

    </div>
    </div>
    </section>










<!------------------------------------------- Réseaux sociaux ---------------------------------------->


<h2 class="rs" id="rs"> Vous pouvez également me suivre sur les réseaux... </h2>


                    <div class="col">
                        <a href="https://github.com/" target = "_blank"><img src="frontend/images/icones/facebook.png" class="img1-fluidee" id="ic1" alt="Sample photo" width="50" height="50"></a>
                    </div>


                    <div class="col">
                        <a href="https://www.instagram.com/" target = "_blank"><img src="frontend/images/icones/instagram.png" class="img1-fluidee" id="ic2" alt="Sample photo" width="50" height="50"></a>
                    </div>


                    <div class="col">
                        <a href="https://www.linkedin.com/" target = "_blank"><img src="frontend/images/icones/linkedin.png"  class="img1-fluidee" id="ic3" alt="Sample photo" width="50" height="50"></a>
                    </div>






</div>












<p class="content">
    directed by Cynthia BOULEVARD
</p>





                           <!-- liens pour le package toastr -->

@if ($errors->any())
    @foreach ($errors->all() as $error)

    <script>
        toastr.error('{{ $error }}');
    </script>

    @endforeach
@endif



<script src="jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

@jquery
@toastr_js
@toastr_render

    </body>
</html>
