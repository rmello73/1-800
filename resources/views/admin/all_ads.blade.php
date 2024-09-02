@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection @section('main')


	<div id="wrapper">

		@include('admin.sidebar_menu')

		<div id="page-wrapper">
			@if( ! empty($title))
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">{{ $title }}</h1>
				</div>
			</div>
			@endif @include('admin.flash_msg')


			<div class="row">
				<div class="col-xs-12">

					@if($ads->total() > 0)
                                        Total Listings: {{ $ads->total() }}<br /><br />
					<table class="table table-bordered table-striped table-responsive">

						@foreach($ads as $ad)
						<tr>
							<td width="150">
						<p>ID: {{ $ad->id }}</p>
						<a href="{{ route('edit_ad', $ad->id) }}">
							<img
									src="{{ media_url($ad->feature_img) }}"
									class="thumb-listing-table" alt=""></a>
							@if($ad->type == 'apartment')<br/ ><br /><p>Rent: ${{ $ad->price }}</p>@endif
                                                        @if($ad->type != 'apartment' and $ad->type != 'pmc')<br /><br /><p>@if($ad->sale_type) ${{ $ad->price }} @else ${{ $ad->monthly_rent }} @endif </p>@endif
							</td>
							<td>
								<h5>
									<a href="{{ route('edit_ad', $ad->id) }}">{{ $ad->title }}</a>
									({!! $ad->status_context() !!})
								</h5>
								<p class="text-muted">
									<i class="fa fa-map-marker"></i> {!! $ad->full_address() !!} <br />
									<i class="fa fa-clock-o"></i> {{ $ad->posting_datetime() }}
								</p>
							</td>

							<td width="250"><a href="{{ route('reports_by_ads', $ad->slug) }}"> <i
									class="fa fa-exclamation-triangle"></i> @lang('app.reports') :
									{{ $ad->reports->count() }}
							</a>
							<br />
							<a href="{{ route('reports_by_ads', $ad->slug) }}"> <i
									class="fa fa-eye"></i> Views :
									{{ $ad->view }}
							</a>

								<hr /> <a href="{{ route('edit_ad', $ad->id) }}"
								class="btn btn-primary" title="Edit Listing"><i class="fa fa-edit" title="Edit Listing"></i> </a>

								@if($ad->status ==1) <a href="javascript:;"
								class="btn btn-warning blockAds" data-slug="{{ $ad->slug }}"
								data-value="2" title="Hide Listing"><i class="fa fa-ban" title="Hide Listing"></i> </a> @else <br /><a
								href="javascript:;" class="btn btn-success approveAds"
								data-slug="{{ $ad->slug }}" data-value="1"><i
									class="fa fa-check-circle-o"></i> </a> @endif <a
								href="javascript:;" class="btn btn-danger deleteAds"
								data-slug="{{ $ad->slug }}" title="Delete Listing"><i class="fa fa-trash" title="Delete Listing"></i> </a></td>
						</tr>
						@endforeach

					</table>

					@else
					<h2>@lang('app.there_is_no_ads')</h2>
					@endif {!! $ads->links() !!}

				</div>
			</div>
			<br />
			@if( ! empty($title))
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Expired Listings</h1>
				</div>
			</div>
			@endif

			<div class="row">
				<div class="col-xs-12">

					@if($ads->total() > 0)
                                        Total Listings: {{ $ads->total() }}<br /><br />
					<table class="table table-bordered table-striped table-responsive">

						@foreach($expired_ads as $ad)
						<tr>
							<td width="150">
						<p>ID: {{ $ad->id }}</p>
						<a href="{{ route('edit_ad', $ad->id) }}">
						<img
									src="{{ media_url($ad->feature_img) }}"
									class="thumb-listing-table" alt=""></a>
							@if($ad->type == 'apartment')<br/ ><br /><p>Rent: ${{ $ad->price }}</p>@endif
                                                        @if($ad->type != 'apartment' and $ad->type != 'pmc')<br /><br /><p>@if($ad->sale_type) ${{ $ad->price }} @else ${{ $ad->monthly_rent }} @endif </p>@endif
							</td>
							<td>
								<h5>
									<a href="{{ route('edit_ad', $ad->id) }}">{{ $ad->title }}</a>
									({!! $ad->status_context() !!})
								</h5>
								<p class="text-muted">
									<i class="fa fa-map-marker"></i> {!! $ad->full_address() !!} <br />
									<i class="fa fa-clock-o"></i> {{ $ad->posting_datetime() }}
								</p>
							</td>

							<td width="250"><a href="{{ route('reports_by_ads', $ad->slug) }}"> <i
									class="fa fa-exclamation-triangle"></i> @lang('app.reports') :
									{{ $ad->reports->count() }}
							</a>
							<br />
							<a href="{{ route('reports_by_ads', $ad->slug) }}"> <i
									class="fa fa-eye"></i> Views :
									{{ $ad->view }}
							</a>

								<hr /> <a href="{{ route('edit_ad', $ad->id) }}"
								class="btn btn-primary" title="Edit Listing"><i class="fa fa-edit" title="Edit Listing"></i> </a>

								@if($ad->status ==1) <a href="javascript:;"
								class="btn btn-warning blockAds" data-slug="{{ $ad->slug }}"
								data-value="2" title="Hide Listing"><i class="fa fa-ban" title="Hide Listing"></i> </a> @else <br /><a
								href="javascript:;" class="btn btn-success approveAds"
								data-slug="{{ $ad->slug }}" data-value="1"><i
									class="fa fa-check-circle-o"></i> </a> @endif <a
								href="javascript:;" class="btn btn-danger deleteAds"
								data-slug="{{ $ad->slug }}" title="Delete Listing"><i class="fa fa-trash" title="Delete Listing"></i> </a></td>
						</tr>
						@endforeach

					</table>

					@else
					<h2>@lang('app.there_is_no_ads')</h2>
					@endif {!! $ads->links() !!}

				</div>
			</div>
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
@endsection @section('page-js')

<script>
        $(document).ready(function() {
            $('.deleteAds').on('click', function () {
                if (!confirm('{{ trans('app.are_you_sure') }}')) {
                    return '';
                }
                var selector = $(this);
                var slug = selector.data('slug');
                $.ajax({
                    url: '{{ route('delete_ads') }}',
                    type: "POST",
                    data: {slug: slug, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });

            $('.approveAds, .blockAds').on('click', function () {
                var selector = $(this);
                var slug = selector.data('slug');
                var value = selector.data('value');
                $.ajax({
                    url: '{{ route('ads_status_change') }}',
                    type: "POST",
                    data: {slug: slug, value: value, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });
        });

    </script>

<script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '{{ trans('app.success') }}', toastr_options);
        @endif
        @if(session('error'))
            toastr.error('{{ session('error') }}', '{{ trans('app.success') }}', toastr_options);
        @endif
    </script>

@endsection
