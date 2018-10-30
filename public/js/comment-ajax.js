function loadingComment() {
    $('#comment-content .pagination a').on('click', function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: $(this).attr('href'),
            success: function (data) {
                $('#comment-content').html(data);
                loadingComment();
            },
            error: function (xhr) {
                console.log(xhr.message);
            }
        });
    });
}

$(document).ready(function(){
    loadingComment();
});
