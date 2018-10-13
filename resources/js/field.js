Nova.booting((Vue, router) => {
    Vue.component('index-nova-field-place', require('./components/IndexField'));
    Vue.component('detail-nova-field-place', require('./components/DetailField'));
    Vue.component('form-nova-field-place', require('./components/FormField'));
})
