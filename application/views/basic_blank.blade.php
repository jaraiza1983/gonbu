<?php
/*
$breadcrumbs = array(
	array('text'=>"Home",'href'=>'#'),
	array('separator'=>true),
	array('text'=>"End",'href'=>'#')
);


$content_dropdown_options = [
	['text'=>"Option 1",'href'=>"#"],
	['text'=>"Option 2",'href'=>"#"],
	['text'=>"Option 3",'href'=>"#"],
];
*/
?>

@extends('master')

@section('title','Dashboard')

@section('content_title','Dashboard')

@section('m-content')
	
	@parent	
						<div class="row">
							<div class="col-md-12">

								<!--begin::Portlet-->
								<div class="m-portlet m-portlet--tab">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="fa fa-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Basic Blank Template
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										
										Blank Content...
										
									</div>
								</div>

								<!--end::Portlet-->
								
							</div>							
						</div>

@endsection
