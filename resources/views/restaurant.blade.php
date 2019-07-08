<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>restaurant</title>

    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/Navigation-with-Search.css">
	<link rel="stylesheet" href="/assets/css/Features-Boxed.css">
	<link rel="stylesheet" href="/assets/css/Header-Dark.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="/assets/css/footerstyles.css">
	<link rel="stylesheet" href="/assets/css/thisnum.css">
    <link rel="stylesheet" href="/assets/css/bartar.css">

      <link rel="stylesheet" href="/assets/css/headerstyles.css">

</head>

<body style="
margin-right: 20px;
margin-left: 20px;">

	<div id="header1"> <header1></header1> </div>
  <div class="container restaurant"><img id="restimg" src="/assets/img/restaurant-search-banner-2x.jpg">
        <h3>

		 <span>	{{$counter}} </span>
		 رستوران
			 امکان سرویس دهی به منطقه ی
			 {{$a}}
			 را دارند
					</h3>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
            <div class="container">

			<div class="col-sm-8 col-md-5">	<form id="searchthisarea" class="form-inline mr-auto " target="_self">
						<p > جست‌و‌‌جوی رستوران‌ در این محدوده</p>
            <div class="form-group"><label for="search-field"><button style="border: 0px"; onclick="myFunction();return false;"  >
              <i class="fa fa-search"></i></button></label><input  style="width:90%;" class="form-control search-field"  type="search" id="search-field" name="search" placeholder="جست‌و‌‌جوی رستوران‌ در این محدوده"></div>
          </form> </div>

                <div class="col-sm-8 col-md-4" id="checkboxr">
				<p> فیلتر </p>
                <div class="ab form-check"><label class="form-check-label" for="formCheck-2">تخفیف دار</label><input class="form-check-input" type="checkbox" id="formCheck-2"></div>
                <div class="ab form-check"><label class="form-check-label" for="formCheck-1">جدید</label><input class="form-check-input" type="checkbox" id="formCheck-1"></div>
				</div>

				<div class="col-sm-8 col-md-3" class="btn-group">
				<p> مرتب سازی بر اساس</p>
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    رستوران های برگزیده
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>




    </div>
    </nav>
    </div>


  <div class="container mainrc">
            <div class="row">

				<div class="col-lg-3 col-sm-8 col-md-6"style="text-align:right;">
                    <p>فیلتر بر اساس انواع غذا</p>

                    <form id="foodsetfilter" class="form-inline mr-auto " target="_self">
                        <div class="form-group"><label for="search-field"><button onclick="myFunction2();return false;"  ><i class="fa fa-search"></i></button></label><input  type="search" id="search-field2" name="search"
                            placeholder="جستجوی دسته بندی غذاها"></div>
                        </form>

                    <div value="parentoffilter" id="parentoffilter">
                    <?php foreach ($categories as $key): ?>
                    <div id="{{$key->name}}" class="form-check categorysearch">
                      <label class="form-check-label" form="formCheck-1">
                      {{$key->name}}
                    </label>
                    <input  class="form-check-input checkbox" name="check" type="checkbox"  id="{{$key->title}}"  value="{{$key->title}}" >
                  </div>
                    <?php endforeach; ?>



                </div></div>

                <div id="hint" class="col-lg-9 col-md-9 col-sm-12">
				<div class="row">



<?php foreach ($restaurant as $key): ?>

  <?php

date_default_timezone_set("Iran");
$time= time();
  if(( $time > strtotime($key->openingtime)) && ($time < strtotime($key->closingtime)) )      { ?>

  <div id="{{$key->name}}" class="col restaurantsearch">
						<div class="box box1 colheight">

						<div id="iconimg"><img class="ricon" src="/assets/img/{{$key->logo}}"></div>

						<div class="points">
							<h5 class="name"> {{$key->name}} </h5>
							<span class="pointcolor"> {{$key->star}}</span>

              <div id="{{ $key->title }}{{$key->star}}"  style="display:inline-block;">
                <span class="fa fa-star"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              </div>
              <script>


              console.log("hell");

               var num={{$key->star}};
               var name="{{ $key->title }}{{$key->star}}";

                var i;
                var el= document.getElementById(name);
                var firstc= el.firstChild;
                console.log(firstc.tagName);
                for(i=0; i<= 2*num; i++)
                {
                   firstc.className += " checkedstar";
                   console.log(firstc.className);
                   firstc= firstc.nextSibling;
                }

              </script>



              <p class=" menu">
                  {{$key->foods}}
              </p>
							<p class=" address">
                <?php foreach ($address as $add): ?>
                    <?php if ($add->id==$key->addressid)  {?>
                      {{$add->addressLine}}
                <?php    }
                  ?>
                <?php endforeach; ?>
              </p>
						</div>

						<div id="order"><a class="learn-more" href="http://localhost:8000/api/restaurant/{{$key->title}}">شروع سفارش</a></div></div></div>
          <?php } ?>
