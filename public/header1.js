

Vue.component('header1', {

	template: `
	<div id="nav">

            <nav class="navbar headernavbar"  >
                <div class="container" >

				    <div class="col-md-1">
                        <a class="login" href="#" >ورود</a>
												</div>
									<div class="col-md-1">
						<a class="login" href="#" >عضویت</a>
						</div>
						<div class="col-md-1">
						<a class="login" href="#" >راهنما</a>
						</div>
						<div class="col-md-7"></div>
						<div class="col-md-1">
						<img class="logo" src="/assets/img/logo.png"/>
					</div>

								</div>
            </nav>

    </div>
	`

})

new Vue({
	el:'#header1'
})
