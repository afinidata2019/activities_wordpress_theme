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

    const handleChildInputStyle = (select, container) => {
        let items = container.querySelectorAll('input')
        if (select.value == 'no') {
            container.style.display = 'none'
            items.forEach(item => item.required = false)
        } else {
            container.style.display = 'block'
            items.forEach(item => item.required = true)
        }
        select.addEventListener('change', e => {
            if(e.target.value == 'no') {
                container.style.display = 'none'
                items.forEach(item => item.required = false)
            } else {
                container.style.display = 'block'
                items.forEach(item => item.required = true)
            }
        })
    }

    const formSubmit = async form => {
        let uniqueID = Math.random().toString(36).substring(2);
        let create_user_uri = `${form.dataset.defaultUri}/chatfuel/create_messenger_user/`
        let redirect_uri = 'https://m.me/Afinidata'
        console.log(create_user_uri)
        form.addEventListener('submit', e => {
            e.preventDefault()
            let items = form.querySelectorAll('input:not([type="submit"]), select')
            items.forEach(item => {
                console.log(item.name, item.value)
            })
        })
    }

    const suscribeFormEvents = form => {
        const PICKER = form.querySelector('.datepicker-input')
        const CHILD_DETAILS = form.querySelector('.child-details')
        const picker = new Datepicker(PICKER, {
            language: form.dataset.language
        })
        const SELECT = form.querySelector('select')
        handleChildInputStyle(SELECT, CHILD_DETAILS)
        formSubmit(form)
    }

    w.addEventListener('load', () => {
        const POST_DISCLAIMER = d.querySelector('.disclaimer')
        const POST_CLOSE = d.querySelector('.disclaimer-close')
        const SUSCRIBE_FORM = d.querySelector('#suscribe-form')

        const MAIN = d.querySelector('main')

        if (POST_DISCLAIMER && POST_CLOSE) {
            closeDisclaimer(POST_CLOSE, POST_DISCLAIMER)
        }

        if(MAIN) {
            limitMain(MAIN)
        }

        if(SUSCRIBE_FORM) {
            suscribeFormEvents(SUSCRIBE_FORM)
        }
    })


})(document, window, console)