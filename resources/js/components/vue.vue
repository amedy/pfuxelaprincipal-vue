<template>
    <div>
        <h2>Clientes</h2>

        <div v-for="cliente in clientes" :key="cliente.id">
            <h3>{{ cliente.nome }}</h3>
            <p>{{ cliente.email }}</p>
            <!-- Exiba os outros campos aqui -->
        </div>

        <form @submit.prevent="criarCliente">
            <input type="text" v-model="novoCliente.nome" placeholder="Nome" required>
            <input type="email" v-model="novoCliente.email" placeholder="Email" required>
            <!-- Insira os outros campos de input aqui -->

            <button type="submit">Criar Cliente</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            clientes: [],
            novoCliente: {
                nome: '',
                email: '',
                // Preencha os outros campos aqui
            },
        };
    },
    mounted() {
        this.fetchClientes();
    },
    methods: {
        fetchClientes() {
            axios.get('/api/clientes')
                .then(response => {
                    this.clientes = response.data;
                })
                .catch(error => {
                    console.error(error);
                });
        },
        criarCliente() {
            axios.post('/api/clientes', this.novoCliente)
                .then(response => {
                    console.log(response.data.message);
                    this.novoCliente = {
                        nome: '',
                        email: '',
                        // Limpe os outros campos aqui
                    };
                    this.fetchClientes(); // Atualiza a lista de clientes após a criação
                })
                .catch(error => {
                    console.error(error);
                });
        }
    }
};
// vamos aqui


criarCliente() {
    if (!this.novoCliente.nome || !this.novoCliente.email || !this.novoCliente.Data_requesicao) {
        console.log('Preencha todos os campos obrigatórios.');
        return;
    }

    axios.post('/api/clientes', this.novoCliente)
        .then(response => {
            console.log(response.data.message);
            this.novoCliente = {
                nome: '',
                email: '',
                // Limpe os outros campos aqui
            };
            this.fetchClientes(); // Atualiza a lista de clientes após a criação
        })
        .catch(error => {
            console.error(error);
        });
}


</script>

<!-- aqui vamos listar os clientes  -->

 props: {
        pfuxelaclientes: {
            default: [
            ]
        }
    },
    created: function () {
        console.log(this.pfuxelaclientes);
    },
    data() {
        return {
            images: ["/img/banner.jpg"],
        };

    },
    data() {
        return {
            nome: '',
            email: '',
            contacto: '',
            data: '',
            local: '',
            destino: '',
            passageiros: '',
            estimativa: '',
            partida: '',
            firstName: '',
            about: ''
        }
    },
    methods: {
        async criaCliete(e) {
            e.preventDefault();
            const data = {
                nome: this.nome,
                email: this.email,
                contacto: this.contacto,
                data_requisica: this.data_requisica,
                local_partida: this.local_partida,
                destino_viatura: this.destino_viatura,
                passageiro: this.passageiro,
                estimativa_entrega: this.estimativa_entrega,
                horas_partida: this.horas_partida,
                horas_entrega: this.horas_entrega,
                menssage: this.menssage
            }
            console.log(data);
        }
    },
    data: () => ({
        slides: [
            "https://picsum.photos/633/600?blur",
            "https://picsum.photos/633/600?grayscale",
            "https://picsum.photos/633/600?blur",
            "https://picsum.photos/633/600",
            "/img/banner.jpg",
        ],
    }),
};

criarCliente() {
  if (!this.novoCliente.nome || !this.novoCliente.email || !this.novoCliente.Data_requesicao) {
    console.log('Preencha todos os campos obrigatórios.');
    return;
  }

  axios.post('/api/clientes', this.novoCliente)
    .then(response => {
      console.log(response.data.message);
      this.novoCliente = {
        nome: '',
        email: '',
        // Limpe os outros campos aqui
      };
      this.fetchClientes(); // Atualiza a lista de clientes após a criação
    })
    .catch(error => {
      console.error(error);
    });
}


  pl-7 pr-20  ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00"
shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"