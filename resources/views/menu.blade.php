<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>menu</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="/assets/css/Map-Clean.css">
    <link rel="stylesheet" href="/assets/css/menu.css">
	<link rel="stylesheet" href="/assets/css/Header-Dark.css">
	<link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/Footer-Dark.css">
	<link rel="stylesheet" href="/assets/css/headerstyles.css">
	<link rel="stylesheet" href="/assets/css/footerstyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body >

	<div id="header1"> <header1></header1> </div>

    <div><img id="menubg" src="/assets/img/fast-food_1537379346.jpeg" ></div>
    <div class="highlight-clean">
        <div id="ctd" class="container text-center d-inline-block">
          <?php foreach ($restaurant as $key): ?>
            <img id="foodpng" src="/assets/img/{{$key->logo}}">
            <?php endforeach; ?>
                <div class="intro">
                    <h4 id="h4td" class="text-right d-block">
                        <?php foreach ($restaurant as $key): ?>
                       {{ $key->name }}

                     </h4><span>{{$key->star}}</span>


                     <div id="{{ $key->title }}"  style="display:inline-block;">
                       <span class="fa fa-star"></span>
                     <span class="fa fa-star "></span>
                     <span class="fa fa-star "></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                   </div>
                     <script>


                     console.log("hell");

                      var num={{$key->star}};
                      var name="{{$key->title}}";

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
<?php endforeach; ?>



                     <span>(256)</span>
                    <p class="text-center"><strong>
                      <?php foreach ($categories as $key): ?>
                     {{ $key->name }}
                     <?php endforeach; ?>
                    </strong><br></p>
                    <p id="tcp" class="text-center">
                      <?php foreach ($address as $key): ?>
                     {{ $key->cityf }} ،
                     {{ $key->addressLine }}
                     <?php endforeach; ?>
                      <br></p>
                </div>
				<div id="stick" style="width=100%">
                <div class="col-md-3 d-inline-block sd" id="menuu"><a href="#menuu">منوی رستوران</a></div>
                <div class="col-md-3 d-inline-block sd " id="inform"><a href="#inform">اطلاعات رستوران</a></div>
                <div class="col-md-3 d-inline-block sd" id="comment"><a href="#comment">نظرات کاربران</a></div>
				</div>
        </div>
    </div>
    <div><div class="container">
        <div id="section1" class="row">
			  <div class="col-md-3 submenu">
        <?php foreach ($categories as $key): ?>
        <div><a href="#{{ $key->title }}"> {{ $key->name }} </a></div>
        <?php endforeach; ?>
        </div>

        <div class="sm-col-12 col-md-6" >
          <a name="menuu" style="display:none"></a>
            <?php foreach ($categories as $key): ?>
         <div>
					<div class="subs">
					<a name="{{$key->title}}" style="display:block"> {{$key->name}} </a>
					</div>
					<div class="row">

                <?php foreach ($foods as $food): ?>
                  <?php
                  if( ($food->foodset) == ($key->name) )  {?>
                <div class="sm-col-8 col-md-3 subss">
					             <div class="nameandprice" >
					                    <h6 class="foodname" > {{$food->name}} </h6>
					                    <h6 class="foodprice" > {{$food->price}} </h6>
					              </div> <div>
					                     <img class="foodimg" src="/assets/img/{{$food->name}}.jpg">
					                          <div>
					                                 <p style="height: 90px;" class="fooddes">
                                             {{$food->description}}
                                           </p>

                                           <button style="display:inline-block;" > + افزودن به سبد خرید </button>
						                        </div>
						                        <img class="floats" src="/assets/img/like.png"> <span class="floats"> 2 </span>
					      </div></div>
              <?php } endforeach; ?>
        </div> </div>

            <?php endforeach; ?>
        </div>

            <div class="col-md-3">
            </div></div></div></div>

    <a name="inform"><h4 class="text-right d-inline-block h4trdi information">اطلاعات رستوران</h4></a>
    <div>
        <div id="section2" class="container">
            <div class="row">
                <div class="col-md-3"></div>
				<div
                    class="col-sm-8 col-md-3">
                    <p class="text-center">
                      <?php foreach ($address as $key): ?>
                     {{ $key->cityf }} ،
                     {{ $key->addressLine }}
                     <?php endforeach; ?>
                      <br>
                    </p>
                    <p class="text-center">
                      ساعات سفارش گیری از
                      <?php foreach ($restaurant as $key): ?>
                     {{ $key->openingtime }}
                     <?php endforeach; ?>
                      تا
                      <?php foreach ($restaurant as $key): ?>
                     {{ $key->closingtime }}
                     <?php endforeach; ?>
                    </p>
            </div>
                <div class="col-md-3"><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDaEw6o8OhJvRQnTF3gI_tibMejtfasOlY&amp;q=Paris%2C+France&amp;zoom=15" width="100%" height="450" style="width: 100%%;height: 100%;"></iframe></div>

            <div class="col-md-3"></div>
        </div>
    </div>
    <a name="comment"><h4 class="text-right d-inline-block h4trdi comments">نظرات کاربران</h4></a>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center" >
                    <p>
					<strong class="text-right;">شما هم می‌توانید بعد از سفارش از این رستوران، نظر خود را درباره‌ی این رستوران ثبت کنید.</strong>
					</p>
          <?php foreach ($restaurant as $key): ?>
          <strong> {{$key->star}} </strong>


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




          <?php endforeach; ?>
					<span> (234)</span>
<hr>
					<br>
                </div>
                <div class="col"></div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-right">
          <?php foreach ($comments as $c): ?>

				<div class="singlecm">

                    <h6 style="display:inline-block;">{{$c->author}}</h6>

                    <div id="{{ $c->author }}{{$c->id}}"  style="display:inline-block;float:left;">
                      <span class="fa fa-star"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    </div>
                    <script>


                    console.log("hell");

                     var num={{$c->quality}};
                     var name="{{ $c->author }}{{$c->id}}";

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

                    </script><span style="float:left;">{{$c->quality}}</span>

                    <p> <span style="color:rgb(212, 0, 98);font-size: 3rem;"> '' </span>
                      {{$c->text}}</p>
        </div>
         <?php endforeach; ?>
         </div>
                <div class="col-md-3"></div>
            </div></div></div>


	<div id="footer1"> <footer1></footer1> </div>
	<div id="footer2"> <footer2></footer2> </div>



    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/js/menu.js"></script>
<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"> </script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="/header1.js" ></script>
	<script src="/footer1.js" ></script>
	<script src="/footer2.js" ></script>

</body>

</html>
