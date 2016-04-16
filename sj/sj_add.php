
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				 .
			</div>
			<!-- END PAGE TITLE -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container" align="center"> 
							<div class="tab-pane col-md-12" style="background-color:#c6f245" > 
										<!-- BEGIN FORM-->  
										<form name="form-name" align="center"  method="post" action="?mod=karyawan&pg=karyawan_form_add" class="form-horizontal">
											<div class="form-body" > 
												<h2 class="form-section">Input Data SJ Tagihan</h3> 
												<div class="row" >
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-5">Nama Karyawan</label>
															<div class="col-md-6">
																<input type="text" class="form-control" name="nama_kar" id="nama_kar" autofocus required
																 value="<?php echo isset($_POST['nama_kar']) ? $_POST['nama_kar'] : '';?>"
																/>
																 
															</div>
															<div class="col-sm-4">
							<div class="select2-container select2-container-multi populate placeholder" id="s2id_s2_with_tag"><ul class="select2-choices"> 
							<li class="select2-search-field">    
							<label for="s2id_autogen1" class="select2-offscreen"></label>    
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen1" style="width: 324px;" placeholder="">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none select2-drop-active">   <ul class="select2-results">   <li class="select2-no-results">No matches found</li></ul></div></div><select id="s2_with_tag" multiple="multiple" class="populate placeholder select2-offscreen" tabindex="-1">
								<option>Linux &gt; 2354364</option>
								<option>Windows</option>
								<option>OpenSolaris</option>
								<option>FirefoxOS</option>
								<option>MeeGo</option>
								<option>Android</option>
								<option>Sailfish OS</option>
								<option>Plan9</option>
								<option>DOS</option>
								<option>AIX</option>
								<option>HP/UP</option>
								<option>Tobi</option>
								<option>Tobi</option>
							</select>
						</div>
														</div>
													</div> 
												</div>  
											</div>
										</form>
										<!-- END FORM-->  
							</div>
						</div>
					</div>
<script type="text/javascript">
// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Select OS"});
	$('#s2_country').select2();
}
// Run timepicker
function DemoTimePicker(){
	$('#input_time').timepicker({setDate: new Date()});
}
$(document).ready(function() {
	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();
});
</script>
