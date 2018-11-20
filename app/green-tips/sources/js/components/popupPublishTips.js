const popupPublishTips = () => {
  const openPopupPublishTips = document.querySelector('.open-popup-publish-tips')
  const popupPublishTips = document.querySelector('.popup-publish-tips')
  const popupPublishTipsClose = popupPublishTips.querySelector('.popup-close')
  const popupPublishTipsContent = popupPublishTips.querySelector('.popup-publish-tips-content')

  openPopupPublishTips.addEventListener('click', () => {
    document.body.classList.add('popup-publish-tips-active')
  })

  popupPublishTipsClose.addEventListener('click', () => {
    document.body.classList.remove('popup-publish-tips-active')
  })

  popupPublishTips.addEventListener('click', () => {
    document.body.classList.remove('popup-publish-tips-active')
  })

  popupPublishTipsContent.addEventListener('click', event => {
    event.stopPropagation()
  })
}

export { popupPublishTips }
