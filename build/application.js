(function (window) {

    window.App = {};

    App.Controller = (function () {

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
})();

    App.Sidebar = (function () {


    /**
     * @namespace App.Sidebar
     */
    var sidebar = {};

    /**
     * @namespace App.Sidebar.init
     */
    sidebar.init = function () {};

    return sidebar
})()
;

    // MODULE Helper
/**
 * @type {{}}
 */
App.Helper = {};

/**
 * a
 */
App.Helper.one = function () {};

/**
 *
 */
App.Helper.two = function () {};
// s;

})(window);

// as-a-baaaasads