

Vue.component('thisnum', {
	props: ['restaurantnum', 'area'],
	template: `
	<div class="container restaurant"><img id="restimg" src="assets/img/restaurant-search-banner-2x.jpg">
        <h3>  امکان سرویس دهی به منطقه ی {{area}} را دارند{{restaurantsnum}}</h3>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
            <div class="container">

				<form class="form-inline mr-auto" target="_self">
						<p> جست‌و‌‌جوی رستوران‌ در این محدوده</p>
                        <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search" placeholder="جست‌و‌‌جوی رستوران‌ در این محدوده"></div>
                </form>

                <div id="checkboxr">
				<p> فیلتر </p>
                <div class="form-check"><label class="form-check-label" for="formCheck-2">تخفیف دار</label><input class="form-check-input" type="checkbox" id="formCheck-2"></div>
                <div class="form-check"><label class="form-check-label" for="formCheck-1">جدید</label><input class="form-check-input" type="checkbox" id="formCheck-1"></div>
				</div>

				<div class="btn-group">
				<p> مرتب سازی بر اساس</p>
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    رستوران های برگزیده
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>




    </div>
    </nav>
    </div>


	`

})

new Vue({
	el:'#thisnum'
})