<?php endforeach; ?>








						</div>




					<div class="row">
					<h3>رستوران های بسته</h3>
                    </div>

					<div class="row">


            <?php foreach ($restaurant as $key): ?>

              <?php
            $time= time();

              if(( $time > strtotime($key->openingtime)) && ($time < strtotime($key->closingtime)) )      {} else{ ?>

						<div class="col">

						<div class="box box1 baste colheight">

						<div id="iconimg"><img class="ricon" src="/assets/img/{{$key->logo}}"></div>

						<div class="points">
							<h5 class="name">{{$key->name}}</h5>
							<span class="pointcolor"> 3</span>


              <div id="{{ $key->title }}{{$key->star}}"  style="display:inline-block;">
                <span class="fa fa-star"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              </div>
              <script>


              console.log("hell");

               var num={{$key->star}};
               var name="{{ $key->title }}{{$key->star}}";

                var i;
                var el= document.getElementById(name);
                var firstc= el.firstChild;
                console.log(firstc.tagName);
                for(i=0; i<= 2*num; i++)
                {
                   firstc.className += " checkedstar";
                   console.log(firstc.className);
                   firstc= firstc.nextSibling;
                }

              </script>


            	<p class=" menu">
                    {{$key->foods}}
              </p>
							<p class=" address">
                <?php foreach ($address as $add): ?>
                    <?php if ($add->id==$key->addressid)  {?>
                      {{$add->addressLine}}
                <?php    }
                  ?>
                <?php endforeach; ?>
              </p>
						</div>

						<div id="order"><a class="learn-more" href="http://localhost:8000/api/restaurant/{{$key->title}}">
              شروع سفارش از ساعت
              {{$key->openingtime}}
            </a></div></div>
						</div>

          <?php } ?>
<?php endforeach; ?>

				</div>
                </div>
				</div>



            </div>
			</div>





	<div id="footer1"> <footer1></footer1> </div>
	<div id="footer2"> <footer2></footer2> </div>


	<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"> </script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="/header1.js" ></script>
	<script src="/footer1.js" ></script>
	<script src="/footer2.js" ></script>
	<script src="/thisnum.js" ></script>
	<script src="/mainrestaurant.js" ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>

  $('.checkbox').on('change', function(){

      if(this.checked) {
        this.parentNode.parentNode.insertBefore(this.parentNode,this.parentNode.parentNode.firstChild);
    }
    else {
      this.parentNode.parentNode.insertBefore(this.parentNode,this.parentNode.parentNode.lastChild.nextSibling);
    }
  })
$(document).ready(function(){
  var checking= document.getElementsByName("check");

    $('.checkbox').change(function(){
      var categories=[];
      var i;
      for (i = 0; i < {{$cc}}  ; i++) {
        if(checking[i].checked){
          var id= checking[i].id;
          categories +="&" ;
          categories +=id;
        }

      }
      var xhttp=new XMLHttpRequest();
      var addr= "http://localhost:8000//api/restaurantarea="+ "{{$a}}"+"/category="+categories ;
      xhttp.open("GET", addr, false);
      xhttp.send();
      var c = xhttp.responseText;
      console.log(c);
      $("#hint").load("http://localhost:8000//api/restaurantarea="+ "{{$a}}"+"/category="+categories );
    });
  });

  $(document).on("keydown", "form", function(event) {
      return event.key != "Enter";
  });

  function myFunction() {
      var val1=document.getElementById("search-field");
      var val= val1.value;
      console.log("Hello world!");
      var searching=document.getElementsByClassName("restaurantsearch");
      var i;
      if(val==null){
        for (i = 0; i < searching.length(); i++){
          searching[i].style.display="inline-block";
        }
      }
      else{
      for (i = 0; i < searching.length; i++) {
        if(searching[i].id == val){
          var id= searching[i].id;
          searching[i].style.display="inlineblock"; }
          else {
            searching[i].style.display="none";
          }
        }
      }

}

function myFunction2() {
    var val1=document.getElementById("search-field2");
    var val= val1.value;
    console.log("Hello world!");
    var searching=document.getElementsByClassName("categorysearch");
    var i;
    if(val==null){
      for (i = 0; i < searching.length(); i++){
        searching[i].style.display="block";
      }
    }
    else{
    for (i = 0; i < searching.length; i++) {
      if(searching[i].id == val){
        var id= searching[i].id;
        searching[i].style.display="block"; }
        else {
          searching[i].style.display="none";
        }
      }
    }


}

  </script>



</body>

</html>
