<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//BN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="Bn" lang="Bn"><head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta property="fb:pages" content="484099874961690">
				
		<title> Print Page </title>
		<link rel="stylesheet" href="{{ asset('public/frontend/css') }}/layout.css" type="text/css">
		<script type="text/javascript" src="{{ asset('public/frontend/js') }}/jquery_for_print_page.js"></script>
		<link rel="shortcut icon" href="http://www.sylhetview24.net/images/icon/sylhetview24logo.jpg">
		
		<style>
			.print_now_button{
			float: right; background: #607D8B; color: #FFF; padding: 5px 8px; border-radius: 3px; margin: 25px 0 0 0; font-size: 12px; font-family: arial;
			}
				.print_now_button:hover{
				background: #F7941F; cursor: pointer;
				}
		</style>
	</head>
	
	<body>
		<div id="content_inner"> 
			<div id="content_inner_mid">
				<div id="content_inner_mid_float" style="background: #F0F0ED;">
					<div style="background: #FFF; border-bottom: 1px solid #DDD;" align="center">
						<a href="{{ url('/') }}" title="Newsportal">
							<img style="margin: 10px 0; height: 75px;" src="{{ asset('public/frontend/images') }}/logo.jpg" alt="Newsportal">
						</a>
						
						<a class="print_now_button" onclick="$(this).hide(); window.print();"> PRINT </a>
					</div>

		<div style="float:left; width: 1020px; padding: 15px 0px; background: #FFF; border-bottom: 1px solid #DDD;">
				<h1 id="news_head_1" style="width: 100%;"> {{ $printnews->title }} </h1>
								
																
			<div class="page_source_info" style="width: 100%;">
				<p id="page_source"> <span style="color:#787878" ;="">নিউজপোর্টাল, ২০২০-০৯-০১ ১১:৫৩:৩৮ </span> </p>
			</div> <!-- END OF CLASS PAGE_SOURCE_INFO -->
		</div>
							
		<div class="left_part" style="padding: 15px 35px; background: #FFF; margin: 0 150px;">
								<!-- <h1 id="news_head_1">  </h1> --->

		<div class="page_source_info" style="display: none;">
			<p id="page_source"> <span style="color:#787878" ;="">সিলেটভিউ টুয়েন্টিফোর ডটকম, ২০২০-০৯-০১ ১১:৫৩:৩৮ </span> </p>
		</div> <!-- END OF CLASS PAGE_SOURCE_INFO -->
								
		<div class="inner_img" style="background: #F0F0ED;">
			<div align="center">
				<img style="width: 95%; float: none; height: 400px; display: block; " src="{{ asset($printnews->image_one) }}" title="{{ $printnews->title }}"> 										
			</div>
		</div> <!-- END OF CLASS INNER_IMG -->
																
		<p id="newsBrief" style="margin: 20px 0;">
			<b>নিজস্ব প্রতিবেদক: </b>{!! ($printnews->details) !!}								
		</p>
								
		</div> <!------- END OF CLASS LEFT_PART --->
												
					
		<div style="float:left; width: 100%; background: #FFF; border-top: 1px solid #DDD; text-align: center; padding: 35px 0; color: #999;">
						সম্পাদক : মো. শাহ্ দিদার আলম চৌধুরী <br>
						উপ-সম্পাদক : মশিউর রহমান চৌধুরী  <br>
						✉ sylhetview24@gmail.com ☎ ০১৬১৬-৪৪০ ০৯৫ (বিজ্ঞাপন), ০১৭৯১-৫৬৭ ৩৮৭ (নিউজ) <br>
						নেহার মার্কেট, লেভেল-৪, পূর্ব জিন্দাবাজার, সিলেট <br>
						<span style="font-size: 12px; font-family: arial;"> Developed By - Sayem Mohammed Al-Mahdi </span>
		</div>

	</div>
			

</div>
</div>
</body>
</html>