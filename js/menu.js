/*菜单*/
let body = $('body')
$('#icon-menu').click(function() {
	body.addClass('menu-show')
})

$('#menu-list-close').click(function() {
	body.removeClass('menu-show')
})

/*搜索*/
let iconSearch = $('#icon-search')
iconSearch.click(function() {
	iconSearch.toggleClass('icon-close')
	iconSearch.toggleClass('icon-search')
	$('.menu-search').toggleClass('active')
})


/*二级菜单*/
let subMenuItem = $('.sub-menu-item')

for(let i = 0; i < subMenuItem.length; i++) {
	let item = $(subMenuItem[i])
	item.click(function() {
		item.addClass('active').siblings().removeClass('active')
	})
}

