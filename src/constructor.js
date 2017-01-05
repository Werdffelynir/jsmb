(function () {

    return function () {
        if (!(this instanceof Application)) return new Application();

        this.arguments = arguments;



        return this;
    }
})()