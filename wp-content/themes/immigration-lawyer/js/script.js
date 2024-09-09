var r=$("body,html"),b=$("body"),w=$(window),mobile=!1;$(document).ready(function(){function s(s,i,o){var e=o,l=$(".l-promo__nav li").eq(e),t=l.find("a").html();l.addClass("is-active").siblings().removeClass("is-active"),$(".l-promo__navbar-text div").html(t)}$(".w-promo__slider").slick({arrows:!0,dots:!1,infinite:!1,speed:1e3,fade:!0,cssEase:"ease"}).on("beforeChange",function(i,o,e,l){s(this,e,l)}),$(".w-team__slider").each(function(){$(this).slick({accessibility:!1,arrows:!1,dots:!1,infinite:!1,slidesToShow:5,slidesToScroll:1,swipe:!1,responsive:[{breakpoint:1200,settings:{dots:!0,swipe:!0,slidesToShow:4,slidesToScroll:1}},{breakpoint:992,settings:{dots:!0,swipe:!0,slidesToShow:3,slidesToScroll:1}},{breakpoint:768,settings:{dots:!0,swipe:!0,slidesToShow:2,slidesToScroll:1}}]})}),$(".w-framed__slider").each(function(){$(this).slick({accessibility:!0,arrows:!1,dots:!0,infinite:!1,slidesToShow:2,slidesToScroll:1,swipe:!1,responsive:[{breakpoint:1200,settings:{dots:!0,swipe:!0,slidesToShow:2,slidesToScroll:1}},{breakpoint:992,settings:{dots:!0,swipe:!0,slidesToShow:2,slidesToScroll:1}},{breakpoint:768,settings:{dots:!0,swipe:!0,slidesToShow:1,slidesToScroll:1}}]})}),$(".w-publish__slider").each(function(){$(this).slick({accessibility:!1,arrows:!1,dots:!1,infinite:!1,slidesToShow:4,slidesToScroll:1,swipe:!1,responsive:[{breakpoint:1200,settings:{dots:!0,swipe:!0,slidesToShow:4,slidesToScroll:1}},{breakpoint:992,settings:{dots:!0,swipe:!0,slidesToShow:3,slidesToScroll:1}},{breakpoint:768,settings:{dots:!0,swipe:!0,slidesToShow:2,slidesToScroll:1}}]})}),$(".w-feedbacks__slider").each(function(){$(this).slick({accessibility:!1,arrows:!0,dots:!0,infinite:!0,slidesToShow:1,slidesToScroll:1})}),$(".w-gallery__slider").each(function(){$(this).slick({accessibility:!1,arrows:!1,dots:!1,infinite:!1,slidesToShow:2,slidesToScroll:1,swipe:!1,responsive:[{breakpoint:768,settings:{dots:!0,swipe:!0,slidesToShow:1,slidesToScroll:1}}]})}),$(document).on("click",function(){$(".l-promo__navbar.is-dropped").removeClass("is-dropped")}),$(".l-promo__navbar").on("click",function(s){$(this).toggleClass("is-dropped"),s.stopPropagation()}),$(".l-promo__nav a").on("click",function(s){var i=$(this),o=(i.html(),i.closest(".l-promo__navbar")),e=i.data("slide");o.removeClass("is-dropped"),$(".w-promo__slider").slick("slickGoTo",e),s.preventDefault(),s.stopPropagation()})});
// JS MaskedInput
!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e("object"==typeof exports?require("jquery"):jQuery)}(function(e){var t,n=navigator.userAgent,a=/iphone/i.test(n),i=/chrome/i.test(n),r=/android/i.test(n);e.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},e.fn.extend({caret:function(e,t){var n;if(0!==this.length&&!this.is(":hidden")&&this.get(0)===document.activeElement)return"number"==typeof e?(t="number"==typeof t?t:e,this.each(function(){this.setSelectionRange?this.setSelectionRange(e,t):this.createTextRange&&(n=this.createTextRange(),n.collapse(!0),n.moveEnd("character",t),n.moveStart("character",e),n.select())})):(this[0].setSelectionRange?(e=this[0].selectionStart,t=this[0].selectionEnd):document.selection&&document.selection.createRange&&(n=document.selection.createRange(),e=0-n.duplicate().moveStart("character",-1e5),t=e+n.text.length),{begin:e,end:t})},unmask:function(){return this.trigger("unmask")},mask:function(n,o){var c,l,u,f,s,g,h,m;if(!n&&this.length>0){c=e(this[0]);var d=c.data(e.mask.dataName);return d?d():void 0}return o=e.extend({autoclear:e.mask.autoclear,placeholder:e.mask.placeholder,completed:null},o),l=e.mask.definitions,u=[],f=h=n.length,s=null,n=String(n),e.each(n.split(""),function(e,t){"?"==t?(h--,f=e):l[t]?(u.push(new RegExp(l[t])),null===s&&(s=u.length-1),f>e&&(g=u.length-1)):u.push(null)}),this.trigger("unmask").each(function(){function c(){if(o.completed){for(var e=s;g>=e;e++)if(u[e]&&E[e]===d(e))return;o.completed.call(w)}}function d(e){return e<o.placeholder.length?o.placeholder.charAt(e):o.placeholder.charAt(0)}function p(e){for(;++e<h&&!u[e];);return e}function v(e){for(;--e>=0&&!u[e];);return e}function b(e,t){var n,a;if(!(0>e)){for(n=e,a=p(t);h>n;n++)if(u[n]){if(!(h>a&&u[n].test(E[a])))break;E[n]=E[a],E[a]=d(a),a=p(a)}S(),w.caret(Math.max(s,e))}}function k(e){var t,n,a,i;for(t=e,n=d(e);h>t;t++)if(u[t]){if(a=p(t),i=E[t],E[t]=n,!(h>a&&u[a].test(i)))break;n=i}}function y(e){var t=w.val(),n=w.caret();if(m&&m.length&&m.length>t.length){for(T(!0);n.begin>0&&!u[n.begin-1];)n.begin--;if(0===n.begin)for(;n.begin<s&&!u[n.begin];)n.begin++;w.caret(n.begin,n.begin)}else{var a=(T(!0),t.charAt(n.begin));n.begin<h&&(u[n.begin]?u[n.begin].test(a)&&n.begin++:(n.begin++,u[n.begin].test(a)&&n.begin++)),w.caret(n.begin,n.begin)}c()}function x(e){T(),w.val()!=D&&w.change()}function j(e){if(!w.prop("readonly")){var t,n,i,r=e.which||e.keyCode;m=w.val(),8===r||46===r||a&&127===r?(t=w.caret(),n=t.begin,i=t.end,i-n===0&&(n=46!==r?v(n):i=p(n-1),i=46===r?p(i):i),R(n,i),b(n,i-1),e.preventDefault()):13===r?x.call(this,e):27===r&&(w.val(D),w.caret(0,T()),e.preventDefault())}}function A(t){if(!w.prop("readonly")){var n,a,i,o=t.which||t.keyCode,l=w.caret();if(!(t.ctrlKey||t.altKey||t.metaKey||32>o)&&o&&13!==o){if(l.end-l.begin!==0&&(R(l.begin,l.end),b(l.begin,l.end-1)),n=p(l.begin-1),h>n&&(a=String.fromCharCode(o),u[n].test(a))){if(k(n),E[n]=a,S(),i=p(n),r){var f=function(){e.proxy(e.fn.caret,w,i)()};setTimeout(f,0)}else w.caret(i);l.begin<=g&&c()}t.preventDefault()}}}function R(e,t){var n;for(n=e;t>n&&h>n;n++)u[n]&&(E[n]=d(n))}function S(){w.val(E.join(""))}function T(e){var t,n,a,i=w.val(),r=-1;for(t=0,a=0;h>t;t++)if(u[t]){for(E[t]=d(t);a++<i.length;)if(n=i.charAt(a-1),u[t].test(n)){E[t]=n,r=t;break}if(a>i.length){R(t+1,h);break}}else E[t]===i.charAt(a)&&a++,f>t&&(r=t);return e?S():f>r+1?o.autoclear||E.join("")===C?(w.val()&&w.val(""),R(0,h)):S():(S(),w.val(w.val().substring(0,r+1))),f?t:s}var w=e(this),E=e.map(n.split(""),function(e,t){return"?"!=e?l[e]?d(t):e:void 0}),C=E.join(""),D=w.val();w.data(e.mask.dataName,function(){return e.map(E,function(e,t){return u[t]&&e!=d(t)?e:null}).join("")}),w.one("unmask",function(){w.off(".mask").removeData(e.mask.dataName)}).on("focus.mask",function(){if(!w.prop("readonly")){clearTimeout(t);var e;D=w.val(),e=T(),t=setTimeout(function(){w.get(0)===document.activeElement&&(S(),e==n.replace("?","").length?w.caret(0,e):w.caret(e))},10)}}).on("blur.mask",x).on("keydown.mask",j).on("keypress.mask",A).on("input.mask paste.mask",function(){w.prop("readonly")||setTimeout(function(){var e=T(!0);w.caret(e),c()},0)}),i&&r&&w.off("input.mask").on("input.mask",y),T()})}})});
// Add to favorite
function addFavorite(a) {
    try {
        window.external.AddFavorite('http://migrate.nakaz.ua/', 'Легальный Вид на Жительство');
    }
    catch (e) {
        try {
            window.sidebar.addPanel ('Легальный Вид на Жительство', 'migrate.nakaz.ua/' ,"");
        }
        catch (e) {
            if (typeof(opera)=="object") {
                a.rel = "sidebar";
                a.title = title;
                a.url = url;
                return true;
            }
            else {
                alert("Нажмите Ctrl-D для добавления в избранное");
            }
        }
    }
    return false;
}
$(document).ready(function(){
// Custom phone mask
    $('.jcf-phone').mask("+99 (999) 999-99-99");

	var mobile = false;
	 if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) mobile = true;
	 if(mobile==true){$('html').addClass('js-mobile')}else{$('html').addClass('not-mobile')}

	$('.acco').acco();
});
// set pack val
function setPack(val,val2) {
    $('input[name=pack]').val(val);
    $('.headline-form').text(val2);
}
$(document).ready(function() {
  ///hover container lang menu
  $("#lang-menu").hover(
    function() {
      $(this).addClass("cls-border-lang");
      $(this)
        .children()
        .eq(0)
        .addClass("cls-borderbottom-lang");
      $("#lang-menu ul")
        .stop()
        .slideToggle(100);
    },
    function() {
      $(this).removeClass("cls-border-lang");
      $(this)
        .children()
        .eq(0)
        .removeClass("cls-borderbottom-lang");
      $("#lang-menu ul")
        .stop()
        .slideToggle(100);
    }
  );
  /// click languages
  $("#lang-menu ul li").on("click", function() {
    //select lang and apply changes
    $lang = $(this).text();
    $("#lang-menu div").text($lang);
  });
});