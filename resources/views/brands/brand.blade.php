@extends('layout/default')

@section('main')

			<div id="brandslider">
				<img src="images/brandslider/volume_levels_1.jpg" />
				<img src="images/brandslider/volume_levels_2.jpg" />
				<img src="images/brandslider/volume_levels_3.jpg" />
				<div class="banner_overlay"></div>
			</div>
			
			<script src="js/brandslider.js" type="text/javascript"></script>
			
			<h1 id="brandheading">{{ $Brand->brand }}</h1>

			<div class="spacer20"></div>
			
			<div id="brandinfo">
				<div class="spacer20"></div>
				<div id="brandimage"><img src="images/{{ $Brand->image }}" /></div>				
				<div id="brandabout">
					<h3 class="upper left">
						{{ languages('ABOUT THE BRAND', 'À propos de la marque') }}
@if ($Brand->website)						
						<a target="_blank" href="{{ $Brand->website }}">{{ languages('VIEW COMPANY WEBSITE', 'VOIR LA SITE DE LA MARQUE') }}</a><span>>&nbsp;</span>
@endif					
					</h3>
					<div id="aboutbrand">{{ languages($Brand->about, $Brand->about_fr) }}</div>					
				</div>
			</div>
			
			<script>if ($('#aboutbrand').height() > 130){$('#brandinfo').css('height', $('#brandinfo').height() + ($('#aboutbrand').height() - 130));}</script>
			
			<div class="spacer20"></div>
			
@foreach($Brand->Products as $BrandProduct)
			<div class="brandproductinventoryitems">
				<h3>
					<a href="brands/{{ fixSegment($Brand->brand) }}/{{ fixSegment($BrandProduct->Product->product, $BrandProduct->Product->product_fr) }}/{{ $Brand->id }}/{{ $BrandProduct->Product->id }}">
						{{ languages($BrandProduct->Product->product, $BrandProduct->Product->product_fr) }}
					</a>
				</h3>

				<div class="spacer10"></div>

@foreach($Brand->InventoryItems()->where('product_id', $BrandProduct->Product->id)->get() as $InventoryItem)
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
			</div>
@endforeach
			
			<input type="hidden" id="lang" value="{{ Session::get('lang') }}" />
			<script src="js/itemmore.js" type="text/javascript"></script>
			
@endsection