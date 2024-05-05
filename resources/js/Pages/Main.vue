<script setup>
import { Link } from "@inertiajs/vue3";
import Modal from "@/Components/Modal.vue";
import { ref } from "vue";

const props = defineProps({
    contenu: Object
})

const showMethod = ref(false)
const showClause = ref(false)
</script>
<template>

     <header class="border-b">
        <div class="max-w-[1400px] py-2 px-4 mx-auto ">
            <div class="flex items-center justify-between">
                <Link href="#" >
                    <img 
                        src="https://lh3.google.com/u/0/d/1-9_8ddGCMRcw1u2NgOgARYneDcQmX8tl=w1297-h948-iv1" alt=""
                        class="h-16 w-96 object-cover"
                    >
                </Link>
                <div class="uppercase font-regular lg:text-lg text-base">
                    
                </div>
            </div>
        </div>
    </header>
    <nav class="border-b shadow-md py-2 px-4">
        <div class="max-w-[1400px] py-2  mx-auto ">
            <div class="flex items-center justify-center lg:justify-between">
                <p class="font-bold hidden lg:!block">
                    <span class=" d11 d13 d16 d23 m10 m13 m27 m28 m29">Dernière mise à jour : 1 avril 2024</span>
                </p>
                <div class="flex items-center">
                    <div class="cursor-pointer">
                        <div @click="showMethod = true" class="uppercase text-center font-semibold text-gray-700 lg:text-base sm:text-sm text-xs">NOTRE MÉTHODE DE CLASSEMENT</div>
                        <Modal :show="showMethod" max-width="md">
                            <div class="py-2 px-4 flex items-center justify-between">
                                <h3 class="font-semibold">
                                    NOTRE MÉTHODE DE CLASSEMENT
                                </h3>
                                <div class="">
                                    <svg @click="() => {showMethod = false;}" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class=" w-6 h-6 text-gray-700 cursor-pointer">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="py-2 px-4">
                                <p>
                                    Les produits apparaissant sur ce site sont la propriété de sociétés dont nous pouvons recevoir une compensation ou dans lesquelles nous avons une participation. Cette compensation peut avoir un impact sur la manière dont les produits sont affichés, y compris l'ordre dans lequel ils apparaissent. Le classement et l'ordre des produits sur le site sont susceptibles d'être modifiés et le site ne propose pas une liste exhaustive de tous les produits disponibles du marché dans leurs catégories respectives. D’autres éléments ont également un impact sur les classements areil de l'utilisateur, le système d'exploitation, la localisation, le jour de la semaine, l'heure de la journée et les données issues des cookies ou toute donnée générée directement de manière automatique sur ce site.
                                </p>
                            </div>
                        </Modal>
                    </div>
                    <span class="h-6 bg-black ml-2 mr-2 w-[1px]"></span>
                    <div class="cursor-pointer">
                        <div @click="showClause = true" class="text-center uppercase font-semibold text-gray-700 lg:text-base sm:text-sm text-xs">CLAUSE DE NON-RESPONSABILITÉ</div>
                        <Modal :show="showClause" max-width="md">
                            <div class="py-2 px-4 flex items-center justify-between">
                                <h3 class="font-semibold ">
                                    CLAUSE DE NON-RESPONSABILITÉ
                                </h3>
                                <div class="">
                                    <svg @click="() => {showClause = false;}" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class=" w-6 h-6 text-gray-700 cursor-pointer">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="py-2 px-4">
                                <p>
                                    Nos produits les mieux classés sont évalués sur la base de nos propres vues, connaissances et opinions. Nous n'examinons pas l'ensemble de tous les produits d'une catégorie donnée. Toutes les opinions exprimées sur ce site sont les nôtres propres. 
                                </p>
                                <br>
                                <p>
                                    Nous sommes en mesure de vous fournir nos comparaisons gratuites car nous recevons une rémunération pour vous recommander des produits de la part d'un certain nombre d'entreprises, lesquelles sont évaluées et comparées sur notre site. Nous avons également des intérêts dans certaines catégories avec des produits qui nous appartiennent étant cités comme meilleurs choix.
                                </p>
                            </div>
                        </Modal>
                    </div>

                </div>
            </div>
        </div>
    </nav>
    <section class="max-w-[1500px] py-2 px-4 mx-auto mt-8">
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-8 place-center items-center  ">
            <div class="">
                <img 
                    src="https://ecumecollagen.com/cdn/shop/files/image-femme.jpg?v=1679387669"
                    alt=""
                    class="w-full max-h-[500px] object-cover"
                >
            </div>
            <div class=" space-y-12">
                <h1 class="text-center uppercase text-5xl text-indigo-900 w-12/12 mx-auto font-bold font-serif">
                    LE COLLAGÈNE: LE SECRET DES STARS POUR UNE BEAUTÉ SANS ÂGE
                </h1>
                <p class="text-lg text-center font-semibold text-indigo-800">
                    Comment choisir sa poudre en 2024 ?
                </p>
                <div class="flex sm:flex-row flex-col justify-evenly gap-2 items-center">
                    <Link class="border border-indigo-800 sm:w-52 w-full text-center text-indigo-800 inline-block px-4 py-3 rounded-full hover:bg-sky-400 hover:border-sky-400 hover:text-white" href="#">
                        Avantages
                    </Link>
                    <Link class="border border-indigo-800 sm:w-52 w-full text-center text-indigo-800 inline-block px-4 py-3 rounded-full hover:bg-sky-400 hover:border-sky-400 hover:text-white" href="#">
                        À éviter
                    </Link>
                    <Link class="border border-indigo-800 sm:w-52 w-full text-center text-indigo-800 inline-block px-4 py-3 rounded-full hover:bg-sky-400 hover:border-sky-400 hover:text-white" href="#">
                        Meilleur de 2024
                    </Link>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-[800px] py-2 px-4 mx-auto mt-8 ">
        <div class="" v-for="(content, index) in contenu" :key="index">
            <div v-html="content.contenu">
                
            </div>
        </div>
    </section>
     <footer class="bg-sky-500 py-10 px-4">
        <div class="max-w-4xl mx-auto text-center space-y-2">
            <h2 class="text-xl text-white font-regular">2024 mieux-consommer.net</h2>

            <p class="text-white">Tous les droits sont réservés.</p> 

<p class="text-white">Les marques utilisées sur notre site web appartiennent à leurs propriétaires respectifs et il n'y a aucune intention de soutenir notre site web ou nos services, que ce soit implicitement ou explicitement. Les classements peuvent être influencés par la relation entre Mieux Consommer et nos meilleurs choix.
</p>
<p class="text-white mt-2">
[1] Nous avons une relation financière avec certains de nos meilleurs choix et partenaires.
</p>
        </div>
        <div class="flex items-center justify-center text-white text-lg mt-4 mx-auto max-w-4xl">
            <a href="#" class="underline">Condition generale</a> &nbsp;|&nbsp;
            <a href="#" class="underline">Protection des donnees</a> &nbsp;|&nbsp;
            <a href="#" class="underline">Contactez-nous</a> 
        </div>
    </footer>
</template>