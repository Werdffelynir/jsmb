(function () {


    // controller
    var controller = {};

    /**
     * @namespace App.Controller.construct
     */
    controller.construct = function(){};

    /**
     * @namespace App.Controller.domLoaded
     */
    controller.domLoaded = function(callback) {
        if (document.querySelector('body'))
            callback.call(this);
        else
            document.addEventListener('DOMContentLoaded', callback);
    };

    return controller
})()