

Vue.component('food', {
	
	template: `
	
 <div class="photo-gallery bgcoloorblue">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">غذا چی میل دارید؟</h2>
                <p class="text-center">صبحانه، ناهار، شام یا هر چیزی که میل دارید را انتخاب کنید </p>
            </div>
            <div class="row photos">
			<div class="col-sm-6 col-md-4 col-lg-3">
                <a id="sandwich"class="foods"  href="#"><div class="item">
                    
                        <div > 
						<p class="thefood trans">
						ساندویچ
						</p>
						<p class="therestaurant trans">
						2746 رستوران فعال
						</p>
						</div>
                    
                </div></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3"><a id="burger"class="foods"  href="#"><div class=" item">
                    
                        <div > 
						<p class="thefood trans">
						برگر
						</p>
						<p class="therestaurant trans">
						2452 رستوران فعال
						</p>
						</div>
                    
                </div></a></div>
				<div class="col-sm-6 col-md-4 col-lg-3"><a id="pizza"class="foods"  href="#"><div  class=" item">
                    
                        <div > 
						<p class="thefood trans">
						پیتزا
						</p>
						<p class="therestaurant trans">
						2408 رستوران فعال
						</p>
						</div>
                    
                </div></a></div>
				<div class="col-sm-6 col-md-4 col-lg-3"><a id="kebab" class="foods"  href="#"><div class=" item">
                    
                        <div > 
						<p class="thefood trans"> کباب
						</p>
						<p class="therestaurant trans">1836 رستوران فعال
						</p>
						</div>
                    
                </div></a></div></div>
            </div>
			<br>
        <div class="container bgcoloorblue">
        <h3 class="text-center">انتخاب غذا‌های بیشتر</h3>
		
		<div class="row">
		
		<button class="btn btn-primary col-lg-1" type="button">خورشت</button>
		<button class="btn btn-primary col-lg-2" type="button">غذای پلویی</button>
		<button class="btn btn-primary col-lg-1" type="button">خوراک</button>
		<button class="btn btn-primary col-lg-1" type="button">سالاد</button>
		<button class="btn btn-primary col-lg-2" type="button">غذای ایرانی</button>
		<button class="btn btn-primary col-lg-1" type="button">فست فود</button>
		<button class="btn btn-primary col-lg-1" type="button">سوخاری</button>
		<button class="btn btn-primary col-lg-1" type="button">پاستا</button>
		
		</div>
		
		<div class="row" id="moremargin"> 
		<button class="btn btn-primary col-lg-1" type="button">چلو کباب</button>
		<button class="btn btn-primary col-lg-1" type="button">ماهی</button>
		<button class="btn btn-primary col-lg-1" type="button">استیک</button>
		<button class="btn btn-primary col-lg-1" type="button">بشقاب</button>
		<button class="btn btn-primary col-lg-1" type="button">صبحانه</button>
		<button class="btn btn-primary col-lg-1" type="button">سوپ</button>
		<button class="btn btn-primary col-lg-2" type="button">غذای دریایی</button>
		<button class="btn btn-primary col-lg-2" type="button">آبمیوه طبیعی</button>
		</div>
		
					
	</div></div>

	
	`
	
})

new Vue({
	el:'#food'
})