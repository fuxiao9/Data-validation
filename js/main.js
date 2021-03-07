var vm = new Vue({
    el: '#app',
    data: {
        logShow: true,
        regShow: false,
        joke: ''
    },
    methods: {
        register(){
            this.logShow = false;
            this.regShow = true;
        },
        login(){
            this.regShow = false;
            this.logShow = true;
        }
    },
})