

Vue.component('header1', {
	
	template: `
	<div id="nav">
        
            <nav class="navbar headernavbar"  >
                <div class="container" >
				    <div >
                        <a class="login" href="#" >ورود</a>
						<span style="color:#cbcbcb"> &nbsp | &nbsp </span>
						<a class="login" href="#" >عضویت</a>
						<span>  &nbsp  &nbsp  &nbsp &nbsp </span>
						<a class="login" href="#" >راهنما</a>
						<img class="logo" src="assets/img/logo.png"/>
					</div>
                </div>
            </nav>
        
    </div>
	`
	
})

new Vue({
	el:'#header1'
})