        <!-- Fonts -->
<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>reyhoon</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/Header-Dark.css">
	<link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/Footer-Dark.css">
	<link rel="stylesheet" href="/assets/css/Features-Boxed.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="/assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="/assets/css/headerstyles.css">
	<link rel="stylesheet" href="/assets/css/footerstyles.css">
	<link rel="stylesheet" href="/assets/css/bartar.css">
	<link rel="stylesheet" href="/assets/css/goodstyles.css">
	<link rel="stylesheet" href="/assets/css/Article-List.css">
    <link rel="stylesheet" href="/assets/css/Features-Blue.css">
    <link rel="stylesheet" href="/assets/css/Navigation-with-Search.css">
	<link rel="stylesheet" href="/assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="/assets/css/Newsletter-Subscription-Form.css">

	<link rel="stylesheet" href="/assets/css/food.css">
	<link rel="stylesheet" href="/assets/css/info.css">
	<link rel="stylesheet" href="/assets/css/help.css">
	<link rel="stylesheet" href="/assets/css/searchcss.css">
  	<link rel="stylesheet" href="/assets/css/onphone.css">

</head>

<body style="
    margin-left: 20px;
    margin-right: 20px;
">
<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"> </script>
	<div id="header1"> <header1></header1> </div>

  <div class="all"><div class="features-blue" >
      <div class="container serachbox">
          <div class="intro">
              <h2 class="text-center">سفارش آنلاین غذا <br>
از بهترین رستوران‌ها و فست‌فود‌‌ها</h2>
              <p class="text-center">برای دیدن لیست رستوران‌ها و فست‌فود‌هایی که به شما سرویس می‌دهند، منطقه خود را وارد کنید. </p>
          </div>
          <nav class="bordersto navbar navbar-light navbar-expand-md navigation-clean-search navsearch">

      <div class="container bordersto">

          <select >

          <optgroup label="(3) شهر تحت پوشش" >
          <option value="12" selected >تهران</option>
          <option value="13">شیراز</option>
          <option value="14">اصفهان</option></optgroup></select>

                      <form id="searchform" class="form-inline bordersto" target="_self" enctype="text/plain" action="/">
                          <div class="form-group">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="17" viewBox="0 0 13 17" data-reactid="72"><path fill="currentColor" fill-rule="evenodd" d="M6 0C2.683 0 0 2.66 0 5.95 0 10.412 6 17 6 17s6-6.588 6-11.05C12 2.66 9.317 0 6 0zm0 8a2 2 0 1 1 .001-4.001A2 2 0 0 1 6 8z" data-reactid="73"></path></svg>
            <input  class="form-control search-field bordersto" name="restaurantarea" type="search" id="search-field" placeholder="مثلا نیاوران">
            <label for="search-field"></label></div>
                      </form>
          <a class="btn btn-light action-button bordersto" role="button" onclick="gotonext()" href="#"><svg class="bordersto" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><g fill="none" fill-rule="evenodd"><path d="M0 0h18v18H0z"></path><g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(2 2)"><circle cx="6.125" cy="6.125" r="6.125"></circle><path d="M13.373 13.373l-2.767-2.767"></path></g><path d="M0 0h18v18H0z"></path></g></svg> </a>
          <script>
          function gotonext(){
            var el= document.getElementById("search-field").value;
            var addr="http://localhost:8000/api/restaurantarea=";
            addr += el;
            location.replace(addr);
          }
          </script>


      </div>
          </nav>
      </div></div>

<div class="article-list">
      <div class="container">

          <div class="row articles">
              <div class=" item"><a href="#"></a>
                  <img src="/assets/img/location.png">
        <h4> شهر و منطقه خود را وارد کنید </h4>
                  <p class="description">منوی مورد علاقه خود را از بین بیش از 4000 رستوران خوب در تهران و شهرستان‌ها جستجو کنید.</p></div>
              <div
                  class=" item"><a href="#"></a>
                  <img src="/assets/img/food.png">
        <h4> غذای خود را انتخاب کنید</h4>
                  <p class="description"> غذایی که می‌خواهید را انتخاب کنید و بدون هزینه اضافی سفارش خود را ثبت کنید.</p></div>
          <div
              class=" item"><a href="#"></a>
              <img src="/assets/img/love.png">
      <h4>غذایتان را نوش‌جان کنید </h4>
              <p class="description">درب منزل یا حضوری از خود رستوران سفارشتان را تحویل بگیرید. </p></div>
  </div>
  </div>
  </div>

</div>


	<div id="bartar"> <bartar></bartar> </div>
	<div id="good"> <good></good> </div>
	<div id="food"> <food></food> </div>
	<div id="onphone"> <onphone></onphone> </div>
	<div id="info"> <info></info> </div>
	<div id="help"> <help></help> </div>
	<div id="footer1"> <footer1></footer1> </div>
	<div id="footer2"> <footer2></footer2> </div>


	<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"> </script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="/header1.js" ></script>
	<script src="/footer1.js" ></script>
	<script src="/footer2.js" ></script>
	<script src="/bartar.js" ></script>
	<script src="/good.js" ></script>
	<script src="/food.js" ></script>
	<script src="/onphone.js" ></script>
	<script src="/info.js" ></script>
	<script src="/help.js" ></script>
	<script src="/search.js" ></script>
<script>
$(document).ready(function(){
  $('#searchform').submit(function() {
    // Create our form object. You could optionally serialize our whole form here if there are additional parameters in the form you want
    var params = {
      "area":"/api/restaurantarea="
    };

    // Loop through the checked items named cat3 and add to our param string
    $(#searchform).children('input[name=restaurantarea]:submit').each(function(i,obj){
    //  if( i > 0 ) params.area += '&';
      params.area += $(obj).val();
    });

    // "submit" our form by going to the properly formed GET url
    var url = $(#searchform).attr('action') + $.param( area );

    // Sample alert you can remove
    alert( "This form will now GET the URL: " + url );

    // Perform the submission
    window.location.href = url;
  });
});

</script>


</body>

</html>
