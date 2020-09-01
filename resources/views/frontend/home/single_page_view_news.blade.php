@extends('frontend.master')

@section('title','Single Page View News')

@section('mainContent')

<div id="content_inner"> 
				<div id="content_inner_mid">
					<div id="content_inner_mid_float">
						<div class="left_part">
							
						<script async="" src="{{ asset('public/frontend/js') }}/adsbygoogle.js"></script>
					<!-------
					<script>
						$("#document").attr("unselectable", "on"); 
						//disable mouse drag select end
						//disable right click - context menu
						document.oncontextmenu = new Function("return false");

						//disable CTRL+A/CTRL+C through key board start
						function disableSelectCopy(e) {
							// current pressed key
							var pressedKey = String.fromCharCode(e.keyCode).toLowerCase();
							if (e.ctrlKey && (pressedKey == "c" || pressedKey == "x" || pressedKey == "v" || pressedKey == "a")) {
								return false;
							}
						}
						document.onkeydown = disableSelectCopy;
						
						//or use this function
						$(function () {
							$(document).keydown(function (objEvent) {
								if (objEvent.ctrlKey || objEvent.metaKey) {
									if (objEvent.keyCode == 65 || objEvent.keyCode == 97) {
										return false;
									}
								}
							});
						});
					</script> ------> 				
			<div class="page_header_link">  
				<a href="#"> {{ ($news->category_name) }} </a> 
			</div> <!-------- END OF DIV PAGE_HEADER_LINK -------> 
				
				<h1 id="news_head_1"> {{ ($news->title) }} </h1>
				
								
				<!-- <div class="shareaholic-canvas" data-app="share_buttons" data-app-id="28472320"></div> --->
				<!--------
				<span class='st_sharethis_hcount' displayText='ShareThis'></span>
				<span class='st_facebook_hcount' displayText='Facebook'></span>
				<span class='st_twitter_hcount' displayText='Tweet'></span>
				<span class='st_plusone_hcount' displayText='Google +1'></span>
				<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
				<span class='st_email_hcount' displayText='Email'></span>
				-------->

<!-- sharethis-inline-share-buttons START -->
		<!-- <div style="float:left; width: 100%;">
					<div class="sharethis-inline-share-buttons st-center st-has-labels  st-inline-share-buttons st-animated" id="st-1">
						<div class="st-total ">
						  <span class="st-label">311</span>
						  <span class="st-shares">
						    Shares
						  </span>
						</div>
				<div class="st-btn st-first" data-network="facebook" style="display: inline-block;">
				  <img alt="facebook sharing button" src="{{ asset('public/frontend/others') }}/facebook.svg">
				  <span class="st-label">311</span>
				</div>

				<div class="st-btn st-hide-label" data-network="whatsapp" style="display: inline-block;">
				  <img alt="whatsapp sharing button" src="{{ asset('public/frontend/others') }}/whatsapp.svg">
				  <span class="st-label"></span>
				</div>
				<div class="st-btn st-hide-label" data-network="messenger" style="display: inline-block;">
				  <img alt="messenger sharing button" src="{{ asset('public/frontend/others') }}/messenger.svg">
				  <span class="st-label"></span>
				</div>
				<div class="st-btn st-hide-label st-remove-label" data-network="pinterest" style="display: inline-block;">
				  <img alt="pinterest sharing button" src="{{ asset('public/frontend/others') }}/pinterest.svg">
				  <span class="st-label"></span>
				</div>
				<div class="st-btn st-hide-label st-remove-label" data-network="twitter" style="display: inline-block;">
				  <img alt="twitter sharing button" src="{{ asset('public/frontend/others') }}/twitter.svg">
				  <span class="st-label"></span>
				</div>
				<div class="st-btn st-last st-hide-label st-remove-label" data-network="sharethis" style="display: inline-block;">
				  <img alt="sharethis sharing button" src="{{ asset('public/frontend/others') }}/sharethis.svg">
				  <span class="st-label"></span>
				</div>
			</div> 
		</div> -->
