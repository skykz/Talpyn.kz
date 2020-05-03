$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "обязательное поле!",
                    minlength: "Ваше имя должно состоять как минимум из 2 символов"
                },
                subject: {
                    required: "Напишите тему вашей заявки.",
                    minlength: "Ваш предмет должен состоять как минимум из 4 символов"
                },
                number: {
                    required: "Введите номер телефона.",
                    minlength: "Ваш номер должен состоять как минимум из 5 символов."
                },
                email: {
                    required: "нет электронной почты, нет сообщений"
                },
                message: {
                    required: "хм ... да, вы должны написать что-то, чтобы отправить эту форму.",
                    minlength: "это все? действительно?"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"contact_process.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})
