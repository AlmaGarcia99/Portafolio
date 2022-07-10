const app = new Vue({
    el:'#app',
    data:{
        appUrl:'/routines',
        message:"Seleccione una opción",
        loading:false,
        tipo:null,
        porGrupo:false,
        porUsuario:false,
        grupos:[],
        id_grupo:null,
        usuarios:[],
        id_user:null,
        rutinas:[],
        id_rutina:null,
        dieta_id:null,
        dieta:{},
        dietas:[],
        object:{
            id_rutina_obj:null, 
            id_user_obj:null
        },
        obj_dieta:{
            id_user:null,
            id_dieta:null
        },
        masiva:false,
    },
    mounted(){
        this.obtenerDietas();
        this.obtenerRutinas();
    },
    methods:{
        seleccionarTipo(){
            this.message = "Seleccione una opción"
            if(this.tipo == 'porGrupo'){
                this.porGrupo = true;
                this.porUsuario = false;
                this.obtenerGrupos();
            }else if(this.tipo == 'porUsuario'){
                this.porUsuario = true;
                this.porGrupo = false;
            }
            this.message="Ok!"
            this.loading=false;
        },
        obtenerGrupos(){
            this.message="Obteniendo información";
            axios.get('/obtener-grupos').then(response => {
            this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.grupos = response.data;
                this.loading = false;
            })
        },
        obtenerUsuarios(){
            this.masiva=true;
            this.message="Obteniendo información";
            axios.get('/obtener-usuarios/'+this.id_grupo).then(response => {
            this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.usuarios = response.data;
                this.loading = false;
            })
        },
        obtenerRutinas(){
            this.loading=true;
            this.message="Obteniendo información";
            axios.get('/obtener-rutinas').then(response => {
            this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.rutinas = response.data;
                this.loading = false;
            })
        },
        
        obtenerDietas(){
            this.loading=true;
            this.message="Obteniendo información";
            axios.get('/obtener-dietas').then(response => {
            this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.dietas = response.data;
                this.loading = false;
            })
        },
        
        
        asignarRutina(){
            this.loading=true;
            this.message="Asignando la rutina. . .";
            this.object.id_user_obj = this.id_user,
            this.object.id_rutina_obj = this.id_rutina
            axios.post('/asignarRutina',{
                datos: this.object
            }).then(response => {
                this.message="Información lista";
                this.loading = false;
                this.exerciseLoad = false;
                swal.fire({
                  text: "Se ha registrado la rutina",
                });
                window.location.href ="/routines";
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });
        },
        asignacionMasiva(){
            this.loading=true;
            this.message="Asignando la rutina. . .";
            axios.post('/asignacionMasiva',{
                usuarios : this.usuarios,
                idRutina : this.id_rutina
            }).then(response => {
                this.message="Información lista";
                this.loading = false;
                this.exerciseLoad = false;
                swal.fire({
                  text: "Se ha asignado la rutina al grupo de trabajo",
                });
                window.location.href ="/routines";
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });
        },
        
        seleccionDietas(){
            
        },
        
        asignarDietas(){
            this.loading=true;
            this.message="Asignando la Dieta. . .";
            this.obj_dieta.id_user = this.id_user,
            this.obj_dieta.id_dieta = this.dieta_id
            axios.post('/asignarDieta',{
                datos: this.obj_dieta
            }).then(response => {
                this.message="Información lista";
                this.loading = false;
                this.exerciseLoad = false;
                swal.fire({
                  text: "Se ha registrado la dieta",
                });
                window.location.href ="/routines";
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });
        }
        
        
    },
    computed:{

    }
})


