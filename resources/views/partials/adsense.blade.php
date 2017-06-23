@php
    $adsenses = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'night',
        'life', 'fashion', 'people', 'nature', 'sports', 'technics', 'transport'
    ];
@endphp

<div class="row">
    <div class="col-md-12">
        <h3>Publicidade</h3>
        <hr>
        @foreach($adsenses as $adsense)
            <div class="row">
                <div class="col-md-12">
                    <a href="#">
                        <img src="http://lorempixel.com/200/100/{{ $adsense }}" alt="" class="img-responsive">
                    </a><br>
                </div>
            </div>
        @endforeach
    </div>
</div>