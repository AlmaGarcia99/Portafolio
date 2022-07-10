var slug = location.pathname.split('/').slice(2);
const app = new Vue({
    el:'#app',
    data:{
        appUrl:'/users/',
        userSlug:slug,
        message:null,
        loading:false,
        isOpenPanel:false,
        rutinas:[],
        rutinaSeleccionada:{},
        ejercicios:[],
        tipo:null,
        tipos:[],
        id_ejercicioNuevo:null,
        ejercicioNuevo:{},
        ejerciciosDB:[],
        edited:false,
        newRutina: {
            nombre:null,
            instrucciones:null
        },
        nombre_rutina:null,
        instruccion_rutina:null
    },
    mounted(){
        this.obtenerDatosUsuario();
        this.obtenerClasificaciones();
    },
    methods:{
        obtenerDatosUsuario()
        {
            loading:true;
            message="Obteniendo información";
            axios.get('/rutinas-usuario/'+this.userSlug[0]).then(response => {
                this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.rutinas = response.data;
                this.loading = false;
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });
        },
        obtenerEjercicios(id_rutina)
        {
            this.loading = true;
            this.isOpenPanel = true;
            message = "Obteniendo información";
            axios.get('/get-exercises/'+id_rutina).then(response => {
                this.message = "Información lista";
                console.log(response.data);
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.ejercicios = response.data;
                this.seleccionarRutina(id_rutina);
                this.loading = false;
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });
        },
        quitarRutina(id_rutina)
        {
            this.loading = true;
            message = "Obteniendo información";
            Swal.fire({
                    icon: 'error',
                    title: 'Atención',
                    text: "¿Desea retirarle la rutina al usuario?",
                    showDenyButton: true,
                    denyButtonText: `Cancelar`,
                    confirmButtonText: 'Confirmar',
            }).then((result) => {
                if (result.isConfirmed) {
                        axios.post('/quitar-rutina/'+id_rutina,{
                        id_rutina: this.rutinaSeleccionada,
                        slug:       this.userSlug[0]
                    }).then(response => {
                        location.reload();
                    })
                }else if(result.isDenied) {
                    Swal.fire('No se le quitará la rutina al usuario', '', 'info');
                }
            })
        },
        seleccionarRutina(id_rutina)
        {
            this.loading = true;
            this.isOpenPanel = true;
            message = "Obteniendo información";
            axios.get('/get-rutina/'+id_rutina).then(response => {
                this.message = "Información lista";
                console.log('Debo seleccionar esta rutina ',response.data);
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.rutinaSeleccionada = response.data;
                this.loading = false;
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });
        },
        retirarEjercicio(exercise)
        {
            this.loading = true;
            this.message = "Retirando el ejercicio...";
            this.ejercicios = this.ejercicios.filter((e)=>e.id_ejercicio !== exercise )
            this.ejercicios.splice(0,this.ejercicios.indexOf(exercise));
            this.loading = false;
            this.message = "Ejercicio retirado...";

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
        obtenerEjerciciosDB()
        {
            this.loading=true;
            this.message="Obteniendo ejercicios";
            axios.get('/ejercicios/'+this.tipo).then(response => {
            this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.ejerciciosDB = response.data;
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
            axios.get('/ejercicio/'+this.id_ejercicioNuevo).then(response => {
            this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                console.log(response.data);
                this.loading = false;
                this.exerciseLoad = false;
                this.ejercicioNuevo=response.data;
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });

        },
        asignarEjercicio()
        {
            $('#exampleModalLabel').modal('hide');
            this.loading=true;
            this.message="Asignando ejercicio seleccionado";
            let id = 1;
            this.ejercicios.push(this.ejercicioNuevo);
            this.ejercicioNuevo={};
            this.message="Ejercicio asignado";
            this.loading=false;
            this.edited=true;
        },
        generarRutinaNueva()
        {
            $('#exampleModalLabelRutina').modal('hide');
            this.loading = true;
            this.message = "REGISTRANDO RUTINA...";
            this.newRutina.nombre = this.nombre_rutina;
            this.newRutina.instrucciones = this.instruccion_rutina;
            this.message = "CREANDO OBJETO DE RUTINA";
            if(this.newRutina){
                Swal.fire({
                    icon: 'info',
                    title: 'Atención',
                    text: "Se generará una rutina NUEVA para este usuario apartir de la rutina original, para no afectar a los demás usuarios.",
                    showDenyButton: true,
                    denyButtonText: `Cancelar`,
                    confirmButtonText: 'Confirmar',
                }).then((result) => {
                  /* Read more about isConfirmed, isDenied below */
                  if (result.isConfirmed) {
                    Swal.fire('Registrando...', '', 'success')
                    axios.post('/generarNueva',{
                        rutinaBase: this.rutinaSeleccionada,
                        nuevaRutina: this.newRutina,
                        ejercicios: this.ejercicios,
                        slug:       this.userSlug[0]
                    }).then(response => {
                        location.reload();
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    });
                  } else if (result.isDenied) {
                    Swal.fire('Esta bien... revirtiendo cambios...', '', 'info');
                    location.reload();
                  }
                });
            }

        }
    },
    computed:{

    }
})


