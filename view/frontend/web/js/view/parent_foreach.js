define([
    "ko",
    "uiComponent",
    "mage/translate",
    "jquery",
], function (ko, Component, $t, $) {
    "use strict";
    return Component.extend({
        defaults: {
            template: "GFNL_KnockoutJsChild/parent_foreach",
            arraryTest:ko.observable([
                {
                    title:'test 1'
                },
                {
                    title: 'test 2'
                }

            ])
        },
        initialize: function (config) {
            this._super();
        }
    });
});
