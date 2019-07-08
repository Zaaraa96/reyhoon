

Vue.component('search', {
	
	template: `


    <div class="all"><div class="features-blue" >
        <div class="container serachbox">
            <div class="intro">
                <h2 class="text-center">سفارش آنلاین غذا <br>
از بهترین رستوران‌ها و فست‌فود‌‌ها</h2>
                <p class="text-center">برای دیدن لیست رستوران‌ها و فست‌فود‌هایی که به شما سرویس می‌دهند، منطقه خود را وارد کنید. </p>
            </div>
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search navsearch">
                
				<div class="container">
					
						<select >
						
						<optgroup label="(3) شهر تحت پوشش" >
						<option value="12" selected >تهران</option> 
						<option value="13">شیراز</option>
						<option value="14">اصفهان</option></optgroup></select>
				
                        <form class="form-inline" target="_self">
                            <div class="form-group">
							<svg xmlns="http://www.w3.org/2000/svg" width="13" height="17" viewBox="0 0 13 17" data-reactid="72"><path fill="currentColor" fill-rule="evenodd" d="M6 0C2.683 0 0 2.66 0 5.95 0 10.412 6 17 6 17s6-6.588 6-11.05C12 2.66 9.317 0 6 0zm0 8a2 2 0 1 1 .001-4.001A2 2 0 0 1 6 8z" data-reactid="73"></path></svg>
							<input class="form-control search-field" type="search" id="search-field" name="search" placeholder="مثلا نیاوران">
							<label for="search-field"></label></div>
                        </form>
						<a class="btn btn-light action-button" role="button" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><g fill="none" fill-rule="evenodd"><path d="M0 0h18v18H0z"></path><g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(2 2)"><circle cx="6.125" cy="6.125" r="6.125"></circle><path d="M13.373 13.373l-2.767-2.767"></path></g><path d="M0 0h18v18H0z"></path></g></svg> </a>
				
				</div>
            </nav>
        </div></div>
    
	<div class="article-list">
        <div class="container">
            
            <div class="row articles">
                <div class=" item"><a href="#"></a>
                    <img src="assets/img/location.png">
					<h4> شهر و منطقه خود را وارد کنید </h4>
                    <p class="description">منوی مورد علاقه خود را از بین بیش از 4000 رستوران خوب در تهران و شهرستان‌ها جستجو کنید.</p></div>
                <div
                    class=" item"><a href="#"></a>
                    <img src="assets/img/food.png">
					<h4> غذای خود را انتخاب کنید</h4>
                    <p class="description"> غذایی که می‌خواهید را انتخاب کنید و بدون هزینه اضافی سفارش خود را ثبت کنید.</p></div>
            <div
                class=" item"><a href="#"></a>
                <img src="assets/img/love.png">
				<h4>غذایتان را نوش‌جان کنید </h4>
                <p class="description">درب منزل یا حضوری از خود رستوران سفارشتان را تحویل بگیرید. </p></div>
    </div>
    </div>
    </div>
	
	</div>
	
	`
	
})

new Vue({
	el:'#search'
})