<!-- sharethis-inline-share-buttons END -->

				<div class="page_source_info">
										
					<p id="page_source"> 
					<span style="color:#787878" ;="">সিলেটভিউ টুয়েন্টিফোর ডটকম, ২০২০-০৯-০১ ০০:১১:৪২ </span>
												
						<span id="print_icon"> 
							<a target="_blank" title="Print Now" href="#"> 
								<i class="fa fa-print" aria-hidden="true"></i> 
							</a> 
						</span>
					</p>
				</div> <!-- END OF CLASS PAGE_SOURCE_INFO -->
				
				<div class="inner_img">
					<div align="center">
						<img style="width: 95%; float: none; height: 400px; display: block; " class="list_img lazy"  src="{{ asset($news->image_one) }}" title="{{ asset($news->title) }}">  
						
					</div>
					<br>
				</div> <!-- END OF CLASS INNER_IMG -->
				
					

	<!-- adsbygoogle START -->	
	<!-- Ad - 02 (Responsive) -->		
				<!-- <div style="float:left; width:100%; border: 1px solid #EEE; padding: 15px 0; margin: 0 0 10px 0;">
					<div align="center">
						
						<ins class="adsbygoogle" style="display: block; height: 280px;" data-ad-client="ca-pub-9417738709366158" data-ad-slot="4574418537" data-ad-format="auto" data-full-width-responsive="true" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:650px;background-color:transparent;"><ins id="aswift_0_anchor" style="display: block; border: medium none; height: 280px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 650px; background-color: transparent; overflow: visible;"><iframe id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0;width:650px;height:280px;" sandbox="allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="{{ asset('public/frontend/others') }}/ads.html" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!1" data-load-complete="true" data-google-query-id="CLOV8522xusCFRGuaAodUQ0JqQ" width="650" height="280" frameborder="0"></iframe></ins></ins></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				</div> -->
	<!-- adsbygoogle END -->






<!-- Local Ad From Admin Panel Start -->			
	<!-- <div class="add_2_part">
		<a href="https://www.facebook.com/latiftravelsroseview/" target="_blank" title="Lotif travel">
			<img style="width: 94%; margin: 5px 0;" src="{{ asset('public/frontend/images') }}/46.jpeg" alt="Lotif travel">
		</a>
	</div>
	
	<div class="add_2_part">
		<a href="https://www.facebook.com/duudhwalafarm/" target="_blank" title="duudhwalafarm">
			<img style="width: 94%; margin: 5px 0;" src="{{ asset('public/frontend/images') }}/47.jpeg" alt="duudhwalafarm">
		</a>
	</div> -->
<!-- Local Ad From Admin Panel End -->	








												
				<p id="newsBrief" style="float:none;">
					<b>নিজস্ব প্রতিবেদক :: </b>{!! ($news->details) !!}				
				</p>
				
								
<!----------------- START OF Bottom_SHARE_PART --------->
<!-- sharethis-inline-share-buttons START -->	


			<!-- <div class="left_share_part">
				<h1 class="inner_page_header"> শেয়ার করুন  </h1>
					
								
			<div style="float:left; width: 100%;">
				<div class="sharethis-inline-share-buttons st-center st-has-labels  st-inline-share-buttons st-animated" id="st-3">
				<div class="st-total ">
				  <span class="st-label">311</span>
				  <span class="st-shares">
				    Shares
				  </span>
				</div>
			<div class="st-btn st-first" data-network="facebook" style="display: inline-block;">
			  <img alt="facebook sharing button" src="{{ asset('public/frontend/others') }}/facebook.svg">
			  <span class="st-label">311</span>
			</div>
			<div class="st-btn st-hide-label" data-network="whatsapp" style="display: inline-block;">
			  <img alt="whatsapp sharing button" src="{{ asset('public/frontend/others') }}/whatsapp.svg">
			  <span class="st-label"></span>
			</div>
			<div class="st-btn st-hide-label" data-network="messenger" style="display: inline-block;">
			  <img alt="messenger sharing button" src="{{ asset('public/frontend/others') }}/messenger.svg">
			  <span class="st-label"></span>
			</div>
			<div class="st-btn st-hide-label st-remove-label" data-network="pinterest" style="display: inline-block;">
			  <img alt="pinterest sharing button" src="{{ asset('public/frontend/others') }}/pinterest.svg">
			  <span class="st-label"></span>
			</div>
			<div class="st-btn st-hide-label st-remove-label" data-network="twitter" style="display: inline-block;">
			  <img alt="twitter sharing button" src="{{ asset('public/frontend/others') }}/twitter.svg">
			  <span class="st-label"></span>
			</div>
			<div class="st-btn st-last st-hide-label st-remove-label" data-network="sharethis" style="display: inline-block;">
			  <img alt="sharethis sharing button" src="{{ asset('public/frontend/others') }}/sharethis.svg">
			  <span class="st-label"></span>
			</div>
		</div> 
	</div>
								
			<iframe style="float:right; height:25px; width:80px; margin-top: 5px;" src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fsylhetview24&amp;width=100px&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" allowtransparency="true" frameborder="0"></iframe>
		</div>  -->


		<!----------------- END OF Bottom_SHARE_PART --------->
<!-- sharethis-inline-share-buttons END -->						
			




