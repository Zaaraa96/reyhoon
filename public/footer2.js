
Vue.component('footer2', {

	template: `
	<div class="footer-dark secondfooter" style="background-color:#191919">
        <footer>
            <div class="row" >
						<div class="col-md-1 col-sm-0"> </div>
              <div class="col-md-3 col-sm-6">  <p class="d-inline-block copyright here"
                    style="direction: ltr;text-align:right;color: #ffffff;">
										© 2017, Reyhoon, All Rights Reserved.</p>
								</div>
							<div class="col-md-3 col-sm-0"> </div>
					<div class="col-md-4 col-sm-8" >

					<a href="#"><img class="socials" src="/assets/img/facebook.png" ></a>
				<a href="#"><img class="socials" src="/assets/img/instagram.png" ></a>
				<a href="#"><img class="socials" src="/assets/img/telegram.png"></a>
				<a href="#"><img class="socials" src="/assets/img/twitter.png"></a>
				<a href="#"><img class="socials" src="/assets/img/g.png"></a>
				</div>
            </div>
        </footer>
    </div>
		`
})


new Vue( {

	el: '#footer2'
}


)
