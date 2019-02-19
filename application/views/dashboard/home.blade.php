<?php
include APPPATH . 'libraries/MetronicTopMenu.php';

$breadcrumbs = array(
	array('text'=>"Homex",'href'=>'#'),
	array('separator'=>true),
	array('text'=>"End",'href'=>'#')
);


$content_dropdown_options = [
	['text'=>"Option 1",'href'=>"#"],
	['text'=>"Option 2",'href'=>"#"],
	['text'=>"Option 3",'href'=>"#"],
];


$metronic_module_top_menu = new MetronicTopMenu(
	[
		new MetronicTopMenu_Option(["text"=>"Full Button","icon" =>"flaticon-add","badge" => "2", "href" => "#na"]),		
		new MetronicTopMenu_Option(["text"=>"Badge Button","badge" =>"?","href" => "#action"]),
		new MetronicTopMenu_MenuOption(["text"=>"SubMenu","icon" =>"flaticon-add","badge"=>"new"],[
			new MetronicTopMenu_Option(["text"=>"Full Button","icon" =>"flaticon-add","badge" => "2", "href" => "#action"]),
			new MetronicTopMenu_Option(["text"=>"Icon Button","icon" =>"flaticon-add","href" => "#action"]),
			new MetronicTopMenu_MenuOption(["text"=>"Sub Menu","icon" =>"flaticon-add","href" => "#action"],[
				new MetronicTopMenu_Option(["text"=>"Sub Menu 31","icon" =>"flaticon-add","badge" => "2", "href" => "#action"]),
				new MetronicTopMenu_Option(["text"=>"Sub Menu 32","icon" =>"flaticon-add","badge" => "2", "href" => "#action"])
			]),
		]),
	]
);
?>

@extends('master')

@section('title','Dashboard')

@section('content_title','Dashboardd')

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
