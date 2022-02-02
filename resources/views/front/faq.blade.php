@extends('front.layout.app')

@section('content')
<div class="container-fluid" id="pagecontent">
<section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
  <div class="container">
  
	  <h2 class="mb-3">{{ __('message.frequently_asked_questions') }} </h2>
	  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		@foreach($faqdata as $data)  
		<div class="panel panel-default">
		  <div class="panel-heading p-3" role="tab" id="heading0">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$data->id}}" aria-expanded="true" aria-controls="collapse0">
				{{$data->question}}
			  </a>
			</h3>
		  </div>
		  <div id="collapse{{$data->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
			<div class="panel-body px-3">
			
			{!!html_entity_decode($data->answer)!!}
			</div>
		  </div>
		</div>

		@endforeach
		
		<!-- <div class="panel panel-default">
		  <div class="panel-heading p-3" role="tab" id="heading1">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
				How easy is it to build a website with Solodev CMS?
			  </a>
			</h3>
		  </div>
		  <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
			<div class="panel-body px-3">
			  <p>Building a website is extremely easy. With a working knowledge of HTML and CSS you will be able to have a site up and running in no time.</p>
			</div>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <div class="panel-heading p-3" role="tab" id="heading2">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
				What is the uptime for Solodev CMS?
			  </a>
			</h3>
		  </div>
		  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
			<div class="panel-body px-3">
			  <p>Using Amazon AWS technology which is an industry leader for reliability you will be able to experience an uptime in the vicinity of 99.95%.</p>
			</div>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <div class="panel-heading p-3" role="tab" id="heading3">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
				Can Solodev CMS handle multiple websites for my company?
			  </a>
			</h3>
		  </div>
		  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
			<div class="panel-body px-3">
			  <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
			</div>
		  </div>
		</div> -->
	  </div>
  
  </div>
</section>
</div>

@endsection