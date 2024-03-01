<div class="app-inner-layout app-inner-layout-page">
	<div class="app-inner-layout__wrapper">
		<div class="app-inner-layout__content">
			<div class="tab-content">
				<div class="container-fluid">
					<div class="card mb-3">
						<div class="card-header-tab card-header">
							<div
								class="card-header-title font-size-lg text-capitalize font-weight-normal">
								<i class="header-icon typcn typcn-home-outline text-muted opacity-6"> </i><?=$title;?>
							</div>
							<div class="btn-actions-pane-right actions-icon-btn">
								<div class="btn-group dropdown">
									<button type="button" data-toggle="dropdown" aria-haspopup="true"
											aria-expanded="false"
											class="btn-icon btn-icon-only btn btn-link"><i
											class="typcn typcn-th-menu-outline" style="font-size: 16pt"></i></button>
									<div tabindex="-1" role="menu" aria-hidden="true"
										 class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
										<h6 tabindex="-1" class="dropdown-header">
											<?= lang("app.SchoolMenu") ?> </h6>
										<a type="button" tabindex="0" class="dropdown-item" data-toggle="modal" data-target="#mdlpkg"><i
												class="typcn typcn-plus"> </i><span><?= lang("app.AddNewPackage") ?> </span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
								<div class="row">
									<div class="col-sm-6">
										<div style="width: 100%;float: left;">
										<div style="width: 250px;float: left">
											<label><?= lang("app.selectCountry"); ?> </label>
											<select class="form-control select2" id="country-selector" data-target="country" name="country" required>
												<option selected disabled><?= lang("app.selectCountry"); ?> </option>
												<?php
												foreach ($countries as $country) {
													echo "<option value='{$country['id']}'>{$country['title']}</option>";
												}
												?>
											</select>
										</div>
										<button class="btn btn-primary" style="float: right;margin-top: 29px;" data-target="#mdlAddFac" data-toggle="modal"><?=lang('app.addFac');?></button>
										</div>
										<hr style="width: 100%;float: left;" />
										<table style="width: 100%;display:none;" id="tb-faculty"
											   class="table table-hover table-striped table-bordered dataTable dtr-inline"
											   role="grid" aria-describedby="example_info">
											<thead>
											<tr role="row">
												<th><?= lang("app.id") ?> </th>
												<th><?= lang("app.title") ?> </th>
												<th><?= lang("app.abbrev") ?></th>
												<th><?= lang("app.type") ?></th>
												<th><?= lang("app.dept") ?></th>
												<th></th>
											</tr>
											</thead>
											<tbody>
											</tbody>
											<tfoot>
											<tr>
												<th><?= lang("app.id") ?> </th>
												<th><?= lang("app.title") ?> </th>
												<th><?= lang("app.abbrev") ?></th>
												<th><?= lang("app.type") ?></th>
												<th><?= lang("app.dept") ?></th>
												<th></th>
											</tr>
											</tfoot>
										</table>
									</div>

									<div class="col-sm-6" id="dv-dept" style="display: none">
										<div style="width: 100%;float: left;">
											<h4 id="lbl-fac-title" style="float: left"></h4>
										<button class="btn btn-info" style="float: right;" data-target="#mdlAddDept" data-toggle="modal"><?=lang('app.addDept');?></button>
										</div>
										<hr style="width: 100%;float: left;" />
										<table style="width: 100%;" id="tb-dept"
											   class="table table-hover table-striped table-bordered dataTable dtr-inline"
											   role="grid" aria-describedby="example_info">
											<thead>
											<tr role="row">
												<th><?= lang("app.id") ?> </th>
												<th><?= lang("app.title") ?> </th>
												<th><?= lang("app.code") ?></th>
												<th><?= lang("app.classes") ?></th>
												<th></th>
											</tr>
											</thead>
											<tbody>

											</tbody>
											<tfoot>
											<tr>
												<th><?= lang("app.id") ?> </th>
												<th><?= lang("app.title") ?> </th>
												<th><?= lang("app.code") ?></th>
												<th><?= lang("app.classes") ?></th>
												<th></th>
											</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	let fac_id = null;
	$(function () {
		$("#country-selector").on("change",function () {
			get_faculty();
		})
		$("#select_year").on("change",function () {
			get_faculty();
		})
		$(document).on("click",".btn-view-dept",function () {
			const title = $(this).closest('tr').data('title');
			$("#lbl-fac-title").text(title)
			fac_id = $(this).closest('tr').data('id');
			$("#h4-dept").text("Department: "+title);
			$("[name='add_dept_fac_id']").val(fac_id);
			get_department()
		})

		$("#country-selector").on("change",function (e) {
			var id =$("#choose_class").val();
			// alert(id);
			$("#addCourseModal [name='fId']").val(id).change();
		});
	})

	function get_faculty()
	{
		$("#tb-faculty").hide();
		const country = $("#country-selector").val();
		// alert(year);
		if (country!=null) {
			$.get("<?=base_url();?>admin/get_faculty/"+country,function (data) {
				$("#tb-faculty").fadeIn(500);
				$("#tb-faculty > tbody").html(data);
				// $("#addNewCourse").show();
			})
		}
	}
	function get_department()
	{
		if (fac_id == null){
			return;
		}
		$("#dv-dept").hide();
		$("#tb-dept > tbody").html(null);
		$.get("<?=base_url();?>admin/get_department/"+fac_id,function (data) {
			$("#dv-dept").slideDown(300);
			$("#tb-dept > tbody").html(data);
			// $("#addNewCourse").show();
		})
	}
</script>
