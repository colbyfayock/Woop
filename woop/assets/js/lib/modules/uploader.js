define(function() {
    var uploader = function() {

        $('input[type="file"]').change(function(){
            var that = $(this),
				filename = that.val();
			filename = filename.split('\\').pop();
            $('.filename span').text(filename);
        });
    };
    return uploader;
});