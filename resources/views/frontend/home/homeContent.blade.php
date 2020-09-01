@extends('frontend.master')

@section('title','Home Page')

@section('mainContent')
<!--  Practice 1 Start -->
<!--  
@php
	$featured=DB::table('news')
			->where('published',1)
			->orderBy('id','DESC')
			->first();
@endphp
<h1>Only Published</h1>
<img src="{{asset( $featured->image_one )}}" style="height: 90px;width: 90px;" alt="">
<span>{{ $featured->id }}</span><br>
<span>{{ $featured->title }}</span>
  -->
<!--  Practice1 End -->



<!--  Practice 2 Start --> 
<!-- 
@php
	$news=DB::table('news')
			->where('news.published',1)
			->where('big_thumbnail',1)
			->orderBy('id','DESC')
			
			->first();					
@endphp
<h1>Published And Big Thumbnail</h1>
<img src="{{asset( $news->image_one )}}" style="height: 90px;width: 90px;" alt="">
<span>{{ $news->id }}</span><br>
<span>{{ $news->title }}</span>
  -->
<!--  Practice 2 End -->

@php
	$topSectionBigThumbnailNews=DB::table('news')
			   			->join('categories','news.cat_id','categories.id')
			   			->join('subcategories','news.subcat_id','subcategories.id')
			   			->join('districts','news.dist_id','districts.id')
			   			->join('subdistricts','news.subdist_id','subdistricts.id')
						->select('categories.category_name','subcategories.subcategory_name','districts.district_name','subdistricts.subdistrict_name','news.*')
						->where('news.top_section',1)
						->where('news.big_thumbnail',1)
						->where('news.published',1)
						->orderBy('id','DESC')
						->limit(1)
						->first();					
@endphp

<!-- 
<h1>topSectionBigThumbnail</h1>
<img src="{{asset( $topSectionBigThumbnailNews->image_one )}}" style="height: 90px;width: 90px;" alt="">
<span>{{ $topSectionBigThumbnailNews->id }}</span><br>
<span>{{ $topSectionBigThumbnailNews->title }}</span><br>
<span>{{ $topSectionBigThumbnailNews->category_name }}</span><br>
<span>{{ $topSectionBigThumbnailNews->subcategory_name }}</span><br>
<span>{{ $topSectionBigThumbnailNews->district_name }}</span><br>
<span>{{ $topSectionBigThumbnailNews->subdistrict_name }}</span><br>
<span>{{ $topSectionBigThumbnailNews->tags }}</span><br>
<span>{{ $topSectionBigThumbnailNews->details }}</span><br>
<p>{{ $topSectionBigThumbnailNews->video_link }}</p><br>
  -->

<div id="content_top_most"> 
	<div id="content_top_most_mid">
		<div id="content_top_most_mid_float">
			<div class="div-row">
				<div class="div-col div-col-5" style="padding-left: 0; width: 410px;">
					<!-- <img class="lead_img" src="{{ asset('public/frontend/images') }}/194142.jpeg"> -->
					<a href="{{ url('news/details/'.$topSectionBigThumbnailNews->id.'/'.$topSectionBigThumbnailNews->category_name.'/'.$topSectionBigThumbnailNews->title) }}">
						<img class="lead_img" src="{{asset( $topSectionBigThumbnailNews->image_one )}}"  alt="">
					</a>			
						<h1 class="lead_head">
							<a href="{{ url('news/details/'.$topSectionBigThumbnailNews->id.'/'.$topSectionBigThumbnailNews->category_name.'/'.$topSectionBigThumbnailNews->title) }}"> 
									{{ $topSectionBigThumbnailNews->title }} </a> 
						</h1>
	
						<p class="lead_para"> 
							<b>নিজস্ব প্রতিবেদক:</b>
									 {!! Str::limit($topSectionBigThumbnailNews->details,170) !!}
						</p> 							
				</div>


@php
	$topSectionSmallThumbnailNews=DB::table('news')
			   			->join('categories','news.cat_id','categories.id')
			   			->join('subcategories','news.subcat_id','subcategories.id')
			   			->join('districts','news.dist_id','districts.id')
			   			->join('subdistricts','news.subdist_id','subdistricts.id')
						->select('categories.category_name','subcategories.subcategory_name','districts.district_name','subdistricts.subdistrict_name','news.*')
						->where('news.top_section',1)
						->where('news.small_thumbnail',1)
						->where('news.published',1)
						->orderBy('id','DESC')
						->limit(5)
						->get();					
@endphp

							
		<div class="div-col div-col-4">

			@foreach($topSectionSmallThumbnailNews as $row)

				<div class="list_separator">
					<a href="{{ url('news/details/'.$row->id.'/'.$row->category_name.'/'.$row->title) }}">
						<img style="width: 35%; display: block;" class="list_img lazy" src="{{asset( $row->image_one )}}">
					</a>
													
						<div class="list_info" style="width: 63%; height: auto; min-height: 60px; max-height: 76px;">
							<h1 style="margin: 0;"> 
								<a style="font-size: 16px; font-weight: normal; height: auto; line-height: 21px;" 
								href="{{ url('news/details/'.$row->id.'/'.$row->category_name.'/'.$row->title) }}"> {{ $row->title }} </a> </h1>
						</div>
				</div>

			@endforeach
																			
		</div>




					<!-- =================================
					================================= -->





							
							<div class="div-col div-col-3" style="float: right; padding: 0; width: 240px; border: 1px solid #DDD;">							
								<!--<div align='center'><img src='http://www.sylhetview24.net/images/mujib.png' style='width: 120px;'/> </div> --->
								<!--<iframe src="http://www.sylhetview24.net/timer.html" style="border:none; padding: 0; height: 150px; width: 100%; margin: 0;"></iframe>
								--->
								
								<div style="float:left; width:100%; margin:2px 0;">
									<div align="center">
										<!-- Ad - 02 (Responsive) -->
										<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9417738709366158" data-ad-slot="4574418537" data-ad-format="auto" data-full-width-responsive="true"></ins>
										<script>
											 (adsbygoogle = window.adsbygoogle || []).push({});
										</script>
									</div>
								</div>
							
								<div class="menu" style="float:left;">
									<ul>
										<li><a href="#" onmouseover="easytabs('1', '2');" onfocus="easytabs('1', '2');" onclick="return false;" id="tablink2" class="tab2 tabactive"> সিলেটের সর্বশেষ</a></li>
										<li><a href="#" onmouseover="easytabs('1', '1');" onfocus="easytabs('1', '1');" onclick="return false;" id="tablink1" class="tab1"> জনপ্রিয় </a></li>
									</ul>
								</div> <!--End of the Tabmenu 1 -->
								







													<!-- 
														===============================
														=============================== 
													-->

													<!-- SYLHET LATEST NEWS START-->


													<!-- NEWS SHOW BY DISTRICT -->


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
			 ->limit(50)
			 ->orderBy('id','DESC')
			 ->get();
