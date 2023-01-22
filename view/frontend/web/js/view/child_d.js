define([
    "ko",
    "uiComponent",
    "mage/translate",
    "jquery",
], function (ko, Component, $t, $) {
    "use strict";
    return Component.extend({
        defaults: {
            template: "GFNL_KnockoutJsChild/child_d",
        },
        initialize: function (config) {
            this._super();

        }
    });
});
