function sort_rating() {
    var table = $('#mytable');
    var tbody = $('#table1');

    tbody.find('tr').sort(function (a, b) {
        if ($('#rating_order').val() == 'asc') {
            return $('td:nth-child(3)', a).text().localeCompare($('td:nth-child(3)', b).text());
        } else {
            return $('td:nth-child(3)', b).text().localeCompare($('td:nth-child(3)', a).text());
        }

    }).appendTo(tbody);

    var sort_order = $('#rating_order').val();
    if (sort_order == "asc") {
        document.getElementById("rating_order").value = "desc";
    }
    if (sort_order == "desc") {
        document.getElementById("rating_order").value = "asc";
    }
}

$(document).ready(function () {
    $('.nj_sorting_table').DataTable({
        dom: 't',
        paging: false,
        columnDefs: [{
            targets: 'no-sort',
            orderable: false,
            
        }]
    });
});
