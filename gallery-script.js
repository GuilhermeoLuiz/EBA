jQuery(document).ready(function($){
    $('#upload_gallery_images').on('click', function(e) {
        e.preventDefault();
        
        var image_gallery_frame = wp.media({
            title: 'Selecione imagens para a galeria',
            multiple: true
        });

        image_gallery_frame.on('select', function() {
            var attachment_ids = [];

            image_gallery_frame.state().get('selection').map(function(attachment) {
                attachment_ids.push(attachment.id);
            });

            $('#gallery_images').val(attachment_ids.join(','));
        });

        image_gallery_frame.open();
    });
});
