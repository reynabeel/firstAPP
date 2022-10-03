<div>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   Hai Netizen

                   <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Akun  Netizen</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan nama anda" wire:model='nama' >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
  <textarea class="form-control" wire:model='komentar'id="exampleFormControlTextarea1" rows="3"></textarea><br>
  <input class="btn btn-primary" type="button" value="simpan"wire:click='simpan'>
</div>
   
  </div>
  
</form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</div>
