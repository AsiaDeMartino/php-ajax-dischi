const app = new Vue({
    el:'#app',
    data: {
        canzoni: [],
        select: '',
    },
    methods:{
        fetchData: function(){
            axios.get('http://localhost:8888/php-ajax-dischi/server.php', {
                params: {
                    select: this.select
                }
            })
            .then( res => {
                console.log(res.data);
                this.canzoni = res.data;
            });
        }
    },
    created() {
        this.fetchData();
      },
});