(function($) {

	function initColorPicker(widget) {
		widget.find('.basil-color-field').wpColorPicker({
			change: _.throttle(function() {
				$(this).trigger('change');
			}, 4000)
		});
	}

	function onFormUpdate(event, widget) {
		initColorPicker(widget);
	}

	// Update color picker when widget is added or updated
	$(document).on('widget-added widget-updated', onFormUpdate);

    $(document).ready(function() {
		// Color picker
		$('.widget:has(.basil-color-field)').each(function() {
			initColorPicker($(this));
		});

		// Media upload
		function media_upload(container_selector) {
			var _custom_media = true,
				_orig_send_attachment = wp.media.editor.send.attachment;

			// Select image
			$('body').on('click', container_selector + ' .basil-image-upload-btn', function() {
				let button = $(this);

				wp.media.editor.send.attachment = function (props, attachment) {
					if (_custom_media) {
						if (attachment.id) {
							let parent = button.parent();
							let id_field = parent.find('input.basil-image-upload-image_id');
							let uri_field = parent.find('input.basil-image-upload-attachment_uri');

							button.next().find('img').attr('src', attachment.url);

							id_field.val(attachment.id).trigger('change');
							uri_field.val(attachment.url).trigger('change');
							$('.basil-image-upload-clr-btn').css('display', 'block');
						}
					} else {
						return _orig_send_attachment.apply(button, [props, attachment]);
					}
				}
				wp.media.editor.open(button);
				return false;
			});

			// Clear image
			$('body').on('click', container_selector + ' .basil-image-upload-clr-btn', function() {
				let button = $(this);

				let img_element = button.prev();
				let parent = button.parent().parent().parent();
				let id_field = parent.find('input.basil-image-upload-image_id');
				let uri_field = parent.find('input.basil-image-upload-attachment_uri');

				img_element.attr('src', '');
				id_field.val('').trigger('change');
				uri_field.val('').trigger('change');
				$('.basil-image-upload-clr-btn').css('display', 'none');
				return false;
			});
		}

		media_upload('.basil-image-upload-field');

		// Complex field
		// Add a new sub-field group
		$('body').on('click', '.basil-add-field-group', function () {
			let button = $(this);
			let basil_complex_field = button.parent().find('.basil-complex-field');

			// Clone .basil-field-group and append it to the end of the list
			let clone = $('.basil-field-group:last').clone();

			// Since we are cloning an element, we need to clear the values of the input fields
			clone.find('input[name$="[image_id][]"]').val('');
			clone.find('input[name$="[attachment_uri][]"]').val('');
			clone.find('input[name$="[title][]"]').val('');
			clone.find('textarea[name$="[content][]"]').val('');
			clone.find('.basil-image-upload-preview').attr('src', '');

			// Add a remove button but only to the first one.
			clone.find('.basil-remove-field-group').remove();
			clone.append(`<button class="basil-remove-field-group button button-secondary">Remove</button>`);

			clone.appendTo(basil_complex_field);
		});

		// Remove a sub-field group
		$('body').on('click', '.basil-remove-field-group', function(event) {
			const fieldGroup = event.target.closest('.basil-field-group');
			fieldGroup.remove();
		});
	});
})(jQuery);
