const app = new Vue({
    el:'#app',
    data:{
        appUrl      : '/routines',
        message     : "Bienvenido a tus rutinas",
        loading     : false,
        rutinasUser : [],
    },
    mounted(){
        this.obtenerRutinas();
    },
    methods:{
        obtenerRutinas(){
            this.loading=true;
            this.message="Obteniendo información";
            axios.get('/obtenerMisRutinas').then(response => {
            this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.rutinasUser = response.data;
                this.loading = false;
            })
        }
    },
    computed:{

    }
})


