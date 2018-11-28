const collectionLoad = () => {
  const collection     = document.querySelector('.collection')
  const collectionMore = document.querySelector('.collection-more')

	if (collectionMore && collection) {
    const buttonCollection = collectionMore.querySelector('#button-collection')
    const homeUrl  = document.body.dataset.home
		let pagination = buttonCollection.dataset.pagination
		let maxPages   = buttonCollection.dataset.pages

		buttonCollection.addEventListener('click', (event) => {
      event.preventDefault()
      pagination++

      const xhr = new XMLHttpRequest()
      xhr.open('POST', `${homeUrl}/wp-admin/admin-ajax.php?action=ajax-collection`)
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
      xhr.send(encodeURI(`pagination=${pagination}`))
      xhr.onload = () => {
        const popupResponse = document.implementation.createHTMLDocument("")
        popupResponse.body.innerHTML = xhr.responseText
        collection.append(popupResponse.body)
      }

      if (pagination == maxPages) {
        collectionMore.removeChild(buttonCollection)
      }
    })
	} else if (collectionMore) {
    const cardsList = document.querySelector('.cards-list')
    const button    = collectionMore.querySelector('a')
    const homeUrl   = document.body.dataset.home
    const posts     = button.dataset.posts
		let pagination  = button.dataset.pagination
    let maxPages    = button.dataset.pages

    button.addEventListener('click', (event) => {
      event.preventDefault()
      pagination++

      const xhr = new XMLHttpRequest()
      xhr.open('POST', `${homeUrl}/wp-admin/admin-ajax.php?action=ajax-${posts}`)
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
      xhr.send(encodeURI(`pagination=${pagination}`))
      xhr.onload = () => {
        cardsList.innerHTML = cardsList.innerHTML + xhr.responseText
      }

      if (pagination == maxPages) {
        collectionMore.removeChild(button)
      }
    })
  }
}

export { collectionLoad }