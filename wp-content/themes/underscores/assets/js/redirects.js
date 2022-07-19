(function($){
    $(document).ready(()=>{
        class Redirects extends Class_Father{
            constructor(elem) {
                super($, elem);
                this.href = location.href;
                this.my_account = 'https://marjoncapital.com/my-account/my_account/';

                this.home_redirect();
                this.lobby_redirect();
            }
            home_redirect(){if(this.href === 'https://marjoncapital.com/'){location.href = this.my_account}}
            lobby_redirect(){if(this.href === 'https://marjoncapital.com/my-account/'){location.href = this.my_account}}
        }
        new Redirects('body');
    });
})(jQuery);