((d, w, c) => {

    const closeDisclaimer = (button, object) => {
        button.addEventListener('click', () => {
            object.style.transition = 'all .3s'
            object.style.opacity = '0'
            setTimeout(() => object.style.display = 'none', 300)
        })
    }

    window.addEventListener('load', () => {
        const POST_DISCLAIMER = d.querySelector('.disclaimer')
        const POST_CLOSE = d.querySelector('.disclaimer-close')

        if (POST_DISCLAIMER && POST_CLOSE) {
            closeDisclaimer(POST_CLOSE, POST_DISCLAIMER)
        }
    })
})(document, window, console)