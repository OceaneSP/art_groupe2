<?php include ("header.php"); ?>

    <main class="container">
        <div class="row">
            <div class="col">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="..\docs\img\PIC.png" class="d-block w-100" alt="...">
                        </div>
                    <div class="carousel-item"></a>
                            <img src="..\docs\img\MONNET_carr.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="..\docs\img\renoir.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </div>
        <section class="galleryHover">
            <div class="row">
                <div class="col">
                    <h3 class="text-center mt-5">Nos coups de coeur artistique</h3>
                    <div class="col hover01">
                    <a href="artistes.php"> <img src="..\docs\img\courbet.png" class="imghov mr-2" alt="..."></a>
                    <a href="artistes.php"><img src="..\docs\img\Gustave-Courbet-Le-désespéré.png" class="imghov mr-2" alt="..."></a>
                    <a href="artistes.php"><img src="..\docs\img\pc.png" class="imghov mr-2" alt="..."></a>
                    <a href="artistes.php"><img src="..\docs\img\img2.png" class="imghov mr-2" alt="..."></a>
                    <a href="artistes.php"><img src="..\docs\img\img3.png" class="imghov" alt="..."></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="video bg">
            <div class="row">
                <div class="col text-center m-5">
                    <h2 class="text-center mt-5">Media</h2>
                    <div class="text-center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/bNrLHJkMAG0" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <button class="btn btn-secondary btn-lg m-3">Explorer</button>

                    <div class="col">
                        <h3 class="text-center mt-5">De l'art !</h3>
                        <div class="hover01">
                            <img src="..\docs\img\img.png" class="img-thumbnail" alt="...">
                            <img src="..\docs\img\joconde.png" class="img-thumbnail" alt="...">
                            <img src="..\docs\img\elvis.png" class="img-thumbnail" alt="...">
                        </div>
                    </div>
                </div>
        </section>

        <section class="newletters mx-auto mb-5">
            <div class="row">
                <div class="col text-center mt-5">
                    <h3>Subscribe Newletter !</h3>
                    <p class="mt-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.placeat<br>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, placeat!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
            <button class="btn btn-secondary btn-lg join-us mx-auto">Join Us</button>
        </section>

        <section class="contact text-center mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-text">
                            <h2 class="center">Title</h2>
                            <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam
                                obcaecati
                                tempore quidem ducimus
                                ipsa modi aperiam omnis. Temporibus dicta illum, accusamus saepe voluptatum quia beatae
                                consectetur,
                                voluptate, sed modi officiis.<br>
                                Ducimus modi alias ab nobis dicta provident aut<br>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="formulaire">
                            <form>
                                <div class="form-group text-form">

                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Prénom">
                                </div>
                                <div class="form-group text-form">

                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nom">
                                </div>
                                <div class="form-group text-form">

                                    <input type="mail" class="form-control" id="exampleInputPassword1"
                                        placeholder="E-mail">
                                </div>
                                <div class="form-group text-form">
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        placeholder="Message" rows="5"></textarea>
                                </div>

                                <button type="submit" class="btn btn-secondary mb-5">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>

</body>

</html>


<?php include("footer.php") ?>
