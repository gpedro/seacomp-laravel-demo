@inject('lorempixel', '\App\Http\Services\RandomImage')

<div class="row">
    <div class="col-md-12">
        <h3>Publicidade</h3>
        <hr>
        @for($i = 0; $i < 5; $i++)
            <div class="row">
                <div class="col-md-12">
                    <a href="#">
                        <img src="{{ $lorempixel->get('', 400, 180) }}" alt="" class="img-responsive">
                    </a><br>
                </div>
            </div>
        @endfor
    </div>
</div>