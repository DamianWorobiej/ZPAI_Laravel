<!DOCTYPE html>
@extends('layouts.layout')
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 10%;
    
	height: 100%;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 100px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>
</head>
<body>
@section('content')

<?php
$products = DB::table('produkty')->get();
$imgID = 1;
?>

@foreach($products as $product)
<div class="item">
<h3>{{$product->nazwa}}</h3>
<p>{{$product->opis}}</p>
<img id="myImg<?php echo $imgID ?>" onclick="imageShow(<?php echo $imgID ?>)"  alt="{{ $product->opis }}" srcset="{{ $product->img_thumb }}" src="{{ $product->img }}">

<!-- The Modal -->
<div id="myModal" onclick="closeModal()" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img00" src="{{ $product->img }}">
  <div id="caption">caption</div>
</div>
</div>
<?php $imgID = $imgID + 1; ?>
@endforeach


<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img00");
var captionText = document.getElementById("caption");
// img.onclick = function(){
    // modal.style.display = "block";
    // modalImg.src = this.src;
    // captionText.innerHTML = this.alt;
// }

function imageShow(image){
	modal.style.display = "block";
	var name = 'myImg' + image;
	var dispImg = document.getElementById(name);
    modalImg.src = dispImg.src;
    captionText.innerHTML = dispImg.alt;
}


function closeModal(){
	modal.style.display = "none";
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
        modal.style.display = "none";
    }
};
</script>
@endsection
</body>
</html>