@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PEMBELIAN') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/views" method="post">
 @csrf
 <div class="form-group">
 <label for="id">ID</label>
 <input type="text" class="form-control" 
required="required" name="id"></br>
 </div>
 <div class="form-group">
 <label for="name">Name</label>
 <input type="text" class="form-control" 
required="required" name="name"></br>
 </div>
 <div class="form-group">
 <label for="alamat">Alamat</label>
 <input type="text" class="form-control" 
required="required" name="alamat"></br>
 </div>
 <div class="form-group">
 <label for="email">Email</label>
 <input type="text" class="form-control" 
required="required" name="email"></br>
 </div>
 <div class="form-group">
 <label for="nomor rekening">Nomor Rekening</label>
 <input type="text" class="form-control" 
required="required" name="nomor rekening"></br>
 </div>
 
 <button type="submit" name="add" class="btn btn-primary 
float-right">Beli Sekarang</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection