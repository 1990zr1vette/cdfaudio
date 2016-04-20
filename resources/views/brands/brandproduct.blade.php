@extends('layout/default')

@section('main')

			<div id="brandslider">
				<img src="images/brandslider/volume_levels_1.jpg" />
				<img src="images/brandslider/volume_levels_2.jpg" />
				<img src="images/brandslider/volume_levels_3.jpg" />
				<div class="banner_overlay"></div>
			</div>
			
			<script src="js/brandslider.js" type="text/javascript"></script>
			
			<h1 id="brandheading">{{ $Brand->brand }} - {{ languages($Product->product, $Product->product_fr) }}</h1>

			<div class="spacer20"></div>
			
@foreach($Brand->InventoryItems()->where('product_id', $Product->id)->get() as $InventoryItem)
			<div class="item">
				<div class="spacer20"></div>
				<div class="leftcolumn">
					<img src="images/{{ $InventoryItem->image }}" />
				</div>
				<div class="rightcolumn">
					<h3><span>{{ $Brand->brand }} {{ $InventoryItem->model }}</span></h3>
					<div class="itemdescription">{{ languages($InventoryItem->description, $InventoryItem->description_fr) }}</div>					
				</div>	
				<div class="itemmore"><span>[+] {{ languages('MORE', 'PLUS') }}</span></div>
			</div>
			<div class="spacer20"></div>	
@endforeach		

			<input type="hidden" id="lang" value="{{ Session::get('lang') }}" />
			<script src="js/itemmore.js" type="text/javascript"></script>
			
@endsection