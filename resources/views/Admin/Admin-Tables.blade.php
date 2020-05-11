@extends('Index-Admin')
@section('title', 'Admin View')

@section('content')
    <div class="container">
        <h1>Daftar Produk</h1>
        <a href="{{ url('/Add') }}" style="float:right;margin-right: 15px;">
            <button class="btn btn-primary"> 
			    <span class="glyphicon glyphicon-plus"></span>
			    Produk
		    </button>
        </a>
    </div>
     <div class="container">
        <table id='doc' rule='all' class='table table-striped' style='width : 100%' >
            <thead class='thead-dark'>
                <tr>
                    <th><strong>No</th>
                    <th><strong>Nama Produk</th>
                    <th><strong>Harga</th>
                    <th><strong>Stock</th>
                    <th><strong>Actions</th>
                </tr>
            </thead>

            <tbody>
                 @foreach ($product as $Row)
                    <tr>
                     <td>{{ $loop->iteration }}</td>
                        <td>{{ $Row->Name }}</td>
                        <td>Rp @IDR($Row->Price)</td> 
                        <td>{{ $Row->Stock }}</td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <a href="{{ $Row->ID }}/Edit" style='margin-right:10px;color:rgb(0,200,255);'><button class='btn'><span class='glyphicon glyphicon-edit'></span></button></a>
                                    </td>

                                    <td width='20%'>
                                    </td>
                            
                                    <td>
                                        <form action="{{ $Row->ID }}"  method='post'>
                                            @method('delete')
                                            @csrf
                                            <button class='btn' type='submit' style='margin-right:10px;color:rgb(255,0,0);'><span class='glyphicon glyphicon-trash'></span></button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endforeach
            </tbody>

            {{--<tfoot>
                <tr>
                    <th><strong>No</th>
                    <th><strong>Nama Produk</th>
                    <th><strong>Harga</th>
                    <th><strong>Stock</th>
                    <th><strong>Actions</th>
                </tr>
            <tfoot>--}}
        </table>
    </div>
@stop