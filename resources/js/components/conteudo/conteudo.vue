<template>
    <body>
        <div class="flex h-screen">
            <!-- Coluna da esquerda - Carrossel -->
            <div class="w-1/2 h-full">

                <!-- Coloque o conteúdo do carrossel aqui -->
                <Slides></Slides>

            </div>

            <!-- Coluna da direita - Formulário -->
            <div class=" cores w-1/2 p-8 h-screen overflow-y-scroll">
                <div class="text-center">
                    <h1 class="text-2xl font-bold mb-4">Podes fazer a sua requisição preencha os campos</h1>
                </div>
                <form>
                    <div class="space-y-12" id="form11">
                        <!-- o campo de usuário -->

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="nome" class="block text-sm  font-medium leading-6 text-gray-900">Nome /
                                    Empresa*</label>
                                <div class="mt-2">
                                    <input type="text" v-model="pfuxelacliente.nome" autocomplete="nome"
                                        class="block w-full pl-3  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <span class="text red"></span>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email*</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email" required=""
                                        v-model="pfuxelacliente.email"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="contacto"
                                    class="block text-sm font-medium leading-6 text-gray-900">Contacto*</label>
                                <div class="mt-2">
                                    <input type="contacto" v-model="pfuxelacliente.contacto" autocomplete="contacto"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="Data_requesicao" class="block text-sm font-medium leading-6 text-gray-900">Data
                                    a
                                    Requisitar*</label>
                                <div class="mt-2">
                                    <input type="date" v-model="pfuxelacliente.Data_requesicao" autocomplete="data"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="Local" class="block text-sm font-medium leading-6 text-gray-900">Local de
                                    partida*</label>
                                <div class="mt-2">
                                    <input type="text" v-model="pfuxelacliente.local_partida" autocomplete="Local"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="destino" class="block text-sm font-medium leading-6 text-gray-900">Destino
                                    da
                                    Viatura*</label>
                                <div class="mt-2">
                                    <input type="text" v-model="pfuxelacliente.destino_partida" autocomplete="destino"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="passageiros" class="block text-sm font-medium leading-6 text-gray-900">Nº de
                                    Passageiros*</label>
                                <div class="mt-2">
                                    <input type="text" v-model="pfuxelacliente.passageiros" autocomplete="passageiros"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="estimativa" class="block text-sm font-medium leading-6 text-gray-900">Estimativa
                                    Entrega*</label>
                                <div class="mt-2">
                                    <input type="date" v-model="pfuxelacliente.Data_estimativa_entrega"
                                        autocomplete="estimativa"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="partida" class="block text-sm font-medium leading-6 text-gray-900">Horas
                                    de Partida Viatura*</label>
                                <div class="mt-2">
                                    <input type="time" v-model="pfuxelacliente.horas_partida_viatura" autocomplete="partida"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Horas
                                    de Entrega Viatura*</label>
                                <div class="mt-2">
                                    <input type="time" v-model="pfuxelacliente.horas_entrega_viatura"
                                        autocomplete="given-name"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-full">
                                    <label for="about"
                                        class="block text-sm font-medium leading-6 text-gray-900">Mensagem</label>
                                    <div class="mt-2">
                                        <textarea v-model="pfuxelacliente.descricao" rows="3"
                                            placeholder="Nao tem a viatura que desjejas, lista aqui."
                                            class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="button" @click="addPfuxelaCliente()" id="btn11"
                            class="btn flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submeter</button>
                        <p class="mt-3 text-sm leading-6 text-gray-600 flex justify-center">Todos campos com (*) são
                            obrigatórios.</p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</template>
<script setup>
import { ref } from "vue";
const agreed = ref(false);
</script>

<script>
import Slides from '../slides/Slides.vue';
export default {
    components: {
        Slides
    },
    data: function () {
        return {
            pfuxelacliente: {
                nome: "Manucho",
                email: "Felizardo@gmail.com",
                contacto: "828987587",
                Data_requesicao: "2022-01-03",
                local_partida: "Lisboa",
                destino_partida: "Portos de Portugal",
                passageiros: "15",
                Data_estimativa_entrega: "2023-04-10",
                horas_partida_viatura: "12:13:13",
                horas_entrega_viatura: "09:02:19",
                descricao: "Escreve qual quer coisa"
            }
        }
    },
    methods: {
        addPfuxelaCliente() {
            // if(!this.pfuxelacliente.nome == ""){
            //     console.log("Nome invalido");
            //     formularioVlatido = false;
            // }
            // if(!this.pfuxelacliente.email == ""){
            //     console.log("Nome invalido");
            //     this.pfuxelacliente.nomeError = "Nome invalido";
            //     formularioVlatido = false;
            // }
            axios.post('api/home/store', this.pfuxelacliente
            )
                .then(Response => {
                    console.log(Response);
                    if (Response.status = 201) {
                        this.pfuxelacliente.nome = '';
                        this.pfuxelacliente.email = '';
                        this.pfuxelacliente.contacto = '';
                        this.pfuxelacliente.Data_requesicao = '';
                        this.pfuxelacliente.local_partida = '';
                        this.pfuxelacliente.destino_partida = '';
                        this.pfuxelacliente.passageiros = '';
                        this.pfuxelacliente.Data_estimativa_entrega = '';
                        this.pfuxelacliente.horas_partida_viatura = '';
                        this.pfuxelacliente.horas_entrega_viatura = '';
                        this.pfuxelacliente.descricao = '';
                    }
                })
                .catch(error => {
                    console.error(error);
                })
        }
    }
}
</script>



<style scoped>
/*.bodes {
    display: flex;
    flex-direction: column;
    height: 100%;
}
*/
.texto {
    background-color: #fff;

    /* or 97% */
    display: flex;
    color: #f68e13;
    padding: 20px;
}

.cores {
    background-color: #f68e13;
}

h1 {
    font-family: "Rubik";
    font-style: normal;
    font-weight: 900;
    font-size: 32px;
    line-height: 31px;
    text-align: center;
    letter-spacing: -0.005em;
}

.btn {
    background-color: #626b36;
}

#form11 {
    margin: auto 21px auto 25px;
}

p,
label {
    color: #fff;
}

input,
textarea {
    background-color: #e9d3d3;
    border-radius: 0;
}

textarea {
    margin-bottom: -15px;
}

button {
    background: #626b36;
    border-radius: 42px;

    width: 253px;
    margin-bottom: -10px;
}

#btn11 {
    margin-left: 30%;

}

#btn11:hover {
    background-color: #0c1f38;
    color: #fff;
}

.nova {
    height: 100%;
}
</style>
