@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('page-css')
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" />
@stop

@section('main')

        <div id="wrapper">

            @include('admin.sidebar_menu')

            <div id="page-wrapper">

                @if($lUser->is_pmc())
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> PMC Dashboard </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->

                @else
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> Properties </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif
                @endif

                <div class="row">
    				<div class="col-lg-12">
    					{{ $ads->total() }} Total Live Listings <a href="http://1-800.lenoxproperty.com/dashboard/u/posts/multi/intro-info" class="btn btn-primary pull-right">+ Add Property</a></h1>
    				</div>
    			</div><br />
                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-xs-12">
                        @if($ads->total() > 0)
                            <table class="table table-striped table-responsive">
                                @foreach($ads as $ad)
                                    <tr>
                                        <td width="100">
                                            <a href="{{ route('edit_ad', $ad->id) }}"><img src="{{ media_url($ad->feature_img) }}" class="thumb-listing-table" alt=""></a>
					                    </td>
                                        <td>
                                            <h3 class="text-muted">
                                                {{ $ad->title }}
                                            </h3>
                                            <p class="text-muted">
                                                {{ $ad->street_num }} {{ $ad->street_name }} {{ $ad->street_type }} {{ $ad->new_city }}, {{ $ad->new_state }}
                                            </p>
                                            <p class="text-muted">
                                                <?php
                                                    $datework = \Carbon\Carbon::parse($ad->end_date);
                                                    $now = \Carbon\Carbon::now();
                                                    $diff = $datework->diffInDays($now);
                                                ?>
                                            	<a href="{{ route('single_ad', $ad->slug) }}" target="_blank">View Listing</a> - <a href="{{ route('edit_ad', $ad->id) }}"
								class="btn btn-primary" title="Edit Listing">Marketing Online (Expires in {{ $diff }} days)</a>
                                            </p>
                                        </td>
                                        <td align="right">
                                            <p class="text-muted">
						                        @if($ad->price != 0)
						                        PRICE: ${{ number_format($ad->price) }}
						                        @elseif($ad->sqft_price)
						                        PRICE: ${{ number_format($ad->sqft_price) }}/SQFT
						                        @endif
						                    </p>
						                    <p class="text-muted">
                                                <a href="{{ route('edit_ad', $ad->id) }}"
								class="btn btn-primary" title="Edit Listing">Edit Listing </a>
                                <a href="{{ route('edit_ad', $ad->id) }}/#open-house"
								class="btn btn-success" title="Edit Listing">Add Open House </a>
                                                @if($ad->status ==1) <a href="javascript:;"
								class="btn btn-warning blockAds" data-slug="{{ $ad->slug }}"
								data-value="2" title="Hide Listing">Hide Listing </a> @else <br /><a
								href="javascript:;" class="btn btn-success approveAds"
								data-slug="{{ $ad->slug }}" data-value="1">Approve Listing </a> @endif <a
								href="javascript:;" class="btn btn-danger deleteAds"
								data-slug="{{ $ad->slug }}" title="Delete Listing">Delete Listing </a><br />
								</p>
								<p class="text-muted">
								Share:
								        <a href="http://www.facebook.com/sharer/sharer.php?u=https://1-800.lenoxproperty.com/real-estate/{{ $ad->slug }}" class="btn btn-default s_facebook" target="_blank"><i
                            class="fa fa-facebook fa-2x"></i> </a> <a href="http://twitter.com/home?status={{ $ad->title }}:%20https://1-800.lenoxproperty.com/real-estate/{{ $ad->slug }}" class="btn btn-default s_twitter" target="_blank"><i
                            class="fa fa-twitter fa-2x"></i> </a> <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://1-800.lenoxproperty.com/real-estate/{{ $ad->slug }}&title={{ $ad->title }}"
                            class="btn btn-default share s_linkedin" target="_blank"><i class="fa fa-linkedin fa-2x"></i>
                    </a>
                                </p>
                                <a href="{{ route('reports_by_ads', $ad->slug) }}"> <i
									class="fa fa-exclamation-triangle"></i> @lang('app.reports') :
									{{ $ad->reports->count() }}
							</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                        {!! $ads->links() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('page-js')
<script src="{{ asset('assets/plugins/SocialShare/SocialShare.js') }}"></script>

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
@endsection
