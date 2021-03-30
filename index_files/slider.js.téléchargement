(function(){
		let bout = document.querySelectorAll('.ctrl-slider input')
		let slider = document.querySelector('.carrousel_slider')
		let k = 0;
		bout[0].checked = true;
		for(const bt of bout)
		{
			bt.value = k++;
			bt.addEventListener('mousedown',function()
			{
				slider.style.transform = "translateX(" + (-this.value*100) + "vw)"
			})
		}
    }())