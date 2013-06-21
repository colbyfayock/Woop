require({
    paths: {
        'validate'   : 'lib/jquery-validate-1.12.0pre.min',

        // Modules
        'uploader'   : 'lib/modules/uploader',
        'functions'  : 'lib/functions'
    },
    name: "main",
    out: "main.min.js"
});

// Plugins

require(['lib/modules/forms'], function(forms) {
    forms.formValidate('form');
});

// Modules

require(['uploader'], function(uploader) {
	uploader();
});


// General

require(['functions'], function() {
    $(function() {

        $(window).resize(function(){
            clearStyles('.nav-collapse');
        });

    });
});