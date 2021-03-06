var promtDlg = null;
var popupDlg = null;
$(function(){
    
    // promt dialog
    promtDlg = new ucs.Promt({
        name: 'promt',
        overlay : {use :true}
    }, function(dlg){
        dlg.find('.close').click();
    });
    
    // popup dialog
    popupDlg = new ucs.Popup({
        css  : {width : '550px'},
        name : 'popup',
        overlay : {use :true},
        draggable : false     
    }, function(dlg){
        dlg.find('.close').click();
    });
    
    // label inside input and textarea
    $('input[type="text"], textarea').focus(function(){
        var el = $(this);
        if (el.attr('data') && el.attr('data') == el.val()) {
            el.val('');
        }
    }).blur(function(){
        var el = $(this);
        if (el.attr('data') && $.trim(el.val()) == '') {
           el.val(el.attr('data')); 
        }
    }).each(function(){
        var el = $(this);
        if (el.attr('data') && $.trim(el.val()) == '') {
           el.val(el.attr('data')); 
        }
    }); 
    
    // tabs
    $('.tab a').click(function(){
        var tab = $(this);
        var p = tab.parent().parent();
        tab.siblings().removeClass('active').each(function(){
            var t = $(this);
            p.find(t.attr('href')).hide();
        }).end().addClass('active');
        p.find(tab.attr('href')).show();
        return false;
    }); 
    
    // Contact
    $('a.contact').click(function(){
        promtDlg.show('<a href="mailto:' + $(this).data('contact') + '">' + $(this).data('contact') + '</a>');
        return false;
    })
    
});

