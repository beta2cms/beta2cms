<div {{ $item->css_id? 'id="' . $item->css_id .'"' : ' ' }}  {{$item->css_class? 'class="' . $item->css_class  .'"' : '' }}>
	<div class="inner">
		@yield('content')
	</div>
</div>

