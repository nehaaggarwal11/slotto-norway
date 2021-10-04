dialogApp = {};

var _menuSelector = '.context-menu';


function _menuEditor(element, event) {
    dialogApp.selection = dialogApp.getSelectedHtml();

    //remove all highlight texts
    $('.content-main .highlight').removeClass('highlight');

    $(_menuSelector).css({ visibility: "hidden" });

    _top = event.pageY - $(_menuSelector).height() - 15;
    _left = event.pageX - 20;//- (($(_menuSelector).width()) / 2) - dialogApp.selection.length;

    _spanId=Math.floor((Math.random() * 100000) + 1);

    if (dialogApp.selection.length > 0) {
       var highlight = window.getSelection();

       var spn = '<span id="span_'+_spanId+'" class="highlight">' + highlight + '</span>';
       replaceSelection(spn,true);

       //show menu items firt
       $(_menuSelector).find('.context-menu-hyperlink').hide();
       $(_menuSelector).find('.context-menu-items').show();
       $('.context-menu-hyperlink-input').val('');

        $(_menuSelector).attr('data-span-id',_spanId);
        $(_menuSelector).css({
            top: _top + "px",
            left: _left + "px",
            visibility: "visible"
        });
    }
}

//creating hyperlink
$(document).on('keyup','.context-menu-hyperlink-input',function(){
  _spanId = $('.context-menu').attr('data-span-id');
  _span   = $('#span_'+_spanId);

  _span.html('<a href="'+$(this).val()+'">'+_span.text()+'</a>');
});
$(document).on('click','.context-menu-hyperlink-close',function(){
  $(_menuSelector).find('.context-menu-hyperlink').hide();
  $(_menuSelector).find('.context-menu-items').show();
});
$(document).on('click', '.context-menu-item', function (e) {
    e.preventDefault();

    _menuType = $(this).attr('data-menu-type');
    _spanId=$(this).parents('.context-menu').attr('data-span-id');
    _span=$('#span_'+_spanId);

    switch (_menuType) {
        case 'font-size':
         {
           if ($(this).find('.font-size').val()=='default') {
              _span.css('font-size','');
           }else {
               _span.css('font-size',$(this).find('.font-size').val());
           }
         }
         break;
        case 'font-family':
          {
            if ($(this).find('.font-family').val()=='default') {
               _span.css('font-family','');
            }else {
                _span.css('font-family',$(this).find('.font-family').val());
            }
          }
          break;
        case 'bold':
            {
             _span.html('<b>'+_span.text()+'</b>');
            }
            break;
        case 'italic':
            {
             _span.html('<i>'+_span.text()+'</i>');
            }
            break;
        case 'underline':
            {
             _span.html('<u>'+_span.text()+'</u>');
            }
            break;
        case 'strikethrough':
              {
               _span.html('<s>'+_span.text()+'</s>');
              }
            break;
        case 'link':
            {
              $(_menuSelector).find('.context-menu-hyperlink').show();
              $(_menuSelector).find('.context-menu-items').hide();
            }
            break;
    }

});

//

function replaceSelectedText(replacementText) {
    var sel, range;
    if (window.getSelection) {
        sel = window.getSelection();
        if (sel.rangeCount) {
            range = sel.getRangeAt(0);
            range.deleteContents();
            range.insertNode(document.createTextNode(replacementText));
        }
    } else if (document.selection && document.selection.createRange) {
        range = document.selection.createRange();
        range.text = replacementText;
    }
    console.log(range);
}


function replaceSelection(html, selectInserted) {
    var sel, range, fragment;

    if (typeof window.getSelection != "undefined") {
        // IE 9 and other non-IE browsers
        sel = window.getSelection();

        // Test that the Selection object contains at least one Range
        if (sel.getRangeAt && sel.rangeCount) {
            // Get the first Range (only Firefox supports more than one)
            range = window.getSelection().getRangeAt(0);
            range.deleteContents();

            // Create a DocumentFragment to insert and populate it with HTML
            // Need to test for the existence of range.createContextualFragment
            // because it's non-standard and IE 9 does not support it
            if (range.createContextualFragment) {
                fragment = range.createContextualFragment(html);
            } else {
                // In IE 9 we need to use innerHTML of a temporary element
                var div = document.createElement("div"), child;
                div.innerHTML = html;
                fragment = document.createDocumentFragment();
                while ( (child = div.firstChild) ) {
                    fragment.appendChild(child);
                }
            }
            var firstInsertedNode = fragment.firstChild;
            var lastInsertedNode = fragment.lastChild;
            range.insertNode(fragment);
            if (selectInserted) {
                if (firstInsertedNode) {
                    range.setStartBefore(firstInsertedNode);
                    range.setEndAfter(lastInsertedNode);
                }
                sel.removeAllRanges();
                sel.addRange(range);
            }
        }
    } else if (document.selection && document.selection.type != "Control") {
        // IE 8 and below
        range = document.selection.createRange();
        range.pasteHTML(html);
    }
}
