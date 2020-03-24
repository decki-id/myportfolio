@extends('main')

@section('title', 'Deckiherdiawans')

@section('section')
    <section class="profile" id="profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 info-panel">
                    <div class="row">
                        <div class="col-lg text-center">
                            <img src="{{url('/assets/images/BestFormalPhoto.jpg')}}" class="rounded-circle shadow-lg">
                            <h2>Decki Herdiawan Soepandi,<br>A.Md.Kom., MOS., MTCNA., OCA.</h2>
                            <p>Customer Support | Beginner Programmer | Movie Goer</p>
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
                <div class="col-sm-5 offset-sm-1">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus consequatur dolores voluptate placeat aspernatur animi repellendus esse, alias sapiente, quibusdam cum, ipsum fugit? Libero, enim neque dolore doloremque sapiente at!</p>
                </div>
                <div class="col-sm-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus consequatur dolores voluptate placeat aspernatur animi repellendus esse, alias sapiente, quibusdam cum, ipsum fugit? Libero, enim neque dolore doloremque sapiente at!</p>
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
                    <a href="">
                        <img src="{{url('/assets/images/mos1.jpg')}}" class="img-thumbnail" alt="">
                    </a>
                </div>
                <div class="col-sm-4 mb-4">
                    <a href="">
                        <img src="{{url('/assets/images/oracle.jpg')}}" class="img-thumbnail" alt="">
                    </a>
                </div>
                <div class="col-sm-4 mb-4">
                    <a href="">
                        <img src="{{url('/assets/images/mtcna.jpg')}}" class="img-thumbnail" alt="">
                    </a>
                </div>
                <div class="col-sm-4 mb-4">
                    <a href="">
                        <img src="{{url('/assets/images/mos2.jpg')}}" class="img-thumbnail" alt="">
                    </a>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4 mb-4">
                    <a href="">
                        <img src="{{url('/assets/images/toeic.jpg')}}" class="img-thumbnail" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact pt-4 pb-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Contact</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="form">
                <form action="">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Insert your name here">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" id="message" class="form-control" placeholder="Type your message here"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <section class="footer pt-3" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p class="text-center">
                        <a target="_blank" href="https://instagram.com/deckiherdiawans">
                            <img src="{{url('/assets/icons/instagram.png')}}"><br>deckiherdiawans
                        </a>
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="text-center">
                        <a target="_blank" href="https://facebook.com/deckiherdiawans">
                            <img src="{{url('/assets/icons/facebook.png')}}"><br>Decki Herdiawan Soepandi
                        </a>
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="text-center">
                        <a target="_blank" href="https://github.com/deckiherdiawans">
                            <img src="{{url('/assets/icons/github.png')}}"><br>deckiherdiawans
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
                    <p class="text-center">Copyright &copy; <?= $year; ?> | Decki Herdiawan Soepandi | All rights reserved</p>
                </div>
            </div>
        </div>
    </section>
@endsection