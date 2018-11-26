const tipDayButton = document.querySelector('.tips-day-bottom__more')

if (tipDayButton) {
	tipDayButton.addEventListener('click', e => {
		e.preventDefault()
		document.body.classList.add('popup-tips-active')
	})
}