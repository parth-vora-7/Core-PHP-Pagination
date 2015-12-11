/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function pageLinks() {
    var rec_per_page = jQuery('.pageLimit').val();
    var total = 0;
    var pagination = '';
    jQuery.ajax(
            {
                url: "index.php",
                type: 'post',
                data: {
                    getCount: 'getCount'
                },
                success: function (count) {
                    total = count;
                    var page_links = Math.ceil(total / rec_per_page);
                    for (var i = 1; i <= page_links; i++) {
                        pagination += "<li onclick='paginate(this)'><a>" + i + "</a></li>";
                    }
                    jQuery('.pagination').html(pagination);
                    paginate(jQuery('.pagination li:first'));
                    jQuery('.pagination li:first').addClass('active');
                    
                }
            });
}

function paginate(ele) {
    var current_page = jQuery(ele).text();
    var rec_per_page = jQuery('.pageLimit').val();

    if (!jQuery(ele).hasClass('active')) {
        jQuery.ajax(
                {
                    url: "index.php",
                    data: {
                        current_page: current_page,
                        rec_per_page: rec_per_page
                    },
                    type: 'post',
                    success: function (result) {
                        var res = jQuery.parseJSON(result);
                        var html = '';
                        res.forEach(function (rec) {
                            html += "<tr>";
                            html += "<td>" + rec.first_name + "</td>";
                            html += "<td>" + rec.last_name + "</td>";
                            html += "<td>" + rec.address + "</td>";
                            html += "<td>" + rec.phone_no + "</td>";
                            html += "<td>" + rec.email + "</td>";
                            html += "<td><a href=userEdit.php?uid=" + rec.uid + ">Edit</a></td>";
                            html += "<td><a href=userDelete.php?uid=" + rec.uid + ">Delete</a></td>";
                            html += '</tr>';
                        });
                        jQuery('.table tbody').html(html);
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
        jQuery('.pagination li').removeClass('active');
        jQuery(ele).addClass('active');
    }
}

jQuery(document).ready(function () {
    jQuery('.pagination li:first').addClass('active');
});


