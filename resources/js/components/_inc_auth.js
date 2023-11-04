var Auth = {
    init : function ()
    {
        this.postLogin()
        this.postRegister()
        this.runToken()

    },
    runToken()
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    },
    postRegister()
    {
        $(".js-register").click(function (event) {
            event.preventDefault();
            let $form = $("#formRegister");
            var formData = $form.serialize();
            $.ajax({
                url: $form.attr('action'),
                type:'POST',
                data:formData,
                success:function(data){
                    console.log(data);
                },
                error: function (response) {
                    if( response.status === 422 ) {
                        $.each(response.responseJSON.errors,function(field_name,error){
                            $(document).find('[name='+field_name+']').parent().after('<span class="text-error">' +error+ '</span>')
                        })
                    }
                }
            });
        })
    },
    postLogin()
    {
        $(".js-login").click(function (event) {
            event.preventDefault()
            let $formLogin = $("#formLogin");
            var formData = $formLogin.serialize();
            $.ajax({
                url: $formLogin.attr('action'),
                type:'POST',
                data:formData,
                success:function(response){
                    if(response.status == 200)
                    {
                        location.reload();
                    }
                },
                error: function (data) {
                    if( response.status === 422 ) {
                        $.each(response.responseJSON.errors,function(field_name,error){
                            $(document).find('[name='+field_name+']').parent().after('<span class="text-error">' +error+ '</span>')
                        })
                    }
                }
            });
            console.log("login")
        })
    }
}

export default Auth
