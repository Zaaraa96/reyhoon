<div id="hint" class="col-md-9">
<div class="row">



<?php foreach ($restaurant as $key): ?>

<?php

date_default_timezone_set("Iran");
$time= time();
if(( $time > strtotime($key->openingtime)) && ($time < strtotime($key->closingtime)) )      { ?>

<div class="col">
<div class="box box1  colheight">

<div id="iconimg"><img class="ricon" src="/assets/img/{{$key->logo}}"></div>

<div class="points">
<h5 class="name"> {{$key->name}} </h5>
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
