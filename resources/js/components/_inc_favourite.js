import * as Toastr from 'toastr';
var Favourite = {
    init : function()
    {
        this.saveFavourite()
    },

    saveFavourite()
    {
        $('.js-favourite').click(function (event){
            event.preventDefault();
            let $this = $(this)
            let URL = $this.attr('data-url')
            console.log(URL)
            $.ajax({
                url: URL,
                type:'GET',
                success:function(response){
                    if (response.status === 200)
                    {
                        Toastr.success("Đã thêm vào yêu thích thành công")
                    }
                    console.log(data)
                },
                error: function (response) {

                }
            });
        })
    }
}

export default Favourite
