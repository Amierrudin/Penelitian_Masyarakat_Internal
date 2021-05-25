<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
		    <ul class="nav">
				<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                @if(auth()->user()->role == 'pengusul')
                <li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Pengajuan</span></a></li>
                <li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Logbook</span></a></li>
                @endif

                @if(auth()->user()->role == 'admin')
                    <li>
						<a href="#subPages" data-toggle="collapse" class="collapsed" aria-expanded="false"><i class="lnr lnr-user"></i> 
                        <span>Users</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
						    <div id="subPages" class="collapse" aria-expanded="false" style="height: 0px;">
								<ul class="nav">
                                <li><a href="/pengusul" class="active"><i class="lnr lnr-user"></i> <span>Pengusul</span></a></li>
                                <li><a href="/reviewer" class="active"><i class="lnr lnr-user"></i> <span>Reviewer</span></a></li>
								</ul>
							</div>
					</li>
					<li><a href="#" class="active"><i class="lnr lnr-bookmark"></i> <span>Kegiatan</span></a></li>
                    <li><a href="#" class="active"><i class="lnr lnr-pencil"></i> <span>Penilaian</span></a></li>
                    <li><a href="#" class="active"><i class="lnr lnr-bookmark"></i> <span>Kelola Usulan</span></a></li>
                @endif
                
			</ul>
		</nav>
	</div>
</div>