<!-- আপনার মতামত  দিন START -->

			<!-- <h1 class="inner_page_header"> আপনার মতামত  দিন </h1>
				<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
							fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
			<div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="http://www.sylhetview24.net/news/details/Sylhet/194216" data-width="650px" data-numposts="10" data-colorscheme="light" style="width: 100%;" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=650&amp;height=100&amp;href=http%3A%2F%2Fwww.sylhetview24.net%2Fnews%2Fdetails%2FSylhet%2F194216&amp;locale=en_US&amp;numposts=10&amp;sdk=joey&amp;width=NaN"><span style="vertical-align: top; width: 100%; height: 0px; overflow: hidden;"><iframe name="fd7de21c8b6478" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" style="border: medium none; visibility: visible; width: 0px; height: 0px;" src="https://www.facebook.com/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df30d3fe432702e%26domain%3Dwww.sylhetview24.net%26origin%3Dhttp%253A%252F%252Fwww.sylhetview24.net%252Ff28591a1503bf82%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=650&amp;height=100&amp;href=http%3A%2F%2Fwww.sylhetview24.net%2Fnews%2Fdetails%2FSylhet%2F194216&amp;locale=en_US&amp;numposts=10&amp;sdk=joey&amp;width=NaN" width="1000px" height="100px" frameborder="0"></iframe></span></div> -->

<!-- আপনার মতামত  দিন END -->	

																	
		</div> <!-- End of CLASS LEFT_PART -->
						
			




		<div class="right_part">
			<script type="text/javascript">
				$(document).ready(function() {
					$("#crossBar").hide();
					$("#crossBar").delay(5000).fadeIn(6000);
				});
			</script>

			
<!-- AD - 160x600 - New -->
			<!-- <div id="sv_gad_left" style="position:fixed; top:7%; left:0; width:160px; z-index:20000;">
				<div style="position: absolute; right: 0px; margin-top: 0px;z-index: 15; top:0px; left: 90%;">
					<a href="javascript:void(0);" onclick="document.getElementById('sv_gad_left').style.display='none'">
						<img id="crossBar" src="{{ asset('public/frontend/images') }}/close_bar.png" alt="close" style="width: 20px; height: 20px; margin: 0px; padding: 0px; border: medium none; display: inline;" height="20"> 
					</a>
				</div>
				
				
				<ins class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-9417738709366158" data-ad-slot="5267629930" data-language="en" data-adsbygoogle-status="done"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent;"><ins id="aswift_1_anchor" style="display:block;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:160px;height:600px;" sandbox="allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="{{ asset('public/frontend/others') }}/ads_002.html" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!2" data-load-complete="true" data-google-query-id="CLuflJ62xusCFWQj1QodN34AaA" width="160" height="600" frameborder="0"></iframe></ins></ins></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div> -->
		

		<!-- Ad - 02 (Responsive) -->		
	<!-- <div style="float:left; width:100%; margin:5px 0 15px 0; padding: 15px 0; border: 1px solid #EEE;">
		<div align="center">
			
			<ins class="adsbygoogle" style="display: block; height: 280px;" data-ad-client="ca-pub-9417738709366158" data-ad-slot="4574418537" data-ad-format="auto" data-full-width-responsive="true" data-adsbygoogle-status="done"><ins id="aswift_2_expand" style="display:inline-table;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:350px;background-color:transparent;"><ins id="aswift_2_anchor" style="display: block; border: medium none; height: 280px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 350px; background-color: transparent; overflow: visible;"><iframe id="aswift_2" name="aswift_2" style="left:0;position:absolute;top:0;border:0;width:350px;height:280px;" sandbox="allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="{{ asset('public/frontend/others') }}/ads.html" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!3" data-load-complete="true" data-google-query-id="CJT8mJ62xusCFcunaAod4V8D7g" width="350" height="280" frameborder="0"></iframe></ins></ins></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div> -->


								<!-- 
									===============================
									 	LATEST NEWS START
									=============================== 
								-->

@php 
	$latestNews=DB::table('news')
				->join('categories','news.cat_id','categories.id')
			   	->join('subcategories','news.subcat_id','subcategories.id')
			   	->join('districts','news.dist_id','districts.id')
			   	->join('subdistricts','news.subdist_id','subdistricts.id')
				->select('categories.category_name','subcategories.subcategory_name','districts.district_name','subdistricts.subdistrict_name','news.*')
			 	->where('published',1)
				 ->limit(10)
				 ->orderBy('id','DESC')
				 ->get();
