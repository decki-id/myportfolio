@extends('main')

@section('title', 'Deckiherdiawans - Home')

@section('section')
    <section class="profile" id="profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 info-panel">
                    <div class="row">
                        <div class="col-lg text-center">
                            <img src="{{url('/assets/images/BestFormalPhoto.jpg')}}" class="rounded-circle shadow-lg">
                            <h2>Decki Herdiawan Soepandi,<br>A.Md.Kom., MOS., MTCNA., OCA.</h2>
                            <p>Customer Support | Beginner Developer | Movie Goer | Blogger</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about pt-4 pb-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">About</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center trans">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus consequatur dolores voluptate placeat aspernatur animi repellendus esse, alias sapiente, quibusdam cum, ipsum fugit? Libero, enim neque dolore doloremque sapiente at! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque eveniet optio, aspernatur quae distinctio blanditiis excepturi quisquam possimus sequi aperiam, accusantium quibusdam voluptas perferendis voluptate error laborum, ipsam inventore iusto.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="certificates pt-3" id="certificates">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Certificates</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mb-4">
                    <a href="#mos1">
                        <img src="{{url('/assets/images/mos1.jpg')}}" class="img-thumbnail" alt="Microsoft1">
                    </a>
                    <div class="overlay overlay-custom text-center" id="mos1">
                        <a href="#" class="close-button mr-2"><i class="fas fa-times fa-2x"></i></a>
                        <a href="#toeic" class="prev"><i class="fas fa-chevron-left fa-6x"></i></a>
                        <img src="{{url('/assets/images/mos1.jpg')}}" alt="Microsoft1">
                        <a href="#oracle" class="next"><i class="fas fa-chevron-right fa-6x"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <a href="#oracle">
                        <img src="{{url('/assets/images/oracle.jpg')}}" class="img-thumbnail" alt="Oracle">
                    </a>
                    <div class="overlay overlay-custom text-center" id="oracle">
                        <a href="#" class="close-button mr-2"><i class="fas fa-times fa-2x"></i></a>
                        <a href="#mos1" class="prev"><i class="fas fa-chevron-left fa-6x"></i></a>
                        <img src="{{url('/assets/images/oracle.jpg')}}" alt="Oracle">
                        <a href="#mtcna" class="next"><i class="fas fa-chevron-right fa-6x"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <a href="#mtcna">
                        <img src="{{url('/assets/images/mtcna.jpg')}}" class="img-thumbnail" alt="MikroTik">
                    </a>
                    <div class="overlay overlay-custom text-center" id="mtcna">
                        <a href="#" class="close-button mr-2"><i class="fas fa-times fa-2x"></i></a>
                        <a href="#oracle" class="prev"><i class="fas fa-chevron-left fa-6x"></i></a>
                        <img src="{{url('/assets/images/mtcna.jpg')}}" alt="MikroTik">
                        <a href="#mos2" class="next"><i class="fas fa-chevron-right fa-6x"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <a href="#mos2">
                        <img src="{{url('/assets/images/mos2.jpg')}}" class="img-thumbnail" alt="Microsoft2">
                    </a>
                    <div class="overlay text-center" id="mos2">
                        <a href="#" class="close-button mr-2"><i class="fas fa-times fa-2x"></i></a>
                        <a href="#mtcna" class="prev"><i class="fas fa-chevron-left fa-6x"></i></a>
                        <img src="{{url('/assets/images/mos2.jpg')}}" alt="Microsoft2">
                        <a href="#toeic" class="next"><i class="fas fa-chevron-right fa-6x"></i></a>
                    </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4 mb-4">
                    <a href="#toeic">
                        <img src="{{url('/assets/images/toeic.jpg')}}" class="img-thumbnail" alt="TOEIC">
                    </a>
                    <div class="overlay text-center" id="toeic">
                        <a href="#" class="close-button mr-2"><i class="fas fa-times fa-2x"></i></a>
                        <a href="#mos2" class="prev"><i class="fas fa-chevron-left fa-6x"></i></a>
                        <img src="{{url('/assets/images/toeic.jpg')}}" alt="TOEIC">
                        <a href="#mos1" class="next"><i class="fas fa-chevron-right fa-6x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer pt-3" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-center">
                        <a target="_blank" href="https://instagram.com/deckiherdiawans">
                            <img src="{{url('/assets/icons/instagram.png')}}"><br>deckiherdiawans
                        </a>
                    </p>
                </div>
                <div class="col-sm-6">
                    <p class="text-center">
                        <a target="_blank" href="https://facebook.com/deckiherdiawans">
                            <img src="{{url('/assets/icons/facebook.png')}}"><br>Decki Herdiawan Soepandi
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p class="text-center">
                        <a target="_blank" href="https://github.com/deckiherdiawans">
                            <img src="{{url('/assets/icons/github.png')}}"><br>deckiherdiawans
                        </a>
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="text-center">
                        <a target="_blank" href="https://bitbucket.org/deckiherdiawans">
                            <img src="{{url('/assets/icons/bitbucket.png')}}"><br>deckiherdiawans
                        </a>
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="text-center">
                        <a target="_blank" href="https://gitlab.com/deckiherdiawans">
                            <img src="{{url('/assets/icons/gitlab.png')}}"><br>deckiherdiawans
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-center">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=6282216668131">
                            <img src="{{url('/assets/icons/whatsapp.png')}}"><br>+62 822 1666 8131
                        </a>
                    </p>
                </div>
                <div class="col-sm-6">
                    <p class="text-center">
                        <a target="_blank" href="https://gmail.com">
                            <img src="{{url('/assets/icons/gmail.png')}}"><br>d.herdiawan.s@gmail.com
                        </a>
                    </p>
                </div>
            </div>
            <?php $year = date('Y'); ?>
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center">&copy; <?= $year; ?> Decki Herdiawan Soepandi. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>
@endsection