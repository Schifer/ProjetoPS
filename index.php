<?php

/**
 * Inclui no arquivo o header
 */
require_once('header.php');

?>

<main>
    <section id="calltoaction">
        <div class="row">
            <div class="container-fluid">
                <div class="col-sm">
                    <h1> Call to Action </h1>
                    <a href="characters.php" class="btn btn-dark">Click Here</a>
                </div>
            </div>
        </div>
    </section>
    <section id="start_container">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1 id="maintitle" class="mt-4 mb-4">Bem-vindo</h1>
                    <p class="maintext text-justify">
                        Este é um site sobre Phantasy Star no geral. Apesar do conteúdo ser focado no quarto game da
                        série, teremos artigos sobre todos os jogos da série. O site está em construção, por isso,
                        pedimos que sejam pacientes. Qualquer crítica podem mandar para A SUA MÃE.;)</br></br></p>

                    <p class="maintext text-justify">Vivamus nec lobortis ligula, sit amet interdum sapien. Praesent ac
                        libero
                        nec sapien ornare hendrerit. Proin nec convallis massa, vel vulputate orci. Donec et diam ut
                        orci blandit gravida. Mauris finibus justo ipsum, a consectetur lacus tempor vel. Etiam
                        vulputate diam ac ante condimentum, eget facilisis tortor eleifend. Curabitur congue ante diam,
                        ut pellentesque tortor luctus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                        Vestibulum fringilla consectetur lacus vitae scelerisque. In nec semper eros.
                    </p>
                    <img src="_img/Nei_art.png" class="img-fluid" alt="">
                </div> <!-- deve ser responsivo -->
                <div class="col-12 col-md-6">
                    <img id="mainimg" class="img-fluid" src="_img/_imgMain.jpg">

                    <p class="maintext text-justify">
                        Nulla quis dignissim mi. Nullam elit augue, interdum ut gravida tempus, finibus non ipsum. Fusce risus arcu, lobortis et ante nec, consectetur elementum neque.<br> Aliquam suscipit, arcu a sagittis vehicula, urna neque congue sem, in semper justo urna vitae dui. Aenean suscipit lacus eros, a lobortis eros molestie a. Donec ornare finibus gravida.
                    </p>
                    <p class="maintext text-justify">
                        Morbi eu nisl mauris. Duis vitae risus ac libero egestas feugiat. Aenean iaculis dui ut eros consectetur pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec turpis dolor. Praesent euismod diam eu tempus ultrices. Proin eu vestibulum sem. Nam nec lacus id nulla volutpat iaculis.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="about_game">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <img src="_img/Rolf_art.png" class="img-fluid" alt="">
                </div>
                <div class="col-sm">
                    <p>Nunc augue metus, laoreet sed eros aliquam, facilisis aliquam mauris. In ut tincidunt ipsum. Nulla rutrum venenatis congue. Aliquam blandit suscipit libero, nec porta eros bibendum non. Aliquam consequat, risus et lacinia posuere, lacus ante lobortis orci, sit amet facilisis ante nisi nec ante. Morbi at purus quis tortor tincidunt consectetur. Aenean aliquam nisi ac mollis convallis. Etiam nec molestie arcu.<br></p>
                        <p>Proin ut rutrum eros. Nullam elit felis, interdum eget aliquet non, scelerisque sed ligula. Nam suscipit justo eu purus blandit blandit. Aliquam et consequat dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam non lacinia tortor, at laoreet lorem.</p>
                </div>
                <div class="col-sm">
                    <p>Nulla quis dignissim mi. Nullam elit augue, interdum ut gravida tempus, finibus non ipsum. Fusce risus arcu, lobortis et ante nec, consectetur elementum neque. Aliquam suscipit, arcu a sagittis vehicula, urna neque congue sem, in semper justo urna vitae dui. Aenean suscipit lacus eros, a lobortis eros molestie a.</p><br>
                    <p>Morbi eu nisl mauris. Duis vitae risus ac libero egestas feugiat. Aenean iaculis dui ut eros consectetur pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec turpis dolor. Praesent euismod diam eu tempus ultrices. Proin eu vestibulum sem. Nam nec lacus id nulla volutpat iaculis. Nullam eu nisl ante. Quisque</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <p>A série conta com diversos vilões, herois e lendas. A ovelha negra da série, Phantasy star 3, se dá pelo fato de que não há "ligação" com os outros games da série. Porém, a primeira vista, pode-se pensar isso, erroneamente. <br></p>
                    <p>O jogo na realidade tem ligação direta com a explosão de Palma, que ocorre no Phantasy Star 2, e possui um total de quatro finais diferentes, e três gerações para ser explorado. Na imagem à direita, a lenda de Orakio e Laya. onsectetur adipiscing elit. Vestibulum nec turpis dolor. Praesent euismod diam eu tempus ultrices. Proin eu vestibulum sem. Nam nec lacus id nulla volutpat iaculis. Nullam eu nisl ante. Quisque
                    </p>
                </div>
                <div class="col-sm">
                    <img src="_img/ps3-orakio-laya.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <!-- contact section area with flexbox -->
        <div class="d-flex justify-content-center">
            <div class="p2">
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark" style="font-size:1.5em">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php

/**
 * Inclui no arquivo o footer
 */
require_once('footer.php');

?>
