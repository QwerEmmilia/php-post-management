$(document).ready(function() {
    $('.pagination-link').click(function(e) {
        e.preventDefault();

        var page = $(this).data('page');
        loadPosts(page);
    });

    function loadPosts(page) {
    $.ajax({
    url: '../main.php',
    type: 'GET',
    data: { page: page },
    success: function(response) {
    $('#postsContainer').html(response);
    updatePaginationLinks(page);
},
    error: function(xhr, status, error) {
    console.log(error);
}
});
}

    function updatePaginationLinks(currentPage) {
    $('#paginationContainer .pagination-link').each(function() {
    var page = $(this).data('page');
    $(this).attr('href', '#');
    if (page === currentPage) {
    $(this).addClass('active');
} else {
    $(this).removeClass('active');
}
});
}
});