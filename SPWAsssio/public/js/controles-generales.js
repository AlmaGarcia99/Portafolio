const app = new Vue({
    el:'#app',
    data:{
        loading : true,
        user : {},
        message : "Bienvenido"
    },
    mounted(){
        this.obtenerUsuarioLogueado();
        this.alertPerfil();
    },
    methods:{
        obtenerUsuarioLogueado(){
            this.message="Preparando información";
            axios.get('/obtenerDatos').then(response => {
                this.message = "Información lista";
                this.user = response.data;
            })
        },
        alertPerfil(){
            this.message="Consultando datos...";
            axios.get('/verificarDatos').then(response => {
                if(response.data === 1 )  {
                    Swal.fire({
                        icon: 'info',
                        title: 'No has llenado los datos de tu perfil.',
                        footer: '<a href="/misAjustes">Llenar datos</a>'
                    })
                }
            })
        }
    },
    computed:{

    }
})


