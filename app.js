const app = new Vue({
    el:'#app',
    data: {
        canzoni: [],
    },
    methods:{

    },
    created() {
        axios.get('http://localhost:8888/php-ajax-dischi/server.php')
        .then( res => {
          console.log(res.data);
          this.canzoni = res.data;
        });
      },
});