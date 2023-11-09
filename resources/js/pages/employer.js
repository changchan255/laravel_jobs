import 'select2'
var Employer = {
    init : function ()
    {
        this.runSelect2()
    },
    runSelect2()
    {
        $('.js-run-select2').select2();
    }
}

$(function (){
    Employer.init()
})
