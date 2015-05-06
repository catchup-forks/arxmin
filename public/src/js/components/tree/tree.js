require('../../config.js');

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        define([
            'angular',
            'bootstrap',
            'angular-bootstrap',
            'angular-bootstrap-tpls',
            'masonry',
            'angular-strap',
            'angular-strap-tpl',
            'shared/core',
            'shared/notification',
            'shared/header',
            'shared/sidebar',
            'shared/utils',
            'angular-ui-tree',
        ], factory);
    } else {
        factory(angular);
    }
}) (function (angular) {
    'use strict';

    angular.module('tree', [
        'ui.bootstrap',
        'mgcrea.ngStrap',
        'sidebar',
        'utils',
        'ui.tree'
        /*'ui.router',
        'ui.bootstrap',
        'ngAnimate',
        'tc.chartjs',
        'growlNotifications',
        'ui.tree',
        'ui.map',
        'datatables',
        'tien.clndr',
        'ui.switchery',
        'gridshore.c3js.chart'*/
    ]);

    require('./treeController.js');

    // bootstrap the app (async)
    angular.element(document).ready(function () {
        angular.bootstrap(document, ['tree']);
    });
});
