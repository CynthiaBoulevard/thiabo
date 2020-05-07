<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        
        <meta charset="utf-8">
        
        <!-- responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>ThiaBo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css" />

        @toastr_css
        <script src="jquery.min.js"></script>

    </head>







    <body>

<!----------------------------------------- Section connexion ---------------------------------------->
 

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
        </div>






<!-------------------------------------- IMG PRINCIPAL + NAVBAR---------------------------------------->
        <div class="content">

            <img src="{{ asset('frontend/images/5.jpg') }}" alt="pain" class="imgprin" id="imgprin" height="550px" width="887px" > 

        </div>
 <div id="back">

 </div>

        <ul>
            <li><a class="lien" href="#quisuis-je"> Qui suis-je ? </a></li>
            <li><a class="lien" href="#réal"> Réalisations </a></li>
            <li><a class="lien" href="#ate"> Ateliers </a></li>
            <li><a class="lien" href="#évé1"> Contact </a></li>
        </ul>


 






<!------------------------------------------ QUI SUIS-JE------------------------------------------------>


        <div class="col-sm-12">

            <blockquote class="content" id="quisuis-je">
        <br>
        <br>
        <br>
<!-- texte -->
                <h1 class="qsj">Qui suis-je ?</h1>

                <h5 class="sqsj"> PEINTRE OUI MAIS PAS QUE...</h5>

                    <p class="txtqsj"> Artiste peintre autodidacte, d'origine brésielienne, je me suis faits connaitre très 
                            réccement en 2016, grace à de nombreuses expositions en salons internationaux. 
                            Mais néanmoins je n'ai jamais cessé de peindre, et cela ne date pas d'hier car ma passion 
                            est née depuis que je suis en âge de tenir un pinceau. J'aime jouer avec la matière, 
                            la contrôler, changer son aspect initial. 
                            Bien que j'adore expérimenter les matières plus épaisses telles que l'acrylique 
                            et la peinture à l'huile. Mais j'ai tout de même une préférence particulière pour
                            l'aquarelle. Cette matière permet une liberté sans fin, c'est donc pour cela que 
                            je me suis spécialisé dans cette technique depuis quelques années. 
                            Je tire mon inspiration de mes nombreux voyages à travers le monde.  
                    </p>

            </blockquote>

        </div>

<!-- photo portrait -->
<!-- 
<div class="col-sm-12">

<img src="{{ asset('frontend/images/food41.jpg') }}" alt="Sample photo" class="img-fluid" width="200" height="200"> 

</div> -->





                        
                
    






<!-------------------------------------------- MES RÉALISATIONS ------------------------------------->

<!-- titre & sous-titre -->

    <blockquote class="content" id="réal">

    <br>



    <h1 class="titre2" id="titre2"> Mes réalisations </h1>
    <h6 class="soustitre2">AQUARELLES, ACRYLIQUES...</h6>

    </blockquote>

  


<!-- images -->

    <div class="content">

        <div class="row text-center">


            <div class="col-sm-4">
                <div class="port1"> 

            
                    <img src="{{ asset('frontend/images/1.jpg') }}" alt="Sample photo" class="img-fluid1" width="200" height="200"> 
            
                    <div class="overlay">

                        <div class="text">Illustration Gouache <br>
                                        Vendu
                            
                        </div>

                    </div>


                </div> 
            </div>


            <div class="col-sm-4">
                <div class="port2"> 


                    <img src="{{ asset('frontend/images/2.jpg') }}" alt="Sample photo" class="img-fluid2" width="200" height="200"> 

                    <div class="overlay">
                        <div class="text">Illustration Acrylique<br>
                                            Vendu</div>
                    </div>


                </div>
            </div>

            <div class="col-sm-4">
                <div class="port3"> 


                    <img src="{{ asset('frontend/images/3.jpg') }}" alt="Sample photo" class="img-fluid3" width="200" height="200"> 

                    <div class="overlay">
                        <div class="text">Illustration Acrylique <br>
                                            À vendre 
                         </div>
                    </div>


                </div>
            </div>


        </div>



        <div class="row text-center">

            <div class="col-sm-4">
                <div class="port4"> 


                    <img src="{{ asset('frontend/images/4.jpg') }}" alt="Sample photo" class="img-fluid4" width="200" height="200"> 

                    <div class="overlay">
                        <div class="text">Illustration Gouache 
                                        </div>
                    </div>


                </div>
            </div>


            <div class="col-sm-4">
                <div class="port5"> 


                    <img src="{{ asset('frontend/images/6.jpg') }}" alt="Sample photo" class="img-fluid5" width="200" height="200"> 

                    <div class="overlay">
                        <div class="text">Illustration aquarelle </div>
                    </div>
                    
                </div>
            </div>


            <div class="col-sm-4">
                <div class="port6">


                    <img src="{{ asset('frontend/images/7.jpg') }}" alt="Sample photo" class="img-fluid6" width="200" height="200"> 

                    <div class="overlay">
                        <div class="text">Portrait stylo à <br> 
                                           pointe fine</div>
                    </div>


                </div>
            </div>


        </div> 


    </div>




