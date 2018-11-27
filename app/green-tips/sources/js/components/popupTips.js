const popupTips = () => {
  const openPopupTipsDay = document.querySelector('.tips-day-bottom__more')
  const popupTips        = document.querySelector('.popup-tips')

  if (popupTips) {
    const popupTipsClose   = popupTips.querySelector('.popup-close')
    const popupTipsContent = popupTips.querySelector('.popup-tips-content')

    openPopupTipsDay.addEventListener('click', event => {
      event.preventDefault()
      console.log(openPopupTipsDay)
      document.body.classList.add('popup-tips-active')
    })

    popupTipsClose.addEventListener('click', event => {
      event.preventDefault()
      document.body.classList.remove('popup-tips-active')
    })

    popupTips.addEventListener('click', event => {
      event.preventDefault()
      document.body.classList.remove('popup-tips-active')
    })

    popupTipsContent.addEventListener('click', event => {
      event.stopPropagation()
    })
  }

  // Tips page
  const contentTips = document.querySelector('#content.tips')
  if (contentTips) {
    const cardTips = Array.from(contentTips.querySelectorAll('.card-tips'))

    for (const cardTip of cardTips) {
      cardTip.addEventListener('click', () => {
        const xhr = new XMLHttpRequest()
        xhr.open('POST', `${url}/wp-admin/admin-ajax.php?action=ajax-tips`)
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
        xhr.send(encodeURI('ajax-tips'))
        xhr.onload = () => {
          console.log(xhr.responseText)
          const popupResponse = document.implementation.createHTMLDocument("")
          popupResponse.body.innerHTML = xhr.responseText
          contentTips.insertBefore(popupResponse.body, contentTips.firstChild)
          document.body.classList.add('popup-tips-active')
        }
      })
    }
  }
}

export { popupTips }
