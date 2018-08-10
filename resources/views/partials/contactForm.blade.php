<h1 class="font-cursive pink text-left">
    Contact
</h1>
<p>
    Heeft u intresse of wilt u meer informatie, neemt u dan vrijblijvend contact met mij op.
</p>

<form method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Alicia de Ruijter">
    </div>
    <div class="form-group">
        <label for="emailAddress">Email adres</label>
        <input type="email" class="form-control" id="emailAddress" placeholder="aliciaderuijter@gmail.com">
    </div>


    <div class="form-group">
        <label for="message">Bericht</label>
        <textarea class="form-control" id="message" rows="6"></textarea>
    </div>
</form>