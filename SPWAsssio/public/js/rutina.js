var slug = location.pathname.split('/').slice(2);
const app = new Vue({
    el:'#app',
    data:{
        message:null,
        rutinaSlug: slug,
    	ejercicios:[],
    	totalTime:0,
        pointer:0,
        actual:{},
        tiempos:8,
        actual:0,
        key:0,
        start:false,
        calentamiento:true
    },
    mounted(){
        this.obtenerIdRutina();
    	//this.controlGeneral();
    },
    methods:{
        buttonStart(){
            console.log('No entro aqui')
            this.start = true;
            this.calentamiento = false;
            this.controlGeneral();
        },
    	iniciarRutina(){
    		this.updateClock();
    	},
    	updateClock() {
			document.getElementById('timer').innerHTML = this.totalTime;
			if(this.totalTime==0){
                this.controlGeneral();
			}else{
				this.totalTime-=1;
				setTimeout(this.updateClock,1000);
			}
		},
        obtenerIdRutina()
        {
            this.message="Preparando información";
            axios.get('/idExacto/'+this.rutinaSlug).then(response => {
                this.message="Información lista";
                //creamos un array y guardamos el contenido que nos devuelve el response
                this.rutina = response.data;
                this.id_rutina = this.rutina.id_rutina;
                axios.get('/get-exercises/'+this.id_rutina).then(response => {
                    this.ejercicios = response.data;
                })
                this.loading = false;
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });
            //this.controlGeneral();
        },
        controlGeneral(){
            //console.log('Ejercicios', this.ejercicios)
            var container = document.getElementById('contenedor')
            console.log(container)
            var intensidad = document.getElementById('intensidad')
            var ejercicio = document.getElementById('gif')
            this.totalTime = 5;
            this.pointer+=1;
            this.actual+=1;
            if(this.pointer>0){
                this.tiempos=8;
                container.style.backgroundColor = 'yellow';
                intensidad.innerHTML="INTENSIDAD MEDIA BAJA"
                document.getElementById('times').innerHTML =this.tiempos;
                document.getElementById('num').innerHTML =this.actual;
                //ejercicio.src =/imgejercicios/+this.ejercicios[this.actual-1].imagen_ejercicio
            }if(this.pointer>5){
                this.tiempos=16;
                container.style.backgroundColor = 'blue';
                intensidad.innerHTML="INTENSIDAD MEDIA"
                document.getElementById('times').innerHTML =this.tiempos;
                document.getElementById('num').innerHTML =this.actual;
            }if(this.pointer>10){
                this.tiempos=24;
                container.style.backgroundColor = 'red';
                intensidad.innerHTML="INTENSIDAD MEDIA ALTA"
                document.getElementById('times').innerHTML =this.tiempos;
            }if(this.pointer>15){
                this.tiempos=32;
                container.style.backgroundColor = 'red';
                intensidad.innerHTML="INTENSIDAD MEDIA ALTA"
                document.getElementById('times').innerHTML =this.tiempos;
            }if(this.pointer>20){
                this.tiempos=24;
                container.style.backgroundColor = 'red';
                intensidad.innerHTML="INTENSIDAD MEDIA ALTA"
                document.getElementById('times').innerHTML =this.tiempos;
            }if(this.pointer>25){
                this.tiempos=16;
                container.style.backgroundColor = 'blue';
                intensidad.innerHTML="INTENSIDAD MEDIA"
                document.getElementById('times').innerHTML =this.tiempos;
            }if(this.pointer>30){
                this.tiempos=8;
                container.style.backgroundColor = 'yellow';
                intensidad.innerHTML="INTENSIDAD MEDIA BAJA"
                document.getElementById('times').innerHTML =this.tiempos;
            }

            if(this.actual == 5){
                this.actual = 0;
            }

            this.iniciarRutina();
        }
    },
    computed:{

    }
})