@endphp

	<div class="right_part_inner">

		<h1> সর্বশেষ খবর  </h1>
			@foreach($latestNews as $row)
				<li> 
					<a href="{{ url('news/details/'.$row->id.'/'.$row->category_name.'/'.$row->title) }}"> 
						<i class="fa fa-hand-o-right"></i>
							&nbsp;&nbsp;{{ $row->title }}
					</a> 
				</li> 
			@endforeach				
	</div> <!-- End of CLASS RIGHT_PART_INNER -->

								<!-- 
									===============================
									 	LATEST NEWS END
									=============================== 
								-->
		
	<div style="float: left; width: 100%; margin: 0px; padding: 0px; border: 0px solid rgb(238, 238, 238);">
		<div align="center">
			<!-- Ad - 02 (Responsive) -->
			<ins class="adsbygoogle" style="display: block; height: 0px; width: 0px;" data-ad-client="ca-pub-9417738709366158" data-ad-slot="4574418537" data-ad-format="auto" data-full-width-responsive="true" data-adsbygoogle-status="done"><ins id="aswift_3_expand" style="display: inline-table; border: medium none; height: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 0px; background-color: transparent;"><ins id="aswift_3_anchor" style="display: block; border: medium none; height: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 0px; background-color: transparent; overflow: hidden; opacity: 0;"><iframe id="aswift_3" name="aswift_3" style="left:0;position:absolute;top:0;border:0;width:350px;height:280px;" sandbox="allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="{{ asset('public/frontend/others') }}/ads_004.html" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!4" data-load-complete="true" data-google-query-id="CIrPyp62xusCFRaCrAIdosQAdw" width="350" height="280" frameborder="0"></iframe></ins></ins></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
	
	<div style="float: left; width: 100%; margin: 0px; padding: 0px; border: 0px solid rgb(238, 238, 238);">
		<div align="center">
			<!-- Ad - 02 (Responsive) -->
			<ins class="adsbygoogle" style="display: block; height: 0px; width: 0px;" data-ad-client="ca-pub-9417738709366158" data-ad-slot="4574418537" data-ad-format="auto" data-full-width-responsive="true" data-adsbygoogle-status="done"><ins id="aswift_4_expand" style="display: inline-table; border: medium none; height: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 0px; background-color: transparent;"><ins id="aswift_4_anchor" style="display: block; border: medium none; height: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 0px; background-color: transparent; overflow: hidden; opacity: 0;"><iframe id="aswift_4" name="aswift_4" style="left:0;position:absolute;top:0;border:0;width:350px;height:280px;" sandbox="allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="{{ asset('public/frontend/others') }}/ads_005.html" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!5" data-load-complete="true" data-google-query-id="CLay_p62xusCFQlraAod5PoBig" width="350" height="280" frameborder="0"></iframe></ins></ins></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
	
	<div class="right_part_inner_add">
				
	</div> <!-- End OF CLASS RIGHT_PART_INNER_ADD -->


								<!-- 
									===============================
									 	SYLHET LATEST NEWS START
									 	NEWS SHOW BY DISTRICT
									=============================== 
								-->
@php 
	
	$dist=DB::table('districts')->skip(1)->first();
	$district_id=$dist->id;
	$sylhetLatestNews=DB::table('news')
			->join('categories','news.cat_id','categories.id')
			->join('subcategories','news.subcat_id','subcategories.id')
			->join('districts','news.dist_id','districts.id')
			->join('subdistricts','news.subdist_id','subdistricts.id')
			->select('categories.category_name','subcategories.subcategory_name','districts.district_name','subdistricts.subdistrict_name','news.*')
			->where('dist_id',$district_id)
			->where('published',1)
			->limit(20)
			->orderBy('id','DESC')
			->get();
@endphp


	<div class="right_part_inner">

		<h1> সাম্প্রতিক সিলেট খবর </h1> 

		@foreach($sylhetLatestNews as $row)
		<li> 
		 	<a href="{{ url('news/details/'.$row->id.'/'.$row->category_name.'/'.$row->title) }}"> 
			 	<i class="fa fa-check-square-o"></i>  
			 		&nbsp;&nbsp; {{ $row->title }} 
		 	</a> 
		</li>
		@endforeach
		
		
	</div> <!-- End of CLASS RIGHT_PART_INNER -->

							<!-- 
								===============================
									SYLHET LATEST NEWS START
									 NEWS SHOW BY DISTRICT
								=============================== 
							-->



	</div> <!-- End of CLASS RIGHT_PART -->
							
		</div> <!-- End of DIV CONTENT_INNER_MID_FLOAT -->
	</div> <!-- End of DIV CONTENT_INNER_MID -->
</div> <!-- End of DIV CONTENT_INNER -->

@endsection