---
title: Contact
published: true
menu: Contacto
background_color: '#cc9595'
form:
    name: contact-form
    fields:
        -
            name: name
            label: Name
            placeholder: 'Enter your name'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Enter your email address'
            type: text
            validate:
                rule: email
                required: true
        -
            name: phone
            label: Phone
            placeholder: 'Enter your phone number'
            type: text
            validate:
                required: false
        -
            name: message
            label: Message
            size: long
            placeholder: 'Enter your message'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: '{{ config.plugins.email.to }}'
                subject: '[Contact] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you xx !'
        -
            display: thankyou
---

