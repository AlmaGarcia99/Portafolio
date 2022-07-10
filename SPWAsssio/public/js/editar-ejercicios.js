const app = new Vue({
    el:'#app',
    data:{
        appUrl:'/routines',
        loading: true,
        exerciseLoad: true,
        message:null,
        rutina:{},
        nombre:null,
        id_ejercicio:null,
        ejercicio:{},
        ejercicios:[],
        tipo:null,
        tipos:[],
        id_rutina:null,
        ejerciciosRutina:[],
        ejerciciosDefault:[],
        asignados:{
            nombre_ejercicio:null,
            id_rutinaobj: null,
            id_exercise: null
        }
    },
    mounted(){
        this.obtenerIdRutina();
        this.obtenerClasificaciones();
        //this.consultarEjercicios();
    },
    methods:{
        consultarEjercicios(){
            this.message="Preparando información";
            axios.get('/get-exercises/'+this.id_rutina).then(response => {
                this.message="Información lista";
                console.log(response.data);
            })
        },
        obtenerIdRutina()
        {
            this.message="Preparando información";
            axios.get('/idRutina').then(response => {
                this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.rutina = response.data;
                this.id_rutina = this.rutina.id_rutina;
                axios.get('/get-exercises/'+this.id_rutina).then(response => {
                    this.ejerciciosDefault = response.data;
                    let id = 1;
                    this.ejerciciosDefault.forEach((value,index ) => {
                        this.asignados.nombre_ejercicio = value.nombre_ejercicio;
                        this.asignados.id_rutinaobj     = this.id_rutina;
                        this.asignados.id_exercise      = value.id_ejercicio;
                        this.ejerciciosRutina.push(this.asignados);
                        this.ejerciciosRutina.map(elem => {elem.id = id++;});
                        this.asignados={};
                    });
                })
                this.ejerciciosDefault=[];
                this.loading = false;
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });

        },
        obtenerClasificaciones(){
            this.message="Obteniendo tipos de ejercicios";
            axios.get('/get-tipos').then(response => {
            this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.tipos = response.data;
                this.loading = false;
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });
        },
        obtenerEjercicios()
        {
            this.loading=true;
            this.message="Obteniendo ejercicios";
            axios.get('/ejercicios/'+this.tipo).then(response => {
            this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.ejercicios = response.data;
                this.loading = false;
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });

        },
        ejercicioSeleccionado()
        {
            this.loading=true;
            this.ejercicio={};
            this.message="Ejercicio seleccionado";
            axios.get('/ejercicio/'+this.id_ejercicio).then(response => {
            this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.loading = false;
                this.exerciseLoad = false;
                this.ejercicio=response.data;
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });

        },
        asignarEjercicio()
        {
            this.loading=true;
            this.message="Asignando ejercicio seleccionado";
            let id = 1;
            this.asignados.nombre_ejercicio = this.ejercicio.nombre_ejercicio;
            this.asignados.id_rutinaobj     = this.rutina.id_rutina;
            this.asignados.id_exercise      = this.ejercicio.id_ejercicio;
            this.ejerciciosRutina.push(this.asignados);
            this.ejerciciosRutina.map(elem => {elem.id = id++;});
            this.asignados={};
            this.message="Ejercicio asignado";
            this.loading=false;
            
        },
        retirarEjercicio(exercise)
        {
            this.loading=true;
            this.message = "Retirando el ejercicio...";
            this.ejerciciosRutina = this.ejerciciosRutina.filter((e)=>e.id !== exercise )
            this.ejerciciosRutina.splice(0,this.ejerciciosRutina.indexOf(exercise));
            this.loading=false;
            this.message = "Ejercicio retirado...";

        },
        updateRutinaEjercicio()
        {
            this.loading=true;
            this.message="Registrando la rutina. . .";
            axios.post('/edit-routine/'+this.id_rutina,{
                objeto: this.ejerciciosRutina,
            }).then(response => {
                this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.loading = false;
                this.exerciseLoad = false;
                Swal.fire({
                  text: "Se ha editado la rutina",
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


