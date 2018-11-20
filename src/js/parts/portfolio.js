const $ = window.jQuery;

if ($('.portfolio-styling').length) {
    $('.video-thumbnail').on('click', function(e) {
        let toAppend = `<div id="show-videos">Show all videos</div>`+`<iframe id="current-video" width="100%" 
src=${e.toElement.dataset.attribute} frameborder="0" allow="accelerometer; autoplay; encrypted-media; 
gyroscope; picture-in-picture" allowfullscreen></iframe>`;
        $('.all-videos-wrapper').css('display', 'none');
        $('#video-player-wrapper').append(toAppend).css('display', 'block');
        $('#show-videos').on('click', function() {
            $('#show-videos').remove();
            $('#current-video').remove();
            $('#video-player-wrapper').css('display', 'none');
            $('.all-videos-wrapper').css('display', 'block');
        });
    });
}
