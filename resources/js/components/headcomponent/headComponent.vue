<template>
    <header md:flex>
        <div
            class=" relative px-8 py-6 flex justify-between bg-black text-white mb-2 mt-0 text-2xl font-medium leading-tight">
            <p class="mr-2">Siga e veja oque acontece nas nossas paginas</p>
            <div class="icones_icones flex flex-wrap justify-center gap-2 space-x-4 posiciarquerda">
                <!-- Linkedin -->
                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                    class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                    style="background-color: #0077b1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                    </svg>
                </button>
                <!-- Facebook -->
                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                    class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                    style="background-color: #1877f2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                    </svg>
                </button>
                <!-- Instagram -->
                <a href="#!" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-12 ajustarr" fill="currentColor"
                        style="color: #c13584" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                </a>
                <!-- Troca de Idioma -->
                <div class=" absolute linga icones_icones flex flex-wrap justify-end">
                    <svg class="w-12 h-8 translate-x-[-1.5rem]" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802">
                        </path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- começa aqui o conteudo de  contactos  -->

        <div class="cor px-8 py-6 text-white flex justify-between relative overflow-hidden items-center">
            <div class="absolute header-circle"></div>
            <div class="z-10">
                <router-link to="/" id="logo_url">
                    <img :src="logo" :alt="alt" class="w-12 h-auto" />
                </router-link>
            </div>

            <div class="z-20 flex flex-col md:flex-row md:items-center">
                <span class="mx-12 my-2 md:my-0 flex items-center">
                    <svg class="w-12 mx-2 svg_mudacor mr-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <p class="font-bold text-black text-lg ml-1">Location<span class="block list translate-y-[-0.3rem]">
                            Maputo, Avenida Rua</span>
                    </p>
                </span>
                <span class="mx-12 my-2 md:my-0 flex items-center">
                    <svg class="w-12 mx-2 svg_mudacor mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    <p class="text-black font-bold text-lg ml-2">Email Adress<span class="block list translate-y-[-0.3rem]">
                            info@pfuxela.com</span>
                    </p>
                </span>
                <span class="mx-12 my-2 md:my-0 flex items-center">
                    <svg class="w-12 mx-2 svg_mudacor mr-2"
                        xmlns="

                                                                                                                        http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <p class="text-black font-bold text-lg ml-2">Phone Costumers<span
                            class="block list translate-y-[-0.3rem]">
                            (+258)
                            87 454 6664</span></p>
                </span>
                <div>
                    <!-- Idioma -->
                </div>
            </div>
            <div>
            </div>
        </div>

        <!-- comeca aqui o nav bar -->

        <nav class="bg-white mx-auto flex max-w-7xl items-center sm:justify-center p-6 lg:px-8" aria-label="Global">
            <div class="flex sm:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-start rounded-md p-2.5 text-gray-700"
                    @click="mobileMenuOpen = true">
                    <span class="sr-only">Open main menu</span>
                    <Bars3Icon class="h-6 w-6" aria-hidden="true" />
                </button>
            </div>
            <!-- começa o menu             -->
            <PopoverGroup class="hidden sm:flex lg:gap-x-12 ">
                <a href="#" class="text-sm font-bold leading-6 tracking-wide text-gray-900 ">
                    <router-link to="home">Home</router-link>
                </a>

                <a href="#" class="text-sm font-bold leading-6 tracking-wide text-gray-900">
                    <router-link to="/About">About Us</router-link>
                </a>

                <a href="#" class="text-sm font-bold leading-6 tracking-wide text-gray-900">
                    <router-link to="/Services">Services</router-link>
                </a>

                <a href="#" class="text-sm font-bold leading-6 tracking-wide text-gray-900">
                    <router-link to="./login">Our Customers</router-link>
                </a>

                <a href="#" class="text-sm font-bold leading-6 tracking-wide text-gray-900">
                    <router-link to="/Contacts">Contacts</router-link>
                </a>
            </PopoverGroup>


        </nav>
        <Dialog as="div" class="lg:hidden" @close="mobileMenuOpen = false" :open="mobileMenuOpen">
            <div class="fixed inset-0 z-10" />
            <DialogPanel
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">pfuxela</span>

                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="mobileMenuOpen = false">
                        <span class="sr-only">Close menu</span>
                        <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <Disclosure as="div" class="-mx-3" v-slot="{ open }">
                                <DisclosureButton
                                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    About Us
                                    <ChevronDownIcon :class="[
                                        open ? 'rotate-180' : '',
                                        'h-5 w-5 flex-none',
                                    ]" aria-hidden="true" />
                                </DisclosureButton>
                                <DisclosurePanel class="mt-2 space-y-2">
                                    <DisclosureButton v-for="item in [
                                        ...products,
                                        ...callsToAction,
                                    ]" :key="item.name" as="a" :href="item.href"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                        {{ item.name }}</DisclosureButton>
                                </DisclosurePanel>
                            </Disclosure>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Services</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Our
                                Customers</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contacts</a>
                        </div>

                    </div>
                </div>
                
            </DialogPanel>
        </Dialog>
        <!-- <div class="nav_bar">

            <router-link to="/">Home </router-link>
            <router-link to="/About">About Us</router-link>
            <router-link to="/Services">Services</router-link>
            <router-link to="/Login">Our Costumers</router-link>
            <router-link to="/Contacts">Contacts</router-link>
        </div> -->
    </header>
