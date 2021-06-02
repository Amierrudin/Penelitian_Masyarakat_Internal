@extends('layouts.master')

@section('content')
<div class="main">
<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{$pengusul->getAvatar()}}" class="img-circle" alt="Avatar" width="100px">
										<h3 class="name">{{$pengusul->nama_lengkap}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Data diri</h4>
										<ul class="list-unstyled list-justify">
                                            <li>Email <span>{{$pengusul->email}}</span></li>
											<li>Mobile <span>(124) 823409234</span></li>
											<li>Website <span><a href="https://www.themeineed.com">www.themeineed.com</a></span></li>
										</ul>
									</div>
									<div class="text-center"><a href="/pengusul/{{$pengusul->id}}/edit" class="btn btn-warning">Edit Akun</a></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<!-- AWARDS -->
								<!-- END AWARDS -->
								<!-- TABBED CONTENT -->
								<div class="custom-tabs-line tabs-line-bottom left-aligned">
									<ul class="nav" role="tablist">
										<!-- <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Biodata</a></li> -->
										<li><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Biodata<span class="badge"></span></a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade" id="tab-bottom-left2">
										
										<div class="margin-top-30 text-center"><a href="#" class="btn btn-default">Edit Biodata</a></div>
									</div>
									<div class="tab-pane fade in active" id="tab-bottom-left1">
										<div class="table-responsive">
											<table class="table project-table">
												<ul class="list-unstyled list-justify">
													<li>Nama Lengkap <span>{{$pengusul->nama_lengkap}}</span></li>
													<li>Agama <span>Islam</span></li>
													<li>Perguruan Tinggi <span>Politeknik Negeri Indramayu</span></li>
													<li>Program Studi <span>Rekayasa Perangkat Lunak</span></li>
													<li>Jabatan <span>Ketua Jurusan</span></li>
													<li>NIDN <span>{{$pengusul->user_nidn}}</span></li>
													<li>Tempat Lahir <span>Indramayu</span></li>
													<li>Website <span><a href="https://www.themeineed.com">www.solusiit.net</a></span></li>
												</ul>
											</table>
										</div>
									</div>
								</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
            </div>
@stop