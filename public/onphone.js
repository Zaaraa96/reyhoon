

Vue.component('onphone', {

	template: `

	<div class="highlight-phone">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h2 >ریحون روی موبایل</h2>
                        <p >برای دریافت لینک دانلود اپلیکیشن ریحون، شماره موبایل خود را وارد کنید. </p>
                    </div>
                    <form class="form-inline bordery" method="post">
                        <div class="form-group bordery"><input class="form-control" type="phonenumber" name="number" placeholder="مثلا 91220530**"></div>

												<div class="form-group bordery"><button  type="submit">دریافت لینک از طریق SMS </button></div>
                    </form>
					<p class="afterform">
				اپلیکیشن ریحون برای Android و iOS در دسترس است.
				</p>
				<a class="imageafterform" href="#"><img  src="/assets/img/google-play-light.png" ></a>
				<a class="imageafterform" href="#"><img  src="/assets/img/cafebazaar-light.png" ></a>
				<a class="imageafterform" href="#"><img  src="/assets/img/ios-direct-light.png" ></a>
				<a class="imageafterform" href="#"><img  src="/assets/img/reyhoon-light.png" ></a>

                </div>
                <div class="col-sm-4">
                    <div class="d-none d-md-block "><img class="device" src="/assets/img/ca98ff0d.png">

                    </div>
                </div>

            </div>
        </div>
    </div>

	`

})

new Vue({
	el:'#onphone'
})
