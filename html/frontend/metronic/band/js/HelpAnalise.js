/**
 * Created by frpereira on 09/10/14.
 */

var HelpAnalise;
HelpAnalise = (function () {
    'use strict';
    HelpAnalise.DEBUG = false;
    HelpAnalise.prototype.theData = null;
    HelpAnalise.prototype.currentIndex = null;

    HelpAnalise.prototype.holder = null;

    HelpAnalise.prototype.bgContent = null;
    HelpAnalise.BG_CONTENT = 'bg_content_help_analise';

    HelpAnalise.prototype.navigator = null;
    HelpAnalise.NAVIGATOR = 'navigator_help_analise';

    HelpAnalise.prototype.navigatorMenu = null;
    HelpAnalise.NAVIGATOR_MENU = 'navigator_menu_help_analise';

    HelpAnalise.instance= null;
    function HelpAnalise(theData, holder) {
        if(HelpAnalise.instance) return;
        this.theData = theData;
        this.currentIndex = 0;
        this.holder = $('#' + holder);
        this.holder.html(' ').hide();
        this.holder.css({
            overflow:'hidden'
        });
        this.createBG();
        this.createNavigator();
        this.createNavigatorMenu();
        this.drawScreen();
        this.holder.fadeIn();
        HelpAnalise.instance= this;
    }

    HelpAnalise.prototype.createBG = function () {
        this.bgContent = $("<div></div>");
        this.bgContent.attr('id', HelpAnalise.BG_CONTENT);

        this.bgContent.css({
            position: 'absolute',
            width: '100%',
            height: '756px',
            'box-sizing': 'border-box',
            overflow: 'hidden'
        });

        if (HelpAnalise.DEBUG) {
            this.bgContent.css({
                border: '2px solid #00ff00'

            });
        }
        this.holder.append(this.bgContent);
    };


    HelpAnalise.prototype.createNavigator = function () {
        this.navigator = $("<div></div>");
        this.navigator.attr('id', HelpAnalise.NAVIGATOR);

        this.navigator.css({
            position: 'absolute',
            width: '100%',
            height: '45px',
            'box-sizing': 'border-box',
            overflow: 'hidden',
            top: '5px',
            'text-align':'center'
        });

        this.holder.append(this.navigator);

//        for (var i = 0; i < this.theData.length; i++) {
//            var btn =  $( '<div  id="btnPage'+i+'" class="badge badge-primary isBT" ' +
//                'style="margin-right: 5px; height: 22px; " data-page="'+i+'">' +
//                '<i class="fa fa-star"></i> '+(i+1)+ '</div>');
//
//           btn.unbind( 'click').on('click', this.onClickPage)
//            this.navigator.append(btn);
//
//        }
        var btnPrev =  $( '<div class="badge badge-primary isBT" style="margin-left: 15px; height: 22px; "><i class="fa fa-backward"></i> Anterior</div>');
        this.navigator.append(btnPrev);
        btnPrev.unbind('click').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            if( HelpAnalise.instance.currentIndex>0) HelpAnalise.instance.currentIndex--;
            HelpAnalise.instance.drawScreen();
        });

       // var btnPrev =  $( '<div class="badge badge-primary isBT" style="margin-left: 15px; height: 22px; "><i class="fa fa-backward"></i> Anterior</div>');

        var btnNext =  $( '<div class="badge badge-primary isBT" style="margin-left: 15px; height: 22px; ">Próximo <i class="fa fa-forward"></i></div>');
        this.navigator.append(btnNext);
        btnNext.unbind('click').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            if( HelpAnalise.instance.currentIndex<( HelpAnalise.instance.theData.length-1)) HelpAnalise.instance.currentIndex++;
            HelpAnalise.instance.drawScreen();
        });

        var btnClose =  $( '<div class="badge badge-primary isBT" style="margin-left: 15px; height: 22px; "><i class="fa fa-close"></i> Fechar</div>');
        this.navigator.append(btnClose);

        btnClose.unbind('click').on('click', function(e){
            e.preventDefault();
            e.stopPropagation();
            HelpAnalise.instance.holder.fadeOut({complete:function(){
                HelpAnalise.instance.holder.html( ' ' );
                delete HelpAnalise.instance;

            }})

        })
        if (HelpAnalise.DEBUG) {
            this.navigator.css({
                border: '2px solid #0000ff'

            })
        }

    };
    HelpAnalise.prototype.createNavigatorMenu = function () {
        this.navigatorMenu = $("<div></div>");
        this.navigatorMenu.attr('id', HelpAnalise.NAVIGATOR_MENU);

        this.navigatorMenu.css({
            position: 'absolute',
            height: '100%',
            left: '-195px',
            width: '200px',
            'box-sizing': 'border-box',
           // overflow: 'hidden',
            top: '0px',
            'text-align':'center',
            'background-color':'rgba(255,255,255,.9)'
        });

        this.navigatorMenu.addClass('navigatorMenu');
        this.navigatorMenu.append('<div class="title" style="margin: 15px 0px 15px 0px;"> <h1>Menu</h1></div>');
        this.navigatorMenu.append('<div class="tab" style="position:absolute;top:50%;right:-31px;background-color:rgba(255,255,255,.9);padding:10px 6px 5px 10px;"><i class="fa fa-2x fa-chevron-circle-right"></i> </div>');
        this.navigatorMenu.append('<div class="title" id="navigator-menu-item-holder" style="height: 680px; overflow-x: hidden; overflow-y: scroll; width: 200px; "></div>')

        this.holder.append(this.navigatorMenu);

        for (var i = 0; i < this.theData.length; i++) {
            var btn =  $( '<div  id="btnMenuPage'+i+'" class="btn btn-info isBT" ' +
                'style="text-align:left;min-width:190px;margin-top:2px;" data-page="'+i+'">' +
                (i+1) + ' ' +this.theData[i].title+ '</div>');

            btn.unbind( 'click').on('click', this.onClickPage)
            $('#navigator-menu-item-holder').append(btn);

        }



//        for (var i = 0; i < this.theData.length; i++) {
//            var btn =  $( '<div  id="btnPage'+i+'" class="badge badge-primary isBT" ' +
//                'style="margin-right: 5px; height: 22px; " data-page="'+i+'">' +
//                '<i class="fa fa-star"></i> '+(i+1)+ '</div>');
//
//            btn.unbind( 'click').on('click', this.onClickPage)
//            this.navigator.append(btn);
//
//        }
//        var btnClose =  $( '<div class="badge badge-primary isBT" style="margin-left: 15px; height: 22px; "><i class="fa fa-close"></i>Fechar</div>');
//        this.navigator.append(btnClose);
//        btnClose.unbind('click').on('click', function(e){
//            e.preventDefault();
//            e.stopPropagation();
//            HelpAnalise.instance.holder.fadeOut({complete:function(){
//                HelpAnalise.instance.holder.html( ' ' );
//                delete HelpAnalise.instance;
//
//            }})
//
//        })
//        if (HelpAnalise.DEBUG) {
//            this.navigator.css({
//                border: '2px solid #0000ff'
//
//            })
//        }

    };
    HelpAnalise.prototype.onClickPage = function(e){
        e.preventDefault();
        e.stopPropagation();
        HelpAnalise.instance.currentIndex = $(e.currentTarget).data('page');
        HelpAnalise.instance.drawScreen();

    }

    HelpAnalise.prototype.drawScreen = function()
    {
      //  console.log(this.currentIndex);
        $('.isBT').removeClass('isBTSelected');
        $('#btnPage'+this.currentIndex).addClass('isBTSelected');
        $('#btnMenuPage'+this.currentIndex).addClass('isBTSelected');
        this.bgContent.html('');
        var inData = this.theData[this.currentIndex];
        var rect = inData.rect;
        rect.left = rect.left || 0;
        rect.top = rect.top || 0;
        rect.width = rect.width || 0;
        rect.height = rect.height || 0;

        var trect = inData.textRect;
        trect.left = trect.left || 0;
        trect.top = trect.top || 0;
        trect.width = trect.width || 0;
        trect.height = trect.height || 0;


        //area sombra
        this.appendDiv({
            left: 0,
            top: 0,
            width: '100%',
            height: rect.top,
            color: '#000',
            opacity: .6
        });
        this.appendDiv({
            left: 0,
            top: rect.top,
            width: rect.left,
            height: rect.height,
            color: '#000',
            opacity: .6
        });
        this.appendDiv({
            left: 0,
            top: rect.top + rect.height,
            width: '100%',
            height: '100%',
            color: '#000',
            opacity: .6
        });
        this.appendDiv({
            left: rect.left + rect.width,
            top: rect.top,
            width: '100%',
            height: rect.height,
            color: '#000',
            opacity: .6
        });

        //area visivel
        this.appendDiv({
            left: rect.left,
            top: rect.top,
            width: rect.width,
            height: rect.height,
            color: '#ffffff',
            opacity: 0.01,
            isfocus:true
        });
        if(inData.extraRects){
            for (var i = 0; i < inData.extraRects.length; i++) {
                var obj = inData.extraRects[i];
                this.appendDiv({
                    left: obj.left,
                    top: obj.top,
                    width: obj.width,
                    height: obj.height,
                    color: obj.color||'#ffffff'
                    //opacity: 0.01,
                    //isfocus:true
                });

            }
        }

        //area texto
        this.appendDiv({
            left: trect.left,
            top: trect.top,
            width: trect.width,
            height: trect.height,
            color: '#ffffff',
            opacity: 1,
            text: inData.text,
            title:inData.title
        });
    }

    HelpAnalise.prototype.appendDiv = function (inData) {

        inData.left = inData.left || 0;
        inData.top = inData.top || 0;
        inData.width = inData.width || 0;
        inData.height = inData.height || 0;

        inData.color = inData.color || '#000000';
        inData.opacity = inData.opacity || 1;
        //inData.text= inData.height||0;


        var b = $("<div></div>");
        b.css({
                position: 'absolute',
                width: inData.width,
                height: inData.height,
                top: inData.top,
                left: inData.left,
                'background-color': inData.color,
                opacity: inData.opacity


            }
        );

        if(inData.isfocus){
            b.css({
                'background-color': 'rgba(255, 255, 255,0.1)',
              //  'border': '3px solid #ff0000',
                opacity:1
            });

        }
        if (inData.title) {
            b.css({
                padding:'15px',
                'text-align': 'left',
                'background-color': 'rgba(0,0,0,.3)',
                color:"#ffffff",
                'font-size': '14px'

            })
            b.append('<h1>'+ inData.title+ '</h1>');
        }
        if (inData.text) {
            b.append(inData.text);
        }
        this.bgContent.append(b);


    }


    return HelpAnalise;

})();
