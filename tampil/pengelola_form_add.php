<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Data Pengelola <small>admin</small></h1>
			</div> 
		</div>
	</div>
	<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="utama.php">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="?fo=tampil&pg=admin">Pages</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					Tambah Admin
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
<form id="form1" name="form1" method="post"  enctype="multipart/form-data" action="?fo=tampil&pg=pengelola_add"> 
	<table class="table"> 
		<tr>
			<td width="120">Username</td>
			<td width="350">
			<input name="username" type="text" id="username" autofocus required minlength="2" maxlength="30" size="20" />
			</td>
		</tr>
		<tr>
			<td width="120">Password</td>
			<td width="350">
			<input name="password" type="password" id="password" autofocus required minlength="2" maxlength="8" size="20" />
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		
			<td>
			<input type="submit" name="tambahPengelola" value="Tambah" class="btn btn-primary" />
			<input type="reset" name="resetbtn" value="Reset" class="btn btn-danger" />
			</td>
		</tr> 
	</table> 
</form> 
