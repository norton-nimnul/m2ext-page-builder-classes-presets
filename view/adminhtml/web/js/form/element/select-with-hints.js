define([
    'Magento_Ui/js/form/element/select'
], function (Select) {
    'use strict';

    return Select.extend({
        defaults: {
            additionalClasses: 'select-with-hints',
            initNotice: ''
        },

        initialize: function () {
            this._super();

            this.initNotice = this.notice();
            this.setSelectNotice();

            this.value.subscribe(() => {
                this.setSelectNotice();
            })
        },

        setSelectNotice: function () {
            const notice = this.options().find(option => this.value() === option.value)?.caption;
            this.notice(this.value() ? notice : this.initNotice);
        }
    });
});
