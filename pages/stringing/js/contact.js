$(document).ready(function(){

    $('.ui.dropdown').dropdown();
    $('.ui.checkbox').checkbox();

    $('.ui.form')
    .form ({
        fields: {
        firstName: {
            identifier: 'firstName',
            rules: [
                {
                    type   : 'empty',
                    prompt : 'Please enter your first name'
                }
            ]
        },
        emailAddress: {
            identifier: 'emailAddress',
            rules: [
                {
                    type   : 'empty',
                    prompt : 'Please enter your email address'
                }
            ]
        },
        racketModel: {
            identifier: 'racketModel',
            rules: [
                {
                    type   : 'empty',
                    prompt : 'Please enter your racket model'
                }
            ]
        },
        stringType: {
            identifier: 'string-type',
            rules: [
                {
                    type   : 'empty',
                    prompt : 'Please select a string'
                }
            ]
        },
        stringTension: {
            identifier: 'string-tension',
            rules: [
            {
                type   : 'empty',
                prompt : 'Please select a string tension'
            }
            ]
        }
        }
    });// ui form

    $('.menu .item').tab();

});
