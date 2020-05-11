@extends('Index-Admin')
@section('title', 'Admin View')

@section('content')
	<div class="container-fluid"> {{--https://stackoverflow.com/questions/45673354/bootstrap-4-invalid-feedback-with-input-group-not-displaying--}}
		<div style="border-bottom: 1px solid black;">
			<p style="text-align: center;"> 
				<font size="7" color="black"> Ubah Data Produk </font>
			<a href="{{ url('/') }}" style="float:right;margin-right: 15px;margin-top: 35px;">
				<button class="btn btn-primary"> 
					<span class="glyphicon glyphicon-menu-left"></span>
					Back
				</button>
			</a>
			</p>
		</div>
	</div>

	<div class="container" style="margin-top: 35px;">
        <form class="form-horizontal" method="post" action="/Update/{{ $product->ID }}">
            @method('patch')
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Nama Produk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->Name }}">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="harga">Harga Produk</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ $product->Price }}">
                    @error('harga')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="stock">Stock Produk</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ $product->Stock }}">
                    @error('stock')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary submit">Ubah Data Produk</button>
                </div>
            </div>
        </form>
    </div>
@stop