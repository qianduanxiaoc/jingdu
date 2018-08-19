let speed = 5000
let animateSpeed = 2000
let clientWidth = $(window).width()
let swiperInner = $('.swiper-inner')
let swiperItems = $('.swiper-item')
let swiperDots = $('.swiper-dot').find('span')
let swiperItemsLen = swiperItems.length
let index = 1

/*设置容器宽度*/
swiperInner.css({width: (swiperItemsLen + 2) * clientWidth + 'px', left: -clientWidth + 'px'})

/*设置每一项宽度*/
for(let i = 0; i < swiperItemsLen; i++) {
	$(swiperItems[i]).css({flexBasis: clientWidth + 'px'})
}

/*增加首屏和末屏*/
swiperInner.append($(swiperItems[0]).clone())
swiperInner.prepend($(swiperItems[swiperItemsLen - 1]).clone())


/*滚动*/
function slide(i) {


	/*设置定位*/
	let pos = - clientWidth * i

	if(i === swiperItemsLen + 1) {
		$(swiperDots[0]).addClass('active').siblings().removeClass('active')
	}

	/*设置dot*/
	$(swiperDots[i - 1]).addClass('active').siblings().removeClass('active')

	swiperInner.animate({left: pos + 'px'}, animateSpeed, function() {
		if(i === swiperItemsLen + 1) {
			swiperInner.css({left: -clientWidth + 'px'})
			index = 1
		}
	})
}

setInterval(function() {
	index++
	slide(index)
}, speed)

