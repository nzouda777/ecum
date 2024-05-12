<script setup>
import { Link } from "@inertiajs/vue3";
import Modal from "@/Components/Modal.vue";
import { ref, onMounted } from "vue";

const props = defineProps({
    contenu: Object
})

onMounted(() => {
    document.querySelectorAll("[data-f-id]").forEach(el => {
                el.style.display = "none"
            })
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
                                    Les produits présentés sur ce site appartiennent à des sociétés avec lesquelles nous avons des partenariats ou des participations. Ces relations peuvent influencer la façon dont les produits sont présentés, y compris leur ordre d'apparition. Les classements et l'ordre des produits peuvent être sujets à des modifications, et le site peut ne pas offrir une liste exhaustive de tous les produits disponibles sur le marché dans chaque catégorie. D'autres facteurs, tels que les préférences de l'utilisateur, le système d'exploitation, la localisation, le jour de la semaine, l'heure de la journée, ainsi que les données des cookies ou autres données automatiquement collectées sur ce site, peuvent également influencer les classements.
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
                                    Nos classements des meilleurs produits sont basés sur nos propres perspectives, connaissances et opinions. Nous ne passons pas en revue tous les produits disponibles dans une catégorie donnée. Toutes les opinions exprimées sur ce site sont les nôtres.

                                </p>
                                <br>
                                <p>
                                    Nous sommes en mesure de fournir des comparaisons gratuites grâce à une rémunération que nous recevons pour recommander des produits de la part de plusieurs entreprises, qui sont évaluées et comparées sur notre site. De plus, nous avons des intérêts dans certaines catégories où nos propres produits sont mentionnés comme les meilleurs choix en matière de santé.
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
                <h1 class="text-center uppercase md:text-4xl text-2xl text-indigo-900 w-12/12 mx-auto font-bold font-serif">
                    CHOISIR LE MEILLEUR COLLAGÈNE MARIN : QUEL TYPE, QUELLE FORME ET POURQUOI?
                </h1>
                
                <div class="flex sm:flex-row flex-col justify-evenly gap-2 items-center">
                    <Link class="border border-indigo-800 sm:w-52 w-full text-center text-indigo-800 inline-block px-4 py-3 rounded-full hover:bg-sky-400 hover:border-sky-400 hover:text-white" href="#type">
                        TYPES DE COLLAGÈNE
                    </Link>
                    <Link class="border border-indigo-800 sm:w-52 w-full text-center text-indigo-800 inline-block px-4 py-3 rounded-full hover:bg-sky-400 hover:border-sky-400 hover:text-white" href="#mabo">
                        MARIN OU BOVIN
                    </Link>
                    <Link class="border border-indigo-800 sm:w-52 w-full text-center text-indigo-800 inline-block px-4 py-3 rounded-full hover:bg-sky-400 hover:border-sky-400 hover:text-white" href="#choose">
                        QUEL CHOISIR
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
    <section class="max-w-[800px] py-2 px-4 mx-auto mt-8 space-y-5 ">
        
        <p class="uppercase tracking-2 leading-2 md:w-2/3 w-full text-center mx-auto text-[#444]">
            ÉCUME VOUS PROPOSE UNE GAMME DE 2 GOÛTS DIFFÉRENTS, AFIN DE SUBLIMER VOTRE QUOTIDIEN
        </p>
        <div class="grid md:grid-cols-2 grid-cols-1 md:gap-20 gap-10">
            <a href="https://ecumecollagen.com/collections/frontpage/products/fraise" class="w-full h-fit mx-auto">
                <img class="md:w-full w-full object-cover h-2/3" src="https://ecumecollagen.com/cdn/shop/products/Boxstrawopen.png?v=1703279031" alt="">
                <div class="flex justify-between items-end">
                    <div class="mt-2 space-y-0.5">
                        <h3 class="font-bold text-xl">arôme fraise.</h3>
                    </div>
                </div>
                <button class="border w-full border-black text-base mt-2 py-2  text-center hover:text-white hover:bg-black hover:duration-500">Decouvrir sur le site</button>
            </a>
            <a href="https://ecumecollagen.com/collections/frontpage/products/citron" class="w-full h-fit mx-auto">
                <img class="md:w-full w-full object-cover h-2/3" src="https://ecumecollagen.com/cdn/shop/products/Boxlemonopen.png?v=1678474511" alt="">
                <div class="flex justify-between items-end">
                    <div class="mt-2 space-y-0.5">
                        <h3 class="font-bold text-xl">arôme citron.</h3>
                        
                    </div>
                </div>
                <button class="border w-full border-black text-base mt-2 py-2  text-center hover:text-white hover:bg-black hover:duration-500">Decouvrir sur le site</button>
            </a>
        </div>
    </section>
     <footer class="bg-sky-500 py-10 px-4">
        <div class="max-w-4xl mx-auto text-center space-y-2">
            <h2 class="text-xl text-white font-regular">2024 meilleur-choix-sante.fr</h2>

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