</template>

<script>
export default {
    name: "headComponent",
    props: ["logo", "alt"],

};
</script>

<script setup>
import { ref } from "vue";
import {
    Dialog,
    DialogPanel,
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Popover,
    PopoverButton,
    PopoverGroup,
    PopoverPanel,
} from "@headlessui/vue";
import {
    ArrowPathIcon,
    Bars3Icon,
    ChartPieIcon,
    CursorArrowRaysIcon,
    FingerPrintIcon,
    SquaresPlusIcon,
    XMarkIcon,
} from "@heroicons/vue/24/outline";
import {
    ChevronDownIcon,
    PhoneIcon,
    PlayCircleIcon,
} from "@heroicons/vue/20/solid";

const products = [
    {
        name: "Analytics",
        description: "Get a better understanding of your traffic",
        href: "#",
        icon: ChartPieIcon,
    },
    {
        name: "Engagement",
        description: "Speak directly to your customers",
        href: "#",
        icon: CursorArrowRaysIcon,
    },
    {
        name: "Security",
        description: "Your customers’ data will be safe and secure",
        href: "#",
        icon: FingerPrintIcon,
    },
    {
        name: "Integrations",
        description: "Connect with third-party tools",
        href: "#",
        icon: SquaresPlusIcon,
    },
    {
        name: "Automations",
        description: "Build strategic funnels that will convert",
        href: "#",
        icon: ArrowPathIcon,
    },
];
const callsToAction = [
    { name: "Watch demo", href: "#", icon: PlayCircleIcon },
    { name: "Contact sales", href: "#", icon: PhoneIcon },
];

const mobileMenuOpen = ref(false);
</script>

<style scoped>
#contacts_logos_icones,
.nav_bar {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.contacts_logo {
    background-color: #f68e13;
}

.header-circle {
    width: 200px;
    height: 150px;
    border-radius: 0 0 900% 0;
    top: -14px;
    left: -16px;
    background-color: #0c1f38;
}

.icones {
    background-color: black;
}

#nav,
.contacts_log {}

.nav_bar {
    background-color: #fff;
}



#nav,
h1 {
    margin: auto;
    margin-left: 0;
}

h1,
.icones_icones {
    color: #fff;
}

.ajusteLogo {
    /*background-color: #0C1F38;
    margin-right: 300px;*/
}

.logo_logo {
    width: 60px;
    height: 60px;
    margin-left: 100px;
    padding-top: 2px;
    padding-bottom: 2px;
}

.linga {
    right: 0;
}

.list {
    font-weight: 100;
}

.contacts_logo {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    height: auto;
}

.ajusteLogo {
    background-color: #0c1f38;
    margin: auto;
    margin-left: 0;
    width: 320px;
    height: 113px;
    top: -2px;
    border-radius: 0px 0px 250px 0px;
}

#contacts_logos_icones {
    width: 900px;
    margin: auto;
    margin-top: 0px;
    margin-right: 0;
    background-color: #f68e13;
    height: 113px;
    top: -2px;
}

.svg_mudacor {
    color: black;
}

.cor {
    background-color: #f68e13;

}

.nav_bar {
    background-color: green;
}

.logo_logo {
    position: relative;
    height: 74px;
    width: 80px;
    left: 30px;
    top: 17px;
    padding-top: 10px;
}

.bg-white a:hover {
    background-color: #f68e13;
    color: black;
}

h1 {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 700px;
    font-size: 14px;
}

.block {
    color: white;
}

.bg-white {
    height: 50px;
    background-color: #fff;
}

#ajustar {
    position: absolute;
    padding: 50%;


}

.ajustarr {
    width: 37px;
    height: 37px;
}

.posiciarquerda {
    margin-right: 10%;
}
</style>
