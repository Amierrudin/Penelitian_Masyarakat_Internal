@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
                                <form action="/pengusul/{{$pengusul->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                    <div class="form-group">
                                        <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" 
                                        placeholder="Nama Lengkap" value="{{$pengusul->nama_lengkap}}">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                                            <option selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki" @if($pengusul->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                            <option value="Perempuan" @if($pengusul->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail" 
                                        aria-describedby="emailHelp" placeholder="Email" value="{{$pengusul->email}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="avatar" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                        <a href="/pengusul/{{$pengusul->id}}/delete" class="btn btn-danger" data-bs-dismiss="modal"
                                        onclick="return confirm('Yes or NO')">Delete</a>
                                        <button type="submit" class="btn btn-warning">Update</button>
                                    </div>
                                </form>
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content1')
        <h1>Edit Data Pengusul</h1>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
            <form action="/pengusul/{{$pengusul->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" 
                    placeholder="Nama Lengkap" value="{{$pengusul->nama_lengkap}}">
                </div>
                <div class="form-group">
                    <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                        <option selected>Jenis Kelamin</option>
                        <option value="L" @if($pengusul->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                        <option value="P" @if($pengusul->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" 
                    aria-describedby="emailHelp" placeholder="Email" value="{{$pengusul->email}}">
                </div>
                <div class="modal-footer">
                    <a href="/pengusul/{{$pengusul->id}}/delete" class="btn btn-danger" data-bs-dismiss="modal"
                    onclick="return confirm('Yes or NO')">Delete</a>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
            </div>
        </div>
    @endsection
