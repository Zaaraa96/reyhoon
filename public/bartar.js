

Vue.component('bartar', {

	template: `
	<div class="features-boxed bartarbox">
        <div class="container">
            <div class="intro">
				<br>
                <h5 class="text-center fontblack"><b>رستوران‌‌ها و فست فود‌های برتر ماه بر اساس امتیاز‌دهی کاربران<b> </h5>
                </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item ">
                    <div class="box box1"><img class="ricon" src="/assets/img/pizza-hot_15_1536498282.jpeg@!branch_logo_web_default">
                        <h3 class="name">فست فود پیتزا هات (سعادت آباد)</h3>
						<div class="points">
							<span class="linee">  </span>
							<span class="pointcolor"> 3.5 </span>
							<img src="/assets/img/stars.png">
							<span class="num"> (54) </span>
							<span class="linee">  </span>
						</div>
                        <ul class=" menu">
						<li>پیتزا</li>
						<li>فست فود</li>
						<li>ساندویچ</li>
						<li>برگر</li>

						</ul>

						<p class=" address">
						سعادت آباد، پاساژ میلاد نور، طبقه
						<span class="address2"> همکف </span>
						</p>
						<a class="learn-more" href="#">شروع سفارش</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box box1"><img class="ricon" src="/assets/img/shila_8_1540375602.jpeg@!branch_logo_web_default">
                        <h3 class="name">شیلا (مطهری)</h3>
						<div class="points">
						<span class="linee">  </span>
							<span class="pointcolor"> 3.8 </span>
							<img src="/assets/img/stars.png">
							<span class="num"> (54) </span>
							<span class="linee">  </span>

						</div>
                        <ul class=" menu">

						<li>فست فود</li>
						<li>هات داگ</li>
						<li>پیتزا</li>
						<li>برگر</li>
						</ul>
						<p class=" address">
						ولیعصر، مطهری، فتحی شقاقی، زیر برج
						<span class="address2"> بلورین </span>
						</p>
						<a class="learn-more" href="#">شروع سفارش</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item ">
                    <div class="box box1"><img class="ricon"  src="/assets/img/baguette_5494_1536561462.jpeg@!branch_logo_web_default">
                        <h3 class="name">باگت (اندرزگو)</h3>
						<div class="points">
						<span class="linee">  </span>
							<span class="pointcolor"> 3.8 </span>
							<img src="/assets/img/stars.png">
							<span class="num"> (95) </span>
							<span class="linee">  </span>
						</div>
                        <ul class=" menu">

						<li>فست فود</li>
						<li>پیتزا</li>
						<li>برگر</li>
						<li>ساندویچ</li>

						</ul>
						<p class="address">
						بلوار اندرزگو، بین کاوه و قیطریه، نبش مهر محمدی
						<span class="address2"> جنوبی </span>
						</p>
						<a class="learn-more" href="#">شروع سفارش</a></div>
                </div>

            </div>
        </div>
    </div>



	`

})

new Vue({
	el:'#bartar'
})
