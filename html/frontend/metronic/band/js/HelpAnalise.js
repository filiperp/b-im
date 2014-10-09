/**
 * Created by frpereira on 09/10/14.
 */

var HelpAnalise;
HelpAnalise = (function () {
    'use strict';
    HelpAnalise.DEBUG = true;
    HelpAnalise.prototype.theData = null;
    HelpAnalise.prototype.currentIndex = null;

    HelpAnalise.prototype.holder = null;

    HelpAnalise.prototype.bgContent = null;
    HelpAnalise.BG_CONTENT = 'bg_content_help_analise';

    HelpAnalise.prototype.navigator = null;
    HelpAnalise.NAVIGATOR = 'navigator_help_analise';

    function HelpAnalise(theData, holder) {
        this.theData = theData;
        this.currentIndex = 0;
        this.holder = $('#' + holder);
        this.holder.html(' ').hide();
        this.createBG();
        this.createNavigator();
        this.drawScreen();
        this.holder.fadeIn();
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
            bottom: '0px'
        });

        if (HelpAnalise.DEBUG) {
            this.navigator.css({
                border: '2px solid #0000ff'

            })
        }
        this.holder.append(this.navigator);
    };
    HelpAnalise.prototype.drawScreen = function()
    {
        this.bgContent.html('');
        var inData = this.theData[this.currentIndex];
        var rect = inData.rect;
        rect.left = rect.left || 0;
        rect.top = rect.top || 0;
        rect.width = rect.width || 0;
        rect.height = rect.height || 0;

        //area sombra
        this.appendDiv({
            left: 0,
            top: 0,
            width: '100%',
            height: rect.top,
            color: '#000',
            opacity: .4
        });
        this.appendDiv({
            left: 0,
            top: rect.top,
            width: rect.left,
            height: '100%',
            color: '#000',
            opacity: .4
        });
        this.appendDiv({
            left: rect.left + rect.width,
            top: rect.top,
            width: '100%',
            height: '100%',
            color: '#000',
            opacity: .4
        });
        this.appendDiv({
            left: rect.left,
            top: rect.top + rect.height,
            width: rect.width,
            height: '100%',
            color: '#000',
            opacity: .4
        });
        //area visivel
        this.appendDiv({
            left: rect.left,
            top: rect.top,
            width: rect.width,
            height: rect.height,
            color: '#ff0000',
            opacity: .2
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
        if (inData.text) {
            b.hatml(inData.text);
        }
        this.bgContent.append(b);


    }


    return HelpAnalise;

})();
