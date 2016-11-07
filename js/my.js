$(document).ready(function(){    
    function rotate_menu(d) {
        $(".menu-on-off").css({
              '-moz-transform':'rotate('+d+'deg)',
              '-webkit-transform':'rotate('+d+'deg)',
              '-o-transform':'rotate('+d+'deg)',
              '-ms-transform':'rotate('+d+'deg)',
              'transform': 'rotate('+d+'deg)'
         });  
    };
    //rotate_menu(90);
    
    screen = {
        setScreenW : function(){
            this.win_w = $(window).width(),
            this.win_h = $(window).height(),
            this.doc_w = $(document).width(),
            this.doc_h = $(document).height()
        },
        setScreen : function(){
            if (this.doc_w<'768'){
				this.screen = "col-xs";
		 	}else
			if ((768<=this.doc_w) && (this.doc_w<992)){
				this.screen = "col-sm";
		 	}else
			if ((992<=this.doc_w) && (this.doc_w<1200)){
			    this.screen = "col-md";
		 	}else
			if (1200<=this.doc_w){
				this.screen = "col-lg";
		 	}
        },
        setNewScreen : function(){
            this.setScreenW();
            this.setScreen();
        }
    }
    screen.setNewScreen();
    
    $("a[href='#menu-on-off']").click(function(){
        menu = $(this).parent().parent().parent().parent().parent();
        if (menu.attr("state") == "off"){
            if (screen.screen == "col-xs"){
                menu.animate({"width":"200px"})
                .queue(function(next){menu.attr("state","on")})
                .dequeue();
            }else{
                menu.animate({"width":"25%"})
                .queue(function(next){menu.attr("state","on")})
                .dequeue();
            }
            console.log(screen.screen)
        }else
        if (menu.attr("state") == "on"){
            if (screen.screen == "col-xs"){
                menu.animate({"width":"40px"})
                .queue(function(next){menu.attr("state","off")})
                .dequeue();
            }else if(screen.screen == "col-sm"){
                 menu.animate({"width":"5%"})
                .queue(function(next){menu.attr("state","off")})
                .dequeue();
            }else if(screen.screen == "col-md"){
                 menu.animate({"width":"4%"})
                .queue(function(next){menu.attr("state","off")})
                .dequeue();
            }else if(screen.screen == "col-lg"){
                 menu.animate({"width":"3%"})
                .queue(function(next){menu.attr("state","off")})
                .dequeue();
            }
        };
    });
    
//Показываем окно если произошло изменение ширины экрана с просьбой обновить страницу
    $(window).resize(function(){
        doc_h = document.body.clientHeight;
        //$("body").html("<div class='error-reload'>Для корректной работы необходимо обновить страницу <a href='' onclick='location.reload()'><i class='fa fa-refresh' aria-hidden='true'></a></i></div>").css("padding",((parseInt(doc_h)-(parseInt($("body").css("height"))))/2)+" 0");
    });
//Конец
//ALT для картинок
    $("img[watchAlt='on']").mouseover(function(){
        father = $(this).parent();
        alt = $(this).attr("alt");
        father.prepend("<div class='ALT'>"+alt+"</div>");
    })
    $("img[watchAlt='on']").mouseout(function(){
        console.log($(this).parent().find(".alt").remove());
    })
//конец Alt
/*
    screen.setNewScreen();
    $( window ).resize(function(){screen.setNewScreen(); menuState.setLocalStorageState($("a[href='#menu-on-off']"));});
    
    menuState ={
        inspectionState: function(){
            return localStorage.getItem("StateMenu");
        },
        writeState : function(){
            this.state = this.inspectionState();
        },
        menuOn: function(){
            localStorage.setItem("StateMenu", "1");
            state = $(this.object).attr("state");
            if (screen.screen == "col-xs"){
                if (state == "off"){
                    $(this.object).attr("state","on");
                    $(".profile-nlp").css({"display":"block"});
                    $(".navi").animate({"width":"200px"},500).find(".menu").animate({"width":"200px"},500).find("ul").css({"display":"block"});
                    $(".logo-ico").animate({"padding":"10px"},100);
                    $(".logo-text strong").css({"display": "inline"}).parent().animate({"font-size":"15px"},100);
                    $(".menu form").css({"display":"block"});
                    $(".profile-img").animate({"width":"50px", "height":"50px"});
                    $(".profile-overflow-img").animate({"width":"50px", "height":"50px"});
                    setTimeout(function(){rotate_menu(90)},100);
                }
            };
            if (screen.screen !== "col-xs"){
                if (state == "off"){
                    $(this.object).attr("state","on");
                    $(".profile-nlp").css({"display":"block"});
                    $(".navi").animate({"width":"25%"},500).find("ul").css({"display":"block"});
                    $(".logo-ico").animate({"padding":"10px"},100);
                    $(".container").css({"width":"75%"});
                    $(".logo-text strong").css({"display": "inline"}).parent().animate({"font-size":"20px"},100);
                    $("h1").animate({"width":"75%", "left": "25%"},500);
                    $(".menu form").css({"display":"block"});
                    $(".profile-img").animate({"width":"50px", "height":"50px"});
                    $(".profile-overflow-img").animate({"width":"50px", "height":"50px"});
                    setTimeout(function(){rotate_menu(90)},100);
                }
            }
        },
        menuOff: function(){
            localStorage.setItem("StateMenu", "0");
            state = $(this.object).attr("state");
            if (screen.screen == "col-xs"){
                if (state == "on"){
                    $(this.object).attr("state","off");
                    $(".profile-nlp").css({"display":"none"});
                    $(".navi").animate({"width":"40px"},500).find(".menu").animate({"width":"40px"},500).find("ul").css({"display":"none"});
                    $(".logo-ico").animate({"padding":"0"},100);
                    $(".logo-text strong").css({"display": "none"}).parent().animate({"font-size":"20px"},100);
                    $(".menu form").css({"display":"none"});
                    $(".profile-img").animate({"width":"15px", "height":"15px"});
                    $(".profile-overflow-img").animate({"width":"15px", "height":"15px"});
                    setTimeout(function(){rotate_menu(0)},100);
                }
            };
            if (screen.screen !== "col-xs"){
                if (state == "on"){
                    $(this.object).attr("state","off");
                    $(".profile-nlp").css({"display":"none"});
                    $(".navi").animate({"width":"3%"},500).find("ul").css({"display":"none"});
                    $(".logo-ico").animate({"padding":"0"},100);
                    $(".container").css({"width":"97%"});
                    $(".logo-text strong").css({"display": "none"}).parent().animate({"font-size":"20px"},100);
                    $("h1").animate({"width":"97%", "left": "3%"},500);
                    $(".menu form").css({"display":"none"});
                    $(".profile-img").animate({"width":"15px", "height":"15px"});
                    $(".profile-overflow-img").animate({"width":"15px", "height":"15px"});
                    setTimeout(function(){rotate_menu(0)},100);
                }else{
                    $(this).attr("state","on");
                }
            }
        },
        menuOnNoAnimation: function(){
            $(this.object).attr("state", "on");
            state = $(this.object).attr("state");
            if (screen.screen == "col-xs"){
                if (state == "off"){
                    $(".profile-nlp").css({"display":"block"});
                    $(".navi").css({"width":"200px"}).find(".menu").css({"width":"200px"}).find("ul").css({"display":"block"});
                    $(".logo-ico").css({"padding":"10px"});
                    $(".logo-text strong").css({"display": "inline"}).parent().css({"font-size":"15px"});
                    $(".menu form").css({"display":"block"});
                    $(".profile-img").css({"width":"50px", "height":"50px"});
                    $(".profile-overflow-img").css({"width":"50px", "height":"50px"});
                    rotate_menu(90);
                }
            };
            if (screen.screen !== "col-xs"){
                if (state == "off"){
                    $(".profile-nlp").css({"display":"block"});
                    $(".navi").animate({"width":"25%"}).find("ul").css({"display":"block"});
                    $(".logo-ico").animate({"padding":"10px"});
                    $(".container").css({"width":"75%"});
                    $(".logo-text strong").css({"display": "inline"}).parent().animate({"font-size":"20px"});
                    $("h1").animate({"width":"75%", "left": "25%"});
                    $(".menu form").css({"display":"block"});
                    $(".profile-img").animate({"width":"50px", "height":"50px"});
                    $(".profile-overflow-img").animate({"width":"50px", "height":"50px"});
                    rotate_menu(90);
                }
            }
        },
        menuOffNoAnimation: function(){
            state = $(this.object).attr("state");
            $(this.object).attr("state", "off");
            if (screen.screen == "col-xs"){
                if (state == "on"){
                    $(".profile-nlp").css({"display":"none"});
                    $(".navi").css({"width":"40px"}).find(".menu").css({"width":"40px"}).find("ul").css({"display":"none"});
                    $(".logo-ico").css({"padding":"0"});
                    $(".logo-text strong").css({"display": "none"}).parent().css({"font-size":"20px"});
                    $(".menu form").css({"display":"none"});
                    $(".profile-img").css({"width":"15px", "height":"15px"});
                    $(".profile-overflow-img").css({"width":"15px", "height":"15px"});
                    rotate_menu(0);
                }
            };
            if (screen.screen == "col-lg"){
                if (state == "on"){
                    $(".profile-nlp").css({"display":"none"});
                    $(".navi").css({"width":"3%"}).find("ul").css({"display":"none"});
                    $(".logo-ico").css({"padding":"0"});
                    $(".container").css({"width":"97%"});
                    $(".logo-text strong").css({"display": "none"}).parent().css({"font-size":"20px"});
                    $("h1").css({"width":"97%", "left": "3%"});
                    $(".menu form").css({"display":"none"});
                    $(".profile-img").css({"width":"15px", "height":"15px"});
                    $(".profile-overflow-img").css({"width":"15px", "height":"15px"});
                    rotate_menu(0);
                }
            }
            if (screen.screen == "col-sm"){
                if (state == "on"){
                    $(".profile-nlp").css({"display":"none"});
                    $(".navi").css({"width":"5%"}).find("ul").css({"display":"none"});
                    $(".logo-ico").css({"padding":"0"});
                    $(".container").css({"width":"95%"});
                    $(".logo-text strong").css({"display": "none"}).parent().css({"font-size":"20px"});
                    $("h1").css({"width":"95%", "left": "5%"});
                    $(".menu form").css({"display":"none"});
                    $(".profile-img").css({"width":"15px", "height":"15px"});
                    $(".profile-overflow-img").css({"width":"15px", "height":"15px"});
                    rotate_menu(0);
                }
            }
            if (screen.screen == "col-md"){
                if (state == "on"){
                    $(".profile-nlp").css({"display":"none"});
                    $(".navi").css({"width":"4%"}).find("ul").css({"display":"none"});
                    $(".logo-ico").css({"padding":"0"});
                    $(".container").css({"width":"96%"});
                    $(".logo-text strong").css({"display": "none"}).parent().css({"font-size":"25px"});
                    $("h1").css({"width":"96%", "left": "4%"});
                    $(".menu form").css({"display":"none"});
                    $(".profile-img").css({"width":"15px", "height":"15px"});
                    $(".profile-overflow-img").css({"width":"15px", "height":"15px"});
                    rotate_menu(0);
                }
            }
            
        },
        setLocalStorageState: function(o){
            this.object = o;
            this.setState(this.inspectionState());
        },
        setState : function(st){
            if (st == 0){
                this.menuOffNoAnimation();
            }else{
                this.menuOnNoAnimation();
            }
        },
        processorMenu: function(e){
            this.object = e;
            this.writeState();
            if (this.state == 1){
                this.menuOff();
            }else{
                this.menuOn();
            }
            console.log(this.inspectionState())
        }
    }
    
    //Устанавливаем состояние меню из памяти
        menuState.setLocalStorageState($("a[href='#menu-on-off']"));
    //Конец установки состояния меню
    
    $("a[href='#menu-on-off']").click(function(){
        menuState.processorMenu(this);
        //menu().menuState.processorMenu();
    })
*/
});