


Vue.component('footer1', {
	
	template: `
	<div class="footer-dark firstfooter" style="background-color:#202020;">
        <footer>
            <div class="container" style="width: 1800px;margin-right:-5px;">
                <div class="row d-inline-block" style="width: 1400px;">
				
					<div class="col-md-4 col-md-8 d-inline-block item text text2 " >
                        <p class="footerp">مراقبت و محافظت از حساب کاربری و رمزعبور هر کاربر بر عهده کاربر است. ریحون سریعترین راه سفارش آنلاین غذا است. منوی عکس‌دار رستوران‌های اطرافتان را بر اساس مکان خود به راحتی مشاهده کنید و سفارش دهید.</p>
                        <br>
						<a href="#">لیست رستوران‌ها</a>
						<br><br>
                    </div>
                    <div class="col-sm-6 col-md-8 d-inline-block item colfooter" id="one">
                        <h3 class="hfont">تماس با ریحون</h3>
                        <ul>
                            <li><a href="#">درباره ریحون</a></li>
                            <li><a href="#">تماس با ما</a></li>
                            <li><a href="#">وبلاگ ریحون</a></li>
							<li><br></li>
							<li><br></li>
							<li><br></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-8 d-inline-block item colfooter"  id="two">
                        <h3 class="hfont">رستوران‌ها</h3>
                        <ul>
                            <li><a href="#">ثبت رستوران</a></li>
							<li><br></li>
							<li><br></li>
							<li><br></li>
							<li><br></li>
							<li><br></li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-8 d-inline-block item colfooter" id="three">
                        <h3 class="hfont">پشتیبانی ریحون</h3>
                        <ul>
                            <li><a href="#">سوالات متداول</a></li>
                            <li><a href="#">تماس با پشیبانی</a></li>
                            <li><a href="#">قوانین و مقررات</a></li>
							<li><br></li>
							<li><br></li>
							<li><br></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-8 d-inline-block item colfooter" id="four" >
                        <h3 class="hfont">اپلیکیشن‌های موبایل</h3>
                        <ul>
							
                            <li><a href="#"><img class="appl" src="assets/img/google-play-dark.png"></a></li>
                            <li><a href="#"><img class="appl" src="assets/img/ios-direct-dark.png"></a></li>
                            <li><a href="#"><img class="appl" src="assets/img/cafebazaar-dark.png"></a></li>
							
                        </ul>
                    </div>
                    
                </div>
            </div>
        <div style="text-align:center">
		<a href="#"><img class="namad1"  src="assets/img/namad.png" ></a>
		<a href="#"> <img class="namad2" src="assets/img/eanjoman.png" ></a>
		
		</div>
		
		
		</footer>
    </div>
    
	`
})


new Vue( {
	
	el: '#footer1'
}


)