@endphp



			<div id="tabcontent2" style="display: block;">

				@foreach($sylhetLatestNews as $row)
					<li id="tab_news_li"> 
						<a href="{{ url('news/details/'.$row->id.'/'.$row->category_name.'/'.$row->title) }}" id="tab_news"> 
							{{ $row->title }} </a> 
					</li>
				@endforeach
																														
			</div>


															<!-- SYLHET LATEST NEWS END-->


															<!-- 
																===============================
																=============================== 
															-->










								<div id="tabcontent1" style="display: none;">
																				<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/193972" id="tab_news"> সিলেটে হানা দিয়েছে মৃত্যুদূত! <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/194101" id="tab_news"> চার লেন হচ্ছে না সিলেটের সেই সড়ক! <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/194089" id="tab_news"> অভিজ্ঞতা সনদ নকল, শাবি থেকে চাকরি গেলো ইসরাত জাহানের <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/193977" id="tab_news"> জিন্দাবাজার থেকে চৌহাট্টায় আরিফের অভিযান <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/194064" id="tab_news"> সিলেটে ছিনতাইয়ের টাকা উদ্ধার, গ্রেফতার ১ <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/193994" id="tab_news"> ভারতে লঘুচাপ, সিলেটে ‘দুঃসংবাদ’ <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Life_Style/193984" id="tab_news"> গোপনে করোনা এসে চলে গেল? বুঝতে পারবেন এই লক্ষণগুলোতে <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/194026" id="tab_news"> বিশ্বনাথে ৯ম শ্রেণির ছাত্রীকে নিয়ে প্রেমিকের পলায়ন, অত:পর... <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/194059" id="tab_news"> ক্ষতিপূরণ পেয়েছেন সিলেটে ডা. মঈনের পরিবার <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/194082" id="tab_news"> সিলেটে আরো ৪ চিকিৎসকের শরীরে করোনাভাইরাস শনাক্ত <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Life_Style/194024" id="tab_news"> গোপনে আক্রমণ করে চলে গেল, বুঝতে পারবেন যেভাবে <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/National/194057" id="tab_news"> মাত্র ১৭৬০০ টাকায় গাড়ি দিচ্ছে মারুতি সুজুকি! <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/moulvibazar/194021" id="tab_news"> নিখোঁজের একদিন পর চা বাগান থেকে কলেজছাত্রের লাশ উদ্ধার <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/National/194063" id="tab_news"> স্বামীকে হাত-পা বেঁধে গাড়িতে বসিয়ে স্ত্রীকে কলোনিতে নিয়ে পাঁচজনের ধর্ষণ <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/193982" id="tab_news"> মাদ্রাসায় যাওয়া হলো না কানাইঘাটের মাহফুজের <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/National/193958" id="tab_news"> এইচএসসি পরীক্ষা নিয়ে যা বললো শিক্ষা মন্ত্রণালয় <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/194121" id="tab_news"> গোয়াইনঘাটে রিকশাচালকের বস্তাবন্দি লাশ উদ্ধার <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/moulvibazar/194095" id="tab_news"> বড়লেখায় গাঁজা বিক্রি করেন স্বামী-স্ত্রী, অবশেষে পুলিশের জালে <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/193993" id="tab_news"> শনিবার সিলেটে ৫২ জনের শরীরে পাওয়া গেলো করোনা <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																						<li id="tab_news_li"> 
												<a href="http://www.sylhetview24.net/news/details/Sylhet/194142" id="tab_news"> সিলেটে ক্লাস না নিলে শিক্ষকদের চাকুরিচ্যুত করার হুমকি! <!-- <i class="fa fa-search"></i> ---> </a> <!-- <span style="color:#14AD7F; font-size:15px;">  </span>  --->
											</li>
																			</div> <!--End Tabcontent 1-->
							</div>
						</div> <!------ END OF CLASS DIV-ROW ------->
	
						<div class="div-row">
							<div class="row-separator2"> </div>
														<div class="row-separator2"> </div>
						</div> <!------ END OF CLASS DIV-ROW ------->

						<div class="div-row" style="display22: none; background: #D4F4E4; margin: 15px 0 25px 0;">
							<!--<img src='http://www.sylhetview24.net/images/iccwc19-small.png'/>
							<img style='float:left; width: 990px; margin:10px 15px 15px 15px;' src='http://www.sylhetview24.net/images/iccwc19.jpg'/>
							--->
							<h1 class="title_border" style="color: #FFF; font-weight: normal; line-height: 50px; font-size: 25px; margin: 20px 5% 25px 5%; background: #f55715; width: 90%; border: none; border-radius: 0 40px; letter-spacing: 5px;"> বিশ্বজুড়ে&nbsp; করোনা </h1>
							
																	<div class="div-col div-col-4">
											<div class="list_separator">
																									<img class="img_full lazy" style="height: 180px;" data-src="http://www.sylhetview24.net/images/news/194130.jpeg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												
												<div class="list_info" style="width: 100%;">
													<h1> <a style="padding: 5px 0;" href="http://www.sylhetview24.net/news/details/International/194130"> করোনা কালে মধ্যপ্রাচ্যের বিগ থ্রির শীর্ষে উঠে আসে কাতার এয়ারওয়েজ </a> </h1>
												</div>
											</div>
										</div>
																			<div class="div-col div-col-4">
											<div class="list_separator">
																									<img class="img_full lazy" style="height: 180px;" data-src="http://www.sylhetview24.net/images/news/194127.jpeg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												
												<div class="list_info" style="width: 100%;">
													<h1> <a style="padding: 5px 0;" href="http://www.sylhetview24.net/news/details/International/194127"> টিকা নিয়ে এবার রাশিয়ার পথেই হাঁটতে যাচ্ছে আমেরিকা! </a> </h1>
												</div>
											</div>
										</div>
																			<div class="div-col div-col-4">
											<div class="list_separator">
																									<img class="img_full lazy" style="height: 180px;" data-src="http://www.sylhetview24.net/images/news/194120.jpeg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												
												<div class="list_info" style="width: 100%;">
													<h1> <a style="padding: 5px 0;" href="http://www.sylhetview24.net/news/details/International/194120"> করোনামুক্ত হতে চলেছে সৌদি আরব </a> </h1>
												</div>
											</div>
										</div>
																			<div class="div-col div-col-4">
											<div class="list_separator" style="border-bottom: none;">
																									<img class="list_img lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194116.jpeg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												
												<div class="list_info">
													<h1> <a href="http://www.sylhetview24.net/news/details/Life_Style/194116"> করোনায় স্নায়ুতন্ত্র-মস্তিষ্ক ভালো রাখবেন যেভাবে </a> </h1>
												</div>
											</div>
										</div>
																				<div class="div-col div-col-4">
											<div class="list_separator" style="border-bottom: none;">
																									<img class="list_img lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194115.jpeg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												
												<div class="list_info">
													<h1> <a href="http://www.sylhetview24.net/news/details/International/194115"> বিশ্বের সব দেশকে পেছনে ফেলে দৈনিক সংক্রমণের রেকর্ড গড়ল ভারত </a> </h1>
												</div>
											</div>
										</div>
																				<div class="div-col div-col-4">
											<div class="list_separator" style="border-bottom: none;">
																									<img class="list_img lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194106.jpeg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												
												<div class="list_info">
													<h1> <a href="http://www.sylhetview24.net/news/details/International/194106"> বাজারে করোনার জীবাণু ধ্বংসের ডিভাইস </a> </h1>
												</div>
											</div>
										</div>
																	<div class="row-separator2"> </div>
						</div> <!------ END OF CLASS DIV-ROW ------->

						<div class="div-row">
							<div class="div-col div-col-3" style="padding: 0; width: 255px;">
															</div>
							
							<div class="div-col div-col-6" style="padding: 0; width: 510px;">
								<h1 class="title_border" style="background: #1B59A3; font-weight: normal; border: none; color: #FFF; width: 480px; margin: 0 15px 15px 15px;"> সিলেটের গুরুত্বপূর্ণ সংবাদ </h1>
								
																			<div class="div-col div-col-3">
												<div class="list_separator">
																											<img class="img_full lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194143.jpeg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
													
													<div class="list_info" style="width: 100%;">
														<h1> <a style="padding: 5px 0;" href="http://www.sylhetview24.net/news/details/sunamganj/194143"> সুনামগঞ্জে বজ্রপাতে জেলের মৃত্যু </a> </h1>
													</div>
												</div>
											</div>
																					<div class="div-col div-col-3">
												<div class="list_separator">
																											<img class="img_full lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194138.jpeg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
													
													<div class="list_info" style="width: 100%;">
														<h1> <a style="padding: 5px 0;" href="http://www.sylhetview24.net/news/details/National/194138"> সিলেটের সালমান শাহ হত্যা : নারাজির শুনানি ১১ অক্টোবর </a> </h1>
													</div>
												</div>
											</div>
																					<div class="div-col div-col-3">
												<div class="list_separator">
																											<img class="img_full lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194126.jpeg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
													
													<div class="list_info" style="width: 100%;">
														<h1> <a style="padding: 5px 0;" href="http://www.sylhetview24.net/news/details/Sylhet/194126"> মুজিববর্ষ উপলক্ষে ডিআইজি সিলেটের আয়োজনে বৃক্ষরোপন কর্মসূচি </a> </h1>
													</div>
												</div>
											</div>
																					<div class="div-col div-col-3">
												<div class="list_separator">
																											<img class="img_full lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194117.jpeg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
													
													<div class="list_info" style="width: 100%;">
														<h1> <a style="padding: 5px 0;" href="http://www.sylhetview24.net/news/details/Sylhet/194117"> সিলেটবাসীকে দুইদিন স্বস্তি দিলো করোনা </a> </h1>
													</div>
												</div>
											</div>
																					<div class="div-col div-col-3">
												<div class="list_separator">
																											<img class="img_full lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194107.jpeg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
													
													<div class="list_info" style="width: 100%;">
														<h1> <a style="padding: 5px 0;" href="http://www.sylhetview24.net/news/details/Sylhet/194107"> সিলেটে কাল থেকে আগের ভাড়ায় গণপরিবহন, মানতে হবে যেসব নির্দেশনা </a> </h1>
													</div>
												</div>
											</div>
																					<div class="div-col div-col-3">
												<div class="list_separator">
																											<img class="img_full lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194101.jpeg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
													
													<div class="list_info" style="width: 100%;">
														<h1> <a style="padding: 5px 0;" href="http://www.sylhetview24.net/news/details/Sylhet/194101"> চার লেন হচ্ছে না সিলেটের সেই সড়ক! </a> </h1>
													</div>
												</div>
											</div>
																					<div class="div-col div-col-3">
												<div class="list_separator">
													<div class="list_info" style="width: 100%;">
														<h1> <a style="padding: 5px 0;" href="http://www.sylhetview24.net/news/details/Sylhet/194099"> গোলাপগঞ্জে আওয়ামী লীগ নেতা আব্দুল জব্বারের  দাফন সম্পন্ন </a> </h1>
													</div>
												</div>
											</div>
																						<div class="div-col div-col-3">
												<div class="list_separator">
													<div class="list_info" style="width: 100%;">
														<h1> <a style="padding: 5px 0;" href="http://www.sylhetview24.net/news/details/moulvibazar/194095"> বড়লেখায় গাঁজা বিক্রি করেন স্বামী-স্ত্রী, অবশেষে পুলিশের জালে </a> </h1>
													</div>
												</div>
											</div>
																		</div> <!---- END OF CLASS DIV-COL-6 ------->
							
							<div class="div-col div-col-3" style="padding-right: 0; width: 240px;">
								<a id="archive_link" href="http://www.sylhetview24.net/news/archive_section"> <i class="fa fa-calendar custom_icon"> </i>  &nbsp;&nbsp;  নিউজ আর্কাইভ  &nbsp;&nbsp;  <i class="fa fa-search custom_icon" style="float:right;"></i> </a>
								<!---------
								<a id="development_link" href="http://www.itlabsolutions.com" title="Developed by IT Lab Solutions Ltd. +88 018 4248 5222" target="_blank"> <i class="fa fa-wrench fa-lg fa-spin"></i>  বাস্তবায়নে - আইটি ল্যাব সলিউশন্স লিঃ </a>  ---->

								<div class="content_middle_4part_top_left" style="margin: 0; border-radius: 0;">	
									<h2 class="head_title" style="background:#14AD7F; color:#FFFFFF; margin:0px; border-radius: 0;"> দেশ বিদেশের খবর </h2>
									
									<ul id="scrollControll">
																						<li> <a href="http://www.sylhetview24.net/news/details/National/194138"> সিলেটের সালমান শাহ হত্যা : নারাজির শুনানি ১১ অক্টোবর </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194137"> সালমান শাহর মৃত্যু; পিবিআইয়ের প্রতিবেদনের বিরুদ্ধে নারাজি দিতে সময়ের আবেদন </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194135"> ২৬ দেশ থেকে ৫ মাসে ফিরে এসেছেন ৯৫ হাজার প্রবাসী </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194134"> কারাবন্দি সাবরিনার বিরুদ্ধে এবার ইসির মামলা </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/Politics/194133"> নির্বাচনে হারার আগেই হেরে যায় বিএনপি : ওবায়দুল কাদের </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194130"> করোনা কালে মধ্যপ্রাচ্যের বিগ থ্রির শীর্ষে উঠে আসে কাতার এয়ারওয়েজ </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/Entertainment/194128"> ‘সুশান্তের বাবাকে নিয়ে গল্প বানাচ্ছে রিয়া’ </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194127"> টিকা নিয়ে এবার রাশিয়ার পথেই হাঁটতে যাচ্ছে আমেরিকা! </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194125"> সাপ ধরার কৌশল দেখাতে গিয়ে সাপুড়ের মৃত্যু </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194124"> পোর্টল্যান্ডে সংঘর্ষ, ট্রাম্প-বাইডেনের কথার লড়াই </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194123"> সৌদির আবহা বিমানবন্দরে হুতিদের ড্রোন হামলা </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194122"> আবারো সীমান্তে সংঘর্ষে জড়াল ভারত-চীন </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194120"> করোনামুক্ত হতে চলেছে সৌদি আরব </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194119"> অস্ত্র মামলায় পাপিয়া দম্পতির বিরুদ্ধে সাক্ষ্যগ্রহণ আজ </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194118"> মিশরের সিনাইয়ে সামরিক অভিযানে ৭০ জঙ্গি নিহত </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/Life_Style/194116"> করোনায় স্নায়ুতন্ত্র-মস্তিষ্ক ভালো রাখবেন যেভাবে </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194115"> বিশ্বের সব দেশকে পেছনে ফেলে দৈনিক সংক্রমণের রেকর্ড গড়ল ভারত </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194114"> ৩ বছরের শিশুকে আকাশে উড়িয়ে নিয়ে গেল ঘুড়ি, অতঃপর... </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194113"> জন্মদিনের অনুষ্ঠানে ভেঙে পড়ল রেস্তোরাঁ, নিহত ২৯ </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194112"> আজ থেকে একাদশে ভর্তির দ্বিতীয় ধাপের আবেদন </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/Sports/194111"> মেসিকে ৫ বছরের চুক্তির প্রস্তাব ম্যানসিটির </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194110"> তামিলনাড়ুর সৈকতে বিশালাকৃতির তিমি হাঙর </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194109"> পাপুলের ভাইকে কুয়েতে তদন্ত কমিটির তলব </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194108"> দেশে আনা হল সি আর দত্তের মরদেহ </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194106"> বাজারে করোনার জীবাণু ধ্বংসের ডিভাইস </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194105"> বিপর্যস্ত লেবাননের নতুন প্রধানমন্ত্রী হচ্ছেন রাষ্ট্রদূত আদিব! </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194104"> জেলেদের জালে ধরা পড়েছে বিরল প্রজাতির মাছ </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194103"> ইন্দোনেশিয়ায় ১০ গুণ বেশি সংক্রামক করোনাভাইরাসের সন্ধান </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194102"> পাকিস্তানকে ‘চীনের পুতুল’ বললেন ভারতের পররাষ্ট্রমন্ত্রী </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/Life_Style/194088"> লিভার সুস্থ রাখবে যে ৪ অভ্যাস </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/Life_Style/194087"> ফুসফুস ভালো রাখে যে ৫ খাবার </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/Life_Style/194086"> যে গুণের মেয়েদের বিয়ে করলে সুখী হবেন </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194085"> অপহরণকারীর বন্দুক কেড়ে নিয়ে শিশুকে বাঁচালেন মা </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194084"> বাংলাদেশিদের বরাদ্দ কেটে রোহিঙ্গাদের উন্নয়ন! </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194083"> ৩ মাসের মেয়েকে বিক্রি করে মোবাইল কিনলেন বাবা! </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194078"> দ. চীন সাগরে যুদ্ধজাহাজ মোতায়েন ভারতের, ক্ষুব্ধ বেইজিং </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194077"> চীন থাকায় রাশিয়ায় যৌথ সামরিক মহড়ায় অংশ নেবে না ভারত </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194076"> এবার ইন্দোনেশিয়ায় ১০ গুণ বেশি সংক্রামক করোনাভাইরাসের সন্ধান </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194075"> দুই তরুণীর আত্মহত্যা </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194071"> ইসরাইলকে বয়কট ডিক্রি বাতিল করল আমিরাত </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194070"> তুরস্ক কোনো হুমকিতে মাথা নত করবে না: এরদোগান </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194069"> বিশ্বের সবচেয়ে দামি ভেড়া ‘ডাবল ডায়মন্ড’ </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194063"> স্বামীকে হাত-পা বেঁধে গাড়িতে বসিয়ে স্ত্রীকে কলোনিতে নিয়ে পাঁচজনের ধর্ষণ </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194062"> ২০০ বছরের পুরনো নিবাস ছেড়ে যাচ্ছেন ধর্ম যাজকেরা </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194061"> রং নম্বরে প্রেম... দাওয়াত দিয়ে ডেকে ২ বন্ধু মিলে ধর্ষণ! </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/Entertainment/194058"> বাবা-মায়ের উপর অভিমানেই আত্মহত্যা করলেন অভিনেত্রী লরেন </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194057"> মাত্র ১৭৬০০ টাকায় গাড়ি দিচ্ছে মারুতি সুজুকি! </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/National/194056"> পুলিশি বাধা ঠেলে সড়কে বিহারী ক্যাম্পের তাজিয়া মিছিল </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/Entertainment/194054"> ‘আত্মহত্যা’ করেছেন এয়ারটেলের বিজ্ঞাপন দিয়ে আলোচিত সেই তরুণ অভিনেত্রী </a> </li>
																								<li> <a href="http://www.sylhetview24.net/news/details/International/194052"> ন্যায় ও সত্যের পথে অবিচল থাকাই কারবালার শিক্ষা </a> </li>
																					</ul>
								</div> <!-- END OF CLASS CONTENT_MIDDLE_4PART_TOP_LEFT -->
							</div>
						</div> <!------ END OF CLASS DIV-ROW ------->
						
						<div class="row-separator2"> </div>
						<div class="div-row">
													</div> <!------ END OF CLASS DIV-ROW ------->
						<div class="row-separator2"> </div>
					</div> <!-- End of DIV CONTENT_TOP_MOST_MID_FLOAT -->
				</div> <!-- End of DIV CONTENT_TOP_MOST_MID -->
			</div> <!-- End of DIV CONTENT_TOP_MOST -->
			
			<!----------------- START OF CONTENT_MIDDLE2 ------------------>
			<div id="content_middle2"> 
				<div id="content_middle2_mid">
					<div id="content_middle2_mid_float">
						<div class="content_middle_2part">
							<div class="home_header"> <h1>  জাতীয়  </h1> </div> <!-- End of DIV HOME HEADER -->
																<div class="content_middle_2part_left">
									
																					<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194138.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												<h1> <a href="http://www.sylhetview24.net/news/details/National/194138"> সিলেটের সালমান শাহ হত্যা : নারাজির শুনানি ১১ অক্টোবর </a> </h1>

																							<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194137.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												<h1> <a href="http://www.sylhetview24.net/news/details/National/194137"> সালমান শাহর মৃত্যু; পিবিআইয়ের প্রতিবেদনের বিরুদ্ধে নারাজি দিতে সময়ের আবেদন </a> </h1>

																						</div> <!-- End of CLASS CONTENT_MIDDLE_2PART_LEFT -->
											
											<div class="content_middle_2part_right">
															
											<li> <a href="http://www.sylhetview24.net/news/details/National/194135"> ২৬ দেশ থেকে ৫ মাসে ফিরে এসেছেন ৯৫ হাজার প্রবাসী </a> </li>
														
											<li> <a href="http://www.sylhetview24.net/news/details/National/194134"> কারাবন্দি সাবরিনার বিরুদ্ধে এবার ইসির মামলা </a> </li>
														
											<li> <a href="http://www.sylhetview24.net/news/details/National/194125"> সাপ ধরার কৌশল দেখাতে গিয়ে সাপুড়ের মৃত্যু </a> </li>
														
											<li> <a href="http://www.sylhetview24.net/news/details/National/194119"> অস্ত্র মামলায় পাপিয়া দম্পতির বিরুদ্ধে সাক্ষ্যগ্রহণ আজ </a> </li>
														
											<li> <a href="http://www.sylhetview24.net/news/details/National/194112"> আজ থেকে একাদশে ভর্তির দ্বিতীয় ধাপের আবেদন </a> </li>
														
											<li> <a href="http://www.sylhetview24.net/news/details/National/194109"> পাপুলের ভাইকে কুয়েতে তদন্ত কমিটির তলব </a> </li>
														
											<li> <a href="http://www.sylhetview24.net/news/details/National/194108"> দেশে আনা হল সি আর দত্তের মরদেহ </a> </li>
														
											<li> <a href="http://www.sylhetview24.net/news/details/National/194104"> জেলেদের জালে ধরা পড়েছে বিরল প্রজাতির মাছ </a> </li>
																			</div> <!-- End of CLASS CONTENT_MIDDLE_2PART_RIGHT -->
															</div> <!-- End of CLASS CONTENT_MIDDLE_2PART -->

						<div class="content_middle_2part_2">
							<div class="home_header"> <h1>  রাজনীতি </h1> </div> <!-- End of DIV HOME HEADER -->
																<div class="content_middle_2part_left">
									
																					<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194133.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												<h1> <a href="http://www.sylhetview24.net/news/details/Politics/194133"> নির্বাচনে হারার আগেই হেরে যায় বিএনপি : ওবায়দুল কাদের </a> </h1>

																							<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/193973.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												<h1> <a href="http://www.sylhetview24.net/news/details/Politics/193973"> ‘গাঁজা’ নিয়ে আওয়ামী লীগের দুই পক্ষের সংঘর্ষ, আহত ২০ </a> </h1>

																						</div> <!-- End of CLASS CONTENT_MIDDLE_2PART_LEFT -->
											
											<div class="content_middle_2part_right">
															
											<li> <a href="http://www.sylhetview24.net/news/details/Politics/193971"> দেশ চালাতে নতুন দল চান মান্না </a> </li>
													
											<li> <a href="http://www.sylhetview24.net/news/details/Politics/193961"> জনগণকে ঐক্যবদ্ধ করে ক্ষমতায় যাবে গণফোরাম: রেজা কিবরিয়া </a> </li>
													
											<li> <a href="http://www.sylhetview24.net/news/details/Politics/193943"> উপনির্বাচনে অংশগ্রহণের বিষয়ে বিএনপির সিদ্ধান্ত আজ </a> </li>
													
											<li> <a href="http://www.sylhetview24.net/news/details/Politics/193907"> প্রধানমন্ত্রীকে চিঠি দেবেন খালেদা জিয়া! </a> </li>
													
											<li> <a href="http://www.sylhetview24.net/news/details/Politics/193801"> কখন কী ঘটে বলা যায় না: ওবায়দুল কাদের </a> </li>
													
											<li> <a href="http://www.sylhetview24.net/news/details/Politics/193800"> চিরজীবন ক্ষমতায় থাকব না, দাপট দেখাবেন না: নেতাকর্মীদের কাদের </a> </li>
													
											<li> <a href="http://www.sylhetview24.net/news/details/Politics/193714"> অবৈধ ক্ষমতা দখলকারীদের মুখে নীতি কথা মানায় না : সেতুমন্ত্রী </a> </li>
													
											<li> <a href="http://www.sylhetview24.net/news/details/Politics/193713"> 'বেগম জিয়া হঠাৎ করে ১৯৯৫ সালে ১৫ আগস্ট জন্মগ্রহণ করেছেন' </a> </li>
																		</div> <!-- End of CLASS CONTENT_MIDDLE_2PART_RIGHT -->
															</div> <!-- End of CLASS CONTENT_MIDDLE_2PART_2 -->
					</div> <!-- End of DIV CONTENT_MIDDLE2_MID_FLOAT -->
				</div> <!-- End of DIV CONTENT_MIDDLE2_MID -->
			</div> <!-- End of DIV CONTENT_MIDDLE2 -->

			<!----------------- START ADD ------------------>
			<div id="content_add">
				<div id="content_add_mid">
					<div id="content_add_mid_float">
						<div class="row-separator2"> </div>
						<div class="div-row">
																		<div class="div-col div-col-4 ad-section">
												<a href="https://www.facebook.com/MahaBD4U/" target="_blank" title="Maha"><img class="lazy" data-src="http://www.sylhetview24.net/images/add/18.jpeg" alt="Maha" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a>
											</div>
																					<div class="div-col div-col-4 ad-section">
												<a href="https://www.facebook.com/MahaBD4U/" target="_blank" title="Maha"><img class="lazy" data-src="http://www.sylhetview24.net/images/add/19.jpeg" alt="Maha" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a>
											</div>
																</div> <!------ END OF CLASS DIV-ROW ------->
						<div class="row-separator2"> </div>
					</div> <!-- End of DIV CONTENT_ADD_MID_FLOAT -->
				</div> <!-- End of DIV CONTENT_ADD_MID -->
			</div> <!-- End of DIV CONTENT_ADD -->

			<!----------------- START OF CONTENT_MIDDLE2 ------------------>
			<div id="content_middle2"> 
				<div id="content_middle2_mid">
					<div id="content_middle2_mid_float">
						<div class="content_middle_2part" style="min-height:300px;">
							<div class="home_header">
								<h1>    খেলাধুলা </h1>
							</div> <!-- End of DIV HOME HEADER -->
																	<div class="content_middle_2part_left">
																					<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194111.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												<h1> <a href="http://www.sylhetview24.net/news/details/Sports/194111"> মেসিকে ৫ বছরের চুক্তির প্রস্তাব ম্যানসিটির </a> </h1>

											</div> <!-- End of CLASS CONTENT_MIDDLE_2PART_LEFT -->
											
											<div class="content_middle_2part_right">
															
											<li> <a href="http://www.sylhetview24.net/news/details/Sports/194032"> বার্সেলোনার মেডিকেল টেস্ট দিচ্ছেন না মেসি </a> </li>
														
											<li> <a href="http://www.sylhetview24.net/news/details/Sports/194014"> বলে লালা ব্যবহার করে নিয়ম লঙ্ঘন করলেন আমির </a> </li>
														
											<li> <a href="http://www.sylhetview24.net/news/details/Sports/193918"> ম্যান সিটিকে বেছে নিয়েছেন মেসি, জানালেন তার বাবা </a> </li>
														
											<li> <a href="http://www.sylhetview24.net/news/details/Sports/193745"> যার সঙ্গে দ্বন্দ্বের কারণে মেসির বার্সা ছাড়ার সিদ্ধান্ত </a> </li>
																			</div> <!-- End of CLASS CONTENT_MIDDLE_2PART_RIGHT -->
															</div> <!-- End of CLASS CONTENT_MIDDLE_2PART -->

						<div class="content_middle_2part_2" style="min-height:300px;">
							<div class="home_header"><h1>  বিনোদন </h1></div> <!-- End of DIV HOME HEADER -->
																<div class="content_middle_2part_left">
									
																				<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194128.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
											<h1> <a href="http://www.sylhetview24.net/news/details/Entertainment/194128"> ‘সুশান্তের বাবাকে নিয়ে গল্প বানাচ্ছে রিয়া’ </a> </h1>

											</div> <!-- End of CLASS CONTENT_MIDDLE_2PART_LEFT -->
											
											<div class="content_middle_2part_right">
														
											<li> <a href="http://www.sylhetview24.net/news/details/Entertainment/194058"> বাবা-মায়ের উপর অভিমানেই আত্মহত্যা করলেন অভিনেত্রী লরেন </a> </li>
													
											<li> <a href="http://www.sylhetview24.net/news/details/Entertainment/194054"> ‘আত্মহত্যা’ করেছেন এয়ারটেলের বিজ্ঞাপন দিয়ে আলোচিত সেই তরুণ অভিনেত্রী </a> </li>
													
											<li> <a href="http://www.sylhetview24.net/news/details/Entertainment/194015"> সুশান্তের মৃত্যুর কয়েক ঘণ্টা আগে কী হয়েছিল? </a> </li>
													
											<li> <a href="http://www.sylhetview24.net/news/details/Entertainment/193986"> সুশান্তের মোবাইলেই লুকিয়ে রয়েছে মৃত্যু-রহস্য! </a> </li>
																		</div> <!-- End of CLASS CONTENT_MIDDLE_2PART_RIGHT -->
															</div> <!-- End of CLASS CONTENT_MIDDLE_2PART_2 -->
					</div> <!-- End of DIV CONTENT_MIDDLE2_MID_FLOAT -->
				</div> <!-- End of DIV CONTENT_MIDDLE2_MID -->
			</div> <!-- End of DIV CONTENT_MIDDLE2 -->

			<!----------------- START ADD ------------------>
			<div id="content_add">
				<div id="content_add_mid">
					<div id="content_add_mid_float">
						<div class="row-separator2"> </div>
						<div class="div-row">
																		<div class="div-col div-col-4 ad-section">
												<a href="https://www.fb.com/itlabsolutionsltd/photos/pb.801816143294938.-2207520000../1752874578189085/" target="_blank" title="IT Lab Solutions Ltd."><img class="lazy" data-src="http://www.sylhetview24.net/images/add/21.gif" alt="IT Lab Solutions Ltd." src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a>
											</div>
																</div> <!------ END OF CLASS DIV-ROW ------->
						<div class="row-separator2"> </div>
					</div> <!-- End of DIV CONTENT_ADD_MID_FLOAT -->
				</div> <!-- End of DIV CONTENT_ADD_MID -->
			</div> <!-- End of DIV CONTENT_ADD -->

			<!----------------- START GALLERY ------------------>
			<div id="content_gallery">
				<div id="content_gallery_mid">
					<div id="content_gallery_mid_float">
						<div class="content_middle_part">
							<div class="home_header"><h1> ফটো গ্যালারী </h1></div>
								
								<!-------------------------- START GALLERY ---------------------------------->
								<div class="ruled1">	
									<!-- Start WOWSlider.com BODY section -->
									<div id="wowslider-container1">
										<div class="ws_images"><div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;"><img src="{{ asset('public/frontend/images') }}/31.jpeg" alt="Image" title="সিলেটভিউ২৪ডটকম অফিসে আলাপচারিতায় পররাষ্ট্রমন্ত্রী ড. এ কে আবদুল মোমেন।" id="wows1_055" style="width: 100%;"></div>
											<ul style="position: absolute; top: 0px; animation: 0s ease 0s 1 normal none running none; width: 200%; display: none; left: 0%;">
																										<li style="display: table-cell; float: none; width: auto; font-size: 0px;"><img src="{{ asset('public/frontend/images') }}/31.jpeg" alt="Image" title="সিলেটভিউ২৪ডটকম অফিসে আলাপচারিতায় পররাষ্ট্রমন্ত্রী ড. এ কে আবদুল মোমেন।" id="wows1_055" style="visibility: visible;"></li>
															
																												<li style="display: table-cell; float: none; width: auto; font-size: 0px;"><img src="{{ asset('public/frontend/images') }}/30.jpeg" alt="Image" title="সিলেটভিউ২৪ডটকম'র চতুর্থ প্রতিষ্ঠাবার্ষিকী উপলক্ষে বর্ণাঢ্য শোভাযাত্রা।" id="wows1_055" style="visibility: visible;"></li>
															
															
											</ul>
										<img src="{{ asset('public/frontend/images') }}/30.jpeg" alt="Image" title="সিলেটভিউ২৪ডটকম'র চতুর্থ প্রতিষ্ঠাবার্ষিকী উপলক্ষে বর্ণাঢ্য শোভাযাত্রা।" id="wows1_055" style="visibility: visible; position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; opacity: 0.19107;"><img src="{{ asset('public/frontend/images') }}/31.jpeg" alt="Image" title="সিলেটভিউ২৪ডটকম অফিসে আলাপচারিতায় পররাষ্ট্রমন্ত্রী ড. এ কে আবদুল মোমেন।" id="wows1_055" style="visibility: visible; position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; opacity: 0.80893;"></div>
										
										<div class="ws_thumbs" style="overflow: hidden;">
											<div style="top: 0px; left: 0px;">
																										<a href="#" title="সিলেটভিউ২৪ডটকম অফিসে আলাপচারিতায় পররাষ্ট্রমন্ত্রী ড. এ কে আবদুল মোমেন।" class=""> <img src="{{ asset('public/frontend/images') }}/31.jpeg" alt="Image"> </a>
																												<a href="#" title="সিলেটভিউ২৪ডটকম'র চতুর্থ প্রতিষ্ঠাবার্ষিকী উপলক্ষে বর্ণাঢ্য শোভাযাত্রা।" class="ws_selthumb"> <img src="{{ asset('public/frontend/images') }}/30.jpeg" alt="Image"> </a>
																									</div>
										</div>
									<div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; z-index: 10; background: rgb(255, 255, 255) none repeat scroll 0% 0%; opacity: 0;"><a href="#" style="display:none;position:absolute;left:0;top:0;width:100%;height:100%"></a></div><a href="#" class="ws_next"></a><a href="#" class="ws_prev"></a><div class="ws-title" style="display: block; opacity: 0.0640387;"><span>সিলেটভিউ২৪ডটকম'র চতুর্থ প্রতিষ্ঠাবার্ষিকী উপলক্ষে বর্ণাঢ্য শোভাযাত্রা।</span></div></div>
								</div>
							
								<script type="text/javascript" src="{{ asset('public/frontend/js') }}/wowslider.js"></script>
								<script type="text/javascript" src="{{ asset('public/frontend/js') }}/script.js"></script>
								<!-------------------------- END OF GALLERY ---------------------------------->				
						</div> <!-- End of DIV CONTENT_MIDDLE_PART -->

						<div class="content_middle_4part" style="min-height:505px;">
							<h2 class="head_title" style="background:#FF9900; color:#FFFFFF;">  বিশ্ব </h2>
																	<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194130.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
										<h1> <a href="http://www.sylhetview24.net/news/details/International/194130"> করোনা কালে মধ্যপ্রাচ্যের বিগ থ্রির শীর্ষে উঠে আসে কাতার এয়ারওয়েজ </a> </h1>
																				<li> <a href="http://www.sylhetview24.net/news/details/International/194127"> টিকা নিয়ে এবার রাশিয়ার পথেই হাঁটতে যাচ্ছে আমেরিকা! </a> </li> 										<li> <a href="http://www.sylhetview24.net/news/details/International/194124"> পোর্টল্যান্ডে সংঘর্ষ, ট্রাম্প-বাইডেনের কথার লড়াই </a> </li> 										<li> <a href="http://www.sylhetview24.net/news/details/International/194123"> সৌদির আবহা বিমানবন্দরে হুতিদের ড্রোন হামলা </a> </li> 						</div> <!-- End of CLASS CONTENT_MIDDLE_4PART -->

						<div class="content_middle_4part" style="box-shadow:none;">
													</div> <!-- End of CLASS CONTENT_MIDDLE_4PART -->
					</div> <!-- End of DIV CONTENT_GALLERY_MID_FLOAT -->
				</div> <!-- End of DIV CONTENT_GALLERY_MID -->
			</div> <!-- End of DIV CONTENT_GALLERY -->

			<!----------------- START ADD ------------------>
			<div id="content_add">
				<div id="content_add_mid">
					<div id="content_add_mid_float">
						<div class="row-separator2"> </div>
						<div class="div-row">
													</div> <!------ END OF CLASS DIV-ROW ------->
						<div class="row-separator2"> </div>
					</div> <!-- End of DIV CONTENT_ADD_MID_FLOAT -->
				</div> <!-- End of DIV CONTENT_ADD_MID -->
			</div> <!-- End of DIV CONTENT_ADD -->

			<div id="content_middle"> 
				<div id="content_middle_mid">
					<div id="content_middle_mid_float">
						<div class="content_left_part">
							<div class="content_middle_4part">
								<h2 class="head_title"> আইসিটি </h2>
																			<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194035.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
											<h1> <a href="http://www.sylhetview24.net/news/details/ICT/194035"> যুগান্তকারী আবিষ্কার! জ্বালানি নয়, বাতাসেই যে গাড়ি চলবে ৪০০ কিমি! </a> </h1>											<li> <a href="http://www.sylhetview24.net/news/details/ICT/194022"> হোয়াটসঅ্যাপের বিকল্প প্ল্যাটফর্ম আনছে সৌদি আরব </a> </li> 											<li> <a href="http://www.sylhetview24.net/news/details/ICT/193666"> ব্রিটেন-জার্মানি-ভারতের গণমাধ্যমকেও অর্থ দেবে ফেসবুক </a> </li> 											<li> <a href="http://www.sylhetview24.net/news/details/ICT/193653"> পৃথিবীতে গ্রহাণু আছড়ে পড়ার আশঙ্কা </a> </li> 							</div> <!-- End of CLASS CONTENT_MIDDLE_4PART -->
							
							<div class="content_middle_4part">
								<h2 class="head_title" id="header_economics"> চাকরি </h2>
																				<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/189640.png" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												<h1> <a href="http://www.sylhetview24.net/news/details/Job/189640"> সিলেটে রেড এক্স ডেলিভারিতে স্থায়ী ডেলিভারি ম্যান হিসেবে চাকরির সুযোগ </a> </h1>
																								<li> <a href="http://www.sylhetview24.net/news/details/Job/189403"> সিলেট ডায়রিতে প্রতিনিধি নিয়োগ </a> </li> 												<li> <a href="http://www.sylhetview24.net/news/details/Job/187377"> চাকরীর সন্ধান পৌঁছে দেওয়ার উদ্যোগ জার্নিমেকারজবস’র </a> </li> 												<li> <a href="http://www.sylhetview24.net/news/details/Job/186233"> এখনো যেসব চাকরির আবেদনের সুযোগ আছে </a> </li> 							</div> <!-- End of CLASS CONTENT_MIDDLE_4PART -->
						</div><!-- End of CLASS CONTENT_LEFT_PART -->
						
						<div class="content_right_part">
							<div class="content_middle_4part">
								<h2 class="head_title" id="header_campus"> মুক্তমত </h2>
																			<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194036.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
											<h1> <a href="http://www.sylhetview24.net/news/details/opinion/194036"> আমীনূর রশীদ চৌধূরী: তাঁকে ভোলা যাবেনা কোনোদিন </a> </h1>
																						<li> <a href="http://www.sylhetview24.net/news/details/opinion/194008"> পবিত্র আশুরা ত্যাগের শিক্ষা দেয় </a> </li> 											<li> <a href="http://www.sylhetview24.net/news/details/opinion/193784"> মৃত‌্যুতে ‌‘শুন‌্য’ আজিজুর রহমা‌নের চেয়ার নি‌য়ে সরগরম মৌলভীবাজার </a> </li> 											<li> <a href="http://www.sylhetview24.net/news/details/opinion/193659"> এক বিষণ্ন রাতের দুঃস্বপ্ন </a> </li> 							</div> <!-- End of CLASS CONTENT_MIDDLE_4PART -->

							<div class="content_middle_4part">
								<h2 class="head_title">  ফিচার  </h2>
																				<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194025.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												<h1> <a href="http://www.sylhetview24.net/news/details/Feature/194025"> আশুরার দিনে সংগঠিত ঐতিহাসিক ২০ ঘটনা </a> </h1>
																					
												<li> <a href="http://www.sylhetview24.net/news/details/Feature/193844"> নবী-রসুলদের স্মৃতিময় পাহাড়-পর্বত </a> </li>
														
																					
												<li> <a href="http://www.sylhetview24.net/news/details/Feature/192592"> কাবা শরিফের কালো গিলাফে কী লেখা? </a> </li>
														
																					
												<li> <a href="http://www.sylhetview24.net/news/details/Feature/190414"> ৭ বছরের শিশু এক বছরে কোরআনে হাফেজ </a> </li>
														
																			</div> <!-- End of CLASS CONTENT_MIDDLE_4PART -->
						</div><!-- End of CLASS CONTENT_RIGHT_PART -->
					</div> <!-- End of DIV CONTENT_MIDDLE_MID_FLOAT -->
				</div> <!-- End of DIV CONTENT_MIDDLE_MID -->
			</div> <!-- End of DIV CONTENT_MIDDLE -->

			<!----------------- START ADD ------------------>
			<div id="content_add">
				<div id="content_add_mid">
					<div id="content_add_mid_float">
						<div class="row-separator2"> </div>
						<div class="div-row">
													</div> <!------ END OF CLASS DIV-ROW ------->
						<div class="row-separator2"> </div>
					</div> <!-- End of DIV CONTENT_ADD_MID_FLOAT -->
				</div> <!-- End of DIV CONTENT_ADD_MID -->
			</div> <!-- End of DIV CONTENT_ADD -->
			
			<div id="content_middle"> 
				<div id="content_middle_mid">
					<div id="content_middle_mid_float">
						<div class="content_left_part">	
							<div class="content_middle_4part">
								<h2 class="head_title"> জীবন ধারা  </h2>
																				<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194116.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												<h1> <a href="http://www.sylhetview24.net/news/details/Life_Style/194116"> করোনায় স্নায়ুতন্ত্র-মস্তিষ্ক ভালো রাখবেন যেভাবে </a> </h1>
																					
												<li> <a href="http://www.sylhetview24.net/news/details/Life_Style/194088"> লিভার সুস্থ রাখবে যে ৪ অভ্যাস </a> </li>
														
																					
												<li> <a href="http://www.sylhetview24.net/news/details/Life_Style/194087"> ফুসফুস ভালো রাখে যে ৫ খাবার </a> </li>
														
																					
												<li> <a href="http://www.sylhetview24.net/news/details/Life_Style/194086"> যে গুণের মেয়েদের বিয়ে করলে সুখী হবেন </a> </li>
														
																					
												<li> <a href="http://www.sylhetview24.net/news/details/Life_Style/194024"> গোপনে আক্রমণ করে চলে গেল, বুঝতে পারবেন যেভাবে </a> </li>
														
																					
												<li> <a href="http://www.sylhetview24.net/news/details/Life_Style/193984"> গোপনে করোনা এসে চলে গেল? বুঝতে পারবেন এই লক্ষণগুলোতে </a> </li>
														
																					
												<li> <a href="http://www.sylhetview24.net/news/details/Life_Style/193857"> শিশুর জ্বরের সঙ্গে এসব উপসর্গ থাকলে সাবধান </a> </li>
														
																			</div> <!-- End of CLASS CONTENT_MIDDLE_4PART -->

							<div class="content_middle_4part">
								<h2 class="head_title">  প্রবাস জীবন </h2>
																				<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/193742.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												<h1> <a href="http://www.sylhetview24.net/news/details/Abroad_Life/193742"> খন্দকার বাজার প্রবাসী কল্যাণ ট্রাস্ট ইউকে’র সভা ৩০ আগস্ট </a> </h1>
																								<li> <a href="http://www.sylhetview24.net/news/details/Abroad_Life/193660"> কানাডায় ‘বয়েজ অব বিয়ানীবাজার ক্লাব’র আত্মপ্রকাশ </a> </li> 												<li> <a href="http://www.sylhetview24.net/news/details/Abroad_Life/193388"> সিলেটীদের উদ্যোগে ব্রিটেনে ‘নাইট ক্লাব’ পরিণত হলো মসজিদে </a> </li> 												<li> <a href="http://www.sylhetview24.net/news/details/Abroad_Life/192740"> জাতীয় শোকদিবসে বার্সেলোনায় কাতালোনিয়া আ’লীগের মতবিনিময় সভা </a> </li> 												<li> <a href="http://www.sylhetview24.net/news/details/Abroad_Life/192573"> বাংলাদেশ এসোসিয়েশন ইন স্পেনের ভারপ্রাপ্ত সভাপতি আলামীন মিয়া </a> </li> 												<li> <a href="http://www.sylhetview24.net/news/details/Abroad_Life/192564"> স্পেনে জাতীয় শোক দিবস পালিত </a> </li> 												<li> <a href="http://www.sylhetview24.net/news/details/Abroad_Life/192556"> মরিশাসের পোর্ট লুইসে শোক দিবস পালন </a> </li> 							</div> <!-- End of CLASS CONTENT_MIDDLE_4PART -->
						</div><!-- End of CLASS CONTENT_LEFT_PART -->
						
						<div class="content_left_part">
							<div class="content_middle_4part">
								<h2 class="head_title"> চিত্র-বিচিত্র </h2>
																			<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/193403.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
											<h1> <a href="http://www.sylhetview24.net/news/details/Various_News/193403"> সমুদ্রের গভীরে ৩০টি নতুন প্রজাতির সন্ধান, অবাক বিজ্ঞানীরা </a> </h1> 											<li> <a href="http://www.sylhetview24.net/news/details/Various_News/193402"> মানুষের চেয়ে ভালো স্বাদ বোঝে ইঁদুর! </a> </li> 											<li> <a href="http://www.sylhetview24.net/news/details/Various_News/193115"> অবিশ্বাস্য, মাছ ধরতে টোপ ফেলছে পাখি </a> </li> 											<li> <a href="http://www.sylhetview24.net/news/details/Various_News/192834"> রহস্যময় পাঁচ দরজা, যা খোলা যায় না </a> </li> 											<li> <a href="http://www.sylhetview24.net/news/details/Various_News/191920"> নদী নয় বরফের খণ্ড ভাসছে মঙ্গলে! </a> </li> 											<li> <a href="http://www.sylhetview24.net/news/details/Various_News/190706"> পৃথিবীর রহস্যময় ৫ ঘটনা, যার ব্যাখ্যা বিজ্ঞানও দিতে পারেনি! </a> </li> 											<li> <a href="http://www.sylhetview24.net/news/details/Various_News/190509"> ভিনগ্রহীরা এসেছিল ভারতে! </a> </li> 							</div> <!-- End of CLASS CONTENT_MIDDLE_4PART -->

							<div class="content_middle_4part">
								<h2 class="head_title"> সাহিত্য </h2>
																				<img class="lazy" data-src="http://www.sylhetview24.net/images/news/thumb/194004.jpeg" alt="Image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												<h1> <a href="http://www.sylhetview24.net/news/details/Literature/194004"> মরার উপর খাড়ার ঘা </a> </h1>
																								<li> <a href="http://www.sylhetview24.net/news/details/Literature/192296"> রাজু দেশোয়ারার তথ্যবহুল বই ‘বঙ্গবন্ধু ও বাংলাদেশের চা শিল্প’ </a> </li> 												<li> <a href="http://www.sylhetview24.net/news/details/Literature/191752"> গোবিন্দ ধর: স্রোত সাহিত্য পত্রিকা ও প্রকাশনা </a> </li> 												<li> <a href="http://www.sylhetview24.net/news/details/Literature/191264"> গ্রন্থালোচনা: লোকসংস্কৃতি গবেষক সুমনকুমার দাশের ‘লোকসাধকের দরবারে’ </a> </li> 												<li> <a href="http://www.sylhetview24.net/news/details/Literature/190908"> ত্রিপুরার কবি গোবিন্দ ধরের জন্মদিন ঘিরে নানা আয়োজন </a> </li> 												<li> <a href="http://www.sylhetview24.net/news/details/Literature/190203"> পজিটিভের নেগেটিভ! </a> </li> 												<li> <a href="http://www.sylhetview24.net/news/details/Literature/189849"> মুক্তিযোদ্ধা এখনো মুক্তিযুদ্ধে </a> </li> 							</div> <!-- End of CLASS CONTENT_MIDDLE_4PART -->
						</div><!-- End of CLASS CONTENT_LEFT_PART -->

					</div> <!-- End of DIV CONTENT_MIDDLE_MID_FLOAT -->
				</div> <!-- End of DIV CONTENT_MIDDLE_MID -->
			</div> <!-- End of DIV CONTENT_MIDDLE -->


@endsection