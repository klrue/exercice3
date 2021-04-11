(function(){
	/*identifier la collection de carroussel*/ 
	let slider = document.querySelectorAll('.carrousel_slider')
	let ctrlCarrousel =  document.querySelectorAll('.ctrl-slider')
	let noCtrlCarrousel = 0;
	for (const elmCarrousel of slider)
	{
		let bout = ctrlCarrousel[noCtrlCarrousel].querySelectorAll('.rad-slider');
		noCtrlCarrousel++;
		let k = 0;
		bout[0].checked = true;
		for(const bt of bout)
		{
			bt.value = k++;
			bt.addEventListener('mousedown',function()
			{
				elmCarrousel.style.transform = "translateX(" + (-this.value*100) + "vw)";
			})
		}
	}
    }())