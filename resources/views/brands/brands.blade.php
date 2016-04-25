@extends('layout/default')

@section('main')
			
			<div class="spacer20"></div>
			
@foreach($Brands as $Brand)
			<div class="BrandItem">
				<div class="BrandTitle">
					<h3>
						<a href="{{ languages(BRANDS, BRANDS_FR) }}/{{ fixSegment($Brand->brand) }}/{{ $Brand->id }}">
							{{ $Brand->brand }}
						</a>
					</h3>				
				</div>				
				<div class="BrandInfo">
					<div class="BrandImage">
						<img src="images/{{ $Brand->image }}" />
					</div>
					<div class="BrandDetails">{!! languages($Brand->about, $Brand->about_fr) !!}</div>
				</div>				
				<div class="BrandMore">
					<span data="0">[+] {{ languages('MORE', 'PLUS') }}</span>
				</div>				
			</div>

			<div class="spacer20"></div>

@endforeach

			<input type="hidden" id="lang" value="{{ Session::get('lang') }}" />
			<script src="js/brandmore.js" type="text/javascript"></script>
			
@endsection