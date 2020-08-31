<div class="div-row" style="background:#1B59A3; margin:0 0 10px 0; min-height: 66px;">		
			<div class="middle-div">		
				<div id="content_header_mid_float_bottom">
					<div id="content_header_link_inner">
						<!--- &#9661; &#9662;  --->
						<a class="normal_menu" href="{{ url('/') }}"> 
							<!-- <i class="fa fa-home fa-lg"></i> -->
							<img style="height: 20px;" src="{{ asset('public/frontend/images') }}/icon-home.png" alt="OasisHospitals"> 
						</a> <p> | </p>
						






					@php
						$category=DB::table('categories')->get();
					@endphp

					@foreach($category as $row)
						@php
							$subcategory=DB::table('subcategories')
										->where('category_id',$row->id)
										->skip(1)
										->limit(20)
										->get();
						@endphp

						<div class="dropdown">
							
							<button class="dropbtn"> 
								<a href="#"> {{ $row->category_name }} 
								@if(count($subcategory)>0)
									⇓ 
								@endif</a>
							</button>

							<div class="dropdown-content">
								
								<!-- <a id='sub_cat_menu' href="http://www.sylhetview24.net/news/category/Sylhet"> সিলেট </a> --->
								@foreach($subcategory as $row)
								<a id="sub_cat_menu" href="#"> {{ $row->subcategory_name }} </a>
								@endforeach
								
							</div>
							
						</div> <p> | </p> 
					@endforeach






						<!-- 
						<a class="normal_menu" href="http://www.sylhetview24.net/news/category/National">   জাতীয়  </a> <p> | </p>
						<a class="normal_menu" href="http://www.sylhetview24.net/news/category/Politics">    রাজনীতি   </a> <p> | </p>
						<a class="normal_menu" href="http://www.sylhetview24.net/news/category/International"> বিশ্ব  </a> <p> | </p>
						<a class="normal_menu" href="http://www.sylhetview24.net/news/category/Sports">   খেলাধুলা   </a> <p> | </p>
						<a class="normal_menu" href="http://www.sylhetview24.net/news/category/Entertainment">   বিনোদন  </a> <p> | </p>
						<a class='normal_menu' href="news/category/Campus">   শিক্ষা-ক্যাম্পাস    </a> <p> | </p> 
						<a class="normal_menu" href="http://www.sylhetview24.net/news/category/ICT">  আইসিটি </a> <p> | </p>
						
						<div class="dropdown">
							<button class="dropbtn"> <a href="http://www.sylhetview24.net/news/category/Abroad_Life"> প্রবাস  ⇓ </a></button>
							<div class="dropdown-content">
								<a id="sub_cat_menu" href="http://www.sylhetview24.net/news/category/uk"> যুক্তরাজ্য </a>
								<a id="sub_cat_menu" href="http://www.sylhetview24.net/news/category/usa"> যুক্তরাষ্ট্র </a>
								<a id="sub_cat_menu" href="http://www.sylhetview24.net/news/category/middle-east"> মধ্যপ্রাচ্য </a>
								<a id="sub_cat_menu" href="http://www.sylhetview24.net/news/category/france"> ফ্রান্স </a>
								<a id="sub_cat_menu" href="http://www.sylhetview24.net/news/category/australia"> অস্ট্রেলিয়া </a>
								<a id="sub_cat_menu" href="http://www.sylhetview24.net/news/category/sweden"> সুইডেন </a>
								<a id="sub_cat_menu" href="http://www.sylhetview24.net/news/category/malaysia"> মালয়েশিয়া </a>
								<a id="sub_cat_menu" href="http://www.sylhetview24.net/news/category/world"> অন্যান্য দেশ </a>
							</div>
						</div> <p> | </p>
						
						<a class="normal_menu" href="http://www.sylhetview24.net/news/category/Various_News">  বিচিত্র  </a> <p> | </p>
						<a class="normal_menu" href="http://www.sylhetview24.net/news/category/opinion">  মুক্তমত  </a> <p> | </p>
						<a id="spl_menu" class="normal_menu" href="http://www.sylhetview24.net/news/category/Job">  চাকরি  </a> <p> | </p>
						<a class="normal_menu" href="http://www.sylhetview24.net/news/category/Literature">  সাহিত্য  </a> <p> | </p>
						<a class="normal_menu" href="http://www.sylhetview24.net/news/category/Life_Style">  লাইফস্টাইল  </a> <p> | </p>
						<a class="normal_menu" href="http://www.sylhetview24.net/news/category/video">  ভিডিও সংবাদ  </a> 
					
						 -->









						<!------
						<div class="dropdown">
							<button class="dropbtn"> বিশেষ আয়োজন </button>
							<div class="dropdown-content">
								<a href="http://www.sylhetview24.net/news/subcategory/1" id='sub_cat_menu'> রাজ দরবার </a>
								<a href="http://www.sylhetview24.net/news/subcategory/2" id='sub_cat_menu'> সাহিত্য </a>
								<a href="http://www.sylhetview24.net/news/subcategory/3" id='sub_cat_menu'> সাফল্য গাঁথা </a>
								<a href="http://www.sylhetview24.net/news/subcategory/4" id='sub_cat_menu'> সোশ্যাল মিডিয়া </a>
							</div>
						</div>
						<p> | </p>  ------->
						
						<!-----------
						<div class="dropdown">
							<button class="dropbtn"> অন্যান্য </button>
							<div class="dropdown-content">
								<a id='sub_cat_menu' href="http://www.sylhetview24.net/news/category/Feature"> ফিচার </a>
								<a id='sub_cat_menu' href="http://www.sylhetview24.net/news/category/Job"> চাকরী </a>
								<a id='sub_cat_menu' href="http://www.sylhetview24.net/news/category/Exclusive"> এক্সক্লুসিভ </a>
								<a id='sub_cat_menu' href="http://www.sylhetview24.net/news/category/Life_Style"> লাইফস্টাইল </a>
								<a id='sub_cat_menu' href="http://www.sylhetview24.net/news/category/video"> ভিডিও সংবাদ </a>
								<a id='sub_cat_menu' href="http://www.sylhetview24.net/news/category/Literature"> মুক্তমত ও সাহিত্য </a>
							</div>
						</div> ------->
					</div> <!-- End of DIV CONTENT_HEADER_LINK_INNER -->
				</div> <!-- End of DIV CONTENT_HEADER_MID_FLOAT_BOTTOM -->
			</div> <!-- End of DIV CONTENT_HEADER_MID_FLOAT -->
		</div> <!-- End of DIV CONTENT_HEADER_MID -->