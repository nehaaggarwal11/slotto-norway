$.fn.extend({
    select2_sortable: function (option) {
        var default_option = {
            width: "100%",
            createTag: function (params) {
                return undefined;
            }
        };
        option = $.extend(default_option, option);
        var select = $(this);
        var select2dom = $(select).select2(option);
        var ul = $(select).next(".select2-container").find("ul.select2-selection__rendered");
        ul.sortable({
            placeholder: "ui-state-highlight",
            forcePlaceholderSize: true,
            items: "li:not(.select2-search__field)",
            tolerance: "pointer",
            stop: function () {
                $($(ul).find(".select2-selection__choice").get().reverse()).each(function () {
                    var selected = $(select).select2('data');
                    var value = $(this).attr('title');
                    for (var i = 0; i < selected.length; i++) {
                        if (selected[i].text == value) {
                            value = selected[i].id;
                        }
                    }
                    var option = $(select).find('option[value="' + value + '"]')[0];
                    $(select).prepend(option);
                });
            }
        });
    }
});

$(document).ready(function () {
    window._token = $('meta[name="csrf-token"]').attr('content');

    moment.updateLocale('en', {
        week: {dow: 1} // Monday is the first day of the week
    });

    $('.date').datetimepicker({
        format: 'DD/MM/YYYY',
        locale: 'en',
        icons: {
            up: 'fas fa-chevron-up',
            down: 'fas fa-chevron-down',
            previous: 'fas fa-chevron-left',
            next: 'fas fa-chevron-right'
        }
    });

    $('.datetime').datetimepicker({
        format: 'DD/MM/YYYY HH:mm:ss',
        locale: 'en',
        sideBySide: true,
        icons: {
            up: 'fas fa-chevron-up',
            down: 'fas fa-chevron-down',
            previous: 'fas fa-chevron-left',
            next: 'fas fa-chevron-right'
        }
    });

    $('.timepicker').datetimepicker({
        format: 'HH:mm:ss',
        icons: {
            up: 'fas fa-chevron-up',
            down: 'fas fa-chevron-down',
            previous: 'fas fa-chevron-left',
            next: 'fas fa-chevron-right'
        }
    });

    $('.select-all').click(function () {
        let $select2 = $(this).parent().siblings('.select2');
        $select2.find('option').prop('selected', 'selected');
        $select2.trigger('change')
    });

    $('.deselect-all').click(function () {
        let $select2 = $(this).parent().siblings('.select2');
        $select2.find('option').prop('selected', '');
        $select2.trigger('change')
    });

    $('.select2').select2();

    $(".select2_tags").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    })


    $("select.custom_order").on("select2:select", function (evt) {
        var element = evt.params.data.element;
        var $element = $(element);

        $element.detach();
        $(this).append($element);
        $(this).trigger("change");
    });

    $('select[data-selected]:not([multiple])').each(function () {
        var val = $(this).data('selected');
        $(this).val(val);
    })

    $('select[data-selected][multiple]').each(function () {
        var val = "" + $(this).data('selected');
        if(val.includes(",")){
            val = val.split(",");
        }
        $(this).val(val).change()
    })

    $('.treeview').each(function () {
        var shouldExpand = false;
        $(this).find('li').each(function () {
            if ($(this).hasClass('active')) {
                shouldExpand = true
            }
        });
        if (shouldExpand) {
            $(this).addClass('active')
        }
    })
});
