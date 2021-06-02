@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Pengusul</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr
                                        lnr-plus-circle"></i></button>
                                    </div> 
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Aksi</aksi>
											</tr>
										</thead>
										<tbody>
                                            @foreach($data_pengusul as $pengusul)
                                            <tr>
                                                <td>{{$pengusul->nama_lengkap}}</td>
                                                <td>{{$pengusul->jenis_kelamin}}</td>
                                                <td>{{$pengusul->email}}</td>
                                                <td>{{$pengusul->user_role}}</td>
                                                <td><a href="/pengusul/{{$pengusul->id}}/profile" class="btn btn-warning btn-sm">Detail</a></td>
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TAMBAH DATA PENGUSUL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pengusul</h5>
                </div>
                <div class="modal-body">
                    <form action="/pengusul/create" method="POST"  enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group{{$errors->has('nama_lengkap') ? 'has-error' : ''}}">
                            <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" 
                            value="{{old('nama_lengkap')}}">
                            @if($errors->has('nama_lengkap'))
                                <span class="help-block">{{$errors->first('nama_lengkap')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('jenis_kelamin') ? ' has-error' : ''}}">
                            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                <option selected>Jenis Kelamin</option>
                                <option value="Laki-Laki"{{(old('jenis_kelamin') == 'Laki-laki') ? ' selected' : ''}}>Laki-Laki</option>
                                <option value="Perempuan"{{(old('jenis_kelamin') == 'Perempuan') ? ' selected' : ''}}>Perempuan</option>
                            </select>
                            @if($errors->has('jenis_kelamin'))
                                <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email"
                            value="{{old('email')}}">
                            @if($errors->has('email'))
                                <span class="help-block">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('avatar') ? ' has-error' : ''}}">
                            <input type="file" name="avatar" class="form-control">
                            @if($errors->has('avatar'))
                                <span class="help-block">{{$errors->first('avatar')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="close" class="btn btn-secondary">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
</div>

@stop
