/*
* @Author: 87699
* @Date:   2018-08-18 20:15:48
* @Last Modified by:   87699
* @Last Modified time: 2018-08-19 12:55:13
*/

/*tabItem: 分类  tabList: 分类列表 listItems：分类列表项*/
let tabItem = $('.group-tab-item')
let tabList = $('.group-tab-list')
for(let i = 0; i < tabItem.length; i++) {
	let item = $(tabItem[i])
	let list = $(tabList[item.attr('attr-index')])
	let listItems = $(list).children('div')

	item.click(function() {
		item.addClass('active').siblings().removeClass('active')
		list.slideDown().siblings('.group-tab-list').hide()
		body.addClass('group-list-show')
	})

	for(let j = 0; j < listItems.length; j++) {
		let listItem = $(listItems[j])
		listItem.click(function() {
			listItem.addClass('active').siblings().removeClass('active')
			body.removeClass('group-list-show')
			list.hide()
		})
	}
}