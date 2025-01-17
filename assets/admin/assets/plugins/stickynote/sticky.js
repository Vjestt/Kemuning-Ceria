'use strict';
(function ($) {
	$.fn.autogrow = function (options) {
		return this.filter('textarea').each(function () {
			var self = this;
			var $self = $(self);
			var minHeight = $self.height();
			var noFlickerPad = $self.hasClass('autogrow-short') ? 0 : parseInt($self.css('lineHeight')) || 0;
			var shadow = $('<div></div>').css({
				position: 'absolute',
				top: -10000,
				left: -10000,
				width: $self.width(),
				fontSize: $self.css('fontSize'),
				fontFamily: $self.css('fontFamily'),
				fontWeight: $self.css('fontWeight'),
				lineHeight: $self.css('lineHeight'),
				resize: 'none',
				'word-wrap': 'break-word'
			}).appendTo(document.body);
			var update = function (event) {
				var times = function (string, number) {
					for (var i = 0, r = ''; i < number; i++) r += string;
					return r;
				};
				var val = self.value.replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/&/g, '&amp;').replace(/\n$/, '<br/>&nbsp;').replace(/\n/g, '<br/>').replace(/ {2,}/g, function (space) {
					return times('&nbsp;', space.length - 1) + ' '
				});
				if (event && event.data && event.data.event === 'keydown' && event.keyCode === 13) {
					val += '<br />';
				}
				shadow.css('width', $self.width());
				shadow.html(val + (noFlickerPad === 0 ? '...' : ''));
				$self.height(Math.max(shadow.height() + noFlickerPad, minHeight));
			}
			$self.change(update).keyup(update).keydown({
				event: 'keydown'
			}, update);
			$(window).resize(update);
			update();
		});
	};
})(jQuery);

var noteTemp = '<div class="row mb-2">' +
    '<div class="col-lg-10 col-sm-10 col-10">'+
    '<input type="text" name="fasilitas[]" class="form-control" value="${firstFacilityValue}" placeholder="Masukkan fasilitas">'+
    '</div>'+
    '<div class="col-lg-2 col-sm-2 col-2 ps-0 mb-2">'+
    '<div class="add-icon">'+
    '<a href="javascript:void(0);" class="remove btn-danger">'+
    '<i class="fas fa-minus"></i>'+
    '</a>'+
    '</div>'+
    '</div>'+
    '</div>';
var noteZindex = 1;


function deleteNote() {
	$(this).parent('.note').hide("puff", {
		percent: 133
	}, 250);
};

function newNote() {
	$(noteTemp).hide().appendTo("#board").show("fade", 300).draggable().on('dragstart', function () {
		$(this).zIndex(++noteZindex);
	});
	$('.remove').click(deleteNote);
	$('textarea').autogrow();
	$('.note')
	return false;
};
(function ($) {
	"use strict";
	$("#board").height($(document).height());
	$("#add_new").click(newNote);
	$('.remove').click(deleteNote);
	newNote();
	return false;
})(jQuery);
