$('.add-video-card').on('click', function (e) {
    e.preventDefault();
    var parent = $(this).parent().children('.video-cards');
    $(this).parent().children('.hidden-video-card').clone().addClass('video-card').appendTo(parent);
})
