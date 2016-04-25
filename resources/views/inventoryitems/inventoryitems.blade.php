@extends('layout/default')

@section('main')
			<div class="spacer20"></div>
			
@if (isset($ProductType))
			<h2 class="upper">
				{{ languages($Product->product, $Product->product_fr) }} - {{ languages($ProductType->type, $ProductType->type_fr) }}
			</h2>	
@elseif (isset($Brand))
			<h2 class="upper">
				{{ languages($Product->product, $Product->product_fr) }} - {{ $Brand->brand }}
			</h2>
@else	
			<h2 class="upper">
				{{ languages($Product->product, $Product->product_fr) }}
			</h2>
@endif

			<div class="dropdowndiv">
				<div class="spacer10"></div>
				<div class="dropdownrow">
					<button class="btn btn-primary selectbutton">
						{{ languages('Choose a Brand', 'Choisissez une Marque') }}
					</button>
					<div>
						<ul id="brandselect" class="dropdown">
							<li for="{{ $Product->id }}" data="0">{{ languages('All Brands', 'Tous les marques') }}</li>
@foreach($ProductBrands as $ProductBrand)
							<li for="{{ $Product->id }}" data="{{ $ProductBrand->brand->id }}">{{ $ProductBrand->brand->brand }}</li>
@endforeach					
						</ul>
					</div>
				</div>
			</div>

			<script src="js/dropdowndiv.js" type="text/javascript"></script>
			<script>$('#brandselect li').click(function(){var url = "{{ $brandurl }}" + $(this).html().replace(/\ /g, '-').toLowerCase() + '/' + $(this).attr('data'); $(this).parent().css('display','none');window.location = url;});</script>
						
			<div class="spacer20"></div>

@foreach($InventoryItems as $InventoryItem)
			<div class="InventoryItem">
				<div class="spacer20"></div>
				<div class="InventoryItemInfo">
					<div class="InventoryItemImage">
						<img src="images/{{ $InventoryItem->image }}" />
					</div>
					<div class="InventoryItemDetails">
						<h3>{{ $InventoryItem->brand }} {{ $InventoryItem->model }}</h3>
						<p class="InventoryItemDescription">{{ languages($InventoryItem->description, $InventoryItem->description_fr) }}</p>
					</div>
				</div>
				<div class="InventoryItemMore">
					<span data="0">[+] {{ languages('MORE', 'PLUS') }}</span>
				</div>				
			</div>
			<div class="spacer10"></div>
@endforeach

			<div class="spacer20"></div>

			<input type="hidden" id="lang" value="{{ Session::get('lang') }}" />			
			<script src="js/itemmore.js" type="text/javascript"></script>
@endsection