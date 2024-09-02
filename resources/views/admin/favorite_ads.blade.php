@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
        <div id="wrapper">
            @include('admin.sidebar_menu')
            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> Favorite Properties  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')

				<p>Total Saved Properties: {{ $ads->total() }}</p>

				<p>
            		<input type="button" onclick='selectAll()' value="Select All"/>
            		<input type="button" onclick='UnSelectAll()' value="Unselect All"/>
            		<input type="button" onclick='shareSelected()' value="Share Selected"/>
            	</p>

                <div class="row">
                    <div class="col-xs-12">
                        @if($ads->total() > 0)
                            <table class="table table-bordered table-striped table-responsive">

                                @foreach($ads as $ad)
                                    <tr>
                                        <td width="100">
                                        	<label> <input type="checkbox" value="1" name="share_prop" id="share_prop">
                       						</label>
                                            <a href="{{ route('single_ad', $ad->slug) }}" target="_blank"><img src="{{ media_url($ad->feature_img) }}" class="thumb-listing-table" alt=""></a>
					                    </td>
                                        <td>
                                            <p class="text-muted">
                                                {{ $ad->title }}
                                            </p>
                                            <p class="text-muted">
                                                {{ $ad->street_num }} {{ $ad->street_name }} {{ $ad->street_type }} {{ $ad->new_city }}, {{ $ad->new_state }}
                                            </p>
                                        </td>
                                        <td align="right">
                                            <p class="text-muted">
						                        @if($ad->price)PRICE: ${{ number_format($ad->price)  }}@endif
						                    </p>
						                    <p class="text-muted">
                                                <a href="javascript:;" class="btn btn-primary" id="save_as_favorite" data-slug="{{ $ad->slug }}">REMOVE FAVORITE</a>
                                            </p>
                                            <p class="text-muted">
                                                <a href="#" data-toggle="modal" data-target="#shareByEmail">SHARE FAVORITE</a>
                                            </p>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                        {!! $ads->links() !!}
                    </div>
                </div>
            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->            
@endsection

@section('page-js')
    <script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '{{ trans('app.success') }}', toastr_options);
        @endif
        @if(session('error'))
            toastr.error('{{ session('error') }}', '{{ trans('app.success') }}', toastr_options);
        @endif
    </script>
    
<script type="text/javascript">
			function selectAll(){
				var items=document.getElementsByName('share_prop');
				for(var i=0; i<items.length; i++){
					if(items[i].type=='checkbox')
						items[i].checked=true;
				}
			}
			
			function UnSelectAll(){
				var items=document.getElementsByName('share_prop');
				for(var i=0; i<items.length; i++){
					if(items[i].type=='checkbox')
						items[i].checked=false;
				}
			}	
			
			var ads = {!! json_encode($ads->toArray()) !!};
			
			function shareSelected(){
				var items=document.getElementsByName('share_prop');
				console.log(items);
			}			
		</script>

@endsection

@section('page-js')
<script>
$('#shareByEmail').submit(function(e){
        e.preventDefault();
        var share_email_form_data = $(this).serialize();

        $('#loadingOverlay').show();
        $.ajax({
            type : 'POST',
            url : '{{ route('share_by_email_post') }}',
            data : share_email_form_data,
            success : function (data) {
                if (data.status == 1){
                    toastr.success(data.msg, '@lang('app.success')', toastr_options);
                }else {
                    toastr.error(data.msg, '@lang('app.error')', toastr_options);
                }
                $('#shareByEmail').modal('hide');
                $('#loadingOverlay').hide();
            }
        });
    });
</script>
@endsection