<?php include_once('../layout/header.php'); 
	  $pag= 1;

?>

					<!--begin::Toolbar-->
					<div class="toolbar py-2" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
							<!--begin::Page title-->
							<div class="flex-grow-1 flex-shrink-0 me-5">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center text-dark fw-bold my-1 fs-3">Dashboard
									<!--begin::Separator-->
									<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
									<!--end::Separator-->
									<!--begin::Description-->
									<small class="text-muted fs-7 fw-semibold my-1 ms-1">#XRS-45670</small>
									<!--end::Description--></h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
							</div>
							<!--end::Page title-->
							<!--begin::Action group-->
							<div class="d-flex align-items-center flex-wrap">
								<!--begin::Wrapper-->
								<div class="flex-shrink-0 me-2">
									<ul class="nav">
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light active fw-semibold fs-7 px-4 me-1" data-bs-toggle="tab" href="#">Day</a>
										</li>
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-semibold fs-7 px-4 me-1" data-bs-toggle="tab" href="">Week</a>
										</li>
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-semibold fs-7 px-4" data-bs-toggle="tab" href="#">Year</a>
										</li>
									</ul>
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Action group-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Content-->
					<div class="d-flex flex-column flex-column-fluid">
						<div class="card p-2">
						<!--begin::Container-->
						<div class="d-flex flex-wrap flex-center justify-content-lg-between mx-auto w-xl-900px">
							<!--begin::Item-->
							<div id="lista-usuario" class="d-flex flex-column flex-center h-100px w-100px h-lg-150px w-lg-150px m-3 bg-info rounded-circle btn" data-bs-toggle="modal" data-bs-target="#modalUsuario">
								<!--begin::Symbol-->
								<i class="ki-duotone ki-user fs-3x pe-0">
								<span class="path1"></span>
								<span class="path2"></span>
								</i>
								<!--end::Symbol-->

								<!--begin::Info-->
								<div class="mb-0 text-center">
									<!--begin::Value-->
									<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
										<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="10000" data-kt-countup-suffix="">0</div>
									</div>
									<!--end::Value-->

									<!--begin::Label-->
									<span class="text-white fw-semibold fs-5 lh-0">Usuarios</span>
									<!--end::Label-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Item-->

							<!--begin::Item-->
							<div id="lista-curso" class="d-flex flex-column flex-center h-100px w-100px h-lg-150px w-lg-150px m-3 bg-info rounded-circle btn" data-bs-toggle="modal" data-bs-target="#modalCurso">
								<!--begin::Symbol-->
								<i class="ki-duotone ki-book-open fs-3x pe-0">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
								<!--end::Symbol-->

								<!--begin::Info-->
								<div class="mb-0 text-center">
									<!--begin::Value-->
									<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center text-center">
										<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700" data-kt-countup-suffix="">0</div>
									</div>
									<!--end::Value-->

									<!--begin::Label-->
									<span class="text-white fw-semibold fs-5 lh-0">Cursos</span>
									<!--end::Label-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Item-->

							<!--begin::Item-->
							<div id="lista-certificado" class="d-flex flex-column flex-center h-100px w-100px h-lg-150px w-lg-150px m-3 bg-info rounded-circle btn" data-bs-toggle="modal" data-bs-target="#modalCertificado">
								<!--begin::Symbol-->
								<i class="ki-duotone ki-scroll fs-3x">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
								<!--end::Symbol-->

								<!--begin::Info-->
								<div class="mb-0 text-center">
									<!--begin::Value-->
									<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center text-center">
										<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="9999" data-kt-countup-suffix="">0</div>
									</div>
									<!--end::Value-->

									<!--begin::Label-->
									<span class="text-white fw-semibold fs-5 lh-0">Certificados</span>
									<!--end::Label-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Item-->
						</div>						
						<!--end::Container-->
						</div>
						<div class="d-flex p-2 border border-dashed">

					
						<div class="min-w-150px me-2 border border-dashed border-3 rounded">
							<select id="criterio-curso" name="criterio-video" class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Criterio" data-hide-search="true">
								<option value=""></option>
								<option value="1" selected>Curso 1</option>
								<option value="2">Curso 2</option>
								<option value="3">Curso 3</option>
								<option value="4">Curso 4</option>
								<option value="5">Curso 5</option>
								<option value="7">Curso 6</option>
								<option value="8">Curso 7</option>
							</select>
						</div>
					</div>

					</div>
					<!--end::Content-->

					<!--begin::Modal Usuario -->
					<div class="modal modal-xl fade" tabindex="-1" id="modalUsuario" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header p-2">
									<h3 class="modal-title px-5">Lista de Usuarios</h3>
									<!--begin::Close-->
									<div class="btn btn-icon btn-sm btn-active-light-primary ms-2 modal-close" data-bs-dismiss="modal" aria-label="Close">
										<i class="ki-duotone ki-cross fs-3x"><span class="path1"></span><span class="path2"></span></i>
									</div>
									<!--end::Close-->
								</div>

								<div class="modal-body">
										<table id="tabla-usuario" class="datatable table  table-row-dashed table-hover rounded gy-2 gs-md-3 nowrap">
											<thead>
												<tr class="text-start fw-bolder text-uppercase">
													<th>#</th>
													<th>Video</th>
													<th>Autor</th>
													<th>Nº</th>
													<th class="text-center">Detalle</th>
												</tr>
											</thead>
											<tbody>
												
															<tr>
																<th>1</th>
																<td>LALA</td>
																<td>LELE</td>
																<td>LILI</td>
																<td class="text-center p-0">
																	<a class="btn btn-primary btn-sm" href="#">Ver</a>
																</td>
															</tr> 
															<tr>
																<th>2</th>
																<td>LALA</td>
																<td>LELE</td>
																<td>LILI</td>
																<td class="text-center p-0">
																	<a class="btn btn-primary btn-sm" href="#">Ver</a>
																</td>
															</tr> 
															
											</tbody>
										</table>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-primary modal-close" data-bs-dismiss="modal">Cerrar</button>
								</div>
							</div>
						</div>
					</div>
					<!--end::Modal Usuario -->

					<!--begin::Modal Curso -->
					<div class="modal modal-xl fade" tabindex="-1" id="modalCurso" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header p-2">
									<h3 class="modal-title px-5">Lista de Cursos</h3>
									<!--begin::Close-->
									<div class="btn btn-icon btn-sm btn-active-light-primary ms-2 modal-close" data-bs-dismiss="modal" aria-label="Close">
										<i class="ki-duotone ki-cross fs-3x"><span class="path1"></span><span class="path2"></span></i>
									</div>
									<!--end::Close-->
								</div>

								<div class="modal-body">
									<table id="tabla-curso" class="datatable table  table-row-dashed table-hover rounded gy-2 gs-md-3 nowrap">
											<thead>
												<tr class="text-start fw-bolder text-uppercase">
													<th>#</th>
													<th>Video</th>
													<th>Autor</th>
													<th>Nº</th>
													<th class="text-center">Detalle</th>
												</tr>
											</thead>
											<tbody>
												
															<tr>
																<th>1</th>
																<td>LALA</td>
																<td>LELE</td>
																<td>LILI</td>
																<td class="text-center p-0">
																	<a class="btn btn-primary btn-sm" href="#">Ver</a>
																</td>
															</tr> 
															<tr>
																<th>2</th>
																<td>LALA</td>
																<td>LELE</td>
																<td>LILI</td>
																<td class="text-center p-0">
																	<a class="btn btn-primary btn-sm" href="#">Ver</a>
																</td>
															</tr> 
															
											</tbody>
										</table>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-primary modal-close" data-bs-dismiss="modal">Cerrar</button>
								</div>
							</div>
						</div>
					</div>
					<!--end::Modal Curso -->

					<!--begin::Modal Certificado -->
					<div class="modal modal-xl fade" tabindex="-1" id="modalCertificado" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header p-2">
									<h3 class="modal-title px-5">Lista de Certificados</h3>

									<!--begin::Close-->
									<div class="btn btn-icon btn-sm btn-active-light-primary ms-2 modal-close" data-bs-dismiss="modal" aria-label="Close">
										<i class="ki-duotone ki-cross fs-3x"><span class="path1"></span><span class="path2"></span></i>
									</div>
									<!--end::Close-->
								</div>

								<div class="modal-body">

								<!--begin::Chart container-->
								<div id="grafico" class="d-flex justify-content-center">
									<div id="kt_charts" class="w-50 h-150px"></div>
								</div>
								<!--end::Chart container-->
								<div class="div-loading border border-dashed border-3 rounded p-1">
									<h1 id="titulo-certificado" class="text-dark text-center fs-4 my-1">Certificados Emitidos </h1>
									<table id="tabla-certificado" class="datatable table  table-row-dashed table-hover rounded gy-2 gs-md-3 nowrap">
											<thead>
												<tr class="text-start fw-bolder text-uppercase">
													<th>ID</th>
													<th>Video</th>
													<th>Autor</th>
													<th>Nº</th>
													<th class="text-center">Detalle</th>
												</tr>
											</thead>
											<tbody>
												
															<tr>
																<th>1</th>
																<td>LALA</td>
																<td>LELE</td>
																<td>LILI</td>
																<td class="text-center p-0">
																	<a class="btn btn-primary btn-sm" href="#">Ver</a>
																</td>
															</tr> 
															<tr>
																<th>2</th>
																<td>LALA</td>
																<td>LELE</td>
																<td>LILI</td>
																<td class="text-center p-0">
																	<a class="btn btn-primary btn-sm" href="#">Ver</a>
																</td>
															</tr> 
															
											</tbody>
										</table>
									</div>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-primary modal-close" data-bs-dismiss="modal">Cerrar</button>
								</div>
							</div>
						</div>
					</div>
					<!--end::Modal Certificado -->


<?php include_once('../layout/footer.php'); ?>

