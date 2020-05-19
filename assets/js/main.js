((d, w, c) => {

    const closeDisclaimer = (button, object) => {
        button.addEventListener('click', () => {
            object.style.transition = 'all .3s'
            object.style.opacity = '0'
            setTimeout(() => object.style.display = 'none', 300)
        })
    }

    const limitMain = main => {
        main.addEventListener('contextmenu', e => {
            e.preventDefault()
        })
    }

    w.addEventListener('load', () => {
        const POST_DISCLAIMER = d.querySelector('.disclaimer')
        const POST_CLOSE = d.querySelector('.disclaimer-close')

        const MAIN = d.querySelector('main')

        if (POST_DISCLAIMER && POST_CLOSE) {
            closeDisclaimer(POST_CLOSE, POST_DISCLAIMER)
        }

        if(MAIN) {
            limitMain(MAIN)
        }
    })


})(document, window, console)