<blockquote class="content">
   
    <p class="textréal"> Artiste peintre autodidacte, d'origine brésiellienne, je me suis fais connaitre très 
                        réccement en 2016, grâce à de nombreuses expositions en salons internationaux. 
                        Mais néanmoins je n'ai jamais céssé de peindre, et cela ne date pas d'hier car ma passion 
                        est née depuis que je suis en âge de tenir un pinceau. J'aime jouer avec la matière, 
                        la controller, changer son aspect initial. 
                 
                        
                        
  





<!-------------------------------------------- Atelier ------------------------------------------------>


<blockquote class="content" id="ate">

<br>
<br>

<h1 class="titre3"> Nos ateliers </h1>


<p class="textréal2"> Nous organisons tout au long de l'année des ateliers. Il y a 3 types <br>
d'ateliers auxquelles vous pouvez vous inscrires chaques mois: <br>
atelier aquarelle, atelier acrylique, atelier portrait. <br>
Des ateliers disponibles à partir de 16 ans et plus. <br>
</p>

</blockquote>













<div class="row backgrounding" id="box">
<div class="container2" id="contenu">




  

    <div class="row">
    <div class='list-group gallery'>

        @foreach($lies as $image)




            <img src="{{ asset('frontend/images/1.jpg') }}" class="img-responsive" alt=""  width="230" height="230">


           


                        <div class='text-center'>

                            <h2 class='text-muted'>{{ $image->titre }}</h2>
                  
                            <h5 class='text-muted'>{{ $image->date }} </h5> 

                            <h5 class='text-muted'>{{ $image->prix }}€ </h5>

                            <p class='text-muted'>{{ $image->detail }} </p>

                        </div> <!-- text-center / end -->
                
        
                @endforeach
        

        </div> <!-- list-group / end -->
    </div> <!-- row / end -->

</div>
</div>



































<!------------------------------------ FORMULAIRE D'INSCRIPTION  -------------------------------------->



<div class="évé11" id="évé11">



    <h2 class="formcont" id="formcont1"> Inscrivez-vous ! </h2>





    <section class="contact-form" id="forme">
    <div class="container1">
    <div class="row">

    <form class="contact-form" method="post" action="{{ route('reservation.send') }}">
        @csrf


        <div class="col-md-6 col-sm-6">
                

            <label >Nom</label>
            <div class="name">
                <input  name="name" type="text" class="form-control2" id="name" required="required" 
                placeholder=" nom*">
            </div>




            <label >Ateliers</label>
            <div class="atelier">

            <select name="firstname" class="form-control2" id="atelier" required="required" >
            <option value="Aquarelle">Aquarelle</option>
            <option value="Acrylique">Acrylique</option>
            <option value="Portrait">Portrait</option>
            </select>

            </div>



            <label class="label">E-mail</label>
            <div class="email">
                <input name="email" type="email" class="form-control2" id="email" required="required" 
                placeholder=" mail*">
            </div>



            <label>Téléphone</label>
            <div class="phone">
                <input name="phone" type="phone" class="form-control2" id="phone" required="required" placeholder=" tel*">
            </div>



            <label >Message</label>

            <textarea name="message" type="text" class="form-control2" id="message1" rows="23" required="required" 
            placeholder="  message*"></textarea>




            <div class="text-center" >
            <button type="submit" id="submit1" name="submit" class="btnsend">Envoyer </button>
            </div>


        </div>
        
            
        </form>

    </div>
    </div>
    </section>







    


<!------------------------------------ FORMULAIRE DE CONTACT  ----------------------------------------->




<div class="évé1" id="évé1">



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




            <div class="text-center" >
            <button type="submit" id="submit1" name="submit" class="btnsend">Envoyer </button>
            </div>


        </div>
        
            
        </form>

    </div>
    </div>
    </section>










<!------------------------------------------- Réseaux sociaux ---------------------------------------->


<h3 class="rs" id="rs"> Vous pouvez également me suivre sur les réseaux... </h3>


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


<script type="text/javascript"  src="js/style.js"></script>
<script src="jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

@jquery
@toastr_js
@toastr_render

    </body>

</html>