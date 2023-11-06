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
            console.log("init")
        })
    }
}

export default Favourite
