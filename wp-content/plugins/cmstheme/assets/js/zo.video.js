/**
 * Created by John Nguyen on 2-12-2015.
 * @version 1.0
 * @author VnZacky
 */
jQuery(document).ready(function ($) {
    "use strict";
    $('.video-player .video-close').on('click', function(e) {
        $(this).parent().find('iframe').remove();
        $(this).parent().animate({
            opacity: 0
        }, function() {
            $(this).hide();
        });
        e.preventDefault();
    });
    $('.zo-video-play-wrapper .play-button').on('click', function(e) {
        e.preventDefault();
        var url = $(this).data('video');
        var width = $(this).data('width');
        var height = $(this).data('height');
        var autoplay = $(this).data('autoplay');
        var control = $(this).data('control');
        var info = $(this).data('info');
        if (url.match('(http|https)://(www.)?youtube|youtu\.be')) {
            var id = url.split(/v\/|v=|youtu\.be\//)[1].split(/[?&]/)[0];
            var vid = 'https://www.youtube.com/embed/' + id + '?autoplay='+autoplay+'&controls='+control+'&showinfo='+info;
        } else if (url.indexOf('vimeo.com') > -1) {
            var id = url.split('vimeo.com/')[1].replace('/', '');
            var vid = 'https://player.vimeo.com/video/' + id + '?autoplay='+autoplay+'&title='+info+'&byline=0&portrait=0';
        }
        var player = $(this).closest('.zo-video-play-wrapper').find('.video-player')
            .append('<iframe style="height:' + height + ';width:' + width + ';" src="' + vid + '"></iframe')
            .css({
                display: 'block',
                opacity: 0
            }).animate({
                opacity: 1
            });
    });
});
