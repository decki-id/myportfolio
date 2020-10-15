@extends('main')

@section('title', 'Deckiherdiawans - Certificates')

@section('section')
    <section class="section certificates">
        <div class="container">
            <div class="row">
                <div class="section-title padd-15">
                    <h2>Certificates</h2>
                </div>
            </div>
            <div class="row">
                <div class="certificate-item padd-15">
                    <div class="certificate-item-inner shadow-dark">
                        <div class="certificate-image">
                            <img src="{{ url('/assets/images/mos1.jpg') }}" alt="mos1" name="Microsoft Office Specialist (1/2)">
                        </div>
                    </div>
                </div>
                <div class="certificate-item padd-15">
                    <div class="certificate-item-inner shadow-dark">
                        <div class="certificate-image">
                            <img src="{{ url('/assets/images/mtcna.jpg') }}" alt="mtcna" name="MikroTik Certificate of Network Associate">
                        </div>
                    </div>
                </div>
                <div class="certificate-item padd-15">
                    <div class="certificate-item-inner shadow-dark">
                        <div class="certificate-image">
                            <img src="{{ url('/assets/images/oracle.jpg') }}" alt="oracle" name="Oracle Academy of Java Programming">
                        </div>
                    </div>
                </div>
                <div class="certificate-item padd-15">
                    <div class="certificate-item-inner shadow-dark">
                        <div class="certificate-image">
                            <img src="{{ url('/assets/images/mos2.jpg') }}" alt="mos2" name="Microsoft Office Specialist (2/2)">
                        </div>
                    </div>
                </div>
                <div class="certificate-item padd-15">
                    <div class="certificate-item-inner shadow-dark">
                        <div class="certificate-image">
                            <img src="{{ url('/assets/images/toeic.jpg') }}" alt="toeic" name="Test Of English for International Communication">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="lightbox">
        <div class="lightbox-content">
            <div class="lightbox-close">&times;</div>
            <img src="{{ url('/assets/images/mos1.jpg') }}" class="lightbox-image">
            <div class="lightbox-caption">
                <div class="caption-text"></div>
                <div class="caption-counter"></div>
            </div>
        </div>
        <div class="lightbox-controls">
            <div class="prev-item" onclick="prevItem()"><i class="fas fa-fw fa-chevron-circle-left fa-3x"></i></div>
            <div class="next-item" onclick="nextItem()"><i class="fas fa-fw fa-chevron-circle-right fa-3x"></i></div>
        </div>
    </div>
@endsection