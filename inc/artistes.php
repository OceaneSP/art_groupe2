<?php include("header.php");?>
<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
</script>
<div class="container">
<div class="row">
    <div class="side pt-0">
        
        <p><img src="../docs\img\artistes1.jpg" alt="artistes" width="100%" height="10%"></p>
        <h1>Les artistes</h1>
        <p>Un artiste est un individu faisant (une) œuvre, cultivant ou maîtrisant un art, un savoir, une technique, et dont on remarque entre autres la créativité, la poésie, l'originalité de sa production, de ses actes, de ses gestes.</p>
        <p>Ses œuvres sont source d'émotions, de sentiments, de réflexion, de spiritualité ou de transcendances.</p>
        <p>Dans un sens commun, et plutôt péjorativement ou pour la disqualifier, on parle également d'artiste ou de poète à propos d'une personne étrange, marginale, oisive, rêveuse, qui fait n'importe quoi1, de quelqu'un qui n'a pas le sens des réalités,
            des règles, et est parfois considéré comme rebelle ou fou mais qui peut aussi à l'inverse être apprécié comme faisant preuve de génie.</p>

        <h2 class="m-5 p-5" style="background-color:#a674b8;; font-size:150%; color:black;">
            L'artiste n'est que la passerelle entre rêve et réalité<br>- Pierre-paul Marchini</h2>

        <p>Les caractéristiques conférées à un artiste, et la notion en elle-même, sont particulièrement variables dans l'histoire et n'ont pas de définitions universelles (de même que pour l'art, un « faux concept » anhistorique). Ces définitions ont comme
            origine une expérience, une appréciation personnelle, un regard et sont la conséquence d'un intérêt collectif propre à une culture. De plus, la notion d'artiste – ou son absence – et l'imaginaire qui l'accompagne, est liée à l'idée de sujet
            et d'altérité chez un groupe humain, à une époque déterminée.</p>

    </div>


    <div class="main ">
        <h1>Les meilleurs artistes au monde</h1>
        <p>Alors que le monde a vu beaucoup de peintures et d'œuvres d'art impressionnantes, il faut noter que parmi elles il y a celles qui sont restées intemporelles. Cependant, lorsque l'on parle des peintures les plus célèbres du monde, il est presque
            impossible de le faire sans parler des beaux-arts de la renaissance et des peintres italiens de la renaissance en particulier. </p>
        <p>Tout comme le vin fin, certaines des plus célèbres peintures des artistes sont celles qui ont mûri à travers le temps. Une chose qui est cohérente pour toutes les œuvres d'art les plus célèbres ce qu'elles ont été créées par de vrais visionnaires
            et leurs peintures ont communiqué un message aux êtres humains. </p>
        <h2 class="m-5 p-5" style="background-color: #a674b8;; font-size:150%; color:black;">
            L'artiste a le pouvoir de révéiller la force d'agir qui sommeille dans d'autres âmes.<br>- Friedrich Neitzsche</h2>
        <p>Les œuvres des artistes les plus célèbres vous laisseront enchantés et fascinés tout en communiquant le message et l'inspiration de l'artiste. Voici une video de plus grands artistes du monde le peintre français Claude Monet. </p>
        <p><iframe width="860" height="415" src="https://www.youtube.com/embed/jo22rGERQVQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>

    </div>

    <div class="center">
        <h1>Les artistes français</h1>
        <p>L’histoire de l’art globale a été marquée de façon indéniable par certains courants et artistes français. Au-delà des frontières de l’Hexagone, la France est notamment reconnue pour son patrimoine artistique d’une richesse inépuisable.</p>
        <p>De l’enluminure du Moyen-Âge en passant par la peinture impressionniste ou la photographie contemporaine, nombre d’artistes français ont marqué leur siècle. Il serait ainsi impossible de réduire leur histoire à une production, un genre, une école,
            une personne ou une mode…</p>
        <h2 class="quote m-5 p-5" style="background-color: #a674b8;; font-size:150%; color:black;">
            Plus la critique est hostile, plus l'artiste devrait être encouragé<br>- Marcel Duchamp</h2>
        <p>Et face à l’actualité bouillante du marché de l’art, une chose est sûre : les artistes français ont toujours la cote ! Pour découvrir le talent, la diversité et le charme des œuvres de ces derniers, Voici quelques artistes français les plus célèbres...
        </p>

        <!-- Slideshow container -->
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../docs\img\CLAUDE.jpg" style="width:100%">
                <div class="text">Les Nymphéas par Claude Monet</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="../docs\img\renoir.jpg" style="width:100%">
                <div class="text">Bal du Moulin de la Galette par Renoir</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="../docs\img\cezanne.jpg" style="width:100%">
                <div class="text">Mont Sainte-Victoire par Cézanne</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
</div>
</div>

<?php include("footer.php");?>

