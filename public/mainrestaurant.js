

Vue.component('mainrestaurant', {

	template: `
	<div class="container mainrc">
            <div class="row">

				<div class="col-md-3">
                    <p>فیلتر بر اساس انواع غذا</p><input type="search" placeholder="جستجوی دسته بندی غذاها">
                    <div class="form-check"><label class="form-check-label" for="formCheck-1">ساندویچ</label><input class="form-check-input" type="checkbox" id="formCheck-1"></div>
                    <div class="form-check"><label class="form-check-label" for="formCheck-1">برگر</label><input class="form-check-input" type="checkbox" id="formCheck-1"></div>
                </div>
                <div class="col-md-9">
				<div class="row">
                        <div class="col">

						<div class="box box1">

						<div id="iconimg"><img class="ricon" src="/assets/img/pizza-hot_15_1536498282.jpeg@!branch_logo_web_default"></div>

						<div class="points">
							<h5 class="name">فست فود پیتزا هات (سعادت آباد)</h5>
							<span class="pointcolor"> امتیاز </span>
							<img src="/assets/img/stars.png">
							<p class=" menu">منو</p>
							<p class=" address">سعادت آباد، پاساژ میلاد نور، طبقه همکف</p>
						</div>

						<div id="order"><a class="learn-more" href="#">شروع سفارش</a></div></div>

						</div>





						</div>




					<div class="row">
					<h3>رستوران های بسته</h3>
                    </div>

					<div class="row">

						<div class="col">

						<div class="box box1 baste">

						<div id="iconimg"><img class="ricon" src="/assets/img/pizza-hot_15_1536498282.jpeg@!branch_logo_web_default"></div>

						<div class="points">
							<h5 class="name">فست فود پیتزا هات (سعادت آباد)</h5>
							<span class="pointcolor"> امتیاز </span>
							<img src="/assets/img/stars.png">
							<p class=" menu">منو</p>
							<p class=" address">سعادت آباد، پاساژ میلاد نور، طبقه همکف</p>
						</div>

						<div id="order"><a class="learn-more" href="#">شروع سفارش از ساعت {{}}</a></div></div>
						</div>

				</div>
                </div>
				</div>



            </div>
			</div>

	`

})

new Vue({
	el:'#mainrestaurant'
})
