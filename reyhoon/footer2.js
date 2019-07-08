
Vue.component('footer2', {
	
	template: `
	<div class="footer-dark secondfooter" style="background-color:#191919;height: 100px;padding-top: 20px;padding-bottom: 10px;">
        <footer>
            <div class="container" style="text-align:right">
                <p class="d-inline-block copyright"
                    style="width:70%;direction: ltr;text-align:right;padding-right:-20px;color: #ffffff;">© 2017, Reyhoon, All Rights Reserved.</p>
					<div class="col d-inline-block item" style="width:25%;margin: 0px;">
				
					<a href="#"><img class="socials" src="assets/img/facebook.png" ></a>
				<a href="#"><img class="socials" src="assets/img/instagram.png" ></a>
				<a href="#"><img class="socials" src="assets/img/telegram.png"></a>
				<a href="#"><img class="socials" src="assets/img/twitter.png"></a>
				<a href="#"><img class="socials" src="assets/img/g.png"></a>
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