{{W name=notify}}	

	<div class="smalltop">
		<div class="container relat">
		{{include file='../tpl_common/top.tpl'}}
	</div>
	</div>
		<div class="slider">
			<div class="container subslide">
				{{W name=sliderBootstrap imagesBucket=737 count=7 width=1170 height=500 fit=smart}}
			</div>
		</div>
		
	

	<div class="content">		
		{{W name=newsNormal newsGroup=745 showAuthor=0 showDate=0 width=300 length=300 height=1000 cssUl="fluid-news" cssLi="msitem" fit="fit"}}	
	</div>
		
			<div class="logos">
				{{foreach $imagesDB->getByBucket(759) as $image}}
			    <a href="{{$image->url}}"><img src="{{$HOME}}image/{{$image->ekey}}/200/150/fit/" alr="strony www"></a>
				{{/foreach}}
			</div>	
		{{include file='../tpl_common/footer.tpl'}}	
</div>
	
