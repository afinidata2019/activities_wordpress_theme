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
        let uniqueID = Math.random().toString(36).substring(2)
        let create_user_uri = `${form.dataset.defaultUri}/chatfuel/create_messenger_user/`
        let create_child_uri = `${form.dataset.defaultUri}/chatfuel/create_instance/`
        let create_email_uri = `${form.dataset.defaultUri}/chatfuel/create_messenger_user_data/`
        let create_birth_uri = `${form.dataset.defaultUri}/chatfuel/create_instance_attribute/`
        let redirect_link = d.querySelector('.redirect_link')
        let items = form.querySelectorAll('input, select')
        let alert = d.querySelector('.form-alert')
        let error = d.querySelector('.form-error')
        let redirect_uri = 'https://m.me/Afinidata'
        form.addEventListener('submit', async e => {
            e.preventDefault()
            items.forEach(item => item.disabled = true)
            let hasChild = form.querySelector('select[name="has_child"]').value
            let userData = new FormData()
            let emailData = new FormData()
            userData.append('first_name', form.querySelector('input[name="first_name"]').value)
            userData.append('last_name', form.querySelector('input[name="last_name"]').value)
            userData.append('bot_id','1')
            userData.append('channel_id',uniqueID)

            emailData.append('data_key', 'email')
            emailData.append('data_value', form.querySelector('input[name="email"]').value)

            try {
                let request = await fetch(create_user_uri, {
                    method: 'post',
                    body: userData
                })
                let response = await request.json()
                redirect_uri = `${redirect_uri}?ref=${response.set_attributes.user_id}`
                redirect_link.href = redirect_uri
                emailData.append('user', response.set_attributes.user_id)

                let emailRequest = await fetch(create_email_uri, {
                    method: 'post',
                    body: emailData
                })

                if(hasChild === 'yes') {
                    let childData = new FormData()
                    let birthData = new FormData()
                    let childDate = form.querySelector('input[name="birthday"]').value.split('/')

                    childData.append('entity', '1')
                    childData.append('user_id', response.set_attributes.user_id)
                    childData.append('name', form.querySelector('input[name="child_name"]').value)

                    birthData.append('attribute', 'birthday')
                    birthData.append('value', `${childDate[2]}-${childDate[1]}-${childDate[0]}`)

                    let childRequest = await fetch(create_child_uri, {
                        method: 'post',
                        body: childData
                    })

                    let childResponse = await childRequest.json()
                    birthData.append('instance', childResponse.set_attributes.instance)

                    let birthdayRequest = await fetch(create_birth_uri, {
                        method: 'post',
                        body: birthData
                    })
                }
                form.style.display = 'none'
                alert.style.display = 'block'
                setTimeout(() => w.location = redirect_uri, 1000)
            } catch (e) {
                uniqueID = Math.random().toString(36).substring(2)
                items.forEach(item => item.disabled = false)
                error.style.display = 'block'
            }
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