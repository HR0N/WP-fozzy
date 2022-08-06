(function($){
    $(document).ready(()=>{
        class Referral extends Class_Father{
            constructor(elem) {
                super($, elem);
                this.rendered_referrals = {};
                this.lines = this.find('.referral_line .info-row');
                this.lines2 = this.find('.referral_line');

                this.render_page();
                this.events();
            }
            create_line_1(){
                this.rendered_referrals['line_1'] = [];
                this.rendered_referrals['referrals_1'].map((v, k)=>{
                    this.rendered_referrals['high_referrals'].map((v2, k2)=>{
                        if(v2[0] === v[2]){
                            v.push(v2[3]);
                            this.rendered_referrals['line_1'].push(v);
                        }
                    });
                });
                this.line_append(0, 'line_1');
            }
            create_line_2(){
                this.rendered_referrals['line_2'] = [];
                this.rendered_referrals['referrals_2'].map((v, k)=>{
                    this.rendered_referrals['line_1'].map((v2, k2)=>{
                        if(v2[1] === v[2]){
                            v.push(v2[4]);
                            this.rendered_referrals['line_2'].push(v);
                        }
                    });
                });
                this.line_append(1,'line_2');
                if(this.rendered_referrals['line_2'].length>0){$(this.lines2[1]).css({'display':'block'});}

            }
            create_line_3(){
                this.rendered_referrals['line_3'] = [];
                this.rendered_referrals['referrals_3'].map((v, k)=>{
                    this.rendered_referrals['line_2'].map((v2, k2)=>{
                        if(v2[1] === v[2]){
                            v.push(v2[4]);
                            this.rendered_referrals['line_3'].push(v);
                        }
                    });
                });
                this.line_append(2,'line_3');
                if(this.rendered_referrals['line_3'].length>0){$(this.lines2[2]).css({'display':'block'});}
            }
            create_line_4(){
                this.rendered_referrals['line_4'] = [];
                this.rendered_referrals['referrals_4'].map((v, k)=>{
                    this.rendered_referrals['line_3'].map((v2, k2)=>{
                        if(v2[1] === v[2]){
                            v.push(v2[4]);
                            this.rendered_referrals['line_4'].push(v);
                        }
                    });
                });
                this.line_append(3,'line_4');
                if(this.rendered_referrals['line_4'].length>0){$(this.lines2[3]).css({'display':'block'});}
            }
            create_line_5(){
                this.rendered_referrals['line_5'] = [];
                this.rendered_referrals['referrals_5'].map((v, k)=>{
                    this.rendered_referrals['line_4'].map((v2, k2)=>{
                        if(v2[1] === v[2]){
                            v.push(v2[4]);
                            this.rendered_referrals['line_5'].push(v);
                        }
                    });
                });
                this.line_append(4,'line_5');
                if(this.rendered_referrals['line_5'].length>0){$(this.lines2[4]).css({'display':'block'});}
            }
            create_line_6(){
                this.rendered_referrals['line_6'] = [];
                this.rendered_referrals['referrals_6'].map((v, k)=>{
                    this.rendered_referrals['line_5'].map((v2, k2)=>{
                        if(v2[1] === v[2]){
                            v.push(v2[4]);
                            this.rendered_referrals['line_6'].push(v);
                        }
                    });
                });
                this.line_append(5,'line_6');
                if(this.rendered_referrals['line_6'].length>0){$(this.lines2[5]).css({'display':'block'});}
            }
            create_line_7(){
                this.rendered_referrals['line_7'] = [];
                this.rendered_referrals['referrals_7'].map((v, k)=>{
                    this.rendered_referrals['line_6'].map((v2, k2)=>{
                        if(v2[1] === v[2]){
                            v.push(v2[4]);
                            this.rendered_referrals['line_7'].push(v);
                        }
                    });
                });
                this.line_append(6,'line_7');
                if(this.rendered_referrals['line_7'].length>0){$(this.lines2[6]).css({'display':'block'});}
            }
            create_line_8(){
                this.rendered_referrals['line_8'] = [];
                this.rendered_referrals['referrals_8'].map((v, k)=>{
                    this.rendered_referrals['line_7'].map((v2, k2)=>{
                        if(v2[1] === v[2]){
                            v.push(v2[4]);
                            this.rendered_referrals['line_8'].push(v);
                        }
                    });
                });
                this.line_append(7,'line_8');
                if(this.rendered_referrals['line_8'].length>0){$(this.lines2[7]).css({'display':'block'});}
            }
            create_line_9(){
                this.rendered_referrals['line_9'] = [];
                this.rendered_referrals['referrals_9'].map((v, k)=>{
                    this.rendered_referrals['line_8'].map((v2, k2)=>{
                        if(v2[1] === v[2]){
                            v.push(v2[4]);
                            this.rendered_referrals['line_9'].push(v);
                        }
                    });
                });
                this.line_append(8,'line_9');
                if(this.rendered_referrals['line_9'].length>0){$(this.lines2[8]).css({'display':'block'});}
            }
            create_line_10(){
                this.rendered_referrals['line_10'] = [];
                this.rendered_referrals['referrals_10'].map((v, k)=>{
                    this.rendered_referrals['line_9'].map((v2, k2)=>{
                        if(v2[1] === v[2]){
                            v.push(v2[4]);
                            this.rendered_referrals['line_10'].push(v);
                        }
                    });
                });
                this.line_append(9,'line_10');
                if(this.rendered_referrals['line_10'].length>0){$(this.lines2[9]).css({'display':'block'});}
            }
            line_append(line, title){
                this.rendered_referrals[title].map((v, k)=>{
                    let date = v[3].split(' ')[0].split('-');
                    if(window.innerWidth < 425){
                        date = `${date[2]}.${date[1]}`;
                    }else{date = `${date[2]}.${date[1]}.${date[0]}`;}
                    $(this.lines[line]).append("<div class=\"info-row__date date\">"+date+"</div>");
                    $(this.lines[line]).append("<div class=\"info-row__username\">"+v[5]+"</div>");
                    $(this.lines[line]).append("<div class=\"info-row__referral\">"+v[4]+"</div>");
                });
            }
            fetch_refs(){
                this.rendered_referrals['high_referrals'] = [];
                this.rendered_referrals['referrals_1'] = [];
                // set referrals
                this.referrals.map((v, k)=>{
                    this.all_users.map((v2, k2)=>{
                        if(v2[0] === v[1]){
                            v.push(v2[3]);
                            // console.log(v);
                            if(this.cur_user[0] === v[2] && this.cur_user[0] !== '1'){
                                this.rendered_referrals['referrals_1'].push(v);
                            }
                            if(this.cur_user[0] === '1'){
                                this.rendered_referrals['referrals_1'].push(v);
                            }
                        }
                    });
                });
                let count = 1;
                while (count<10){count+=1; this.add_refs(count);}

                // set high_referrals
                let set = [];
                this.rendered_referrals['referrals_1'].map((v, k)=>{
                    set.push(v[1]);
                });
                let set1 = new Set(set);
                this.all_users.map((v, k)=>{
                    if(!set1.has(v[0])){
                        this.rendered_referrals['high_referrals'].push(v);
                    }
                });
                // set referrals to high_referrals
            }
            add_refs(line){
                this.rendered_referrals['referrals_'+line] = [];
                this.referrals.map((v, k)=>{
                    let nline = line - 1;
                    this.rendered_referrals['referrals_'+nline].map((v2, k2)=>{
                        if(v2[1] === v[2]){
                            this.rendered_referrals['referrals_'+line].push(v);
                        }
                    });
                });
            }

            render_page(){
                this.fetch_refs();
                this.create_line_1();
                this.create_line_2();
                this.create_line_3();
                this.create_line_4();
                this.create_line_5();
                this.create_line_6();
                this.create_line_7();
                this.create_line_8();
                this.create_line_9();
                this.create_line_10();
                // console.log('cur_user: ', this.cur_user);
                // console.log('refs: ', this.referrals);
                // console.log('users: ', this.all_users);
                // console.log('rendered: ', this.rendered_referrals);
            }
            events(){
            }
        }
        new Referral('body');
    });
})(jQuery);