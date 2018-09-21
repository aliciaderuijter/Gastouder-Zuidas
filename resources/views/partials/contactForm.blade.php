<p>
    Heeft u intresse of wilt u meer informatie, neemt u dan vrijblijvend contact met mij op.
</p>
@if (Session::has('status'))


    <p class="alert alert-success d-inline-block">{{Session::get('status')}}</p>


@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{action('ContactController@email')}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Naam</label>
        <input type="text" class="form-control" id="name" name="naam">
    </div>
    <div class="form-group">
        <label for="emailAddress">Email adres</label>
        <input type="email" class="form-control" id="emailAddress" name="email">
    </div>

    <div class="form-group mb-0">
        <label for="message">Bericht</label>
        <textarea class="form-control" id="message" name="bericht" rows="6"></textarea>
    </div>

    <button type="submit" id="submit" name="submit" class="btn btn-primary  mt-3">Verzenden</button>

</form>