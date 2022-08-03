(function($){
    $(document).ready(()=>{
        class Referral extends Class_Father{
            constructor(elem) {
                super($, elem);
                this.events();
            }

            events(){
                console.log('referral');
            }
        }
        new Referral('body');
    });
})(jQuery);