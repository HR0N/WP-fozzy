(function($){
    $(document).ready(()=>{
        class Redirects extends Class_Father{
            constructor(elem) {
                super($, elem);
                this.href = location.href;
                this.my_account = location.origin+'/my-account/my_account/';

                this.home_redirect();
                this.lobby_redirect();
            }
            home_redirect(){if(this.href === location.origin+'/'){location.href = this.my_account}}
            lobby_redirect(){if(this.href === location.origin +'/my-account/'){location.href = this.my_account}}
        }
        new Redirects('body');
    });
})(jQuery);