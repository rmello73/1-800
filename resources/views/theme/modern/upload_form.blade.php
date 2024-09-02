@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
    <div class="container">
        <div class="row">
    <form action="upload" id="upload" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple><br />
    <input type="submit">
</form>
<div id="message"></div>

</div>
</div>
@endsection

@section('page-js')
<script>
var form = document.getElementById('upload');
var request = new XMLHttpRequest();

form.addEventListener('submit', function(e){
    e.preventDefault();
    var formdata = new FormData(form);

    request.open('post', './upload');
    request.addEventListener("load", transferComplete);
    request.send(formdata);

});

function transferComplete(data){
    response = JSON.parse(data.currentTarget.response);
    if(response.success){
        document.getElementById('message').innerHTML = "Successfully Uploaded Files!";
    }
}
</script>