const popupTips = () => {
  console.log('ok')
  const openPopupTipsDay = document.querySelector('.tips-day-bottom__more')
  const popupTips = document.querySelector('.popup-tips')
  const popupTipsClose = popupTips.querySelector('.popup-close')
  const popupTipsContent = popupTips.querySelector('.popup-tips-content')

  openPopupTipsDay.addEventListener('click', () => {
    document.body.classList.add('popup-tips-active')
  })

  popupTipsClose.addEventListener('click', () => {
    console.log('yyyy')
    document.body.classList.remove('popup-tips-active')
  })

  popupTips.addEventListener('click', () => {
    document.body.classList.remove('popup-tips-active')
  })

  popupTipsContent.addEventListener('click', event => {
    event.stopPropagation()
  })
}

export { popupTips }
